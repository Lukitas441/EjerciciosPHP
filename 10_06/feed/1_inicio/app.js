const btnSubmit = document.querySelector("#btn-submit");
const btnRefresh = document.querySelector("#btn-refresh");
const postInput = document.querySelector("#post-input");
const result = document.querySelector("#result");

btnSubmit.addEventListener("click", () => {
  savePost(postInput);
  refresh();
});

btnRefresh.addEventListener("click", () => {
  refresh();
});

/* const likeBtns = document.querySelectorAll(".interactions > i");
likeBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    console.log(e);
  });
}); */

window.onload = () => {
  refresh();
};

function savePost(input) {
  const controlador = "../CONTROLADORES/savePost.php";
  $("#result").load(controlador, { content: input.value });
  setTimeout(() => {
    result.innerHTML = "";
  }, 2000);
  input.value = "";
}

function refresh() {
  const controlador = "../CONTROLADORES/getPosts.php";
  var feed = $("#feed").load(controlador);

  setTimeout(() => {
    feed.find(".fa-heart").on("click", (e) => {
      const heart = e.currentTarget;

      let likes = heart.nextElementSibling;
      heart.classList.contains("fa-regular")
        ? likes.innerHTML++
        : likes.innerHTML--;

      heart.classList.toggle("fa-solid");
      heart.classList.toggle("fa-regular");

      const postId = heart.parentElement.parentElement.getAttribute("id");
      modLike(postId);
    });
  }, 500);
}

function modLike(postId) {
  const controlador = "../CONTROLADORES/changeLike.php";
  $("#result").load(controlador, { idPost: postId });
}
