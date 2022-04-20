function init() {
    const subexpand = document.querySelectorAll(".menu-expand");

    const openSubMenu = (parent) => {
        parent.classList.add("expanded", "visible");
    };

    const closeSubMenu = (parent) => {
        parent.classList.remove("expanded");
        setTimeout(() => {
            parent.classList.remove("visible");
        }, 500);
    };

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
}

export { init as default };
