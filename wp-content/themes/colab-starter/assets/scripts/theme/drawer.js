function init() {
    const body = document.querySelector("body");
    const button = document.querySelector(".js-toggle");
    const closebutton = document.querySelector(".js-close");
    const overlay = document.querySelector(".o-drawer__overlay");

    button.onclick = function () {
        body.classList.toggle("show-menu");
    };

    window.addEventListener('resize', () => {
        body.classList.remove("show-menu")
    });

    overlay.onclick = function () {
        body.classList.remove("show-menu");
    };

    overlay.onclick = function () {
        body.classList.remove("show-menu");
    };

    buttonclose.onclick = function () {
        body.classList.remove("show-menu");
    };

}

export { init as default };
