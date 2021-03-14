document.addEventListener("DOMContentLoaded", function () {
  // Custom JS
  const hamburgerBtn = document.querySelector(".hamburger");

  hamburgerBtn.addEventListener("click", function () {
    this.classList.toggle("is-active");
  });

  $(".main__right_slick").slick({
    adaptiveHeight: true,
  });

  const counts = document.querySelectorAll(".progress__count");

  counts.forEach((item) => {
    let countValue = Number(item.innerText);
    let count = 0;
    let counter = 50;

    let myFunction = function () {
      if (Number((count / countValue) * 100).toFixed() > 90) {
        counter = 300;
      }
      setTimeout(myFunction, counter);

      if (count < countValue) {
        count++;
        item.innerHTML = `${count}`;
      }
    };

    setTimeout(myFunction, counter);
  });

  //burger menu
  const burgerOverlay = document.querySelector(".overlay");
  const burgerBtn = document.querySelector(".hamburger");
  burgerBtn.addEventListener("click", function () {
    if (!!burgerBtn.classList.contains("is-active")) {
      this.classList.add("is-active");
      burgerOverlay.style.right = "0";
    } else {
      this.classList.remove("is-active");
      burgerOverlay.style.right = "-100%";
    }
  });
  //end burger menu
});
