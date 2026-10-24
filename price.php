<?require_once("header_m.php")?>
<?require_once("menu_m.php")?>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            box-sizing: border-box;
            margin: 0;
            padding: 0;

            background: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            color: #333;
            line-height: 1.4;
            font-size: 12px;

            max-width: 920px;
            margin: 0 auto;
        }
        .block_radius {
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px 15px;
            margin-bottom: 20px;
        }
        .nav a {
            color: #1e3c72;
            text-decoration: none;
        }
        .nav a:hover {
            text-decoration: underline;
        }

        .table-section {
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        h1 {
            font-size: 16px;
            margin-bottom: 5px;
            font-weight: 600;
        }
        .subtitle {
            font-size: 11px;
            opacity: 0.9;
            line-height: 1.3;
        }
        .table-container {
            padding: 10px;
            overflow-x: auto;
        }

        .main-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
            min-width: 860px;
        }
        .main-table th, .main-table td {
            padding: 4px 3px;
            text-align: center;
            border: 1px solid #e1e5eb;
            line-height: 1.2;
            vertical-align: middle;
        }
        .main-table th {
            background-color: #2a5298;
            color: white;
            font-weight: 600;
            font-size: 9px;
        }
        .product-name {
            text-align: left;
            font-weight: 600;
            background-color: #f1f5fd;
            font-size: 10px;
            width: 180px;
        }

        .price-btn {
            display: inline-block;
            background: #ffffff;
            border-radius: 30px;
            padding: 4px 8px;
            font-size: 10px;
            font-weight: 600;
            color: #2a5298;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12), 0 1px 3px rgba(0,0,0,0.08);
            border: 1px solid rgba(255,255,255,0.3);
            cursor: pointer;
            transition: all 0.2s ease;
            user-select: none;
            white-space: nowrap;
            line-height: 1.4;
            min-width: 34px;
            text-align: center;
        }
        .price-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.15), 0 2px 4px rgba(0,0,0,0.08);
            background: #fafcff;
        }
        .price-btn:active {
            transform: translateY(1px);
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
        }

        .price-value {
            display: none;
            font-weight: 600;
            color: #2a5298;
            white-space: nowrap;
            font-size: 10px;
            padding: 4px 3px;
        }

        .price-btn.hidden {
            display: none;
        }
        .price-value.visible {
            display: inline-block;
        }

        .price-cell {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 50px;
        }


        .three-col-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
        }
        .three-col-table th, .three-col-table td {
            padding: 6px 8px;
            text-align: left;
            border: 1px solid #e1e5eb;
            vertical-align: middle;
        }
        .three-col-table th {
            background-color: #2a5298;
            color: white;
            font-weight: 600;
            text-align: center;
        }
        .three-col-table .col-name { width: 30%; }
        .three-col-table .col-desc { width: 55%; }
        .three-col-table .col-price { width: 15%; text-align: center; }
        .content-description { font-size: 10px; line-height: 1.3; }


        .english-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
        }
        .english-table th, .english-table td {
            padding: 5px 6px;
            text-align: center;
            border: 1px solid #e1e5eb;
            vertical-align: middle;
        }
        .english-table th {
            background-color: #2a5298;
            color: white;
            font-weight: 600;
        }
        .english-table .col-product { width: 35%; text-align: left; }
        .english-table .col-od { width: 13%; }

        .note {
            padding: 10px 15px;
            background-color: #f8f9fa;
            border-top: 1px solid #e1e5eb;
            font-size: 10px;
            color: #6c757d;
        }
        .note strong { color: #495057; }
        footer {
            text-align: center;
            padding: 15px;
            color: #6c757d;
            font-size: 11px;
            border-top: 1px solid #e1e5eb;
        }
        tr:nth-child(even) { background-color: #f8f9fa; }
        @media (max-width: 920px) { .table-container { overflow-x: auto; } }
    </style>
<link rel="stylesheet" href="assets/price-contact.css">
</head>
<body>
<div class="container">
    <div class="block_radius">
        <div class="nav"><a href="https://garant-ic.ru">Гарант-ИнфоЦентр</a> -> Купить ГАРАНТ -> Цены ЭПС Система ГАРАНТ</div>
        <br>
        <h1 class="tema"><?= $hone ?></h1>
        <br>
        <p>
            Цены указаны за отчетный период в рублях без НДС. Отчетным периодом является каждый полный и неполный календарный месяц оказания услуг.
            <br>
            Услуги облагаются НДС по ставке 5%. НДС уплачивается Заказчиком сверх установленной цены в соответствии с пп.1 п.8 статьи 164 НК РФ.
            <br>
            Цены действуют с 1 мая 2026 года
        </p>
        <br>

        <section class="price-help" aria-labelledby="price-help-title">
<div><h2 id="price-help-title">Не знаете, какой комплект подходит именно вам?</h2>
<p>Подберём состав системы под вашу профессию, задачи и количество пользователей и рассчитаем стоимость.</p></div>
<a href="call_me.php" class="price-help__button" data-price-contact="Получить расчёт">Получить расчёт</a>
</section>

        <div class="table-section">
            <header>
                <h1>Универсальная линейка</h1>
                <p class="subtitle">Пользователь формирует свой персональный информационный банк (комплект)</p>
            </header>
            <div class="table-container">
                <table class="main-table">
                    <thead>
                        <tr>
                            <th rowspan="2">Комплекты ЭПС<br>«Система ГАРАНТ»</th>
                            <th rowspan="2">Стандартная<br>Интернет-версия<br>Локальная<br>версия</th>
                            <th rowspan="2">МГО<br>(на<br>переносном<br>носителе)</th>
                            <th colspan="8">Многопользовательская версия</th>
                        </tr>
                        <tr>
                            <th>1 ОД**</th>
                            <th>2 ОД**</th>
                            <th>3 ОД**</th>
                            <th>5 ОД**</th>
                            <th>10 ОД***</th>
                            <th>20 ОД***</th>
                            <th>30 ОД***</th>
                            <th>50 ОД***</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="product-name">ГАРАНТ-Классик<br>(продается в качестве<br>дополнительного комплекта)</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">10 082</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">11 091</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 603</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 124</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">20 165</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">30 247</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">40 330</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">50 412</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">60 494</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">70 577</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Классик+</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 124</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">16 636</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">18 905</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">22 685</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">30 247</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">45 371</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">60 494</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">75 618</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">90 742</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">105 865</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Универсал</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">20 165</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">22 181</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">25 206</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">30 247</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">40 330</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">60 494</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">80 659</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">100 824</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">120 989</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">141 154</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Универсал+</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">22 685</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">24 954</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">28 357</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">34 028</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">45 371</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">68 056</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">90 742</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">113 427</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">136 112</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">158 798</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Профессионал</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">25 206</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">27 727</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">31 508</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">37 809</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">50 412</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">75 618</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">100 824</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">126 030</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">151 236</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">176 442</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Мастер</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">30 247</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">33 272</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">37 809</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">45 371</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">60 494</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">90 742</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">120 989</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">151 236</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">181 483</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">211 730</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Аналитик</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">40 330</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">44 363</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">50 412</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">60 494</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">80 659</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">120 989</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">161 318</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">201 648</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">241 978</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">282 307</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Аналитик+</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">50 412</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">55 453</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">63 015</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">75 618</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">100 824</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">151 236</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">201 648</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">252 060</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">302 472</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">352 884</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Максимум</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">70 577</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">77 634</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">88 221</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">105 865</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">141 154</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">211 730</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">282 307</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">352 884</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">423 461</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">494 038</span></span></td>
                        </tr>

                        <tr>
                            <td class="product-name">ГАРАНТ-Максимум.<br>Вся Россия</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">181 483</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">199 632</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">226 854</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">272 225</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">362 966</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">544 450</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">725 933</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">907 416</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">1 088 899</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">1 270 382</span></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <aside class="price-help price-help--compact" aria-labelledby="price-package-title">
<div><h2 id="price-package-title">Не нашли подходящий комплект?</h2><p>Подберите состав ГАРАНТ под свои задачи.</p></div>
<a href="call_me.php" class="price-help__button" data-price-contact="Подобрать комплект">Подобрать комплект</a>
</aside>
</div>


        <div class="table-section">
            <header>
                <h1>Профессиональная линейка</h1>
                <p class="subtitle">Комплекты с фиксированным или частично фиксированным наполнением</p>
            </header>
            <div class="table-container">
                <table class="main-table">
                    <thead>
                        <tr>
                            <th rowspan="2">Комплекты ЭПС<br>«Система ГАРАНТ»</th>
                            <th rowspan="2">Стандартная<br>Интернет-версия<br>Локальная<br>версия</th>
                            <th rowspan="2">МГО<br>(на<br>переносном<br>носителе)</th>
                            <th colspan="8">Многопользовательская версия</th>
                        </tr>
                        <tr>
                            <th>1 ОД**</th>
                            <th>2 ОД**</th>
                            <th>3 ОД**</th>
                            <th>5 ОД**</th>
                            <th>10 ОД***</th>
                            <th>20 ОД***</th>
                            <th>30 ОД***</th>
                            <th>50 ОД***</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="product-name">ГАРАНТ-Бухгалтер</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">9 875</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">9 875</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">9 875</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">11 945</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 926</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">23 889</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">31 853</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">39 974</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">47 938</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">55 900</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Бухгалтер госсектора</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">9 875</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">9 875</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">9 875</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">11 945</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 926</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">23 889</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">31 853</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">39 974</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">47 938</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">55 900</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Юрист</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 422</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 422</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 422</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">14 971</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">19 908</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">29 941</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">39 974</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">49 848</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">59 883</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">69 915</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Эксперт по охране труда</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 756</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 756</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 756</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 371</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">20 440</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">30 743</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">41 045</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">51 183</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">61 487</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">71 788</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Эксперт PRO</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 756</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 756</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 756</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 371</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">20 440</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">30 743</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">41 045</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">51 183</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">61 487</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">71 788</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Офис</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 741</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 741</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 741</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 290</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">20 385</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">30 579</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">40 930</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">51 123</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">61 316</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">71 507</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Эксперт<br>в закупках</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 979</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 979</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">12 979</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 576</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">20 767</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">31 150</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">41 696</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">52 079</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">62 461</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">72 845</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Стройэксперт</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 307</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 307</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 307</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">18 446</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">24 528</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">36 891</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">49 255</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">61 420</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">73 784</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">86 145</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Главный бухгалтер</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 113</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 113</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 113</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">18 171</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">24 283</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">36 511</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">48 569</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">60 795</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">72 851</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">85 079</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Главный бухгалтер<br>госсектора</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 113</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 113</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 113</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">18 171</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">24 283</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">36 511</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">48 569</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">60 795</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">72 851</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">85 079</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Предприятие</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">21 228</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">21 228</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">21 228</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">25 473</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">33 963</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">51 115</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">68 098</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">85 079</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">102 053</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">118 703</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ-Предприятие PRO</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">27 376</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">27 376</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">27 376</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">32 956</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">43 940</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">65 911</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">87 882</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">109 853</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">131 821</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">153 792</span></span></td>
                        </tr>
                        <tr><td class="product-name">ГАРАНТ Консалтинг. ПРОФ</td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">20 165</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">22 181</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">25 206</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">30 247</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">40 330</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">60 494</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">80 659</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">100 824</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">120 989</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">141 154</span></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="note">
                <p><strong>Примечания:</strong>
                    <br>** -Неограниченное количество учетных записей с возможностью одновременного удаленного доступа 1, 2, 3 и 5 пользователей соответственно.
                    <br>*** -Максимальное количество пользовательских учетных записей для тарифа 10ОД равняется 100, для тарифа 20ОД – 200, 30ОД – 300, для тарифа 50ОД – 500.
                </p>
            </div>
        </div>


        <div class="table-section">
            <header>
                <h1>Правовая поддержка</h1>
                <p class="subtitle">Предоставление продукта возможно только в составе комплекта системы ГАРАНТ, отдельно продукт не предоставляется.</p>
            </header>
            <div class="table-container">
                <table class="three-col-table">
                    <thead>
                        <tr><th class="col-name">Комплект</th><th class="col-desc">Наполнение</th><th class="col-price">Стоимость</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-name">Правовой консалтинг. Премиум*</td>
                            <td><div class="content-description">База знаний службы Правового консалтинга, Возможность получения двух письменных экспертных заключений для включения в информационный банк пользователя, возможность обращения к линии экспертной поддержки</div></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">15 124</span></span></td>
                        </tr>
                        <tr>
                            <td class="product-name">Советы экспертов. Проверки, налоги, право*</td>
                            <td><div class="content-description">База знаний службы Правового консалтинга, Возможность обращения к линии экспертной поддержки</div></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">5 041</span></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="note"><p><strong>Примечание:</strong> * - предоставляется только в составе комплекта системы ГАРАНТ</p></div>
        </div>


        <div class="table-section">
            <header>
                <h1>Услуги линейки LegalTech</h1>
                <p class="subtitle">Программные средства автоматизации (пакеты ГАРАНТ-LegalTech приобретаются только с комплектами системы ГАРАНТ)</p>
            </header>
            <div class="table-container">
                <table class="three-col-table">
                    <thead>
                        <tr><th class="col-name">Комплект</th><th class="col-desc">Наполнение</th><th class="col-price">Стоимость</th></tr>
                    </thead>
                    <tbody>
                        <tr><td class="product-name">ГАРАНТ-LegalTech. Малый пакет</td><td>2 любых сервиса (вес 1) из 16</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">2 000</span></span></td></tr>
                        <tr><td class="product-name">ГАРАНТ-LegalTech. Средний+ пакет</td><td>5 любых сервисов (вес 1) из 16</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">4 600</span></span></td></tr>
                        <tr><td class="product-name">ГАРАНТ-LegalTech. Большой пакет</td><td>10 любых сервисов (вес 1) из 16</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">6 800</span></span></td></tr>
                        <tr><td class="product-name">Доступ к программному продукту ИСКРА</td><td>предоставляется только в составе пакетов ГАРАНТ-LegalTech</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">2 000</span></span></td></tr>
                        <tr><td class="product-name">Доступ к программному продукту Цифровая охрана труда</td><td>предоставляется только в составе пакетов ГАРАНТ-LegalTech</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">1 000</span></span></td></tr>
                        <tr><td class="product-name">Доступ к программному продукту Эталонный Классификатор</td><td>предоставляется только в составе пакетов ГАРАНТ-LegalTech</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">1 000</span></span></td></tr>
                        <tr><td class="product-name">Доступ к программному продукту Гарант Тендер</td><td>предоставляется только в составе пакетов ГАРАНТ-LegalTech</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">1 000</span></span></td></tr>
                        <tr><td class="product-name">Доступ к программному продукту Онлайн Патент Стандарт</td><td>предоставляется только в составе пакетов ГАРАНТ-LegalTech</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">1 000</span></span></td></tr>
                        <tr><td class="product-name">Доступ к Программному продукту Экспресс Подпись</td><td>предоставляется только в составе пакетов ГАРАНТ-LegalTech</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">1 000</span></span></td></tr>
                        <tr><td class="product-name">Комплект «LegalTech.Prof»</td><td>Законодательство России, Большой пакет ГАРАНТ-LegalTech, Горячая линия, ПРАЙМ, Онлайн-архив судебной практики, необходимый для работы аналитической системы «Сутяжник»</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">7 600</span></span></td></tr>
                        <tr><td class="product-name">Доступ к программному продукту Мастер закупок</td><td>Комплексное решение для работы в сфере госзаказа</td><td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">4 600</span></span></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="note"><p><strong>Примечание:</strong> все пакеты ГАРАНТ-LegalTech приобретаются только с комплектами системы ГАРАНТ</p></div>
        </div>


        <div class="table-section">
            <header>
                <h1>Правовая база Legislation of Russia in English</h1>
                <p class="subtitle">Система ГАРАНТ на английском языке</p>
            </header>
            <div class="table-container">
                <table class="english-table">
                    <thead>
                        <tr><th colspan="6">Стоимость первого предоставления (первый месяц)</th></tr>
                        <tr>
                            <th rowspan="2">Стандартная Интернет-версия<br>(один фиксированный логин одного пользователя.)</th>
                            <th colspan="5">Многопользовательская версия</th>
                        </tr>
                        <tr>
                            <th class="col-od">1 ОД**</th>
                            <th class="col-od">2 ОД**</th>
                            <th class="col-od">3 ОД**</th>
                            <th class="col-od">5 ОД**</th>
                            <th class="col-od">10,20,30,50 ОД***</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">257 812</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">386 717</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">438 280</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">567 186</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">773 435</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">***</span></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="english-table" style="margin-top: 15px;">
                    <thead>
                        <tr><th colspan="6">Стоимость в месяц (начиная со второго месяца)</th></tr>
                        <tr>
                            <th rowspan="2">Стандартная Интернет-версия<br>(один фиксированный логин одного пользователя.)</th>
                            <th colspan="5">Многопользовательская версия</th>
                        </tr>
                        <tr>
                            <th class="col-od">1 ОД**</th>
                            <th class="col-od">2 ОД**</th>
                            <th class="col-od">3 ОД**</th>
                            <th class="col-od">5 ОД**</th>
                            <th class="col-od">10,20,30,50 ОД***</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">85 937</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">128 906</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">146 093</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">189 062</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">257 812</span></span></td>
                            <td><span class="price-cell" onclick="togglePrice(this)"><span class="price-btn">Цена</span><span class="price-value">***</span></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="note">
                <p><strong>Примечания:</strong>
                    <br>**-Неограниченное количество учетных записей с возможностью одновременного удаленного доступа через информационно-телекоммуникационную сеть Интернет 1, 2, 3 и 5 пользователей.
                    <br>***-Стоимость определяется индивидуально. Максимальное количество учетных записей для Многопользовательской интернет-версии 10ОД равняется 100, для 20ОД – 200, для 30ОД – 300, для 50ОД – 500.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePrice(el) {
        var btn = el.querySelector('.price-btn');
        var val = el.querySelector('.price-value');
        if (btn.classList.contains('hidden')) {
            btn.classList.remove('hidden');
            val.classList.remove('visible');
        } else {
            btn.classList.add('hidden');
            val.classList.add('visible');
        }
    }
</script>


<dialog id="price-contact" class="price-contact" aria-labelledby="price-contact-title" aria-describedby="price-contact-description">
<button type="button" class="price-contact__close" data-close aria-label="Закрыть форму">×</button>
<h2 id="price-contact-title">Получить расчёт</h2>
<p id="price-contact-description">Оставьте контакты — обсудим ваши задачи и подберём подходящий состав системы.</p>
<form method="post" action="price-request.php">
<input type="hidden" name="request_type" value="Получить расчёт">
<label for="price-name">Имя</label><input id="price-name" name="name" autocomplete="name" required maxlength="100" autofocus>
<label for="price-phone">Телефон</label><input id="price-phone" name="phone" type="tel" autocomplete="tel" inputmode="tel" required maxlength="30" pattern="[+0-9() .\-]{7,30}" title="Введите телефон: от 7 до 15 цифр, можно использовать +, пробелы и скобки" placeholder="+7 (___) ___-__-__">
<label for="price-email">Электронная почта</label><input id="price-email" name="email" type="email" autocomplete="email" required maxlength="254" placeholder="name@company.ru">
<button type="submit" class="price-help__button">Отправить заявку</button>
<p class="price-contact__note">Контакты нужны для ответа на вашу заявку.</p>
<div class="price-contact__status" role="status" aria-live="polite"></div>
</form></dialog>
<script src="assets/price-contact.js" defer></script>

<?require_once("footer_m.php")?>