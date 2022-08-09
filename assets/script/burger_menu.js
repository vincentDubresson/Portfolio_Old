if (document.getElementById('burger-menu')) {

    const burgerMenu = document.getElementById('burger-menu');
    const burgerMenuLinks = document.querySelectorAll('.hidden-menu-links');
    const darkMenu = document.getElementById('menu_dark');
    const hiddenMenu = document.getElementById('hidden-menu');
    const firstSpan = document.getElementById('first-line');
    const secondSpan = document.getElementById('not-cross');
    const thirdSpan = document.getElementById('third-line');
    const mainSite = document.querySelector(".main-site");
    const mobileHeader = document.querySelector('.mobile-header');

    // This opens the burger menu
    burgerMenu.addEventListener('click', function() {
        firstSpan.classList.toggle('first-line');
        secondSpan.classList.toggle('not-cross');
        thirdSpan.classList.toggle('third-line');
        darkMenu.classList.toggle('dark-menu-max');
        hiddenMenu.classList.toggle('flex-menu');
    });

    // This closes the burger menu
    burgerMenuLinks.forEach(link => {
        link.addEventListener('click', () => {
            firstSpan.classList.toggle('first-line');
            secondSpan.classList.toggle('not-cross');
            thirdSpan.classList.toggle('third-line');
            darkMenu.classList.toggle('dark-menu-max');
            hiddenMenu.classList.toggle('flex-menu');
        });
    });

    // Functions used to display burger menu when scroll to main site
    window.onscroll = () => { 
        myFunction()
    };

    const mainSitePosition = mainSite.offsetTop;

    function myFunction() {
        if (window.scrollY >= mainSitePosition) {
            mobileHeader.classList.add("sticky");
            mobileHeader.style.transition = "0.5s";
        } else {
            mobileHeader.classList.remove("sticky");
            mobileHeader.style.transition = "0.1s";
        }
    }

}

