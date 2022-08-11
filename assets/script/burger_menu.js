if (document.getElementById('burger-menu')) {

    const burgerMenu = document.getElementById('burger-menu');
    const burgerMenuLinks = document.querySelectorAll('.hidden-menu-links');
    const darkMenu = document.getElementById('menu_dark');
    const hiddenMenu = document.getElementById('hidden-menu');
    const firstSpan = document.getElementById('first-line');
    const secondSpan = document.getElementById('not-cross');
    const thirdSpan = document.getElementById('third-line');


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

}

