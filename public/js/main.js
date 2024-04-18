window.addEventListener('scroll', function () {
    let headerContainer = document.querySelector('.header-container');

    if (pageYOffset >= 200) {
        headerContainer.classList.add('headerContainer');
    } else {
        headerContainer.classList.remove('headerContainer');
    }
});