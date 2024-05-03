@include('layouts.header')
@include('layouts.phoneHeader')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo/Hanif-Baba-2-2.png') }}">
    <title>Hanif-Baba</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Noto Sans Bengali', Arial, sans-serif;
        background: #e9ecef;
    }

    .main-container {
        height: 100%;
        padding: 20px 30px;
    }

    .banner-container .banner-categories {
        display: flex;
        height: 316px;
    }

    .banner-container .banner-categories .side-categories {
        background: #fff;
        box-shadow: -1px -1px 3px 0px #eeecec;
        width: 220px;
        margin-right: 5px;
        border-radius: 6px;
        overflow: scroll;
    }

    .banner-container .banner-categories .side-categories::-webkit-scrollbar {
        display: none;
    }

    .banner-container .banner-categories .side-categories .side-category {
        display: grid;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        padding: 2px 0;
    }

    .banner-container .banner-categories .side-categories .side-category a {
        padding: 2px 10px;
        text-transform: capitalize;
        text-decoration: none;
        color: #636464;
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .banner-container .banner-categories .side-categories .side-category a:hover {
        color: #A60DE4;
        background-color: #f5f5f5;
    }

    .banner-container .banner-categories .banner {
        display: flex;
        align-items: center;
        border-radius: 6px;
        overflow: hidden;
        width: 100%;
        position: relative;
        cursor: pointer;
    }

    .banner-container .banner-categories .banner img {
        width: 100%;
        height: 100%;
    }

    .banner-container .banner-categories .banner .slider-btn {
        transition: 0.3s;
        position: absolute;
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 0 15px;
        visibility: hidden;
    }

    .banner-container .banner-categories .banner .slider-btn .slider-card {
        background: RGBA(0, 0, 0, 0.67);
        padding: 10px 5px;
        border-radius: 3px;
        cursor: pointer;
    }

    .banner-container .banner-categories .banner .slider-btn .next,
    .banner-container .banner-categories .banner .slider-btn .prev {
        border-right: 7px solid transparent;
        border-left: 7px solid transparent;
        border-top: 8px solid #dfdfdf;
    }

    .banner-container .banner-categories .banner .slider-btn div:hover {
        opacity: 1;
    }

    .banner-container .banner-categories .banner .slider-btn .next {
        transform: rotate(267deg);
        margin-left: 1px;
    }

    .banner-container .banner-categories .banner .slider-btn .prev {
        transform: rotate(90deg);
        margin-right: 1px;
    }

    .banner-container .banner-categories .banner:hover .slider-btn {
        transition: 0.5s;
        visibility: visible;
    }


    /* top products container css*/
    .main-top-product-container {
        margin: 25px 0
    }

    .main-top-product-container .type {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 5px 10px;
        background: #A60DE4;
    }

    .main-top-product-container .type span {
        font-size: 18px;
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
        color: #fff;
    }

    .main-top-product-container .type a {
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 12px;
    }

    .top-product-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        column-gap: 5px;
        row-gap: 10px;
    }

    .top-product-container a {
        text-decoration: none;
    }

    .top-product-card {
        width: 100%;
        background: #fff;
        padding-bottom: 2px;
        overflow: hidden;
    }

    .top-product-card .image {
        width: 100%;
    }

    .top-product-card .image img {
        width: 100%;
        height: 100%;
    }

    .top-product-card .name {
        line-height: normal;
        font-size: 14px;
        color: #222;
        padding: 2px 5px;
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .top-product-card .free-card {
        padding: 2px 5px;
    }

    .top-product-card .free {
        background: #02473e;
        border-radius: 10px;
        font-size: 11px;
        text-transform: capitalize;
        width: fit-content;
        padding: 2px 8px;
        padding-left: 5px;
        color: #eee;
        line-height: normal;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .top-product-card .free i {
        font-size: 10px;
    }

    .top-product-card .price-card {
        display: flex;
        align-items: center;
        padding: 3px 5px;
        line-height: 1.1;
        padding-bottom: 4px;
        text-transform: uppercase;
    }

    .top-product-card .price-card .tk {
        color: #96006d;
        font-size: 16px;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .top-product-card .price-card .discount {
        text-decoration: line-through;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        color: #333;
        font-size: 14px;
    }

    .top-product-card .price-card .percent {
        margin-left: 10px;
        background: #af009c;
        transform: skew(-18deg);
        padding: 1px 10px;
        color: #eee;
        font-size: 12px;
        line-height: normal;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    /*------ Category-container all css */
    .category-container {
        margin: 10px 0;
    }

    .category-container .type {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 5px 10px;
        background: #A60DE4;
    }

    .category-container .type span {
        font-size: 18px;
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
        color: #fff;
    }

    .category-container .type a {
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 12px;
    }

    .category-container .category-card {
        background-color: transparent;
        border-radius: 0;
    }

    .category-card ul {
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 5px;
        height: 239px;
        overflow: hidden;
    }

    .category-card a {
        text-decoration: none;
    }

    .category-card a li img {
        max-width: 100%;
        height: 90px;
        object-fit: cover;
    }

    .category-card a .card {
        border-radius: 0;
        overflow: hidden;
        border: none;
    }

    .category-card a li span {
        text-align: center;
        text-transform: capitalize;
        padding: 2px 0;
        font-size: 14px;
        color: #2a2f3b;
        font-weight: 600;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }


    /* top products container css*/
    .main-product-container {
        margin: 25px 0;
        margin-bottom: 10px;
    }

    .main-product-container .type {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 5px 10px;
        background: #A60DE4;
    }

    .main-product-container .type span {
        font-size: 18px;
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
        color: #fff;
    }

    .main-product-container .type a {
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 12px;
    }

    .product-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        column-gap: 5px;
        row-gap: 15px;
    }

    .product-card {
        width: 100%;
        background: #fff;
        padding-bottom: 2px;
        overflow: hidden;
    }

    .product-card .image {
        width: 100%;
    }

    .product-card .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-card .name {
        line-height: normal;
        font-size: 14px;
        color: #222;
        padding: 2px 5px;
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .product-card .free-card {
        padding: 2px 5px;
    }

    .product-card .free {
        background: #02473e;
        border-radius: 10px;
        font-size: 11px;
        text-transform: capitalize;
        width: fit-content;
        padding: 2px 8px;
        padding-left: 5px;
        color: #eee;
        line-height: normal;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .product-card .free i {
        font-size: 10px;
    }

    .product-card .price-card {
        display: flex;
        align-items: center;
        padding: 3px 5px;
        line-height: 1.1;
        padding-bottom: 4px;
        text-transform: uppercase;
    }

    .product-card .price-card .tk {
        color: #96006d;
        font-size: 16px;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .product-card .price-card .discount {
        text-decoration: line-through;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        color: #333;
        font-size: 14px;
    }

    .product-card .price-card .percent {
        margin-left: 10px;
        background: #af009c;
        transform: skew(-18deg);
        padding: 1px 10px;
        color: #eee;
        font-size: 12px;
        line-height: normal;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    /* button more shoping */
    .load-more {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .load-more .load-card {
        text-align: center;
    }

    .load-more .load-card:hover {
        background: #ddd;
    }

    .load-more .load-card a {
        border: 1px solid #777;
        border-radius: 5px;
        display: block;
        padding: 10px 50px;
        font-size: 11px;
        text-decoration: none;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    /* home-icon-container */
    .home-icon-container {
        width: 100%;
        background: #fff;
        position: fixed;
        bottom: 0;
        padding: 6px 15px;
        display: none;
    }

    .home-icon-card {
        display: flex;
        width: 100%;
        justify-content: space-between;
    }

    .home-icon-card .icons {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        text-transform: capitalize;
        color: #777;
        line-height: 1;
    }

    .home-icon-card .icons i {
        font-size: 20px;
    }

    .home-icon-card .icons span {
        font-size: 12px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    /* Default styles */
    /* Your default CSS styles go here */

    /* Media query for screens between 1280px and 1024px */
    @media screen and (max-width: 1440px) {
        .main-container {
            padding: 0 180px;
        }
    }

    @media screen and (max-width: 1280px) {
        .main-container {
            padding: 0 130px;
        }

        .banner-container .banner-categories {
            display: flex;
            height: 340px;
        }
    }

    /* Media query for screens between 1024px and 768px */
    @media screen and (max-width: 1024px) {
        .main-container {
            padding: 0px 60px;
        }

        .top-product-card .image {
            width: 100%;
        }

        .product-card .image {
            width: 100%;
        }

        .banner-container .banner-categories {
            display: flex;
            height: 336px;
        }
    }

    /* Media query for screens between 768px and 480px */
    @media screen and (max-width: 768px) {
        .main-container {
            padding: 0 20px;
        }

        .top-product-container {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .product-container {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
    }

    @media screen and (max-width: 640px) {
        .main-container {
            padding: 0 10px;
            margin-bottom: 10px;
        }

        .side-categories {
            display: none;
        }

        .banner-container .banner-categories {
            height: 250px;
        }

        .banner-container .banner-categories .banner {
            border-radius: 0;
        }

        .top-product-container {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .category-card ul {
            height: 210px;
            overflow: hidden;
        }

        .category-card a li img {
            height: 75px;
        }

        .main-top-product-container {
            margin: 0;
            padding: 10px 0;
        }

        .main-product-container {
            margin: 0;
            padding: 10px 0;
        }

        .product-container {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .top-product-card .name {
            color: #444;
        }

        .top-product-card .price .discount {
            color: #555;
        }

        .product-card .name {
            color: #444;
        }

        .product-card .price .discount {
            color: #555;
        }

        .home-icon-container {
            display: block;
        }
    }

    /* Media query for screens between 480px and 380px */
    @media screen and (max-width: 475px) {

        .main-container {
            padding: 0;
        }

        .category-container {
            margin: 10px 5px;
        }

        .banner-container .banner-categories {
            display: flex;
            height: 200px;
        }

        .main-top-product-container {
            margin: 0;
            padding: 10px 5px;
        }

        .main-product-container {
            margin: 0;
            padding: 10px 5px;
        }

        .category-card ul {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .main-product-container {
            margin: 0;
            padding: 10px 5px;
        }

        .main-product-container {
            margin: 0;
            padding: 10px 5px;
        }

    }

    /* Media query for screens below 380px */
    @media screen and (max-width: 375px) {
        .top-product-container {
            grid-template-columns: 1fr 1fr;
        }

        .product-container {
            grid-template-columns: 1fr 1fr;
        }
    }
</style>

<body>
    <div class="main-container">
        <div class="banner-container">
            <div class="banner-categories">
                <div class="side-categories">
                    <div class="side-category">
                        <a href="">health</a>
                        <a href="">punjabi</a>
                        <a href="">baby dress</a>
                        <a href="">t-shrit</a>
                        <a href="">baby dress</a>
                        <a href="">t-shrit</a>
                        <a href="">health</a>
                        <a href="">punjabi</a>
                        <a href="">baby dress</a>
                        <a href="">health</a>
                        <a href="">punjabi</a>
                        <a href="">baby dress</a>
                        <a href="">t-shrit</a>
                        <a href="">health</a>
                        <a href="">punjabi</a>
                        <a href="">baby dress</a>
                        <a href="">t-shrit</a>
                    </div>
                </div>
                <div class="banner">
                    <img class="slides-img" src="{{ asset('banner/রক্ত দিন জীবন বাঁচান (2).png') }}" alt="">
                    <img class="slides-img" src="{{ asset('banner/রক্ত দিন জীবন বাঁচান (1).png') }}" alt="">
                    <div class="slider-btn">
                        <div class="slider-card" id="prev">
                            <div class="prev"></div>
                        </div>
                        <div class="slider-card" id="next">
                            <div class="next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- top products container --}}
        <div class="main-top-product-container">
            <div class="type">
                <span>top products</span>
                <a href="">shop more</a>
            </div>
            <div class="top-product-container">
                <a href="{{ route('ProductView') }}">
                    <div class="top-product-card">
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
                </a>
                <div class="top-product-card">
                    <div class="image">
                        <img src="{{ asset('products/product2.png') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="free-card">
                        <div class="free">
                            <i class="ri-star-fill"></i>
                            <span>verifyed</span>
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
                <div class="top-product-card">
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
                <div class="top-product-card">
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
                <div class="top-product-card">
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
                <div class="top-product-card">
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
            </div>
        </div>
        {{-- /* Category-container all html*/ --}}
        <div class="category-container">
            <div class="type">
                <span>all category</span>
                <a href="">shop more</a>
            </div>
            <div class="card category-card border-0">
                <ul>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/2-1-682x1024.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/1709024382-65dda47ed1d5d.jfif') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/1711678828-6606256c468fe.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi5.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi3.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi2.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                    <a href="">
                        <li class="card">
                            <img src="{{ asset('products/punjabi5.jpg') }}" alt="">
                            <span>punjabi</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        {{-- top products container --}}
        <div class="main-product-container">
            <div class="type">
                <span>letest products</span>
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
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span class="tk">৳430</span>
                            <span class="discount">৳450</span>
                        </div>
                        <div class="percent">
                            <span>17%</span>
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
                            <span>cash delivery</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span>cash delivery</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span>verifyed</span>
                        </div>
                    </div>
                    <div class="price-card">
                        <div>
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
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
                            <span class="tk">৳700</span>
                            <span class="discount">৳500</span>
                        </div>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more">
            <div class="load-card">
                <a href="">LOAD MORE</a>
            </div>
        </div>
    </div>
    <div class="home-icon-container">
        <div class="home-icon-card">
            <div class="icons">
                <i class="ri-home-2-fill"></i>
                <span>Home</span>
            </div>
            <div class="icons">
                <i class="ri-layout-grid-fill"></i> <span>categories</span>
            </div>
            <div class="icons">
                <i class="ri-shopping-cart-2-fill"></i>
                <span>cart</span>
            </div>
            <div class="icons">
                <i class="ri-user-fill"></i>
                <span>account</span>
            </div>
        </div>
    </div>
    <script>
        let cartIcon = document.querySelectorAll('.cart-icon')
        let slides = document.querySelectorAll('.slides-img');
        let next = document.querySelector('#next');
        let prev = document.querySelector('#prev');
        let count = 0;
        let intervalId

        prev.addEventListener('click', () => {
            changeSlide(count + 1);
        });

        next.addEventListener('click', () => {
            changeSlide(count - 1);
        });


        function changeSlide(moveTo) {
            clearInterval(intervalId);
            count = moveTo;

            if (count >= slides.length) {
                count = 0;
            }

            if (count < 0) {
                count = slides.length - 1;
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slides[count].style.display = 'block';

            intervalId = setInterval(() => {
                changeSlide(count + 1);
            }, 3000);
        }
        changeSlide(count);

        cartIcon.forEach(Icon => {
            Icon.addEventListener('click', function() {
                alert('hello icons');
            });
        });
    </script>
</body>

</html>
@include('layouts.footer')
