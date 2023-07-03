const passwordInputs = Array.from(document.querySelectorAll(".password"));
const seekingBtns = document.querySelectorAll("#seekingBtn");
const switchBtns = document.querySelectorAll(".switch");
const containers = document.querySelectorAll(".container");
const signinForm = document.querySelector("#signin-form");
const alertPassword = document.querySelector("#password-alert");

const alert = document.querySelector('#alert')
console.log(alert);
if(alert != undefined) {
  setTimeout(() => {
    alert.remove()
  }, 4000);
}

function togglePassword(eye, passwordInput) {
  eye.classList.toggle("fa-eye");
  eye.classList.toggle("fa-eye-slash");
  passwordInput.type = passwordInput.type === "password" ? "text" : "password";
}

seekingBtns.forEach((seekingBtn) => {
  seekingBtn.addEventListener("click", (e) => {
    const actualEye = e.currentTarget;
    const actualPasswordId = actualEye.previousElementSibling.id;
    const passwordInput = passwordInputs.find(
      (input) => input.id === actualPasswordId
    );
    togglePassword(actualEye, passwordInput);
  });
});

switchBtns.forEach((switchElemnt) => {
  switchElemnt.addEventListener("click", () => {
    containers.forEach((container) => {
      container.classList.toggle("hidden");
    });
  });
});

signinForm.addEventListener("submit", (e) => {
  if (passwordInputs[1].value !== passwordInputs[2].value) {
    alertPassword.classList.remove("hidden");
    alertPassword.innerHTML = "Las contraseñas no coinciden";
    e.preventDefault();
  } else if (passwordInputs[1].value.length < 5) {
    alertPassword.classList.remove("hidden");
    alertPassword.innerHTML = "La contraseña debe tener mas de 5 caracteres";
    e.preventDefault();
  }
});
