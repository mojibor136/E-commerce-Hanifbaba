@include('layouts.header')
@include('layouts.phoneHeader')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Noto Sans Bengali', Arial, sans-serif;
        background: #f1f1f1;
    }

    .main-container {
        padding: 0 50px;
        padding-bottom: 20px;
    }

    .info-product-container {
        width: 100%;
        display: flex;
        justify-content: space-between;
        background: #fff;
    }

    .info-product-container .product-img-container {
        padding: 20px;
        padding-right: 5px;
    }

    .info-product-container .product-img-container .img-container {
        width: 320px;
        height: auto;
        border-radius: 10px;
        overflow: hidden;
    }

    .info-product-container .product-img-container .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .info-product-container .product-img-container .multi-img-card {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .info-product-container .product-img-container .multi-img-card .multi-img {
        width: 65px;
        height: 65px;
        margin: 5px 0;
        margin-right: 10px;
        cursor: pointer;
        border-radius: 5px;
        overflow: hidden;
    }

    .info-product-container .product-img-container .multi-img-card .multi-img:hover {
        opacity: 0.8;
        border: 1px solid #999999;
    }

    .info-product-container .product-img-container .multi-img-card .multi-img img {
        width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .info-product-container .product-info-container {
        width: 100%;
        padding: 20px 10px;
    }

    .info-product-container .product-name {
        line-height: 1.2;
        padding: 5px;
    }

    .info-product-container .product-name .name {
        text-transform: uppercase;
        font-size: 16px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        margin: 0;
    }

    .info-product-container .product-name span {
        font-size: 14px;
        color: #555;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .info-product-container .product-description {
        padding: 5px;
    }

    .info-product-container .product-description .description {
        text-transform: uppercase;
        font-size: 16px;
        margin: 0;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .info-product-container .product-description span {
        font-size: 14px;
        color: #555;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .info-product-container .product-rating {
        padding: 2px 5px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .info-product-container .product-rating i {
        color: #ffc700;
    }

    .info-product-container .product-stock {
        padding: 0 5px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .info-product-container .product-price {
        padding: 5px 5px;
    }

    .info-product-container .product-price span {
        font-weight: bolder;
        font-size: 18px;
        color: #800097;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .info-product-container .product-size {
        display: flex;
        cursor: pointer;
    }

    .info-product-container .product-size .size {
        margin: 5px;
        border: 1px solid #dddddd;
        border-radius: 4px;
        padding: 5px 7px;
        color: #555;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .info-product-container .product-size .size:hover {
        border-color: #800097;
    }

    .info-product-container .product-quantity {
        padding: 5px 5px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .info-product-container .product-quantity .form-control {
        margin: 5px 0;
        width: 100px;
        text-align: center;
    }

    .info-product-container .product-button {
        padding: 5px 5px;
    }

    .phone-size-container {
        display: none;
    }

    /* product-rating-review-container  */
    .product-rating-review-container {
        width: 100%;
        margin-top: 15px;
    }

    .product-rating-review-card {
        padding: 20px 10px;
        background: #fff;
    }

    .rating-card {
        display: flex;
        border-bottom: 1px solid #ccc;
    }

    .rating-info {
        border-right: 1px solid #ccc;
        padding: 10px;
        padding-right: 40px;
    }

    .rating-info .ratting-count-card {
        padding: 1px 10px;
        text-transform: capitalize;
        background-color: #ffc700;
        color: #eee;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 5px;
        cursor: pointer;
        border-radius: 2px;
    }

    .rating-type {
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .total-count {
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .rating-info-icons i {
        color: #ffc700;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .rating-icons {
        padding: 0 40px;
        padding-bottom: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        line-height: 1.2;
    }

    .rating-icons .rating-icons-status {
        display: flex;
        align-items: center;
    }

    .rating-icons .rating-icons-status i {
        color: #ffc700;
    }

    .rating-icons .rating-icons-status .rating-status {
        height: 7px;
        width: 100px;
        background: #ccc;
        margin: 0 10px;
        border-radius: 10px;
    }

    .rating-icons .rating-icons-status span {
        font-size: 14px;
        color: #000;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    /* Review-container */
    .review-container {
        padding: 10px;
        background: #fff;
        border-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .review-card {
        border-top: 1px solid #ccc;
        padding: 10px 0;
    }

    .review-star-content {
        padding-bottom: 5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .review-star-content .review-star {
        color: #ffc700;
    }

    .review-star-content .review-date {
        font-size: 14px;
        color: #666;
    }

    .review-content-text {
        font-size: 14px;
        padding-bottom: 5px;
        line-height: 1.5;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .review-content-gallery {
        width: 100px;
        height: 100px;
        border-radius: 10px;
        overflow: hidden;
    }

    .review-content-gallery img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Product-description-container */
    .product-description-container {
        padding: 10px 0;
        margin-bottom: 10px;
    }

    .product-description-card {
        background: #FFF;
        border-radius: 5px;
    }

    .product-description-titel {
        padding: 8px;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 14px;
        color: #555;
        border-bottom: 1px solid #ccc;
        text-align: left;
    }

    .product-description-content {
        padding: 15px 0;
    }

    .product-description {
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        padding: 0 10px;
    }

    /* ask-main-container */
    .ask-main-container {
        width: 100%;
        margin-bottom: 5px;
    }

    .ask-main-container .ask-card {
        background: #fff;
        border-radius: 5px;
        padding: 10px;
    }

    .ask-main-container .ask-card .type {
        color: #333;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .ask-main-container .add-ask {
        display: flex;
        align-items: center;
        padding: 10px;
    }

    .ask-main-container .add-ask .form-control {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .ask-main-container .add-ask .btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .ask-title {
        border-bottom: 1px solid #eee;
        padding: 5px 10px;
        margin-bottom: 10px;
        color: #333;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .ask-content-ul {
        padding-bottom: 10px;
        display: flex;
    }

    .ask-content {
        margin-left: 10px;
        margin-bottom: 15px;
        border-bottom: 1px solid #ddd;
    }

    .ask-q-icon {
        padding: 0;
    }

    .ask-q-icon .icon {
        background: #FFC107;
        color: #fff;
        width: 25px;
        height: 25px;
        font-size: 14px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .ask-q-icon #qsk {
        background: #4CAF50;
    }

    .ask-content-ul .ask-text {
        text-transform: capitalize;
        line-height: 1.5;
        margin-left: 15px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .ask-content-ul .ask-text span {
        font-size: 14px;
        color: #333;
    }

    .ask-content-ul .ask-text p {
        color: #777;
        font-size: 12px;
        margin: 0;
    }


    @media screen and (max-width: 1024px) {}

    @media screen and (max-width: 768px) {}

    @media screen and (max-width: 640px) {
        .main-container {
            padding: 0;
            margin-bottom: 40px;
        }

        .info-product-container {
            display: none;
        }

        .phone-size-container {
            display: block;
            margin-bottom: 10px;
        }

        .phone-product-image-container {
            background: #fff;
        }

        .phone-product-image {
            width: 100%;
        }

        .phone-product-img {
            width: 100%;
            height: auto;
            background: #fff;
        }

        .phone-product-img img {
            width: 100%;
            height: 100%;
            /* object-fit: cover; */
        }

        .phone-product-media-gallery-box-card {
            display: flex;
            align-items: center;
            justify-content: space-around;
            overflow-x: auto;
            white-space: nowrap;
            padding: 3px 5px;
        }

        .phone-product-media-gallery-box-card::-webkit-scrollbar {
            display: none;
        }

        .media-gallery-box {
            width: 55px;
            height: 57px;
            margin: 0 2px;
            overflow: hidden;
            border-radius: 2px;
            flex-shrink: 0;
            cursor: pointer;
        }

        .media-gallery-box img {
            height: 100%;
            width: 100%;
        }

        .phone-product-all-color {
            padding: 5px 8px;
            font-size: 14px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-family: "Roboto", sans-serif;
            font-style: normal;
        }

        .phone-product-all-color .color {
            color: #333;
            font-weight: 400;
        }

        .phone-product-info-container {
            background: #fff;
            border-radius: 5px;
            margin: 10px 5px 10px 7px;
            padding: 5px;
        }

        .phone-product-name {
            padding: 0 5px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
        }

        .phone-product-price {
            margin-top: 3px;
            padding-bottom: 4px;
            line-height: 1;
            display: flex;
            align-items: center;
            padding: 0 3px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
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
            font-family: "Roboto", sans-serif;
            font-style: normal;
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
            font-family: "Roboto", sans-serif;
            font-style: normal;
        }

        .phone-size-card .phone-size .size {
            width: 50px;
            height: 30px;
            border-radius: 5px;
            background: #f1f1f1;
            color: #444;
            margin: 0 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-family: "Roboto", sans-serif;
            font-style: normal;
        }

        .phone-size-card .phone-size .size:hover {
            background: #800097;
            color: #fff;
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
            font-family: "Roboto", sans-serif;
            font-style: normal;
        }

        .phone-quantity {
            display: flex;
            align-items: center;
        }

        .phone-quantity div {
            border: 1px solid #999;
            width: 35px;
            height: 30px;
            display: flex;
            font-size: 20px;
            justify-content: center;
            align-items: center;
            background: #f1f1f1;
            cursor: pointer;
        }

        .phone-quantity div .decrement-card {
            border: 1px solid #333;
            width: 10px;
            height: 0;
            cursor: pointer;
        }

        .phone-quantity .phone-quantity-text {
            background: #fff;
            width: 30px;
            text-align: center;
            height: 30px;
            border: 1px solid #999;
            border-left: 0;
            border-right: 0;
            font-size: 16px;
            border-radius: 0;
            cursor: pointer;
            outline: none;
            font-family: "Roboto", sans-serif;
            font-style: normal;
        }

        .phone-button-container {
            width: 100%;
            position: fixed;
            bottom: 0;
            z-index: 9999;
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
            font-family: "Roboto", sans-serif;
            font-style: normal;
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

        .product-rating-review-container {
            padding: 10px 5px 10px 7px;
        }

        .product-rating-review-card {
            border-radius: 5px;
            overflow: hidden;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .rating-info {
            width: 100%;
            border: none;
            margin-bottom: 20px;
        }

        .rating-icons {
            display: none;
        }

        .product-description-container {
            padding: 10px 5px 10px 7px;
        }

        .ask-main-container {
            padding: 0 7px 0 5px;
        }

        .ask-main-container .ask-card {
            border-radius: 5px;
            padding: 10px 5px;
        }

        .ask-main-container .ask-card .type {
            font-size: 14px;
        }

        .ask-main-container .add-ask {
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 10px;
        }

        .ask-main-container .add-ask .form-control {
            border-radius: 0.375rem;
        }

        .ask-main-container .add-ask .btn {
            border-radius: 0.375rem;
            width: 100%;
            margin-top: 5px;
        }

        .ask-title {
            font-size: 14px;
        }
    }

    @media screen and (max-width: 475px) {
        .phone-product-img img {
            height: auto;
        }

    }

    @media screen and (max-width: 375px) {}
</style>

<body>
    <div class="main-container">
        <div class="info-product-container">

            <div class="product-img-container">
                <div class="img-container">
                    <img class="img" src="{{ asset('products/product1.png') }}" alt="">
                </div>
                <div class="multi-img-card">
                    <div class="multi-img">
                        <img src="{{ asset('products/product.png') }}" alt="">
                    </div>
                    <div class="multi-img">
                        <img src="{{ asset('products/product1.png') }}" alt="">
                    </div>
                    <div class="multi-img">
                        <img src="{{ asset('products/product3.png') }}" alt="">
                    </div>
                    <div class="multi-img">
                        <img src="{{ asset('products/product4.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="product-info-container">
                <form action="{{ route('data') }}" method="post">
                    @csrf
                    <input type="hidden" name="size" class="form-control" id="sizebox" placeholder="Size">
                    <div class="product-info-card">
                        <div class="product-name">
                            <h3 class="name">products name</h3>
                            <span>Trendy Panjabi with Chest Contrast Luxurious
                            </span>
                        </div>
                        <div class="product-description">
                            <h3 class="description">products description</h3>
                            <span>
                                Trendy Panjabi with Chest Contrast Luxurious
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
                            <span>৳85000</span>
                        </div>
                        <div class="product-size">
                            <div class="size">40</div>
                            <div class="size">41</div>
                            <div class="size">42</div>
                            <div class="size">43</div>
                        </div>
                        <div class="product-quantity">
                            <span class="quantity">Quantity</span>
                            <input type="text" value="1" name="quantity" class="form-control"
                                placeholder="Quantity">
                        </div>
                        <div class="product-button">
                            <input type="submit" class="btn btn-success" value="AddtoCart">
                            <input type="submit"class="btn btn-danger" value="Buy Now">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- phone-size-container --}}

        <div class="phone-size-container">
            <form action="{{ route('data') }}" method="post">
                @csrf
                <input type="hidden" name="size" class="form-control" id="phonesizebox" placeholder="Size">
                <div class="phone-product-image-container">
                    <div class="phone-product-images">
                        <div class="phone-product-img">
                            <img src="{{ asset('products/product.png') }}" alt="">
                        </div>
                        <div class="phone-product-media-gallery-box">
                            <div class="phone-product-media-gallery-box-card">
                                <div class="media-gallery-box">
                                    <img src="products/product1.png" alt="">
                                </div>
                                <div class="media-gallery-box">
                                    <img src="products/product2.png" alt="">
                                </div>
                                <div class="media-gallery-box">
                                    <img src="products/product3.png" alt="">
                                </div>
                                <div class="media-gallery-box">
                                    <img src="{{ asset('products/product3.png') }}" alt="">
                                </div>
                                <div class="media-gallery-box">
                                    <img src="products/product3.png" alt="">
                                </div>
                                <div class="media-gallery-box">
                                    <img src="products/product2.png" alt="">
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
                            <div class="decrement">
                                <div class="decrement-card"></div>
                            </div>
                            <input type="text" name="quantity" value="1" class="phone-quantity-text">
                            <div class="increment">+</div>
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
                            <input type="submit" class="btn btn-success" value="Buy Now">
                            <input type="submit"class="btn btn-warning" value="AddtoCart">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="product-rating-review-container">
            <div class="product-rating-review-card">
                <div class="rating-type">
                    <span>Rating & Review</span>
                </div>
                <div class="rating-card">
                    <div class="rating-info">
                        <div class="d-flex align-items-center">
                            <h2 class="m-0">4.4</h2>
                            <div class="ratting-count-card">
                                <i class="ri-star-fill"></i>
                                <span>very good</span>
                            </div>
                        </div>
                        <div class="rating-info-icons">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-line"></i>
                        </div>
                        <div class="total-count">
                            <span>500 Rating</span>
                        </div>
                    </div>
                    <div class="rating-icons">
                        <div class="rating-icons-status">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-line"></i>
                            <div class="rating-status"></div>
                            <span>30</span>
                        </div>
                        <div class="rating-icons-status">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <div class="rating-status"></div>
                            <span>20</span>
                        </div>
                        <div class="rating-icons-status">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <div class="rating-status"></div>
                            <span>15</span>
                        </div>
                        <div class="rating-icons-status">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <div class="rating-status"></div>
                            <span>10</span>
                        </div>
                        <div class="rating-icons-status">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <i class="ri-star-half-line"></i>
                            <div class="rating-status"></div>
                            <span>5</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="review-container">
                <div class="review-main-content">
                    <div class="review-card">
                        <div class="review-star-content">
                            <div class="review-star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-line"></i>
                            </div>
                            <div class="review-date">
                                <span>1day ago</span>
                            </div>
                        </div>
                        <div class="review-content-text">
                            <span>
                                Good product Onek balo products ta ata ami 1 week hobe nici but kono somossa porte hoy
                                nai
                            </span>
                        </div>
                        <div class="review-content-gallery">
                            <img src="{{ asset('products/0ae3c35caadb160b700267db4dca01d2.jpg_500x500.jpg_.webp') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-star-content">
                            <div class="review-star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-line"></i>
                            </div>
                            <div class="review-date">
                                <span>1day ago</span>
                            </div>
                        </div>
                        <div class="review-content-text">
                            <span>
                                আলহামদুলিল্লাহ। যেমন প্রোডাক্ট দেখেছি তেমনটাই পেয়েছি
                                আলহামদুলিল্লাহ। সেলার এবং ডেলিভারি ম্যান ভালো তবে এবার ডেলিভারি দিতে আজ কাল করে প্রায়
                                ৪/৫
                                দিন পরে দিয়েছে হয়তো কোনো সমস্যা ছিলো। কিছু কিছু রিভিউ দেখে টেনশনে ছিলাম কি জানি কেমন
                                প্রোডাক্ট দেয়। যাইহোক প্রোডাক্ট হাতে পেয়েছি আলহামদুলিল্লাহ। অনেক অনেক শুকরিয়া
                                জাজাকাল্লাহু
                                খাইরান।
                            </span>
                        </div>
                        <div class="review-content-gallery">
                            <img src="{{ asset('products/punjabi3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-star-content">
                            <div class="review-star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-line"></i>
                            </div>
                            <div class="review-date">
                                <span>1day ago</span>
                            </div>
                        </div>
                        <div class="review-content-text">
                            <span>
                                আলহামদুলিল্লাহ। যেমন প্রোডাক্ট দেখেছি তেমনটাই পেয়েছি
                                আলহামদুলিল্লাহ। সেলার এবং ডেলিভারি ম্যান ভালো তবে এবার ডেলিভারি দিতে আজ কাল করে প্রায়
                                ৪/৫
                                দিন পরে দিয়েছে হয়তো কোনো সমস্যা ছিলো। কিছু কিছু রিভিউ দেখে টেনশনে ছিলাম কি জানি কেমন
                                প্রোডাক্ট দেয়। যাইহোক প্রোডাক্ট হাতে পেয়েছি আলহামদুলিল্লাহ। অনেক অনেক শুকরিয়া
                                জাজাকাল্লাহু
                                খাইরান।
                            </span>
                        </div>
                        <div class="review-content-gallery">
                            <img src="{{ asset('products/punjabi3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-description-container">
            <div class="product-description-card">
                <div class="product-description-titel">
                    <span>
                        Product Description of
                        Trendy Panjabi with Chest Contrast Luxurious
                        Cotton Modern Design for Men Stylish
                        and Sophisticated
                    </span>
                </div>
                <div class="product-description-content">
                    <div class="product-description">
                        <ul>
                            <li>Features:
                                <ul>
                                    <li>Material: Polypropylene</li>
                                    <li>When it is inconvenient to urinate when going out and traveling, it is
                                        lightweight,
                                        convenient, and hygienic</li>
                                    <li>Recreational activities such as swimming pools and camping</li>
                                    <li>Ergonomic design for boys and girls</li>
                                    <li>Accordion shape, can be stretched by hand to a maximum capacity of 750ml</li>
                                    <li>Reusable and economical</li>
                                </ul>
                            </li>
                            <li>Precautions:
                                <ul>
                                    <li>Keep away from fire</li>
                                    <li>Please use it under parental supervision</li>
                                    <li>Wash your hands after use</li>
                                </ul>
                            </li>
                            <li>Suitable for:
                                <ul>
                                    <li>When you are in a hurry to urinate when you are out and about</li>
                                    <li>When the road is congested or the toilet is difficult to use</li>
                                    <li>Simple and convenient to use during leisure activities such as camping</li>
                                    <li>When caring for patients with reduced mobility</li>
                                </ul>
                            </li>
                        </ul>
                        <p>Tip: This product is effectively sealed, movable opening, not fixed, do not invert, shake and
                            squeeze for a long time when testing leak-proof, This will be affected by air pressure and
                            gravity to produce leakage, the opening is designed according to the ergonomic toilet mouth.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="ask-main-container">
            <div class="ask-card">
                <div class="type">
                    <span>Questions About This Product (59)</span>
                </div>
                <div class="add-ask">
                    <input type="text" id="questionInput" class="form-control"
                        placeholder="Ask seller a question">
                    <input type="submit" class="btn btn-success">
                </div>
                <div class="ask-title">
                    <span>Other questions answered by hanifbaba(59)</span>
                </div>
                <div class="ask-content">
                    <div class="ask-content-ul">
                        <div class="ask-q-icon">
                            <div class="icon"><span>Q</span></div>
                        </div>
                        <div class="ask-text">
                            <span>buy one get one available??</span>
                            <p>hanifbaba answered within 10 hours</p>
                        </div>
                    </div>
                    <div class="ask-content-ul">
                        <div class="ask-q-icon">
                            <div class="icon" id="qsk"><span>A</span></div>
                        </div>
                        <div class="ask-text">
                            <span>buy one get one available??</span>
                            <p>hanifbaba answered within 10 hours</p>
                        </div>
                    </div>
                </div>
                <div class="ask-content">
                    <div class="ask-content-ul">
                        <div class="ask-q-icon">
                            <div class="icon"><span>Q</span></div>
                        </div>
                        <div class="ask-text">
                            <span>buy one get one available??</span>
                            <p>hanifbaba answered within 10 hours</p>
                        </div>
                    </div>
                    <div class="ask-content-ul">
                        <div class="ask-q-icon">
                            <div class="icon" id="qsk"><span>A</span></div>
                        </div>
                        <div class="ask-text">
                            <span>buy one get one available??</span>
                            <p>hanifbaba answered within 10 hours</p>
                        </div>
                    </div>
                </div>
                <div class="ask-content">
                    <div class="ask-content-ul">
                        <div class="ask-q-icon">
                            <div class="icon"><span>Q</span></div>
                        </div>
                        <div class="ask-text">
                            <span>buy one get one available??</span>
                            <p>hanifbaba answered within 10 hours</p>
                        </div>
                    </div>
                    <div class="ask-content-ul">
                        <div class="ask-q-icon">
                            <div class="icon" id="qsk"><span>A</span></div>
                        </div>
                        <div class="ask-text">
                            <span>buy one get one available??</span>
                            <p>hanifbaba answered within 10 hours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- top products container --}}
        <div class="main-product-container">
            <div class="type">
                <span>reletad products</span>
                <a href="">shop more</a>
            </div>
            <div class="product-container">
                <div class="product-card">
                    <div class="image">
                        <img src="{{ asset('products/product3.png') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="free-card">
                        <div class="free">
                            <i class="ri-star-fill"></i>
                            <span>free delivery</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳250</span>
                            <span class="discount">৳300</span>
                        </div>
                        <div class="percent">
                            <span>7%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="{{ asset('products/chaler-ata.jpeg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="free-card">
                        <div class="free">
                            <i class="ri-star-fill"></i>
                            <span>free delivery</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳250</span>
                            <span class="discount">৳300</span>
                        </div>
                        <div class="percent">
                            <span>7%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="{{ asset('products/punjabi5.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="free-card">
                        <div class="free">
                            <i class="ri-star-fill"></i>
                            <span>free delivery</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳250</span>
                            <span class="discount">৳300</span>
                        </div>
                        <div class="percent">
                            <span>7%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="{{ asset('products/product2.png') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="free-card">
                        <div class="free">
                            <i class="ri-star-fill"></i>
                            <span>free delivery</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳250</span>
                            <span class="discount">৳300</span>
                        </div>
                        <div class="percent">
                            <span>7%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="{{ asset('products/product.png') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="free-card">
                        <div class="free">
                            <i class="ri-star-fill"></i>
                            <span>free delivery</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳250</span>
                            <span class="discount">৳300</span>
                        </div>
                        <div class="percent">
                            <span>7%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="{{ asset('products/product1.png') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="free-card">
                        <div class="free">
                            <i class="ri-star-fill"></i>
                            <span>free delivery</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳250</span>
                            <span class="discount">৳300</span>
                        </div>
                        <div class="percent">
                            <span>7%</span>
                        </div>
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
            let selectedSize = null;

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

            let size = document.querySelectorAll('.size');
            let phoneproductsize = document.querySelectorAll('.phone-size .size');
            let sizebox = document.querySelector('#sizebox');
            let phonesizebox = document.querySelector('#phonesizebox');
            size.forEach(Size => {
                Size.addEventListener('click', function() {
                    size.forEach(size => {
                        size.style.borderColor = '';
                    });
                    this.style.background = '#800097';
                    this.style.color = '#fff';

                    selectedSize = this.textContent;
                    sizebox.value = selectedSize;
                });
            });
            let selectedSizeElement = null;

            phoneproductsize.forEach(productsize => {
                productsize.addEventListener('click', function() {
                    if (selectedSizeElement) {
                        selectedSizeElement.style.background = '';
                        selectedSizeElement.style.color = '';
                    }
                    this.style.background = '#800097';
                    this.style.color = '#fff';

                    selectedSize = this.textContent;
                    phonesizebox.value = selectedSize;

                    selectedSizeElement = this;
                });
            });
            let decrement = document.querySelector('.decrement');
            let increment = document.querySelector('.increment');
            let quantity = document.querySelector('.phone-quantity-text');
            let quantityText = document.querySelector('.product-quantity input');
            let text = 1;

            decrement.addEventListener('click', () => {
                text--;
                if (text < 1) {
                    text = 1;
                }
                updateQuantity();
            });

            increment.addEventListener('click', () => {
                text++;
                updateQuantity();
            });

            function updateQuantity() {
                quantity.value = text;
                quantityText.value = text;
                if (selectedSize) {
                    sizebox.value = selectedSize;
                }
            }
            var questionInput = document.getElementById('questionInput');

            questionInput.addEventListener('focus', function() {
                this.style.borderColor = 'transparent';
                this.style.outline = 'none';
            });

            questionInput.addEventListener('blur', function() {
                this.style.borderColor = '';
            });
        });
    </script>
</body>

</html>
@include('layouts.footer')
