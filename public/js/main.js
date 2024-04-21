let size = document.querySelectorAll('.size');

size.forEach(Size => {
    Size.addEventListener('click', function () {
        size.forEach(size => {
            size.style.borderColor = '';
        });
        this.style.borderColor = '#800097';
    });
});

size.forEach(sizeText =>{
    sizeText.addEventListener('click',function(){
        alert(this.textContent);
    });
});