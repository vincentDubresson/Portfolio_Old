if (document.getElementById('burger-menu')) {

    const burgerMenu = document.getElementById('burger-menu');

    burgerMenu.addEventListener('click', function() {
        const darkMenu = document.getElementById('menu_dark');
        const hiddenMenu = document.getElementById('hidden-menu');
        const firstSpan = document.getElementById('first-line');
        const secondSpan = document.getElementById('not-cross');
        const thirdSpan = document.getElementById('third-line');
        firstSpan.classList.toggle('first-line');
        secondSpan.classList.toggle('not-cross');
        thirdSpan.classList.toggle('third-line');
        darkMenu.classList.toggle('dark-menu-max');
        hiddenMenu.classList.toggle('flex-menu');
    });

    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    const mainSite = document.querySelector(".main-site");
    const mobileHeader = document.querySelector('.mobile-header');

    // Get the offset position of the navbar
    const sticky = mainSite.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        console.log(sticky);
        console.log(window.pageYOffset);
        if (window.pageYOffset >= sticky) {
            mobileHeader.classList.add("sticky");
            mobileHeader.style.transition = "0.5s";
        } else {
            mobileHeader.classList.remove("sticky");
            mobileHeader.style.transition = "0.1s";
        }
    }

}

