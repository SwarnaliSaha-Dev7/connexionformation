const scrollHeader = document.querySelector("#header");

const loginBtn = document.querySelector(".login_btn");
const loginToggle = loginBtn.querySelector(".login-toggle");
const loginBtnMobile = document.querySelector(".login_btn_mobile");
const loginToggleMobile = loginBtnMobile.querySelector(".login-toggle-mobile");

const dropdownToggle = document.querySelector(".dropdownList-toggle");
const dropdown = document.querySelector(".drop-down");

const menuToggle = document.querySelector(".toggle-menu");
const navMenu = document.querySelector(".nav_bar_bottom");
const closeMenu = document.querySelector(".close-menu");

const counters = document.querySelectorAll(".counter");

document.addEventListener("DOMContentLoaded", () => {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      scrollHeader.classList.add("fixed");
    } else {
      scrollHeader.classList.remove("fixed");
    }
  });

  loginToggle.addEventListener("click", (e) => {
    e.preventDefault();
    loginBtn.classList.toggle("active");
  });

  loginToggleMobile.addEventListener("click", (e) => {
    e.preventDefault();
    loginBtnMobile.classList.toggle("active");
  });

  document.addEventListener("click", (e) => {
    if (!loginBtn.contains(e.target)) {
      loginBtn.classList.remove("active");
    }
  });

  dropdownToggle.addEventListener("click", function (e) {
    e.preventDefault();
    dropdown.classList.toggle("active");
  });

  document.addEventListener("click", function (e) {
    if (!document.querySelector(".drop-down").contains(e.target)) {
      document.querySelector(".drop-down").classList.remove("active");
    }
  });

  // Mobile menu toggle
  menuToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });

  closeMenu.addEventListener("click", () => {
    navMenu.classList.remove("active");
    menuToggle.classList.remove("active");
    document.body.classList.remove("menu-open");
  });

  // Number increce start===============
  const startCounter = (counter) => {
    const target = +counter.getAttribute("data-target");
    let count = 0;
    const speed = target / 100;

    const updateCount = () => {
      if (count < target) {
        count += speed;
        counter.innerText = Math.ceil(count);
        requestAnimationFrame(updateCount);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  };
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.innerText = 0;
          startCounter(entry.target);
        }
      });
    },
    { threshold: 0.5 },
  );

  counters.forEach((counter) => {
    observer.observe(counter);
  });
  // Number increce end===============
});

jQuery(function ($) {
  // back to top start
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#back-to-top").fadeIn();
    } else {
      $("#back-to-top").fadeOut();
    }
  });
  $("#back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });
  // back to top end
});
