if (document.querySelector('.presentation-content')) {

    const frenchPresentation = document.querySelector('.presentation-content-description-fr');
    const englishPresentation = document.querySelector('.presentation-content-description-en');
    const frenchFlag = document.querySelector('.presentation-content-fr-flag-icon');
    const englishFlag = document.querySelector('.presentation-content-en-flag-icon');

    frenchFlag.addEventListener('click', () => {
        frenchPresentation.classList.toggle('display-none');
        englishPresentation.classList.toggle('display-none');
    });

    englishFlag.addEventListener('click', () => {
        frenchPresentation.classList.toggle('display-none');
        englishPresentation.classList.toggle('display-none');
    });

}