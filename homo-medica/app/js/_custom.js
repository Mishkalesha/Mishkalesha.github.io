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
  const poppupOverlay = document.querySelector(".poppup__form_overlay");
  const poppupForm = document.querySelector(".poppup__form_container");
  const headerBtn = document.querySelector(".header__btn");
  const mobileBtn = document.querySelector(".mobile__btn");
  const formCloseBtn = document.querySelector(".form__btn");
  const poppupFormSubmit = document.querySelector(".poppup__form");
  const poppupSucces = document.querySelector(".form__succes");
  const fancyItem = document.querySelector(".gallary");

  headerBtn.addEventListener("click", showPoppup);
  mobileBtn.addEventListener("click", showPoppup);

  if (formCloseBtn != null && formCloseBtn != undefined && formCloseBtn != "") {
    formCloseBtn.addEventListener("click", () => {
      hidePoppup();
      poppupFormSubmit.reset();
    });
  }

  if (
    poppupFormSubmit != null &&
    poppupFormSubmit != undefined &&
    poppupFormSubmit != ""
  ) {
    poppupFormSubmit.addEventListener("submit", function (e) {
      e.preventDefault();
      poppupFormSubmit.reset();
      showSucces();
      setTimeout(hideSucces, 3000);
    });
  }

  function showSucces() {
    poppupSucces.style.opacity = 1;
    poppupSucces.style.visibility = "visible";
  }

  function hideSucces() {
    poppupSucces.style.opacity = 0;
    poppupSucces.style.visibility = "hidden";
    hidePoppup();
  }

  function showPoppup() {
    poppupOverlay.style.opacity = "1";
    poppupOverlay.style.visibility = "visible";
    poppupForm.style.transform = "translateY(0)";
    document.body.style.overflow = "hidden";
  }

  function hidePoppup() {
    poppupOverlay.style.opacity = "0";
    poppupOverlay.style.visibility = "hidden";
    poppupForm.style.transform = "translateY(-200%)";
    document.body.style.overflow = "visible";
  }

  let loader = document.querySelector(".loader");

  //loader disabled
  setTimeout(function () {
    loader.classList.add("hide-loader");
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
  if (homeForm != null && homeForm != undefined && homeForm != "") {
    homeForm.addEventListener("submit", function (e) {
      e.preventDefault();
    });
  }

  document.addEventListener("scroll", () => {
    if (window.pageYOffset > headerHeight) {
      header.classList.add("header__fixed");
    } else {
      header.classList.remove("header__fixed");
    }
  });

  $(".doctors__container").slick({
    slidesToShow: 3,
    centerPadding: "160px",
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4500,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  if (window.innerWidth < 480) {
    $(".benefits__container_slick").slick({
      loop: true,
      slidesToShow: 1,
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 6000,
    });
    $(".directions__container_click").slick({
      loop: true,
      slidesToShow: 1,
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 4000,
    });
  }

  $(".form__nselect").nSelect({
    hideAfterSelect: true,
    scrollbarTheme: "dark",
    topList: true,
  });

  //fancy
  if (fancyItem != null && fancyItem != undefined && fancyItem != "") {
    $(".gallary").fancybox({
      arrows: true,
    });
  }
  //saleItem autoplay
  $(".sale__container").slick({
    //autoplay: true,
    autoplaySpeed: 5000,
  });
});
