@include('layouts.header')
@include('layouts.phoneHeader')
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hanif-Baba</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Noto Sans Bengali', Arial, sans-serif;
        --tw-bg-opacity: 1;
        background-color: rgb(243 244 246 / var(--tw-bg-opacity));
        padding: 0!important;
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
        font-size: 15px;
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
        line-height: initial;
        padding-bottom: 0;
        color: #222;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
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

    .sidebar {
        display: none;
    }

    /* see more button css code section */

    .see-more {
        text-align: center;
        padding-bottom: 15px;
        font-family: 'Roboto';
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
            z-index: 9999;
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

        .sidebar {
            display: block;
            background-color: #333;
            width: 220px;
            height: 100vh;
            position: fixed;
            right: -220px;
            top: 0;
            color: #fff;
            z-index: 99999;
            transition: right 0.5s ease;
        }

        .close {
            width: 100%;
            padding: 10px;
            font-size: 26px;
            cursor: pointer;
        }

        .sidebar .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
        }

        .sidebar .profile h4 {
            text-align: center;
            margin-top: 10px;
        }

        .sidebar ul {
            list-style: none;
            padding: 20px 0;
            margin: 0;
            padding-bottom: 5px;
        }

        .sidebar ul li {
            padding: 10px;
            border-bottom: 1px solid #444;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        .sidebar ul li:hover {
            background-color: #444;
        }

        .language-selector {
            padding: 10px;
        }

        footer {
            margin-bottom: 45px;
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
            padding: 0 5px;
        }

        .shop-container .shop-content {
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 5px;
            padding: 0 5px;
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
                @php
                    $banners = getBanner();
                @endphp
                <div class="banner">
                    @foreach ($banners as $banner)
                        <img class="slides-img" src="{{ asset('BannerImg/' . $banner->banner) }}" alt="">
                    @endforeach
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
                            <span>{{ $category->category_name }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- product html code --}}
        <div class="product-container">
            <div class="product-header">
                <h4>new products</h4>
                <span>first-class quality products for appying Premium Products</span>
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
                                            <span>BDT {{ $product->regular_price }}.00</span>
                                        </div>
                                    @endif
                                    <span>BDT {{ $product->product_price }}.00</span>
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
        <div style="padding: 12px 15px;">
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
    </div>

    <div class="sidebar">
        <div class="close">
            <i class="ri-close-line"></i>
        </div>
        <div class="profile">
            <img src="https://via.placeholder.com/100" alt="User Image">
            <h4>John Doe</h4>
        </div>
        <ul>
            <li><a href="#"><i class="ri-account-circle-line"></i> My Account</a></li>
            <li><a href="{{route('shop')}}"><i class="ri-store-line"></i> My Shop</a></li>
            <li><a href="#"><i class="ri-shopping-cart-line"></i> My Orders</a></li>
            @auth
                <li><a href="{{ route('logout') }}"><i class="ri-logout-circle-line"></i> Logout</a></li>
            @else
                <li><a href="{{ route('login') }}"><i class="ri-login-circle-line"></i> Login</a></li>
            @endauth
        </ul>
        <div class="language-selector">
            <select class="form-select">
                <option value="bn">বাংলা</option>
            </select>
        </div>
    </div>

    {{-- see more button html code section see more to shop page return --}}

    <div class="see-more">
        <a href="{{ route('shop') }}" class="btn btn-success">See more</a>
    </div>


    <script>
        let profileBtn = document.querySelector('#user-profile');
        let sidebar = document.querySelector('.sidebar');
        let close = document.querySelector('.close');

        profileBtn.addEventListener('click', function() {
            sidebar.style.right = '0px';
        });

        close.addEventListener('click', function() {
            sidebar.style.right = '-220px';
        });
    </script>

    <script>
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
    </script>
    <script>
        function submitForm(element) {
            element.nextElementSibling.submit();
        }
    </script>

    @if (session('error'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error!',
                    text: '{{ session('error') }}',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                        title: 'swal-title',
                        content: 'swal-text'
                    }
                });
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
@include('layouts.footer')
