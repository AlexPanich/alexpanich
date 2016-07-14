(function() {

    var navbarToggle = document.querySelector('.navbar-toggle'),
        menu = document.querySelector('.page-header__menu-wrap'),
        navbarLines = document.querySelector('.navbar-toggle__lines');

    navbarToggle.addEventListener('click', function(e) {
        e.preventDefault();
        menu.classList.toggle('page-header__menu-wrap--show');
        navbarLines.classList.toggle('navbar-toggle__lines--close');

    });

})();