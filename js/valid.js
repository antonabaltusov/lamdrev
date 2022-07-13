const form = document.querySelector("form");
const inputs = document.querySelectorAll(".input");
function showError(input, span) {
  if (input.validity.valueMissing) {
    switch (input.id) {
      case "email":
        span.textContent = "Укажите ваш e-mail";
        break;

      case "tel":
        span.textContent = "Укажите ваш номер";
        break;

      case "name":
        span.textContent = "Укажите ваше имя";
        break;

      case "city":
        span.textContent = "Укажите ваш город";
        break;

      case "agree":
        span.textContent =
          "Необходимо согласие с обработкой персональных данных";
        break;

      case "question":
        span.textContent = "Укажите ваш вопрос";
        break;

      default:
        span.textContent = "Заполните все поля";
        break;
    }
  } else if (input.validity.typeMismatch || input.validity.patternMismatch) {
    span.textContent = "Данные некорректны";
  }

  input.classList.add("error");
  input.parentElement.classList.add("error");
}
function checkInput(input) {
  const span = document.querySelector(`#${input.id} + span.error`);
  if (input.validity.valid) {
    span.textContent = "";
    input.classList.remove("error");
    input.parentElement.classList.remove("error");
  } else {
    showError(input, span);
  }
}

inputs.forEach((input) => {
  if (input.required) {
    input.addEventListener("input", function (event) {
      console.log(1);
      checkInput(input);
    });
  }
});

form.addEventListener("submit", function (event) {
  event.preventDefault();
  console.log(2);
  if (!form.checkValidity()) {
    showAllError();
    form.classList.add("error");
    event.preventDefault();
  } else {
    form.classList.remove("error");
  }
});
function showAllError() {
  inputs.forEach((input) => {
    checkInput(input);
  });
}
