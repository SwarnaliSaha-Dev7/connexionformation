document.addEventListener("DOMContentLoaded", () => {

  const scrollHeader = document.querySelector("#header");

  const loginBtn = document.querySelector(".login_btn");
  const loginToggle = loginBtn?.querySelector(".login-toggle");

  const loginBtnMobile = document.querySelector(".login_btn_mobile");
  const loginToggleMobile = loginBtnMobile?.querySelector(".login-toggle-mobile");

  const dropdownToggle = document.querySelector(".dropdownList-toggle");
  const dropdown = document.querySelector(".drop-down");

  const menuToggle = document.querySelector(".toggle-menu");
  const navMenu = document.querySelector(".nav_bar_bottom");
  const closeMenu = document.querySelector(".close-menu");

  const counters = document.querySelectorAll(".counter");
  const plans = document.querySelectorAll(".plan");

  const password = document.querySelectorAll("#password");
  const toggle = document.querySelectorAll("#togglePassword");
  const icon = document.querySelectorAll("#eyeIcon");

  const trainingModal = document.querySelector("#trainingModal");
  const opentrainingBtn = document.getElementById("opentrainingBtn");
  const closeBtn = document.querySelector("#closeIcon");

  const tableModal = document.querySelector(".tableModal");
  const openBtn = document.getElementById("openModalBtn");
  const closeBtn2 = document.querySelector("#closeIcon2");

  const tableModal2 = document.querySelector(".tableModal2");
  const openThrModal = document.getElementById("openThrModal");
  const closeIcon3 = document.querySelector("#closeIcon3");

  const alertModal = document.querySelector(".tableModal3");
  const openAlertModal = document.getElementById("openAlertModal");
  const closeIcon4 = document.getElementById("closeIcon4");

  const statusText = document.getElementById("statusText");

  const yearSelect = document.getElementById("year");
  const monthSelect = document.getElementById("month");
  const daySelect = document.getElementById("day");

  const openServiceList = document.querySelectorAll(".openServiceList");

  // ===== SCROLL HEADER =====
  window.addEventListener("scroll", () => {
    scrollHeader?.classList.toggle("fixed", window.scrollY > 100);
  });

  // ===== MODALS =====
  opentrainingBtn?.addEventListener("click", () => {
    trainingModal?.classList.add("modal-open-imp");
  });

  closeBtn?.addEventListener("click", () => {
    trainingModal?.classList.remove("modal-open-imp");
  });

  openBtn?.addEventListener("click", () => {
    tableModal?.classList.add("active");
  });

  closeBtn2?.addEventListener("click", () => {
    tableModal?.classList.remove("active");
  });

  openThrModal?.addEventListener("click", () => {
    tableModal2?.classList.add("active");
  });

  closeIcon3?.addEventListener("click", () => {
    tableModal2?.classList.remove("active");
  });

  openAlertModal?.addEventListener("click", () => {
    alertModal?.classList.add("active");
  })

  closeIcon4?.addEventListener("click", () => {
    alertModal?.classList.remove("active");
  });

  // ===== LOGIN =====
  loginToggle?.addEventListener("click", (e) => {
    e.preventDefault();
    loginBtn.classList.toggle("active");
  });

  loginToggleMobile?.addEventListener("click", (e) => {
    e.preventDefault();
    loginBtnMobile.classList.toggle("active");
  });

  document.addEventListener("click", (e) => {
    if (loginBtn && !loginBtn.contains(e.target)) {
      loginBtn.classList.remove("active");
    }
  });

  // ===== DROPDOWN =====
  dropdownToggle?.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown?.classList.toggle("active");
  });

  document.addEventListener("click", (e) => {
    if (dropdown && !dropdown.contains(e.target)) {
      dropdown.classList.remove("active");
    }
  });

  // ===== MOBILE MENU =====
  menuToggle?.addEventListener("click", () => {
    navMenu?.classList.toggle("active");
  });

  closeMenu?.addEventListener("click", () => {
    navMenu?.classList.remove("active");
    menuToggle?.classList.remove("active");
    document.body.classList.remove("menu-open");
  });

  // ===== COUNTER =====
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        let count = 0;
        const target = +el.dataset.target;
        const speed = target / 100;

        const update = () => {
          if (count < target) {
            count += speed;
            el.innerText = Math.ceil(count);
            requestAnimationFrame(update);
          } else {
            el.innerText = target;
          }
        };

        update();
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(c => observer.observe(c));

  // ===== PASSWORD TOGGLE =====
  toggle.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      const isPassword = password[i].type === "password";
      password[i].type = isPassword ? "text" : "password";
      icon[i].src = isPassword ? "images/eye-off.webp" : "images/eye.svg";
    });
  });

  // ===== PLAN SELECT =====
  plans.forEach(plan => {
    plan.addEventListener("click", () => {
      plans.forEach(p => p.classList.remove("active"));
      plan.classList.add("active");
    });
  });

  // ===== FROALA (ONLY ONCE) =====
  if (window.FroalaEditor) {
    new FroalaEditor("#editor", {
      height: 200,
      placeholderText: "Enter the text you want this field to display",
    });
  } else if (statusText) {
    statusText.textContent = "Froala plugin failed to load.";
  }

  // ===== DATE PICKER =====
  if (yearSelect && monthSelect && daySelect) {
    for (let y = 2020; y <= 2035; y++) {
      yearSelect.add(new Option(y, y));
    }

    const months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

    months.forEach((m, i) => {
      monthSelect.add(new Option(m, i + 1));
    });

    function populateDays() {
      const days = new Date(yearSelect.value, monthSelect.value, 0).getDate();
      daySelect.innerHTML = "";
      for (let d = 1; d <= days; d++) {
        daySelect.add(new Option(d, d));
      }
    }

    populateDays();
    yearSelect.addEventListener("change", populateDays);
    monthSelect.addEventListener("change", populateDays);
  }

  // ====== SERVICE LISTS =====
  openServiceList.forEach((lists) => {
    lists.addEventListener("click", () => {

      document.querySelectorAll(".service-list").forEach(el => {
        el.classList.remove("active");
      });

      const parent = lists.closest(".service-cart");
      const list = parent.querySelector(".service-list");

      list.classList.toggle("active");
    });
  });

});

// ===== REPEATER =====
document.addEventListener("click", function (e) {
  if (e.target.closest(".add-btn")) {
    const container = document.getElementById("cabinetContainer");
    const currentBlock = e.target.closest(".cabinet-wrapper");

    const clone = currentBlock.cloneNode(true);

    const fileInput = clone.querySelector(".file-input");
    if (fileInput) fileInput.value = "";

    container.appendChild(clone);
  }
});


jQuery(function ($) {

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

  $("#dataTable").DataTable({
    searching: true,
    ordering: true,
    info: true,
    pageLength: 10,
    lengthMenu: [10, 20, 30],
  });

  $("#tablePre, #tableInsc").DataTable({
    paging: true,
    ordering: true,
    info: true,
    language: {
      search: "",
      searchPlaceholder: "Search",
      lengthMenu: "Show _MENU_ Entries",
    },
    dom: '<"dt_header"lf>rt<"dt_footer"ip>',
  });

});

