document.addEventListener("DOMContentLoaded", function () {
  // Custom JS
  const header = document.querySelector(".header");
  const headerHeight = document.querySelector(".header").offsetHeight;
  const headerSubmenus = document.querySelectorAll(".header__submenu");
  const homeForm = document.querySelector(".socials__form");

  headerSubmenus.forEach((item) => {
    item.style.top = `${headerHeight - 20}px`;
  });

  homeForm.addEventListener("submit", (e) => e.preventDefault());
  document.addEventListener("scroll", () => {
    if (window.pageYOffset > headerHeight) {
      header.classList.add("header__fixed");
    } else {
      header.classList.remove("header__fixed");
    }
  });
  $(".doctors__container").slick({
    dots: true,
    slidesToShow: 4,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
});
