@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo/Hanif-Baba-2-2.png') }}">
    <title>Hanif-Baba</title>
</head>
<style>
    .main-container {
        height: 100%;
        padding: 0 50px;
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
        padding: 5px 10px;
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


    /* products container css*/
    .product-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        column-gap: 30px;
        row-gap: 40px;
        padding: 20px 0 50px 0;
    }

    .product-card {
        overflow: hidden;
        border-radius: 10px;
        background: #fff;
        border: 1px solid #dddddd;
    }

    .product-card .img-container {
        position: relative;
        width: 100%;
    }

    .product-card .img-container a {
        text-decoration: none;
    }

    .product-card .img-container img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .product-card .img-container .icon-card {
        width: 100%;
        display: flex;
        justify-content: center;
        position: absolute;
        bottom: 20px;
    }

    .product-card .img-container .cart-icon {
        background-color: #fff;
        border-radius: 20px;
        display: flex;
        justify-content: space-around;
        padding: 6px 0;
        width: 65px;
    }

    .product-card .img-container .cart-icon a {
        text-decoration: none;
        color: #607D8B;
        font-size: 18px;
    }

    .product-card .img-container .cart-icon a:hover {
        color: #A60DE4;
    }

    .product-card .size-container {
        width: 100%;
    }

    .product-card .size-container .size-card {
        display: flex;
        align-items: center;
    }

    .product-card .size-container .size-card .size {
        border: 1px solid #777;
        padding: 4px 6px;
        margin: 5px;
        cursor: pointer;
        border-radius: 3px;
        color: #333;
    }

    .product-card .titel-container {
        width: 100%;
    }

    .product-card .titel-container .titel-card {
        display: flex;
        justify-content: center;
    }

    .product-card .titel-container .titel-card a {
        text-transform: capitalize;
        font-size: 15px;
        font-weight: 600;
        color: #2f2f2f;
        text-decoration: none;
    }

    .product-card .titel-container .category-titel-card {
        display: flex;
        justify-content: center;
        padding: 5px 0;
    }

    .product-card .titel-container .category-titel-card span {
        text-transform: capitalize;
        font-size: 15px;
        font-weight: 600;
        color: #666565;
    }

    .product-card .stock-container {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .product-card .stock-container .stock-card {
        display: flex;
    }

    .product-card .stock-container .stock-card span {
        text-transform: capitalize;
        font-size: 14px;
        font-weight: 600;
        color: #2f2f2f;
    }

    .product-card .stock-container .stock-card .stock-arrow {
        width: 14px;
        height: 8px;
        border-top: 2px solid;
        border-right: 2px solid;
        transform: rotate(124deg);
        color: #84019b;
        margin: 0 5px;
    }

    .product-card .star-container {
        width: 100%;
    }

    .product-card .star-container .star-card {
        display: flex;
        justify-content: center;
        padding: 3px 0;
    }

    .product-card .star-container .star-card i {
        font-size: 15px;
        color: #2f2f2f;
    }

    .product-card .price-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 3px 0;
    }

    .product-card .price-container .discount-card {
        padding: 0 2px;
    }

    .product-card .price-container .discount-card span {
        color: #ababab;
        font-weight: 900;
        font-size: 16px;
        text-decoration: line-through;
    }

    .product-card .price-container .price-card {
        padding: 0 2px;
    }

    .product-card .price-container .price-card span {
        color: rgb(155, 40, 175);
        font-weight: 900;
        font-size: 16px;
    }

    /* Default styles */
    /* Your default CSS styles go here */

    /* Media query for screens between 1280px and 1024px */
    @media screen and (max-width: 1280px) {
        /* Styles for screens between 1280px and 1024px */
    }

    /* Media query for screens between 1024px and 768px */
    @media screen and (max-width: 1024px) {
        /* Styles for screens between 1024px and 768px */
    }

    /* Media query for screens between 768px and 480px */
    @media screen and (max-width: 768px) {
        .product-container {
            column-gap: 20px;
        }
    }

    @media screen and (max-width: 640px) {
        .main-container {
            padding: 0 10px;
        }

        .banner-container .banner-categories {
            height: 250px;
        }

        .product-container {
            grid-template-columns: 1fr 1fr 1fr;
        }
    }

    /* Media query for screens between 480px and 380px */
    @media screen and (max-width: 475px) {
        /* Styles for screens between 480px and 380px */
    }

    /* Media query for screens below 380px */
    @media screen and (max-width: 375px) {
        /* Styles for screens below 380px */
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
        {{-- products container --}}
        <div class="product-container">
            <div class="product-card">
                <div class="img-container">
                    <a href="{{ Route('ProductView') }}">
                        <img src="{{ asset('products/punjabi2.jpg') }}" alt="">
                    </a>
                    <div class="icon-card">
                        <div class="cart-icon">
                            <a href="" class="ri-shopping-cart-line"></a>
                            <a href="" class="ri-heart-line"></a>
                        </div>
                    </div>
                </div>
                <div class="size-container">
                    <div class="size-card">
                        <div class="size">42</div>
                        <div class="size">43</div>
                        <div class="size">44</div>
                    </div>
                </div>
                <div class="titel-container">
                    <div class="titel-card">
                        <a href="{{ Route('ProductView') }}">all over printed</a>
                    </div>
                    <div class="category-titel-card">
                        <span>all products,punjabi</span>
                    </div>
                </div>
                <div class="stock-container">
                    <div class="stock-card">
                        <div class="stock-arrow"></div>
                        <span>in stock</span>
                    </div>
                </div>
                <div class="star-container">
                    <div class="star-card">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="price-container">
                    <div class="discount-card"><span>&#2547; 1290.00</span></div>
                    <div class="price-card"><span>&#2547; 1190.00</span></div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <a href="">
                        <img src="{{ asset('products/0KJtfEu3END2KjCk8YuASvudjL5azxcHD2in35Xj-682x1024.jpg') }}"
                            alt="">
                    </a>
                    <div class="icon-card">
                        <div class="cart-icon">
                            <a href="" class="ri-shopping-cart-line"></a>
                            <a href="" class="ri-heart-line"></a>
                        </div>
                    </div>
                </div>
                <div class="size-container">
                    <div class="size-card">
                        <div class="size">42</div>
                        <div class="size">43</div>
                        <div class="size">44</div>
                    </div>
                </div>
                <div class="titel-container">
                    <div class="titel-card">
                        <a href="">all over printed</a>
                    </div>
                    <div class="category-titel-card">
                        <span>all products,punjabi</span>
                    </div>
                </div>
                <div class="stock-container">
                    <div class="stock-card">
                        <div class="stock-arrow"></div>
                        <span>in stock</span>
                    </div>
                </div>
                <div class="star-container">
                    <div class="star-card">
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </div>
                </div>
                <div class="price-container">
                    <div class="discount-card"><span>&#2547; 1290.00</span></div>
                    <div class="price-card"><span>&#2547; 1190.00</span></div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <a href="">
                        <img src="{{ asset('products/punjabi1.jpg') }}" alt="">
                    </a>
                    <div class="icon-card">
                        <div class="cart-icon">
                            <a href="" class="ri-shopping-cart-line"></a>
                            <a href="" class="ri-heart-line"></a>
                        </div>
                    </div>
                </div>
                <div class="size-container">
                    <div class="size-card">
                        <div class="size">42</div>
                        <div class="size">43</div>
                        <div class="size">44</div>
                    </div>
                </div>
                <div class="titel-container">
                    <div class="titel-card">
                        <a href="">all over printed</a>
                    </div>
                    <div class="category-titel-card">
                        <span>all products,punjabi</span>
                    </div>
                </div>
                <div class="stock-container">
                    <div class="stock-card">
                        <div class="stock-arrow"></div>
                        <span>in stock</span>
                    </div>
                </div>
                <div class="star-container">
                    <div class="star-card">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="price-container">
                    <div class="discount-card"><span>&#2547; 1290.00</span></div>
                    <div class="price-card"><span>&#2547; 1190.00</span></div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <a href="">
                        <img src="{{ asset('products/punjabi2.jpg') }}" alt="">
                    </a>
                    <div class="icon-card">
                        <div class="cart-icon">
                            <a href="" class="ri-shopping-cart-line"></a>
                            <a href="" class="ri-heart-line"></a>
                        </div>
                    </div>
                </div>
                <div class="size-container">
                    <div class="size-card">
                        <div class="size">42</div>
                        <div class="size">43</div>
                        <div class="size">44</div>
                    </div>
                </div>
                <div class="titel-container">
                    <div class="titel-card">
                        <a href="">all over printed</a>
                    </div>
                    <div class="category-titel-card">
                        <span>all products,punjabi</span>
                    </div>
                </div>
                <div class="stock-container">
                    <div class="stock-card">
                        <div class="stock-arrow"></div>
                        <span>in stock</span>
                    </div>
                </div>
                <div class="star-container">
                    <div class="star-card">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="price-container">
                    <div class="discount-card"><span>&#2547;1290.00</span></div>
                    <div class="price-card"><span>&#2547; 1190.00</span></div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <a href="">
                        <img src="{{ asset('products/punjabi5.jpg') }}" alt="">
                    </a>
                    <div class="icon-card">
                        <div class="cart-icon">
                            <a href="" class="ri-shopping-cart-line"></a>
                            <a href="" class="ri-heart-line"></a>
                        </div>
                    </div>
                </div>
                <div class="size-container">
                    <div class="size-card">
                        <div class="size">42</div>
                        <div class="size">43</div>
                        <div class="size">44</div>
                    </div>
                </div>
                <div class="titel-container">
                    <div class="titel-card">
                        <a href="">all over printed</a>
                    </div>
                    <div class="category-titel-card">
                        <span>all products,punjabi</span>
                    </div>
                </div>
                <div class="stock-container">
                    <div class="stock-card">
                        <div class="stock-arrow"></div>
                        <span>in stock</span>
                    </div>
                </div>
                <div class="star-container">
                    <div class="star-card">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="price-container">
                    <div class="discount-card"><span>&#2547; 1290.00</span></div>
                    <div class="price-card"><span>&#2547; 1190.00</span></div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <a href="">
                        <img src="{{ asset('products/punjabi3.jpg') }}" alt="">
                    </a>
                    <div class="icon-card">
                        <div class="cart-icon">
                            <a href="" class="ri-shopping-cart-line"></a>
                            <a href="" class="ri-heart-line"></a>
                        </div>
                    </div>
                </div>
                <div class="size-container">
                    <div class="size-card">
                        <div class="size">42</div>
                        <div class="size">43</div>
                        <div class="size">44</div>
                    </div>
                </div>
                <div class="titel-container">
                    <div class="titel-card">
                        <a href="">all over printed</a>
                    </div>
                    <div class="category-titel-card">
                        <span>all products,punjabi</span>
                    </div>
                </div>
                <div class="stock-container">
                    <div class="stock-card">
                        <div class="stock-arrow"></div>
                        <span>in stock</span>
                    </div>
                </div>
                <div class="star-container">
                    <div class="star-card">
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </div>
                </div>
                <div class="price-container">
                    <div class="discount-card"><span>&#2547; 1290.00</span></div>
                    <div class="price-card"><span>&#2547; 1190.00</span></div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <a href="">
                        <img src="{{ asset('products/three1.jpg') }}" alt="">
                    </a>
                    <div class="icon-card">
                        <div class="cart-icon">
                            <a href="" class="ri-shopping-cart-line"></a>
                            <a href="" class="ri-heart-line"></a>
                        </div>
                    </div>
                </div>
                <div class="size-container">
                    <div class="size-card">
                        <div class="size">42</div>
                        <div class="size">43</div>
                        <div class="size">44</div>
                    </div>
                </div>
                <div class="titel-container">
                    <div class="titel-card">
                        <a href="">all over printed</a>
                    </div>
                    <div class="category-titel-card">
                        <span>all products,punjabi</span>
                    </div>
                </div>
                <div class="stock-container">
                    <div class="stock-card">
                        <div class="stock-arrow"></div>
                        <span>in stock</span>
                    </div>
                </div>
                <div class="star-container">
                    <div class="star-card">
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </div>
                </div>
                <div class="price-container">
                    <div class="discount-card"><span>&#2547; 1290.00</span></div>
                    <div class="price-card"><span>&#2547; 1190.00</span></div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <a href="">
                        <img src="{{ asset('products/2-1-682x1024.jpg') }}" alt="">
                    </a>
                    <div class="icon-card">
                        <div class="cart-icon">
                            <a href="" class="ri-shopping-cart-line"></a>
                            <a href="" class="ri-heart-line"></a>
                        </div>
                    </div>
                </div>
                <div class="size-container">
                    <div class="size-card">
                        <div class="size">42</div>
                        <div class="size">43</div>
                        <div class="size">44</div>
                    </div>
                </div>
                <div class="titel-container">
                    <div class="titel-card">
                        <a href="">all over printed</a>
                    </div>
                    <div class="category-titel-card">
                        <span>all products,punjabi</span>
                    </div>
                </div>
                <div class="stock-container">
                    <div class="stock-card">
                        <div class="stock-arrow"></div>
                        <span>in stock</span>
                    </div>
                </div>
                <div class="star-container">
                    <div class="star-card">
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </div>
                </div>
                <div class="price-container">
                    <div class="discount-card"><span>&#2547; 1290.00</span></div>
                    <div class="price-card"><span>&#2547; 1190.00</span></div>
                </div>
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
