(() => {
  "use strict";
  const dialog = document.getElementById("price-contact");
  if (!dialog || typeof dialog.showModal !== "function") return;
  const form = dialog.querySelector("form");
  const status = dialog.querySelector('[role="status"]');
  const submit = form.querySelector('[type="submit"]');
  let opener;
  document.querySelectorAll("[data-price-contact]").forEach((button) => {
    button.addEventListener("click", (event) => {
      event.preventDefault();
      opener = button;
      const title = button.dataset.priceContact;
      dialog.querySelector("h2").textContent = title;
      form.elements.request_type.value = title;
      status.textContent = "";
      dialog.showModal();
    });
  });
  dialog
    .querySelector("[data-close]")
    .addEventListener("click", () => dialog.close());
  dialog.addEventListener("click", (event) => {
    const r = dialog.getBoundingClientRect();
    if (
      event.target === dialog &&
      (event.clientX < r.left ||
        event.clientX > r.right ||
        event.clientY < r.top ||
        event.clientY > r.bottom)
    )
      dialog.close();
  });
  dialog.addEventListener("close", () => opener?.focus());
  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    if (!form.reportValidity() || submit.disabled) return;
    submit.disabled = true;
    status.textContent = "Отправляем…";
    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: new FormData(form),
        headers: { Accept: "application/json" },
      });
      const result = await response.json();
      if (!response.ok)
        throw new Error(
          result.message || "Не удалось отправить заявку. Попробуйте позже.",
        );
      status.textContent = result.message;
      form.reset();
    } catch (error) {
      status.textContent =
        error instanceof TypeError
          ? "Нет связи с сервером. Проверьте подключение и попробуйте ещё раз."
          : error.message;
    } finally {
      submit.disabled = false;
    }
  });
})();
