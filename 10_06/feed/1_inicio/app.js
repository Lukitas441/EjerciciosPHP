const btnSubmit = document.querySelector("#btn-submit");
const btnRefresh = document.querySelector("#btn-refresh");
const input = document.querySelector("input");
const feed = document.querySelector("#feed");
const result = document.querySelector("#result");
const likeBtns = document.querySelectorAll(".interactions > i");

btnSubmit.addEventListener("click", () => {
  const controlador = "../CONTROLADORES/savePost.php";
  $("#result").load(controlador, { content: input.value });
  setTimeout(() => {
    result.innerHTML = "";
  }, 2000);
  input.value = "";
});

btnRefresh.addEventListener("click", (e) => {
  const controlador = "../CONTROLADORES/getPosts.php";
  $("#feed").load(controlador);
});

likeBtns.forEach(btn => {
    btn.addEventListener("click", (e) => {
      console.log()
    });
});

window.onload = () => {
  const controlador = "../CONTROLADORES/getPosts.php";
  $("#feed").load(controlador);
  
};
