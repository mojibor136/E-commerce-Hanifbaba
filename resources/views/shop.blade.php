@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    nav {
        background-color: #dc3545;
        width: 100%;
        display: flex;
        justify-content: space-between;
        display: none;
    }

    nav .button {
        display: flex;
        align-items: center;
        color: #fff;
        font-weight: 400;
        cursor: pointer;
    }

    .main-container {
        height: 100%;
        padding: 20px 30px;
    }

    /* top products container css*/
    .main-product-container {
        margin: 25px 0;
        margin-bottom: 10px;
    }

    .main-product-container .type {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 5px 10px;
    }

    .main-product-container .type span {
        font-size: 18px;
        text-transform: uppercase;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
        color: #333;
    }

    .product-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        column-gap: 5px;
        row-gap: 15px;
    }

    .product-container a {
        text-decoration: none;
    }

    .product-card {
        width: 100%;
        background: #fff;
        padding-bottom: 2px;
        box-shadow: 1px 1px 5px 0px #eee;
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

    .product-card .image:hover img {
        transform: scale(1.05);
        transition: transform 0.3s ease;
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
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        max-height: 2 * (14px + 4px);
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
    }

    /* Media query for screens between 1024px and 768px */
    @media screen and (max-width: 1024px) {
        .main-container {
            padding: 0px 60px;
        }

        .product-card .image {
            width: 100%;
        }
    }

    /* Media query for screens between 768px and 480px */
    @media screen and (max-width: 768px) {
        .main-container {
            padding: 0 20px;
        }

        .product-container {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
    }

    @media screen and (max-width: 640px) {
        nav {
            display: inline-flex;
            padding: 0px 10px;
        }

        .main-container {
            padding: 0 10px;
            margin-bottom: 10px;
        }

        .product-container {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .product-card .name {
            color: #444;
        }

        .product-card .price .discount {
            color: #555;
        }
    }

    @media screen and (max-width: 475px) {

        .main-container {
            padding: 0;
        }

        .main-product-container {
            margin: 0;
            padding: 10px 5px;
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
        .product-container {
            grid-template-columns: 1fr 1fr;
        }
    }
</style>

<body>
    <nav>
        <div class="button">
            <i class="ri-arrow-left-s-line" onclick="history.back()" id="back-buttton" style="font-size: 32px;"></i>
            <p style="margin:0;">All Products</p>
        </div>
        <div class="button">
            <i class="ri-more-2-fill" style="font-size: 24px;"></i>
        </div>
    </nav>
    <div class="main-container">
        {{-- top products container --}}
        <div class="main-product-container">
            <div class="type">
                <span>all products</span>
            </div>
            <div class="product-container">
                @foreach ($products as $product)
                    <a href="{{ route('singleproduct', $product->id) }}">
                        <div class="product-card">
                            <div class="image">
                                <img src="{{ asset('assets/ProductImg/' . $product->product_img) }}" alt="">
                            </div>
                            <div class="name">
                                {{ $product->product_name }}
                            </div>
                            <div class="free-card">
                                <div class="free">
                                    <i class="ri-star-fill"></i>
                                    <span>free delivery</span>
                                </div>
                            </div>
                            <div class="price-card">
                                <div>
                                    <span class="tk">৳{{ $product->product_price }}</span>
                                    <span class="discount">৳{{ $product->regular_price }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
@include('layouts.footer')
