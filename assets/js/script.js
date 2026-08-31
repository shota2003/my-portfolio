document.addEventListener("DOMContentLoaded", () => {

    const header = document.querySelector("header");
    const responsiveHeader = document.getElementById("responsive-header");
    const webpageBackground = document.getElementById("webpage_background");

    const sidebar = document.getElementById("responsive-sidebar");
    const sidebarBtn = document.getElementById("sidebar-btn");
    const sidebarCloseBtn = document.getElementById("sidebar-close-btn");

    const aboutMeBtn = document.getElementById("about_me_btn");
    const servicesBtn = document.getElementById("services_btn");
    const portfolioBtn = document.getElementById("portfolio_btn");
    const contactBtn = document.getElementById("contact_btn");

    const aboutMe = document.getElementById("main_pic");

    const arrowBtn = document.getElementById("arrow_up_btn");
    const swiperSlides = document.querySelectorAll(".swiper-slide");
    const containerWrapper = document.getElementById("container_wrapper");
    const responsiveContainerWrapper = document.getElementById("responsive_container_wrapper");
    const slideContainers = document.querySelectorAll(".slide-container");
    const responsiveSlideContainers = document.querySelectorAll(".responsive-slide-container");
    const closeButtons = document.querySelectorAll(".container-close-btn");
    const closeButtonsImg = document.querySelectorAll(".container-close-btn-img");

    const servicesBoxes = document.querySelectorAll(".box");
    const servicesPopups = document.querySelectorAll(".services-popup");
    const popupWrapper = document.getElementById("services_popup_wrapper");
    const popupCloseButtons = document.querySelectorAll(".popup-close-btn");
    const popupCloseButtonsImg = document.querySelectorAll(".popup-close-btn");


    window.addEventListener("scroll", () => {
        if (window.scrollY > 30) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }

        if (window.scrollY > 18) {
            responsiveHeader.classList.add("scrolled");
        } else {
            responsiveHeader.classList.remove("scrolled");
        }

        if (window.scrollY > 30) {
            webpageBackground.classList.add("scrolled");
            webpageBackground.style.transition = "all 0.8s ease";
        } else {
            webpageBackground.classList.remove("scrolled");
            webpageBackground.style.transition = "all 0.8s ease";
        }

        if (window.scrollY > 200) {
            arrowBtn.style.display = "flex";
        } else {
            arrowBtn.style.display = "none";
        }
    });

    sidebarBtn.addEventListener("click", () => {
        sidebar.style.transform = "translateX(0%)";
        sidebar.style.transition = "transform 0.4s ease";
        document.body.style.overflow = "hidden";
    });

    sidebarCloseBtn.addEventListener("click", () => {
        sidebar.style.transform = "translateX(-100%)";
        sidebar.style.transition = "transform 0.4s ease";
        document.body.style.overflow = "auto";
    });

    aboutMeBtn.addEventListener("click", () => {
        sidebar.style.transform = "translateX(-100%)";
        sidebar.style.transition = "transform 0.4s ease";
        document.body.style.overflow = "auto";
    });

    servicesBtn.addEventListener("click", () => {
        sidebar.style.transform = "translateX(-100%)";
        sidebar.style.transition = "transform 0.4s ease";
        document.body.style.overflow = "auto";
    });

    portfolioBtn.addEventListener("click", () => {
        sidebar.style.transform = "translateX(-100%)";
        sidebar.style.transition = "transform 0.4s ease";
        document.body.style.overflow = "auto";
    });

    contactBtn.addEventListener("click", () => {
        sidebar.style.transform = "translateX(-100%)";
        sidebar.style.transition = "transform 0.4s ease";
        document.body.style.overflow = "auto";
    });

    arrowBtn.addEventListener("click", () => {
        window.scrollTo(0, 0);
    });


    aboutMe.addEventListener("mouseover", () => {
        aboutMe.style.transition = "all 0.4s ease";
        aboutMe.style.scale = "1.1";
    });

    aboutMe.addEventListener("mouseleave", () => {
        aboutMe.style.transition = "all 0.4s ease";
        aboutMe.style.scale = "1";
    });


    servicesBoxes.forEach(box => {
        box.addEventListener("mouseover", () => {
            box.style.transition = "all 0.5s ease";
            box.style.scale = "1.05";
            box.style.backgroundColor = "#003874";
        });

        box.addEventListener("mouseleave", () => {
            box.style.transition = "all 0.5s ease";
            box.style.scale = "1";
            box.style.backgroundColor = "#002750";
        });
    });



    function openSlideContainer(index) {

        if (containerWrapper) {
            containerWrapper.style.display = "block";
            
            slideContainers.forEach(container => {
                container.style.display = "none";
            });

            if (slideContainers[index]) {
                slideContainers[index].style.display = "flex";
            }
            
            document.body.style.overflow = "hidden";
        }
        

        if (responsiveContainerWrapper) {
            responsiveContainerWrapper.style.display = "block";
            
            responsiveSlideContainers.forEach(container => {
                container.style.display = "none";
            });

            if (responsiveSlideContainers[index]) {
                responsiveSlideContainers[index].style.display = "flex";
            }
            
            document.body.style.overflow = "hidden";
        }
    }


    function closeAllContainers() {
        if (containerWrapper) {
            containerWrapper.style.display = "none";
        }
        if (responsiveContainerWrapper) {
            responsiveContainerWrapper.style.display = "none";
        }

        slideContainers.forEach(container => {
            container.style.display = "none";
        });
        responsiveSlideContainers.forEach(container => {
            container.style.display = "none";
        });
        
        document.body.style.overflow = "auto";
    }


    swiperSlides.forEach((slide, index) => {
        slide.style.cursor = "pointer";

        slide.addEventListener("click", (e) => {
            if (e.target.closest('.swiper-button-next') || 
                e.target.closest('.swiper-button-prev')) {
                return;
            }
            openSlideContainer(index);
        });
    });


    closeButtons.forEach(button => {
        button.addEventListener("click", (e) => {
            e.preventDefault();
            closeAllContainers();
        });

        button.addEventListener("mouseover", () => {
            closeButtonsImg.forEach(buttonImg => {
                buttonImg.src = "./assets/img/close-on-hover.png";
            });
            button.style.transition = "all 0.4s ease";
        });

        button.addEventListener("mouseleave", () => {
            closeButtonsImg.forEach(buttonImg => {
                buttonImg.src = "./assets/img/close.png";
            });
            button.style.transition = "all 0.4s ease";
        });
    });


    if (containerWrapper) {
        containerWrapper.addEventListener("click", (e) => {
            if (e.target === containerWrapper) {
                closeAllContainers();
            }
        });
    }
    
    if (responsiveContainerWrapper) {
        responsiveContainerWrapper.addEventListener("click", (e) => {
            if (e.target === responsiveContainerWrapper) {
                closeAllContainers();
            }
        });
    }


    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            closeAllContainers();
        }
    });


    function openPopup(index) {
        if (popupWrapper) {
            popupWrapper.style.display = "flex";

            servicesPopups.forEach(container => {
                container.style.display = "none";
            });
            
            if (servicesPopups[index]) {
                servicesPopups[index].style.display = "flex";
            }
            
            document.body.style.overflow = "hidden";
        }
 
    }

    function closePopups() {
        if (popupWrapper) {
            popupWrapper.style.display = "none";
        }

        servicesPopups.forEach(popup => {
            popup.style.display = "none";
        });
        
        document.body.style.overflow = "auto";
    }


    servicesBoxes.forEach((box, index) => {        
        box.addEventListener("click", (e) => {
            openPopup(index);
        });
    });


    popupCloseButtons.forEach(button => {
        button.addEventListener("click", (e) => {
            e.preventDefault();
            closePopups();
        });

        button.addEventListener("mouseover", () => {
            popupCloseButtonsImg.forEach(popupCloseButton => {
                popupCloseButton.src = "./assets/img/close-on-hover.png";
            });
        });

        button.addEventListener("mouseleave", () => {
            popupCloseButtonsImg.forEach(popupCloseButton => {
                popupCloseButton.src = "./assets/img/close.png";
            });
        });
    });


    if (popupWrapper) {
        popupWrapper.addEventListener("click", (e) => {
            if (e.target === popupWrapper) {
                closePopups();
            }
        });
    }

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            closePopups();
        }
    });

});