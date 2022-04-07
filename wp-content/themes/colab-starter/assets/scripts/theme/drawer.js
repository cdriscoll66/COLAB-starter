function init() {
    const body = document.querySelector("body");
    const button = document.querySelector(".js-toggle");
    const buttonclose = document.querySelector(".js-close");
    const overlay = document.querySelector(".o-drawer__overlay");

    const openNav = () => {
        body.classList.add("show-menu", "visible");
    }

    const closeNav = () => {
        body.classList.remove("show-menu");
        setTimeout( () => {
            body.classList.remove("visible");
        }, 500);
    }

    button.onclick = () => {
        openNav();
    };

    window.addEventListener('resize', () => {
        closeNav();
    });

    overlay.onclick = () => {
        closeNav();
    };

    overlay.onclick = () => {
        closeNav();
    };

    buttonclose.onclick = () => {
        closeNav();
    };

}

export { init as default };
