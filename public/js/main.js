let search = document.querySelector('.search-box');
let searchicon = document.querySelector('#search-icon');

document.querySelector('#search-icon').onclick = (event) => {
    search.classList.toggle('active');
    navbar.classList.remove('active')
    event.stopPropagation();
};

document.addEventListener('click', (event) => {
    if (!search.contains(event.target) && !searchicon.contains(event.target)) {
        search.classList.remove('active');
    }
});

let navbar = document.querySelector('.nvbr');
let menu = document.querySelector('#menu-icon');

document.querySelector('#menu-icon').onclick = (event) => {
    navbar.classList.toggle('active');
    search.classList.remove('active');
    event.stopPropagation();
};

document.addEventListener('click', (event) => {
    if (!menu.contains(event.target) && !navbar.contains(event.target)) {
        navbar.classList.remove('active');
    }
});

window.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    var homeSection = document.querySelector('.about');
    var homeHeight = homeSection.offsetHeight;

    if (window.scrollY > homeHeight) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

