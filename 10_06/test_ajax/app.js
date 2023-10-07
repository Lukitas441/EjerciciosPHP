const btn = document.querySelector("button");
const inputValue = document.querySelector("input").value;

btn.addEventListener("click", () => {
  var controlador = "controlador.php";
  $("#pantalla").load(controlador, { str: inputValue });
});
