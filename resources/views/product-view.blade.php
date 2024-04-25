@include('layouts.header')
@include('layouts.phoneHeader')
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
    body {
        font-family: 'Noto Sans Bengali', Arial, sans-serif;
        background: #f1f1f1;
    }

    .main-container {
        padding: 0 50px;
    }

    .product-container {
        width: 100%;
        display: flex;
        justify-content: space-between;
        background: #fff;
    }

    .product-container .product-img-container {
        width: 600px;
        padding: 20px;
    }

    .product-container .product-img-container .img-container {
        width: 100%;
        height: 400px;
        border-radius: 10px;
        overflow: hidden;
    }

    .product-container .product-img-container .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-container .product-img-container .multi-img-card {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .product-container .product-img-container .multi-img-card .multi-img {
        width: 65px;
        height: 65px;
        margin: 5px 0;
        margin-right: 10px;
        cursor: pointer;
        border-radius: 5px;
        overflow: hidden;
    }

    .product-container .product-img-container .multi-img-card .multi-img:hover {
        opacity: 0.8;
        border: 1px solid #999999;
    }

    .product-container .product-img-container .multi-img-card .multi-img img {
        width: 100%;
        object-fit: cover;
        height: 100%;
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

    .phone-size-container {
        display: none;
    }

    @media screen and (max-width: 640px) {
        .main-container {
            padding: 0;
        }

        .product-container {
            display: none;
        }

        .phone-size-container {
            display: block;
            margin-bottom: 50px;
        }

        .phone-product-image-container {
            background: #fff;
        }

        .phone-product-image {
            width: 100%;
        }

        .phone-product-img {
            width: 100%;
            height: 380px;
            background: #fff;
        }

        .phone-product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .phone-product-all-img-card {
            display: flex;
            align-items: center;
            justify-content: space-around;
            overflow-x: auto;
            white-space: nowrap;
            padding: 3px 5px;
        }

        .phone-product-all-img-card::-webkit-scrollbar {
            display: none;
        }

        .all-img {
            width: 55px;
            height: 57px;
            margin: 0 2px;
            overflow: hidden;
            border-radius: 2px;
            flex-shrink: 0;
        }

        .all-img img {
            height: 100%;
            width: 100%;
        }

        .phone-product-all-color {
            padding: 5px 8px;
            font-size: 14px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .phone-product-all-color .color {
            color: #111;
            font-weight: 500;
        }

        .phone-product-info-container {
            background: #fff;
            border-radius: 5px;
            margin: 10px 5px 10px 7px;
            padding: 5px;
        }

        .phone-product-name {
            padding: 0 5px;
        }

        .phone-product-price {
            margin-top: 3px;
            padding-bottom: 4px;
            line-height: 1;
            display: flex;
            align-items: center;
            padding: 0 3px;
        }

        .phone-product-price .tk {
            font-weight: 700;
            font-size: 20px;
            color: #444;
        }

        .phone-product-price .discount {
            font-size: 16px;
            text-decoration: line-through;
            margin: 0 3px;
        }

        .phone-product-price .percent {
            margin: 0 3px;
            color: #fff;
            font-size: 15px;
            background: #AF009C;
            padding: 0.5px 10px;
            border-radius: 2px 5px 2px 5px;
        }

        .return-card {
            width: 100%;
            padding: 7px 3px;
        }

        .return-card .return {
            background: #f1f1f1;
            padding: 7px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .return-card .not {
            color: #333;
            background: #B5B5B9;
            padding: 5px;
            width: 20px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        .phone-size-quantity-container {
            background: #fff;
            margin: 10px 7px;
            padding: 5px;
            border-radius: 5px;
        }

        .phone-size-card .phone-size {
            display: flex;
        }

        .phone-size-card .phone-size-type {
            padding: 0 5px;
            color: #555;
        }

        .phone-size-card .phone-size .size {
            width: 50px;
            height: 30px;
            border-radius: 5px;
            background: #f1f1f1;
            border: 1px solid #800097;
            color: #444;
            margin: 0 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .phone-quantity-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0px;
            margin: 5px 7px;
            border: 1px solid #eee;
            border-left: 0;
            border-right: 0;
        }

        .phone-quantity-container .quantity-type {
            font-size: 16px;
            color: #555;
        }

        .phone-quantity {
            display: flex;
            align-items: center;
        }

        .phone-quantity div {
            border-radius: 1px;
            border: 1px solid #777;
            width: 30px;
            height: 25px;
            display: flex;
            font-size: 20px;
            justify-content: center;
            align-items: center;
            background: #f1f1f1;
        }

        .phone-quantity div .decriment {
            border: 1px solid #333;
            width: 10px;
            height: 0;
        }

        .phone-quantity .quantity {
            background: #fff;
            border-left: 0;
            border-right: 0;
            font-size: 16px;
            border-radius: 0;
        }

        .phone-button-container {
            width: 100%;
            position: fixed;
            bottom: 0;
        }

        .phone-button-card {
            background-color: #fff;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .phone-button-icons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .phone-button-icons a {
            line-height: 1;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            margin: 0 10px;
            align-items: center;
            justify-content: center;
        }

        .phone-button-icons a span {
            font-size: 14px;
            color: #333;
        }

        .phone-button-icons a i {
            color: #800097;
        }

        .phone-button {
            display: flex;
        }

        .phone-button .btn {
            border-radius: 0;
            padding: 8px 15px;
        }
    }
</style>

<body>
    <div class="main-container">
        <div class="product-container">

            <div class="product-img-container">
                <div class="img-container">
                    <img class="img" src="{{ asset('products/punjabi2.jpg') }}" alt="">
                </div>
                <div class="multi-img-card">
                    <div class="multi-img">
                        <img src="{{ asset('products/punjabi2.jpg') }}" alt="">
                    </div>
                    <div class="multi-img">
                        <img src="{{ asset('products/punjabi3.jpg') }}" alt="">
                    </div>
                    <div class="multi-img">
                        <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                    </div>
                    <div class="multi-img">
                        <img src="{{ asset('products/punjabi5.jpg') }}" alt="">
                    </div>
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
                        <input type="text" value="1" maxlength="3" class="form-control" placeholder="Quantity">
                    </div>
                    <input type="hidden" name="size" class="form-control" id="sizebox" placeholder="Size">
                    <div class="product-button">
                        <a href="" class="btn btn-success">Add To Cart</a>
                        <a href="" class="btn btn-danger">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- phone-size-container --}}

        <div class="phone-size-container">
            <div class="phone-product-image-container">
                <div class="phone-product-images">
                    <div class="phone-product-img">
                        <img src="{{ asset('products/punjabi3.jpg') }}" alt="">
                    </div>
                    <div class="phone-product-all-img">
                        <div class="phone-product-all-img-card">
                            <div class="all-img">
                                <img src="Products/punjabi2.jpg" alt="">
                            </div>
                            <div class="all-img">
                                <img src="Products/punjabi2.jpg" alt="">
                            </div>
                            <div class="all-img">
                                <img src="Products/punjabi2.jpg" alt="">
                            </div>
                            <div class="all-img">
                                <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            </div>
                            <div class="all-img">
                                <img src="Products/punjabi2.jpg" alt="">
                            </div>
                            <div class="all-img">
                                <img src="Products/punjabi2.jpg" alt="">
                            </div>
                        </div>
                        <div class="phone-product-all-color">
                            <span>7 Color available </span>
                            <span class="color">Blue,Red</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="phone-product-info-container">
                <div class="phone-product-name">
                    <span>Amazing Rice Flour Face Packs For All Your Skin Concerns</span>
                </div>
                <div class="phone-product-price">
                    <span class="tk">৳700</span>
                    <span class="discount">৳800</span>
                    <div class="percent">
                        <span>10%</span>
                    </div>
                </div>
                <div class="return-card">
                    <div class="return">
                        <div>
                            <i class="ri-text-wrap"></i>
                            <span>Free Returns</span>
                        </div>
                        <div class="not">
                            <span>!</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="phone-size-quantity-container ">
                <div class="phone-size-card">
                    <div class="phone-size-type">
                        <span>Size</span>
                    </div>
                    <div class="phone-size">
                        <div class="size">M</div>
                        <div class="size">L</div>
                        <div class="size">XL</div>
                        <div class="size">XXL</div>
                    </div>
                </div>
                <div class="phone-quantity-container">
                    <div class="quantity-type">
                        <span>Quantity</span>
                    </div>
                    <div class="phone-quantity">
                        <div>
                            <div class="decriment"></div>
                        </div>
                        <div class="quantity">5</div>
                        <div>+</div>
                    </div>
                </div>
            </div>
            <div class="phone-button-container">
                <div class="phone-button-card">
                    <div class="phone-button-icons">
                        <a href="">
                            <i class="ri-home-3-line"></i>
                            <span>Home</span>
                        </a>
                        <a href="">
                            <i class="ri-message-2-line"></i>
                            <span>Chat</span>
                        </a>
                    </div>
                    <div class="phone-button">
                        <div class="btn btn-success">Buy Now</div>
                        <div class="btn btn-warning">Add to Cart</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let multiImages = document.querySelectorAll('.multi-img');
            let img = document.querySelector('.img');
            let selectedImage = null;

            multiImages.forEach(multiImage => {
                multiImage.addEventListener('click', function() {
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
