function init() {
    const body = document.querySelector("body");
    const button = document.querySelector(".js-toggle");
    const buttonclose = document.querySelector(".js-close");
    const overlay = document.querySelector(".o-drawer__overlay");
    const drawer = document.querySelector("#drawer");
    const subexpand = document.querySelectorAll(".menu-expand");
    const menulist = document.querySelector("ul.mobile-menu");

    // open main nav drawer
    const openNav = () => {
        body.classList.add("show-menu", "visible");
        // drawer.setAttribute("open", "");
    };

    // close main nav drawer
    const closeNav = () => {
        body.classList.remove("show-menu");
        setTimeout(() => {
            body.classList.remove("visible");
        }, 500);

        let openSubNavs = menulist.querySelectorAll(".expanded");

        openSubNavs.forEach((subnav) => {
            subnav.classList.remove("expanded", "visible");
        });
    };

    // open dropdown subnav in drawer
    const openSubMenu = (parent) => {
        parent.classList.add("expanded", "visible");
    };

    // close dropdown subnav in draw
    const closeSubMenu = (parent) => {
        parent.classList.remove("expanded");
        setTimeout(() => {
            parent.classList.remove("visible");
        }, 500);
    };

    button.onclick = () => {
        openNav();
    };

    window.addEventListener("resize", () => {
        closeNav();
    });

    overlay.onclick = () => {
        closeNav();
    };

    buttonclose.onclick = () => {
        closeNav();
    };

    // handles subnav
    subexpand.forEach((sub) => {
        sub.addEventListener("click", (event) => {
            let parent = event.target.closest(".menu-item-has-children");
            if (parent.classList.contains("expanded")) {
                closeSubMenu(parent);
            } else {
                openSubMenu(parent);
            }
        });
    });

    drawer.addEventListener("focusout", (event) => {
        if (drawer.matches(":not(:focus-within)")) {
            // CD - taking out because right now it's not my goal. may ask DJW to walk thru this.
            // if (event.target === buttonclose) {
            //     let lastLinks = drawer.querySelectorAll(`
            //     .mobile-menu__list > .menu__item:last-child > a[href],
            //     .mobile-menu__list > .menu__item:last-child > .menu-expand,
            //     .mobile-menu__list > .menu__item:last-child > .menu-expand:checked ~ .menu__children > .menu__item:last-child > a[href]
            //   `);
            //     lastLinks[lastLinks.length - 1].focus(); // focus the deepest link
            // } else {
                buttonclose.focus();
            // }
        }
    });
}

export { init as default };
