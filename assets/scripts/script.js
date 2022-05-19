$(window).on("load", function () {
  $(".load-page").fadeOut(1000);
  $(".content").fadeIn(1000);
});

const rootElement = document.getElementById("menu-wrapper");
const menu = MenuHamburger.initialize({
  rootElement,
  size: 30,
  lineWidth: 2,
  backgroundColor: "transparent",
  iconColor: "#fffbebff",
});
const dropdownMenu = document.querySelector(".dropdown-menu");

menu.on("toggle", () => {
  dropdownMenu.classList.toggle("active");
});

$(document).ready(function () {
  $(".my-slick").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
    ],
  });
});
