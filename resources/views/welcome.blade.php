@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo/Hanif-Baba-2-2.png') }}">
    <title>Hanif-Baba</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<style>
    .main-container {
        height: 100%;
        padding: 20px 50px;
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
        font-weight: 600;
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
        border-radius: 3px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 5px 10px;
        background: #96006d;
    }

    .main-top-product-container .type span {
        font-size: 18px;
        text-transform: capitalize;
        font-weight: 600;
        color: #ddd;
    }

    .main-top-product-container .type a {
        text-decoration: none;
        text-transform: uppercase;
        color: #ddd;
        font-weight: 700;
        font-size: 12px;
    }

    .top-product-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        column-gap: 5px;
        row-gap: 10px;
    }

    .top-product-card {
        width: 100%;
        border: 1px solid #eeefff;
        padding-bottom: 2px;
        border-radius: 5px;
        overflow: hidden;
    }

    .top-product-card .image {
        height: 180px;
        width: 100%;
    }

    .top-product-card .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .top-product-card .name {
        line-height: 1;
        font-size: 14px;
        font-weight: 600;
        color: #333;
        padding: 2px 5px;
        text-transform: capitalize;
    }

    .top-product-card .price {
        display: flex;
        align-items: center;
        padding: 2px 5px;
        line-height: 1.1;
        padding-bottom: 4px;
        text-transform: uppercase;
    }

    .top-product-card .price .tk {
        color: #96006d;
        font-weight: 700;
        font-size: 16px;
    }

    .top-product-card .price .discount {
        text-decoration: line-through;
        font-weight: 600;
        color: #333;
        font-size: 14px;
        margin: 0 3px;
    }

    .top-product-card .price .percent {
        border-radius: 1px 5px 1px 5px;
        background: #af009c;
        padding: 2px 10px;
        color: #fff;
        font-size: 13px;
    }

    /*------ Category-container all css */
    .category-container {
        margin: 10px 0;
    }

    .category-container .type {
        border-radius: 3px;
        width: 100%;
        padding: 5px 10px;
        background: #96006d;
    }

    .category-container .type span {
        font-size: 18px;
        text-transform: capitalize;
        font-weight: 600;
        color: #ddd;
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
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }


    /* top products container css*/
    .main-product-container {
        margin: 25px 0
    }

    .main-product-container .type {
        border-radius: 3px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 5px 10px;
        background: #96006d;
    }

    .main-product-container .type span {
        font-size: 18px;
        text-transform: capitalize;
        font-weight: 600;
        color: #ddd;
    }

    .main-product-container .type a {
        text-decoration: none;
        text-transform: uppercase;
        color: #ddd;
        font-weight: 700;
        font-size: 12px;
    }

    .product-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        column-gap: 5px;
        row-gap: 10px;
    }

    .product-card {
        width: 100%;
        border: 1px solid #eeefff;
        padding-bottom: 2px;
        border-radius: 5px;
        overflow: hidden;
    }

    .product-card .image {
        height: 180px;
        width: 100%;
    }

    .product-card .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-card .name {
        line-height: 1;
        font-size: 14px;
        font-weight: 600;
        color: #333;
        padding: 2px 5px;
        text-transform: capitalize;
    }

    .product-card .price {
        display: flex;
        align-items: center;
        padding: 2px 5px;
        line-height: 1.1;
        padding-bottom: 4px;
        text-transform: uppercase;
    }

    .product-card .price .tk {
        color: #96006d;
        font-weight: 700;
        font-size: 16px;
    }

    .product-card .price .discount {
        text-decoration: line-through;
        font-weight: 600;
        color: #333;
        font-size: 14px;
        margin: 0 3px;
    }

    .product-card .price .percent {
        border-radius: 1px 5px 1px 5px;
        background: #af009c;
        padding: 2px 10px;
        color: #fff;
        font-size: 13px;
    }

    /* button more shoping */
    .load-more {
        width: 100%;
        text-align: center;
    }

    .load-more .load-card {
        border: 1px solid #555;
    }

    .load-more .load-card a {
        font-size: 12px;
        text-decoration: none;
        font-weight: 700;
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
            padding: 20px 60px;
        }

        .top-product-card .image {
            height: 170px;
            width: 100%;
        }

        .product-card .image {
            height: 170px;
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
        }

        .banner-container .banner-categories {
            height: 250px;
        }

        .banner-container .banner-categories .banner {
            border-radius: 2px;
        }

        .main-top-product-container {
            margin: 0;
            padding: 10px 0;
        }

        .main-product-container {
            margin: 0;
            padding: 10px 0;
        }

        .top-product-container {
            grid-template-columns: 1fr 1fr 1fr;
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

        .top-product-card .image {
            height: 165px;
        }

        .product-card .name {
            color: #444;
        }

        .product-card .price .discount {
            color: #555;
        }

        .product-card .image {
            height: 165px;
        }
    }

    /* Media query for screens between 480px and 380px */
    @media screen and (max-width: 475px) {
        .side-categories {
            display: none;
        }

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
                    <img class="slides-img" src="{{ asset('banner/HANIFBABA.png') }}" alt="">
                    <img class="slides-img" src="{{ asset('banner/Untitled design.png') }}" alt="">
                    <img class="slides-img" src="{{ asset('banner/banner.jpg') }}" alt="">
                    <img class="slides-img" src="{{ asset('banner/1709354849-65e2af612ea37.jpg') }}" alt="">
                    <img class="slides-img" src="{{ asset('banner/1709349038-65e298ae24802.jpg') }}" alt="">
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
                <div class="top-product-card">
                    <div class="image">
                        <img src="{{ asset('products/punjabi2.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$700</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="top-product-card">
                    <div class="image">
                        <img src="Products/Amazing Rice Flour Face Packs For All Your Skin Concerns.jpg" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$480</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="top-product-card">
                    <div class="image">
                        <img src="{{ asset('products/punjabi5.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$1020</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="top-product-card">
                    <div class="image">
                        <img src="{{ asset('products/punjabi3.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$700</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="top-product-card">
                    <div class="image">
                        <img src="Products/Amazing Rice Flour Face Packs For All Your Skin Concerns.jpg" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$570</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="top-product-card">
                    <div class="image">
                        <img src="{{ asset('products/three1.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$500</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /* Category-container all html*/ --}}
        <div class="category-container">
            <div class="type">
                <span>all category</span>
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
                        <img src="{{ asset('products/punjabi2.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$700</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="Products/Amazing Rice Flour Face Packs For All Your Skin Concerns.jpg"
                            alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$480</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
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
                    <div class="price">
                        <span class="tk">$1020</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="{{ asset('products/punjabi3.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$700</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="Products/Amazing Rice Flour Face Packs For All Your Skin Concerns.jpg"
                            alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$570</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="image">
                        <img src="{{ asset('products/three1.jpg') }}" alt="">
                    </div>
                    <div class="name">
                        Amazing Rice Flour Face Packs For All
                    </div>
                    <div class="price">
                        <span class="tk">$500</span>
                        <span class="discount">$500</span>
                        <div class="percent">
                            <span>10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="load-more">
        <div class="load-card btn">
            <a href="">LOAD MORE</a>
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
