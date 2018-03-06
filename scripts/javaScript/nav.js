(function () {
    
    'use strict';
    let mainMenu = document.getElementById('main-nav');
    let burgerBtn = document.getElementById('menu-icon');
    
    
    function mobileMenu(){
        mainMenu.classList.toggle("mobileMenuOpen");
        burgerBtn.classList.toggle("mobileMenuOpen");
    }
    
    burgerBtn.addEventListener('click', mobileMenu);
    
}());