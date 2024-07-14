@include('layouts.header')
@include('admin.logo.logo')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Product View</title>
</head>
<style>
    body {
        font-family: 'Noto Sans Bengali', Arial, sans-serif;
        background: #f1f1f1;
    }

    .main-container {
        padding: 50px;
        padding-bottom: 20px;
    }

    .info-product-container {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: #fff;
        padding: 30px;
    }

    .info-product-container .product-img-container {
        padding: 20px;
        padding-right: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
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
        width: 80%;
        margin-top: 10px;
    }

    .info-product-container .product-img-container .multi-img-card .multi-img {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 10px;
        cursor: pointer;
        border-radius: 5px;
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
        line-height: 1.3;
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
        font-size: 16px;
        color: #555;
        font-family: "Lato", sans-serif;
        font-weight: 500;
        font-style: normal;
        text-transform: capitalize;
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
        font-family: "Lato", sans-serif;
        font-weight: 600;
    }

    .info-product-container .product-quantity {
        padding: 5px 5px;
        font-family: "Lato", sans-serif;
        font-style: normal;
    }

    .info-product-container .product-quantity .form-control {
        margin: 5px 0;
        width: 100px;
        text-align: center;
    }

    .info-product-container .product-button {
        padding: 5px 5px;
        display: flex;
    }

    .info-product-container .product-button form:nth-child(2) {
        padding-left: 5px;
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

    .ri-star-half-line {
        color: #bbb;
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

    .review-star .ri-star-fill {
        color: #f7c600;
    }

    .review-star .ri-star-half-line {
        color: #f7c600;
    }

    .review-star .ri-star-line {
        color: #bbb;
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
        text-transform: capitalize;
    }

    .product-description-content {
        padding: 15px 0;
    }

    .product-description {
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        padding: 0 10px;
        text-transform: capitalize;
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
            padding: 10px 0;
            padding-top: 0;
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

        .phone-product-img {
            background: #fff;
            display: flex;
            justify-content: center;
        }

        .phone-product-img img {
            width: 100%;
            height: 235px;
        }

        .phone-product-media-gallery-box-card {
            overflow-x: auto;
            padding: 10px 5px;
        }

        .phone-product-media-gallery-box-card::-webkit-scrollbar {
            display: none;
        }

        .media-gallery-box {
            border-radius: 2px;
            flex-shrink: 0;
            cursor: pointer;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 10px;
        }

        .media-gallery-box img {
            height: 100%;
            width: 100%;
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
            text-transform: capitalize;
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
            border: 1px solid #f5f5f5;
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
            border: 1px solid #fff;
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

        .phone-button {
            width: 100%;
            display: flex;
        }

        .phone-button form {
            width: 100%;
        }

        .phone-button .btn {
            border-radius: 0;
            padding: 8px 15px;
            width: 100%;
            display: flex;
            align-items: center;
            vertical-align: -webkit-baseline-middle;
            justify-content: center;
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

    @media screen and (max-width: 475px) {}

    @media screen and (max-width: 375px) {}
</style>

<body>
    <div class="main-container">
        <div class="info-product-container">

            <div class="product-img-container">
                <div class="img-container">
                    <img class="img" src="{{ asset('ProductImg/' . $product->product_img) }}" alt="">
                </div>
                {{-- <div class="multi-img-card">
                    <div class="multi-img">
                        <img class="clickImg" src="{{ asset('ProductImg/1715739700-66441c349e57b.jpg') }}"
                            alt="">
                        <img class="clickImg" src="{{ asset('ProductImg/1715739700-66441c349e57b.jpg') }}"
                            alt="">
                        <img class="clickImg" src="{{ asset('ProductImg/1715739700-66441c349e57b.jpg') }}"
                            alt="">
                        <img class="clickImg" src="{{ asset('ProductImg/1715739700-66441c349f09a.png') }}"
                            alt="">
                    </div>
                </div> --}}
            </div>
            <div class="product-info-container">
                <div class="product-info-card">
                    <div class="error">
                        @if (session()->has('error'))
                            <li class="text-danger">{{ session()->get('error') }}</li>
                        @endif
                        @if (session()->has('success'))
                            <li class="text-success">{{ session()->get('success') }}</li>
                        @endif
                    </div>
                    <div class="product-name">
                        <h3 class="name">{{ $product->product_name }}</h3>
                        <span>{{ $product->product_desc }}</span>
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
                        <span>Stock {{ $product->product_quantity }}</span>
                    </div>
                    <div class="product-price">
                        <span>BDT {{ $product->product_price }}</span>
                    </div>
                    <div class="product-quantity">
                        <span class="quantity">Quantity</span>
                        @if ($product->product_quantity > 0)
                            <input type="text" value="1" class="form-control" placeholder="Quantity"
                                id="quantityText">
                        @else
                            <input type="text" value="0" class="form-control" placeholder="Quantity"
                                id="quantityText">
                        @endif
                    </div>
                    @if ($product->product_quantity > 0)
                        <div class="product-button">
                        @else
                            <div class="product-button" style="padding: 5px 0">
                    @endif
                    <form action="{{ route('storebuynow') }}" method="post">
                        @csrf
                        @if ($product->product_quantity > 0)
                            <input type="hidden" name="buynow[productId]" value="{{ $product->id }}">
                            <input type="hidden" name="buynow[productImg]" value="{{ $product->product_img }}">
                            <input type="hidden" name="buynow[productName]" value="{{ $product->product_name }}">
                            <input type="hidden" name="buynow[productPrice]" value="{{ $product->product_price }}">
                            <input type="hidden" value="1" id="quantityHidden1" name="buynow[productQuantity]"
                                class="form-control">
                            <input type="submit" class="btn btn-success" value="Buy Now">
                        @else
                        @endif
                    </form>
                    <form action="{{ route('storecart') }}" method="post">
                        @csrf
                        @if ($product->product_quantity > 0)
                            <input type="hidden" value="1" id="quantityHidden2" name="productQuantity"
                                class="form-control">
                            <input type="hidden" name="productImg" value="{{ $product->product_img }}">
                            <input type="hidden" name="productName" value="{{ $product->product_name }}">
                            <input type="hidden" name="productPrice" value="{{ $product->product_price }}">
                            <input type="hidden" name="productId" value="{{ $product->id }}">
                            <input type="submit" class="btn btn-danger" value="Add to Cart">
                        @else
                            <button class="btn btn-danger" disabled>Out of Stock</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- phone-size-container --}}
    <div class="phone-size-container">
        <input type="hidden" name="size" class="form-control" id="phonesizebox" placeholder="Size">
        <div class="phone-product-image-container">
            <div class="phone-product-images">
                <div class="phone-product-img">
                    <img class="img" src="{{ asset('ProductImg/' . $product->product_img) }}" alt="">
                </div>
                <div class="phone-product-media-gallery-box">
                    <div class="phone-product-media-gallery-box-card">
                        {{-- <div class="media-gallery-box">
                                <img class="clickImg" src="{{ asset('ProductImg/1715739700-66441c349e57b.jpg') }}"
                                    alt="">
                                <img class="clickImg" src="{{ asset('ProductImg/1715739700-66441c349e57b.jpg') }}"
                                    alt="">
                                <img class="clickImg" src="{{ asset('ProductImg/1715739700-66441c349e57b.jpg') }}"
                                    alt="">
                                <img class="clickImg" src="{{ asset('ProductImg/1715739700-66441c349f09a.png') }}"
                                    alt="">
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="phone-product-info-container">
            <div class="phone-product-name">
                <span>{{ $product->product_name }}</span>
            </div>
            <div class="phone-product-price">
                <span class="tk">DKK {{ $product->product_price }}</span>
                <span class="discount">DKK 800</span>
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
                    <div class="size">50</div>
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
                @if ($product->product_quantity > 0)
                    <div class="phone-button">
                    @else
                        <div class="phone-button" style="display: block;">
                @endif
                <form action="{{ route('storebuynow') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($product->product_quantity > 0)
                        <input type="hidden" name="buynow[productId]" value="{{ $product->id }}">
                        <input type="hidden" name="buynow[productImg]" value="{{ $product->product_img }}">
                        <input type="hidden" name="buynow[productName]" value="{{ $product->product_name }}">
                        <input type="hidden" name="buynow[productPrice]" value="{{ $product->product_price }}">
                        <input type="hidden" id="quantityHidden3" name="buynow[productQuantity]"
                            class="form-control" value="1">
                        <input type="hidden" name="buynow[productSize]" id="sizebox1">
                        <input type="submit" class="btn btn-success" value="Buy Now">
                    @else
                    @endif
                </form>

                <form action="{{ route('storecart') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($product->product_quantity > 0)
                        <input type="hidden" id="quantityHidden4" name="productQuantity" class="form-control"
                            value="1">
                        <input type="hidden" name="productImg" value="{{ $product->product_img }}">
                        <input type="hidden" name="productName" value="{{ $product->product_name }}">
                        <input type="hidden" name="productPrice" value="{{ $product->product_price }}">
                        <input type="hidden" name="productId" value="{{ $product->id }}">
                        <input type="submit" class="btn btn-danger" value="Add to Cart">
                    @else
                        <button class="btn btn-danger" disabled>Out of Stock</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="product-rating-review-container">
        <div class="product-rating-review-card">
            <div class="rating-type">
                <span>Rating & Review</span>
            </div>
            <div class="rating-card">
                @php
                    $totalRatings = count($reviews ?? []);
                    $totalStars = 0;

                    if ($totalRatings > 0) {
                        foreach ($reviews as $review) {
                            $totalStars += $review->rating;
                        }
                        $averageRating = $totalStars / $totalRatings;
                    } else {
                        $averageRating = 0;
                    }
                @endphp
                <div class="rating-info">
                    <div class="d-flex align-items-center">
                        <h2 class="m-0">{{ number_format($averageRating, 1) }}</h2>
                        <div class="ratting-count-card">
                            @if ($averageRating >= 4.5)
                                <i class="ri-star-fill" style="color: #F7CC33;"></i>
                                <span>Excellent</span>
                            @elseif ($averageRating >= 4)
                                <i class="ri-star-fill" style="color: #F7CC33;"></i>
                                <span>Very Good</span>
                            @elseif ($averageRating >= 3)
                                <i class="ri-star-fill" style="color: #F7CC33;"></i>
                                <span>Good</span>
                            @elseif ($averageRating >= 2)
                                <i class="ri-star-fill" style="color: #F7CC33;"></i>
                                <span>Fair</span>
                            @else
                                <i class="ri-star-fill" style="color: #F7CC33;"></i>
                                <span>Poor</span>
                            @endif
                        </div>
                    </div>
                    <div class="rating-info-icons">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($averageRating >= $i)
                                <i class="ri-star-fill" style="color: #F7CC33;"></i>
                            @else
                                <i class="ri-star-half-line"></i>
                            @endif
                        @endfor
                    </div>
                    <div class="total-count">
                        <span>{{ $totalRatings }} Rating</span>
                    </div>
                </div>
                <div class="rating-icons">
                    @php
                        $ratingCounts = [];
                        if ($reviews) {
                            $ratingCounts = array_count_values($reviews->pluck('rating')->toArray());
                        }
                    @endphp
                    @for ($i = 5; $i >= 1; $i--)
                        <div class="rating-icons-status">
                            @for ($j = 1; $j <= 5; $j++)
                                @if ($j <= $i)
                                    <i class="ri-star-fill" style="color: #F7CC33;"></i>
                                @else
                                    <i class="ri-star-half-line"></i>
                                @endif
                            @endfor
                            <div class="rating-status"></div>
                            <span>{{ $ratingCounts[$i] ?? 0 }}</span>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="review-container">
            <div class="review-main-content">
                @if ($reviews && count($reviews) > 0)
                    @foreach ($reviews as $review)
                        <div class="review-card">
                            <div class="review-star-content">
                                <div class="review-star">
                                    @php
                                        $rating = $review->rating;
                                        $fullStars = floor($rating);
                                        $hasHalfStar = $rating - $fullStars >= 0.5;
                                    @endphp
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $fullStars)
                                            <i class="ri-star-fill filled"></i>
                                        @elseif ($hasHalfStar && $i == ceil($rating))
                                            <i class="ri-star-half-line"></i>
                                        @else
                                            <i class="ri-star-line"></i>
                                        @endif
                                    @endfor
                                </div>
                                <div class="review-date">
                                    <span>{{ $review->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="review-content-text">
                                <span>{{ $review->title }}</span>
                            </div>
                            <div class="review-content-gallery">
                                <img class="img" src="{{ asset('ReviewImg/' . $review->image) }}" alt="">
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No reviews found.</p>
                @endif
            </div>
        </div>
    </div>
    <div class="product-description-container">
        <div class="product-description-card">
            <div class="product-description-titel">
                <span>{{ $product->product_name }}</span>
            </div>
            <div class="product-description-content">
                <div class="product-description">
                    <ul>{{ $product->product_desc }}</ul>
                </div>

            </div>
        </div>
    </div>
    <div class="ask-main-container">
        <div class="ask-card">
            <div class="type">
                <span>Questions About This Product</span>
            </div>
            <form action="{{ route('question') }}" method="post">
                @csrf
                <div class="add-ask">
                    <input type="hidden" name="productId" value="{{ $product->id }}">
                    <input type="text" id="questionInput" class="form-control"
                        placeholder="Ask seller a question" name="question">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
            <div class="ask-title">
                <span>Other questions answered by beautybysamanta</span>
            </div>
            @foreach ($questions as $question)
                <div class="ask-content">
                    <div class="ask-content-ul">
                        <div class="ask-q-icon">
                            <div class="icon"><span>Q</span></div>
                        </div>
                        <div class="ask-text">
                            <span>{{ $question->question }}</span>
                            <p>beautybysamanta question within
                                {{ \Carbon\Carbon::parse($question->created_at)->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="ask-content-ul">
                        <div class="ask-q-icon">
                            <div class="icon" id="qsk"><span>A</span></div>
                        </div>
                        <div class="ask-text">
                            <span>{{ $question->answered }}</span>
                            <p>beautybysamanta answered within
                                {{ \Carbon\Carbon::parse($question->created_at)->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        let quantityText = document.querySelector('#quantityText');
        let quantityHidden1 = document.querySelector('#quantityHidden1');
        let quantityHidden2 = document.querySelector('#quantityHidden2');


        function updateHiddenValue() {
            quantityHidden1.value = quantityText.value;
            quantityHidden2.value = quantityText.value;
        }
        quantityText.addEventListener('input', updateHiddenValue);
        window.addEventListener('load', updateHiddenValue);
        document.addEventListener("DOMContentLoaded", function() {
            let multiImages = document.querySelectorAll('.clickImg');
            let img = document.querySelector('.img');
            let Mimg = document.querySelector('.m-img');
            let selectedImage = null;

            multiImages.forEach(multiImage => {
                multiImage.addEventListener('click', function() {
                    let src = this.getAttribute('src');
                    img.setAttribute('src', src);
                    Mimg.setAttribute('src', src);

                    if (selectedImage) {
                        selectedImage.style.border = 'none';
                        selectedImage.style.borderRadius = '0';
                        selectedImage.style.opacity = '1';
                    }

                    this.style.border = '1px solid #999999';
                    this.style.borderRadius = '5px';
                    this.style.overflow = 'hidden';
                    this.style.opacity = '0.8';
                    selectedImage = this;
                });
            });

            let phoneproductsize = document.querySelectorAll('.phone-size .size');
            let phonesizebox = document.querySelector('#phonesizebox');

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
    <script>
        let decrement = document.querySelector('.decrement');
        let increment = document.querySelector('.increment');
        let quantity = document.querySelector('.phone-quantity-text');
        let quantityHidden3 = document.querySelector('#quantityHidden3');
        let quantityHidden4 = document.querySelector('#quantityHidden4');
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
            quantityHidden3.value = text;
            quantityHidden4.value = text;
        }
    </script>
    @if (session('error'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 3000, // Auto close after 3 seconds
                customClass: {
                    popup: 'swal2-small', // Custom class for smaller size
                }
            });
        </script>
    @endif
    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    customClass: {
                        title: 'swal-title',
                        content: 'swal-text'
                    }
                });
            });
        </script>
    @endif
</body>

</html>
