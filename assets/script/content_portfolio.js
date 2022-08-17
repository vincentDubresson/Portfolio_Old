if (document.querySelectorAll('.portfolio-card-fr')) {

    const frenchPortfolioCards = document.querySelectorAll('.portfolio-card-fr');
    const englishPortfolioCards = document.querySelectorAll('.portfolio-card-en');
    const frenchPortfolioFlag = document.querySelector('.portfolio-fr-flag-icon');
    const englishPortfolioFlag = document.querySelector('.portfolio-en-flag-icon');
    const frenchCurriculum = document.querySelector('.portfolio-curriculum-fr');
    const englishCurriculum = document.querySelector('.portfolio-curriculum-en');

    frenchPortfolioFlag.addEventListener('click', () => {
        frenchCurriculum.classList.toggle('display-none');
        englishCurriculum.classList.toggle('display-none');
        frenchPortfolioFlag.classList.toggle('display-none');
        englishPortfolioFlag.classList.toggle('display-none');
        for (let i = 0; i < frenchPortfolioCards.length; i++) {
            frenchPortfolioCards[i].classList.toggle('display-none');
            englishPortfolioCards[i].classList.toggle('display-none');
        }
    });

    englishPortfolioFlag.addEventListener('click', () => {
        frenchCurriculum.classList.toggle('display-none');
        englishCurriculum.classList.toggle('display-none');
        frenchPortfolioFlag.classList.toggle('display-none');
        englishPortfolioFlag.classList.toggle('display-none');
        for (let i = 0; i < englishPortfolioCards.length; i++) {
            frenchPortfolioCards[i].classList.toggle('display-none');
            englishPortfolioCards[i].classList.toggle('display-none');
        }
    });

}