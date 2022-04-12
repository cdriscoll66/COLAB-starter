function init() {

    const subexpand = document.querySelectorAll('.menu-expand');

subexpand.forEach(sub => {
    sub.addEventListener('click', (event) => {
    let parent = event.target.closest('.menu-item-has-children');
    parent.classList.toggle("expanded");
});
});
}

export { init as default };
