if (document.querySelector(".main-site")) {

    
    const mainSite = document.querySelector(".main-site");
    const mobileHeader = document.querySelector('.mobile-header');

    const mainSitePosition = mainSite.offsetTop;
    
    window.onscroll = () => { 
        console.log(window.scrollY);
        stickyBurger()
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
    
}

