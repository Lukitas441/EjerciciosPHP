const saveBtn = document.querySelector("#saveAlumno");
const delBtn = document.querySelector("#deleteAlumno");
const closeBtns = document.querySelectorAll(".close-btn");
const sendBtns = document.querySelectorAll(".send-btn");

const studentInput = document.querySelector("#save");
const studentEraser = document.querySelector("#delete");

saveBtn.addEventListener("click", () =>
  studentInput.classList.remove("hidden")
);
delBtn.addEventListener("click", () =>
  studentEraser.classList.remove("hidden")
);

closeBtns.forEach((btn) =>
  btn.addEventListener("click", (e) =>
    e.currentTarget.parentElement.classList.add("hidden")
  )
);
sendBtns.forEach((btn) =>
  btn.addEventListener("click", (e) =>
    e.currentTarget.parentElement.classList.add("hidden")
  )
);
