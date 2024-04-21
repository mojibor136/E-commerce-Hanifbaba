@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<style>
    .main-container {
        padding: 0 50px;
    }

    .product-container {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .product-container .product-img-container {
        width: 600px;
        height: 480px;
        padding: 20px;
    }

    .product-container .product-img-container .img-container {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
    }

    .product-container .product-img-container .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-container .product-info-container {
        width: 80%;
        padding: 20px 10px;
    }

    .product-container .product-name {
        line-height: 1.2;
        padding: 5px;
    }

    .product-container .product-name .name {
        text-transform: uppercase;
        font-size: 20px;
        margin: 0;
    }

    .product-container .product-name span {
        font-weight: bolder;
        font-size: 16px;
        color: #555;
    }

    .product-container .product-description {
        line-height: 1.2;
        padding: 5px;
    }

    .product-container .product-description .description {
        text-transform: uppercase;
        font-size: 16px;
        margin: 0;
    }

    .product-container .product-description span {
        font-weight: bolder;
        font-size: 14px;
        color: #555;
    }

    .product-container .product-rating {
        padding: 2px 5px;
    }

    .product-container .product-rating i {
        color: coral;
    }

    .product-container .product-stock {
        padding: 0 5px;
    }

    .product-container .product-price {
        padding: 5px 5px;
    }

    .product-container .product-price span {
        font-weight: bolder;
        font-size: 18px;
        color: #800097;
    }

    .product-container .product-size {
        display: flex;
        cursor: pointer;
    }

    .product-container .product-size .size {
        margin: 5px;
        border: 1px solid #dddddd;
        border-radius: 4px;
        padding: 5px 7px;
        color: #555;
    }

    .product-container .product-size .size:hover {
        border-color: #800097;
    }

    .product-container .product-quantity {
        padding: 5px 5px;
    }

    .product-container .product-quantity .form-control {
        margin: 5px 0;
        width: 100px;
        text-align: center;
    }

    .product-container .product-button {
        padding: 5px 5px;
    }
</style>

<body>
    <div class="main-container">
        <div class="product-container">
            <div class="product-img-container">
                <div class="img-container">
                    <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                </div>
            </div>
            <div class="product-info-container">
                <div class="product-info-card">
                    <div class="product-name">
                        <h3 class="name">products name</h3>
                        <span>Trendy Panjabi with Chest Contrast Luxurious
                        </span>
                    </div>
                    <div class="product-description">
                        <h3 class="description">products description</h3>
                        <span>Trendy Panjabi with Chest Contrast Luxurious
                            Cotton Modern Design for Men Stylish
                            and Sophisticated
                        </span>
                    </div>
                    <div class="product-rating">
                        <span>Rating</span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line"></i>
                    </div>
                    <div class="product-stock">
                        <span>Stock 500</span>
                    </div>
                    <div class="product-price">
                        <span>TK 85000</span>
                    </div>
                    <div class="product-size">
                        <div class="size">40</div>
                        <div class="size">41</div>
                        <div class="size">42</div>
                        <div class="size">43</div>
                    </div>
                    <div class="product-quantity">
                        <span class="quantity">Quantity</span>
                        <input type="text" class="form-control" placeholder="Quantity">
                    </div>
                    <input type="hidden" name="size" class="form-control" id="sizebox" placeholder="Size">
                    <div class="product-button">
                        <a href="" class="btn btn-success">Add To Cart</a>
                        <a href="" class="btn btn-danger">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let size = document.querySelectorAll('.size');
        let sizebox = document.querySelector('#sizebox');
        size.forEach(Size => {
            Size.addEventListener('click', function() {
                size.forEach(size => {
                    size.style.borderColor = '';
                });
                this.style.borderColor = '#800097';

                sizebox.value = this.textContent;
            });
        });
    </script>
</body>

</html>
