<?php
// Independent of the legacy database and form handlers. PHP 5.6+.
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
function price_reply($code, $message) {
    http_response_code($code);
    echo json_encode(array('message' => $message), JSON_UNESCAPED_UNICODE);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    price_reply(405, 'Используйте форму на странице прайса.');
}
function price_field($key, $limit) {
    if (!isset($_POST[$key]) || !is_string($_POST[$key])) return '';
    $value = trim($_POST[$key]);
    return strlen($value) <= $limit ? $value : '';
}
$name = price_field('name', 300);
$phone = price_field('phone', 80);
$email = price_field('email', 254);
$type = price_field('request_type', 150);
$digits = preg_replace('/\D/', '', $phone);
if ($name === '' || strlen($digits) < 7 || strlen($digits) > 15 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    price_reply(422, 'Проверьте имя, телефон и электронную почту.');
}
if (!in_array($type, array('Получить расчёт', 'Подобрать комплект'), true)) price_reply(422, 'Выберите тип обращения.');
// Explicit local testing mode. Never sends email.
if (getenv('GARANT_PRICE_PREVIEW') === '1') price_reply(200, 'Тестовая заявка проверена. Данные никуда не отправлены.');
$recipient = getenv('GARANT_PRICE_RECIPIENT');
$sender = getenv('GARANT_PRICE_SENDER');
if (!$recipient || !$sender || !filter_var($recipient, FILTER_VALIDATE_EMAIL) || !filter_var($sender, FILTER_VALIDATE_EMAIL)) {
    price_reply(503, 'Отправка пока не настроена. Свяжитесь с нами по телефону на сайте.');
}
session_start();
if (isset($_SESSION['price_last_sent']) && time() - $_SESSION['price_last_sent'] < 60) price_reply(429, 'Подождите минуту перед повторной отправкой.');
$body = "Обращение: $type\nИмя: $name\nТелефон: $phone\nEmail: $email\n";
$subject = '=?UTF-8?B?' . base64_encode('Заявка со страницы цен ГАРАНТ') . '?=';
$headers = 'From: ' . $sender . "\r\nContent-Type: text/plain; charset=UTF-8";
if (!mail($recipient, $subject, $body, $headers)) price_reply(503, 'Не удалось отправить заявку. Попробуйте позже.');
$_SESSION['price_last_sent'] = time();
price_reply(200, 'Спасибо! Заявка отправлена. Мы свяжемся с вами для уточнения деталей.');
