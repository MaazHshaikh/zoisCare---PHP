'use strict';

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}
/**
 * PRELOADER
 *
 * preloader will be visible until document load
 */

const preloader = document.querySelector("[data-preloader]");
window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});

/**
 * HEADER & BACK TOP BTN
 *
 * active header & back top btn when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElementOnScroll = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

window.addEventListener("scroll", activeElementOnScroll);

/**
 * SCROLL REVEAL
 */

const revealElements = document.querySelectorAll("[data-reveal]");
const revealElementOnScroll = function () {
  for (let i = 0, len = revealElements.length; i < len; i++) {
    if (revealElements[i].getBoundingClientRect().top < window.innerHeight / 1.15) {
      revealElements[i].classList.add("revealed");
    } else {
      revealElements[i].classList.remove("revealed");
    }
  }
}
window.addEventListener("scroll", revealElementOnScroll);
window.addEventListener("load", revealElementOnScroll);

const roleSelect = document.getElementById('role');
const specializationField = document.getElementById('specialization-field');
const availabilityField = document.getElementById('availability-field');

roleSelect.addEventListener('change', () => {
  if (roleSelect.value === 'Doctor') {
    specializationField.style.display = 'block';
    availabilityField.style.display = 'block';
  } else {
    specializationField.style.display = 'none';
    availabilityField.style.display = 'none';
  }
});

function redirect(role) {
  if (role === "admin") {
    window.location.href = "dashboard/dashboard.php"; // redirect to admin page
  } else {
    window.location.href = "index.html"; // default redirect
  }
}
