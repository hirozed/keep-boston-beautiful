// Navigation toggle JavaScript
const toggle = document.createElement('button');
toggle.textContent = "Menu";
toggle.classList.add('bv-nav-toggle', 'bv-button');

function toggleMenu(e) {
    const menu = e.target.nextElementSibling.classList.toggle('bv-nav-open');
}

toggle.addEventListener("click", toggleMenu);

const nav = document.querySelector('#js-bv-nav');
nav.classList.add('has-js');

nav.insertAdjacentElement("beforebegin", toggle);
