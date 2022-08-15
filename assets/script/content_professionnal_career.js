if (document.querySelector('.career-content-card-container')) {

    const arrows = document.querySelectorAll('.career-content-arrow');
    const arrowContainer = document.querySelector('.career-content-arrow-container');
    const cardContainer = document.querySelector('.career-content-card-container');
    const careerEnglishFlag = document.querySelector('.career-content-fr-flag-icon');
    const careerFrenchFlag = document.querySelector('.career-content-en-flag-icon');
    const careerStudyFrenchCards = document.querySelectorAll('.career-study-content-card-fr');
    const careerStudyEnglishCards = document.querySelectorAll('.career-study-content-card-en');
    const careerWorkFrenchCards = document.querySelectorAll('.career-work-content-card-fr');
    const careerWorkEnglishCards = document.querySelectorAll('.career-work-content-card-en');


    arrowContainer.style.height = cardContainer.clientHeight + 'px';

    arrows.forEach(arrow => {
        arrow.style.height = cardContainer.clientHeight + 'px';
    });

    careerEnglishFlag.addEventListener('click', () => {
        careerEnglishFlag.classList.toggle('display-none');
        careerFrenchFlag.classList.toggle('display-none');
        careerStudyFrenchCards.forEach(frenchStudyCard => {
            frenchStudyCard.classList.toggle('display-none');
        });
        careerStudyEnglishCards.forEach(englishStudyCard => {
            englishStudyCard.classList.toggle('display-none');
        });
        careerWorkFrenchCards.forEach(frenchWorkCard => {
            frenchWorkCard.classList.toggle('display-none');
        });
        careerWorkEnglishCards.forEach(englishWorkCard => {
            englishWorkCard.classList.toggle('display-none');
        });
    });

    careerFrenchFlag.addEventListener('click', () => {
        careerEnglishFlag.classList.toggle('display-none');
        careerFrenchFlag.classList.toggle('display-none');
        careerStudyFrenchCards.forEach(frenchStudyCard => {
            frenchStudyCard.classList.toggle('display-none');
        });
        careerStudyEnglishCards.forEach(englishStudyCard => {
            englishStudyCard.classList.toggle('display-none');
        });
        careerWorkFrenchCards.forEach(frenchWorkCard => {
            frenchWorkCard.classList.toggle('display-none');
        });
        careerWorkEnglishCards.forEach(englishWorkCard => {
            englishWorkCard.classList.toggle('display-none');
        });
    });

    
}