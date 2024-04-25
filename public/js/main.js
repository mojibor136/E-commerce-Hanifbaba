document.addEventListener("DOMContentLoaded", function () {
    let multiImages = document.querySelectorAll('.multi-img');
    let img = document.querySelector('.img');
    let selectedImage = null;

    multiImages.forEach(multiImage => {
        multiImage.addEventListener('click', function () {
            let src = this.querySelector('img').getAttribute('src');

            img.setAttribute('src', src);

            if (selectedImage) {
                selectedImage.style.border = 'none';
                selectedImage.style.opacity = '1';
            }


            this.style.border = '1px solid #999999';
            this.style.opacity = '0.8';
            selectedImage = this;
        });
    });
});
