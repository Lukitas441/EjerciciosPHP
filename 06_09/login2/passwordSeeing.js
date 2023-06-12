const passwordInput = document.querySelector("#password");
const seekingBtn = document.querySelector("#seekingBtn");

seekingBtn.addEventListener("click", (e) => {
  passwordInput.type = passwordInput.type === "password" ? "text" : "password";
  e.target.classList.toggle("fa-eye");
  e.target.classList.toggle("fa-eye-slash");
});
