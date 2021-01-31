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
    let counter = 0.1;

    let myFunction = function () {
      if (Number((count / countValue) * 100).toFixed() > 95) {
        counter = 100;
      }
      setTimeout(myFunction, counter);

      if (count < countValue) {
        count++;
        item.innerHTML = `${count}`;
      }
    };

    setTimeout(myFunction, counter);
  });
});
