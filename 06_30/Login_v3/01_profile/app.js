const exitBtn = document.querySelector(".exit-btn");
const imgBtn = document.querySelector("img");
const form = document.querySelector("form");
const formBg = document.querySelector("#form-bg");
const cancelBtn=document.querySelector('#cancel')

exitBtn.addEventListener("click", () => {
  window.location.href = "../CONTROLADORES/exitSession.php";
});

imgBtn.addEventListener("click", () => {
  form.classList.toggle("hidden");
  formBg.classList.toggle("hidden");
  imgBtn.classList.toggle("imgStatic");
});

cancelBtn.addEventListener('click', ()=>{
    form.classList.toggle("hidden");
    formBg.classList.toggle("hidden");
    imgBtn.classList.toggle("imgStatic");
})