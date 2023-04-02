// Navigation toggle JavaScript
const toggle = document.createElement('button');
toggle.textContent = "Menu";
toggle.classList.add('kbb-nav-toggle', 'kbb-button');

function toggleMenu(e) {
    const menu = e.target.nextElementSibling.classList.toggle('kbb-nav-open');
}

toggle.addEventListener("click", toggleMenu);

const nav = document.querySelector('#js-kbb-nav');
nav.classList.add('has-js');

nav.insertAdjacentElement("beforebegin", toggle);
