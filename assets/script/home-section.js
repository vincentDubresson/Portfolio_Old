if (document.querySelector('.home-section-title-container')) {

    const homeLogo = document.querySelector('.home-section-logo');
    const bienvenueText = document.querySelector('.home-section-title-bienvenue');
    const welcomeText = document.querySelector('.home-section-title-welcome');
    const centerText = document.querySelector('.home-section-title-center');

    window.addEventListener('load', () => {
        homeLogo.classList.add('home-section-logo-display');
        bienvenueText.classList.add('home-section-title-bienvenue-display');
        welcomeText.classList.add('home-section-title-welcome-display');
        centerText.classList.add('home-section-title-center-display');
    })
}