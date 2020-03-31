/* toggle menu */
const toggle = document.querySelector('.toggle');
const nav = document.querySelector('.main-nav');
toggle.addEventListener('click', () => {
  nav.classList.toggle('active');
});