document.addEventListener("DOMContentLoaded", function () {
  // Custom JS
  const header = document.querySelector(".header");
  const headerHeight = document.querySelector(".header").offsetHeight;
  const headerSubmenus = document.querySelectorAll(".header__submenu");
  const homeForm = document.querySelector(".socials__form");
  const hamburger = document.querySelector(".hamburger");
  const mobileMenu = document.querySelector(".header__mobile_menu");
  const mobileMenuLink = document.querySelectorAll(".mobile__menu_link");
  const mobileMenuClose = document.querySelector(".mobile__menu_close");
  const docBody = document.querySelector("body");
  const loader = document.querySelector(".loader");

  //loader disabled
  setTimeout(function () {
    loader.style.opacity = "0";
    loader.style.visibility = "hidden";
  }, 1500);

  //mobile menu show
  function showMobileMenu() {
    mobileMenu.style.visibility = "visible";
    mobileMenu.style.opacity = 1;
    mobileMenu.style.transform = "translateX(0)";
  }

  function hideMobileMenu() {
    mobileMenu.style.visibility = "hidden";
    mobileMenu.style.opacity = 0;
    mobileMenu.style.transform = "translateX(100%)";
  }

  hamburger.addEventListener("click", function () {
    this.classList.toggle("is-active");
    if (this.classList.contains("is-active")) {
      showMobileMenu();
    } else {
      hideMobileMenu();
    }
  });

  mobileMenuClose.addEventListener("click", () => {
    hideMobileMenu();
    hamburger.classList.remove("is-active");
  });

  headerSubmenus.forEach((item) => {
    item.style.top = `${headerHeight - 20}px`;
  });

  mobileMenuLink.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.remove("is-active");
      hideMobileMenu();
    });
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
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          centerMode: true,
        },
      },
    ],
  });

  if (window.innerWidth < 480) {
    $(".benefits__container").slick({
      dots: true,
      slidesToShow: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      centerMode: true,
    });
    $(".directions__container").slick({
      dots: true,
      slidesToShow: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      centerMode: true,
    });
  }
});
