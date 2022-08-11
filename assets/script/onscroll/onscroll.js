if (document.querySelector(".main-site")) {

    const mainSite = document.querySelector(".main-site");
    const mobileHeader = document.querySelector('.mobile-header');
    const presentationTitleFr = document.querySelector('.presentation-title-fr');
    const presentationTitleEn = document.querySelector('.presentation-title-en');
    const presentationContent = document.querySelector('.presentation-content');
    const frenchPresentation = document.querySelector('.presentation-content-description-fr');
    const englishPresentation = document.querySelector('.presentation-content-description-en');

    const mainSitePosition = mainSite.offsetTop;
    
    window.onscroll = () => { 
        console.log(window.scrollY);
        stickyBurger();
        presentationDisplay();
    };
    
    // Function used to display burger-menu
    function stickyBurger() {
        if (window.scrollY >= mainSitePosition) {
            mobileHeader.classList.add("sticky");
            mobileHeader.style.transition = "0.5s";
        } else {
            mobileHeader.classList.remove("sticky");
            mobileHeader.style.transition = "0.1s";
        }
    }

    // Function used to display presentation content
    function presentationDisplay() {
        if (window.scrollY >= 400) {
            presentationTitleFr.classList.add('presentation-title-fr-display');
            presentationTitleFr.style.transition = "0.8s";
            presentationTitleFr.style.transitionTimingDelay = "cubic-bezier(0.075, 0.82, 0.165, 1)";
            presentationTitleEn.classList.add('presentation-title-en-display');
            presentationTitleEn.style.transition = "0.8s";
            presentationTitleFr.style.transitionTimingDelay = "cubic-bezier(0.075, 0.82, 0.165, 1)";
            presentationTitleEn.style.transitionDelay = "0.3s";
        } else {
            presentationTitleFr.classList.remove('presentation-title-fr-display');
            presentationTitleFr.style.transition = "0.5s";
            presentationTitleEn.classList.remove('presentation-title-en-display');
            presentationTitleEn.style.transition = "0.5s";
            presentationTitleEn.style.transitionDelay = "0.3s";
        }
        if (window.scrollY >= 600) {
            presentationContent.classList.add('opacity-display');
            presentationContent.style.transition = "1s";
            presentationContent.style.transitionDelay = "0.5s";
        } else {
            presentationContent.classList.remove('opacity-display');
            presentationContent.style.transition = "1s";
            frenchPresentation.classList.remove('display-none');
            englishPresentation.classList.add('display-none');
        }
    }
    
}

