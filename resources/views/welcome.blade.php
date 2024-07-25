@include('layouts.header')
@include('layouts.phoneHeader')
@include('admin.logo.logo')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hanif-Baba</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

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
        font-weight: 600;
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

    .product-container .product-header {
        text-align: center;
        padding: 10px 0;
        padding-bottom: 15px;
    }

    .product-container .product-header h4 {
        text-transform: uppercase;
        margin: 0;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .product-container .product-header span {
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .product-container .product-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
    }

    .product-card a {
        text-decoration: none;
    }

    .product-content .product-card .card {
        border: none;
    }

    .product-content .product-card .product-img {
        border: 1px solid #ddd;
        box-shadow: 4px 2px 20px 0px #b4c9d3;
        overflow: hidden;
    }

    .product-content .product-card .card img {
        width: 100%;
    }

    .product-content .product-card .card:hover img {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    .product-card .titel {
        padding: 5px 7px;
        text-transform: capitalize;
        line-height: ;
        padding-bottom: 0;
        color: #222;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-style: normal;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .product-card .star {
        padding: 0 7px;
        padding-top: 0;
        color: coral;
    }

    .product-card .price {
        padding: 5px 7px;
        padding-top: 0;
        font-size: 16px;
        color: #222;
        line-height: normal;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .product-card .price .discount {
        text-decoration: line-through;
    }

    .product-card .btn {
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        padding: 10px;
        width: 100%;
        border-radius: 3px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    /* home-icon-container */
    .home-icon-container {
        width: 100%;
        background: #fff;
        position: fixed;
        bottom: 0;
        display: none;
    }

    .home-icon-card {
        display: flex;
        width: 100%;
        justify-content: space-between;
    }

    .home-icon-card a {
        text-decoration: none;
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

    /* shop-container html code */
    .shop-container {
        padding: 35px 0px;
        padding-top: 0px;
    }

    .shop-container .shop-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 20px;
    }

    .shop-container .shop-content a {
        text-decoration: none;
    }

    .shop-container .shop-hadding {
        text-align: center;
        line-height: normal;
        padding: 10px 0;
        padding-bottom: 15px;
        color: #333;
    }

    .shop-container .shop-hadding h4 {
        text-transform: uppercase;
        margin: 10px 0;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .shop-container .shop-hadding span {
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .shop-container .shop-content a .text {
        padding: 5px 0;
        line-height: normal;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .shop-container .shop-content a .text span {
        color: #333;
        text-transform: capitalize;
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .shop-container .shop-content .card {
        box-shadow: 4px 2px 20px 0px #b4c9d3;
        overflow: hidden;
    }

    .shop-container .shop-content .card img {
        width: 100%;
    }

    .product-container {
        margin: 15px 0;
    }

    /* Media query for screens between 1024px and 768px */
    @media screen and (max-width: 1024px) {
        .main-container {
            padding: 0px 60px;
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

        .home-icon-container {
            display: block;
        }

        .nav-container {
            width: 100%;
            height: 100vh;
            background: #eee;
            position: relative;
            z-index: 999999;
            display: none;
        }

        .side-nav-container {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 200px;
            height: 100%;
            background: #fff;
            padding: 50px 0;
        }

        .close {
            position: absolute;
            top: 5px;
            left: 5px;
            color: red;
            font-size: 18px;
            cursor: pointer;
        }

        .side-nav-container .side-nav-content a {
            display: flex;
            flex-direction: columns;
            color: #333;
            text-decoration: none;
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            font-family: "Roboto", sans-serif;
            font-style: normal;
        }

        .phone-profile-content {
            padding: 10px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #999;
        }

        .phone-profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .phone-profile-img img {
            width: 100%;
            height: 100%;
        }

        .phone-profile-name {
            text-transform: uppercase;
            padding-top: 5px;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .form-control {
            border: none;
            outline: none;
            border-bottom: 1px solid #eee;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            padding-left: 15px;
        }

        .form-control:focus-visible {
            outline-color: none;
            border: none;
            outline: none;
        }

        .product-container .product-content {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .shop-container {
            padding-top: 10px;
        }

        .shop-container .shop-content {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        }
    }

    /* Media query for screens between 480px and 380px */
    @media screen and (max-width: 475px) {

        .main-container {
            padding: 0;
        }

        .banner-container .banner-categories {
            display: flex;
            height: 200px;
        }

        .product-container .product-content {
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .shop-container .shop-content {
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 5px;
        }

        .shop-container .shop-content a .text span {
            font-size: 12px;
        }

    }
</style>

<body>
    <div class="main-container">
        <div class="banner-container">
            <div class="banner-categories">
                <div class="side-categories">
                    <div class="side-category">
                        @php
                            $sidecategory = getCategoryData();
                        @endphp
                        @if ($sidecategory->isEmpty())
                            <a href="" class="d-flex justify-content-center align-items-center">
                                <span class="text-danger">Not available category</span>
                            </a>
                        @else
                            @foreach ($sidecategory as $category)
                                <a
                                    href="{{ route('filterproduct', ['id' => $category->id, 'slug' => $category->category_name]) }}">{{ $category->category_name }}</a>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="banner">
                    <img class="slides-img" src="{{ asset('banner/banner1.png') }}" alt="">
                    <img class="slides-img" src="{{ asset('banner/banner2.png') }}" alt="">
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
        {{-- Shop By Department --}}
        <div class="shop-container" id="shop">
            <div class="shop-hadding">
                <h4>Shop By Department</h4>
                <span>Take A Look At Our Other Products</span>
            </div>
            <div class="shop-content">
                @foreach ($categories as $category)
                    <a href="{{ route('filterproduct', ['id' => $category->id, 'slug' => $category->category_name]) }}">
                        <div class="card">
                            <img src="{{ asset('CategoryImg/' . $category->category_img) }}" alt="">
                        </div>
                        <div class="text">
                            <span>{{ $category->category_name }} ({{$category->product_count}})</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- product html code --}}
        <div class="product-container">
            <div class="product-header">
                <h4>new products</h4>
                <span>first-class quality products for appying eyelash extensions</span>
            </div>
            <div class="product-content">
                @foreach ($products as $product)
                    <div class="product-card">
                        <a href="{{ route('viewproduct', $product->id) }}">
                            <div class="card">
                                <div class="card product-img">
                                    <img src="{{ asset('ProductImg/' . $product->product_img) }}" alt="">
                                </div>
                                <div class="titel">
                                    <span>{{ $product->product_name }}</span>
                                </div>
                                <div class="star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </div>
                                <div class="price">
                                    @if ($product->regularPrice)
                                        <div class="discount">
                                            <span>DKK {{ $product->regular_price }}.00</span>
                                        </div>
                                    @endif
                                    <span>DKK {{ $product->product_price }}.00</span>
                                </div>
                                @if ($product->product_quantity > 0)
                                    <a href="javascript:void(0);" class="btn btn-dark" onclick="submitForm(this);">
                                        <span class="ri-shopping-cart-line"></span>
                                        addtocart
                                    </a>
                                @else
                                    <input type="submit" class="btn btn-dark" disabled value="out of stock">
                                @endif
                                <form action="{{ route('storecart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="1" id="quantityHidden2" name="productQuantity"
                                        class="form-control">
                                    <input type="hidden" name="productImg" value="{{ $product->product_img }}">
                                    <input type="hidden" name="productName" value="{{ $product->product_name }}">
                                    <input type="hidden" name="productPrice" value="{{ $product->product_price }}">
                                    <input type="hidden" name="productId" value="{{ $product->id }}">
                                </form>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="home-icon-container">
        <div style="padding: 7px 15px;">
            <div class="home-icon-card">
                <a href="{{ route('home') }}">
                    <div class="icons">
                        <i class="ri-home-2-fill"></i>
                        <span>Home</span>
                    </div>
                </a>
                <a href="{{ route('all.category.product') }}">
                    <div class="icons">
                        <i class="ri-layout-grid-fill"></i> <span>categories</span>
                    </div>
                </a>
                <a href="{{ route('addtocart') }}">
                    <div class="icons">
                        <i class="ri-shopping-cart-2-fill"></i>
                        <span>cart</span>
                    </div>
                </a>
                <div class="icons" id="user-profile">
                    <i class="ri-user-fill"></i>
                    <span>account</span>
                </div>
            </div>
        </div>
        <div class="nav-container">
            <div class="side-nav-container">
                <div style="position: relative; padding:10px;">
                    <div class="close">
                        <i class="ri-close-large-fill"></i>
                    </div>
                    <div class="phone-profile-content">
                        <div class="phone-profile-img">
                            <img src="{{ asset('banner/images.png') }}" alt="">
                        </div>
                        <div class="phone-profile-name">
                            <span>md ariful islam</span>
                        </div>
                    </div>
                    <div class="side-nav-content">
                        <a href="">Order Tracking</a>
                        <a href="">Cancel Order</a>
                        <select name="" id="" class="form-control">
                            <option selected disabled>Language</option>
                            <option value="">Bangla</option>
                            <option value="">English </option>
                            <option value="">Hindi</option>
                        </select>
                        <a href="">Registration</a>
                        <a href="">Login</a>
                        <a href="">Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let close = document.querySelector('.close');
        let navbar = document.querySelector('.nav-container');
        let profile = document.querySelector('#user-profile');
        let body = document.querySelector('body');

        profile.addEventListener('click', function() {
            navbar.style.display = 'block';
            body.style.overflow = 'hidden'; // Disable scrolling when navbar is open
            resetScrollPosition(); // Reset scroll position to top when navbar is opened
        });

        function closeNavbar() {
            navbar.style.display = 'none';
            body.style.overflow = 'auto'; // Enable scrolling when navbar is closed
        }

        close.addEventListener('click', function() {
            closeNavbar();
        });

        window.addEventListener('click', function(event) {
            if (event.target === navbar) {
                closeNavbar();
            }
        });

        // Function to reset scroll position to top
        function resetScrollPosition() {
            window.scrollTo(0, 0);
        }
    </script>

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
    <script>
        function submitForm(element) {
            element.nextElementSibling.submit();
        }
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    @php
        session()->forget('success');
    @endphp
    @if (session('error'))
        <script>
            Swal.fire({
                title: 'error!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'OK'
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
    @php
        session()->forget('success');
    @endphp
</body>

</html>
@include('layouts.footer')
