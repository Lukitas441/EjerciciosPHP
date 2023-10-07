const btnSubmit = document.querySelector("#btn-submit");
const btnRefresh = document.querySelector("#btn-refresh");
const input = document.querySelector("input");
const feed = document.querySelector("#feed");
const result = document.querySelector("#result");

btnSubmit.addEventListener("click", () => {
    console.log(input);
  const controlador = "../CONTROLADORES/savePost.php";
  $("#result").load(controlador, { content: input.value });
  setTimeout(() => {
    result.innerHTML = "";
  }, 2000);
  input.value=""
});

btnRefresh.addEventListener("click", () => {
  const controlador = "../CONTROLADORES/getPosts.php";
  $("#feed").load(controlador);
});

window.onload = () => {
  const controlador = "../CONTROLADORES/getPosts.php";
  $("#feed").load(controlador);
};
