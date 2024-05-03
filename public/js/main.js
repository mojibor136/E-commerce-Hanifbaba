let mediagallery = document.querySelectorAll('.media-gallery-box img');
let phoneproductimg = document.querySelector('.phone-product-img img');

mediagallery.forEach(mediaGallery => {
    mediaGallery.addEventListener('click', function () {
        let src = this.getAttribute('src');
        phoneproductimg.setAttribute('src', src);
    });
});
