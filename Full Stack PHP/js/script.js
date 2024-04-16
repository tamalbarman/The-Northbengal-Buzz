let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

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

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};

var swiper = new Swiper(".home-slider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".reviews-slider", {
  grabCursor: true,
  loop: true,
  autoHeight: true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

let loadMoreBtn = document.querySelector(".packages .load-more .btn");
let currentItem = 3;

loadMoreBtn.onclick = () => {
  let boxes = [...document.querySelectorAll(".packages .box-container .box")];
  for (var i = currentItem; i < currentItem + 3; i++) {
    boxes[i].style.display = "inline-block";
  }
  currentItem += 3;
  if (currentItem >= boxes.length) {
    loadMoreBtn.style.display = "none";
  }
};
