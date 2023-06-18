const passwordInputs = Array.from(document.querySelectorAll(".password"));
const seekingBtns = document.querySelectorAll("#seekingBtn");
const switchBtns = document.querySelectorAll(".switch");
const containers = document.querySelectorAll(".container");

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
