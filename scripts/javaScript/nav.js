(function () {
    
    'use strict';
    
    // Variables
    var nav = document.getElementById('main-nav'),
        navBtn = document.getElementById('menu-icon'),
        menu = document.getElementById('main-menu'),
        submenus = [],
        backBtns = [],
        submenuLinks = [],
        isMobile = false,
        i = 0;
    
    //  show and hide mobile menu
    function toogleMenu(evt) {
        if (nav.offsetLeft < 0) {
            nav.style.left = '0%';
            nav.setAttribute('class', 'active');
            navBtn.style.left = (nav.offsetWidth - navBtn.offsetWidth - 10) + 'px';
        } else {
            nav.removeAttribute('style');
            nav.removeAttribute('class');
            navBtn.style.left = nav.offsetWidth + 'px';
            menu.style.left = '0%';
            for (i = 0; i < submenus.length; i += 1) {
                submenus[i].style.width = '0';
            }
        }
    }
    
    //  show and hide submenus
    
    function showHideSubmenu(evt) {
        var submenu;
        if (evt.currentTarget.className !== 'back-btn') {
            submenu = evt.currentTarget.parentElement.querySelector('ul');
            submenu.style.width = '100%';
            menu.style.left = '-100%';
        } else {
            submenu = evt.currentTarget.parentElement;
            submenu.style.width = '0%';
            menu.style.left = '0px';
        }
    }
    
    //  overwrite HTML-properties and
    //  add Click-Events to run on mobile devices
    
    function setupMobile() {
        var listItems = nav.getElementsByTagName('LI'),
            link,
            back;
        for (i = 0; i < listItems.length; i += 1) {
            if (listItems[i].getElementsByTagName('UL').length > 0) {
                submenus.push(listItems[i].querySelector('ul'));
                link  = listItems[i].querySelector('a');
                link.setAttribute('data-href', link.getAttribute('href'));
                link.removeAttribute('href');
                link.addEventListener('click', showHideSubmenu);
                back = listItems[i].querySelector('.back-btn');
                back.addEventListener('click', showHideSubmenu);
                backBtns.push(back);
                submenuLinks.push(link);
            }
        }
        navBtn.addEventListener('click', toogleMenu);
    }
    
    //  rewrite HTML-properties and
    //  remove Click-Events to run on desktops
    
    function resetNavigation() {
        if (backBtns.length > 0) {
            for (i = 0; i < backBtns.length; i += 1) {
                backBtns[i].removeEventListener('click', showHideSubmenu);
            }
        }
        if (submenuLinks.length > 0) {
            for (i = 0; i < submenuLinks.length; i += 1) {
                submenuLinks[i].setAttribute('href', submenuLinks[i].getAttribute('data-href'));
                submenuLinks[i].removeAttribute('data-href');
                submenuLinks[i].removeEventListener('click', showHideSubmenu);
            }
        }
        if (submenus.length > 0) {
            for (i = 0; i < submenus.length; i += 1) {
                submenus[i].removeAttribute('style');
            }
        }
        backBtns = [];
        submenuLinks = [];
        submenus = [];
    }
    
    //  check Browsersize and set or reset Navigation to mobile or desktop
    
    function checkSize(evt) {
        if (window.innerWidth < 800 && !isMobile) {
            setupMobile();
            isMobile = true;
        }
        if (window.innerWidth >= 800 && isMobile) {
            resetNavigation();
            isMobile = false;
        }
    }
    
    //  add events to window, to init navigation
    
    window.addEventListener('resize', checkSize);
    window.addEventListener('load', checkSize);
    
    
}());