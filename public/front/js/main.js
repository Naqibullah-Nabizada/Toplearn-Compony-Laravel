const hamburger = document.querySelector('.hamburger-menu');
const navbar = document.querySelector('.navbar-nav');
const close = document.querySelector('.close-menu');
const overlayMenu = document.querySelector('.overlay-menu');

hamburger.addEventListener('click', function () {
    navbar.classList.add('show');
    overlayMenu.classList.add('show');
})

close.addEventListener('click', function () {
    navbar.classList.remove('show')
    overlayMenu.classList.remove('show');
})

overlayMenu.addEventListener('click', function () {
    navbar.classList.remove('show')
    overlayMenu.classList.remove('show');
})


const logoutUser = () => {
    document.querySelector("#logout").submit();
}
