const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

// +++++++++++++++ Cursor Animation JS Start Here +++++++++++++++++

const cursor = document.querySelector(".cursor");

document.addEventListener("mousemove", (e) => {
  cursor.style.display = "block";
  cursor.style.top = e.pageY - 10 + "px";
  cursor.style.left = e.pageX - 10 + "px";
});

document.addEventListener("mouseleave", (e) => {
  cursor.style.display = "none";
});

document.addEventListener("click", (e) => {
  cursor.classList.add("expand");
  cursor.style.top = e.pageY - 10 + "px"; // Match cursor position with click
  cursor.style.left = e.pageX - 10 + "px"; // Match cursor position with click

  setTimeout(() => {
    cursor.classList.remove("expand");
  }, 500);
});

// +++++++++++++++ Cursor Animation JS End Here +++++++++++++++++
