@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
</head>
<style>
    body {
        padding: 0 !important;
    }

    nav {
        background-color: #A60DE4;
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
        padding: 0 60px;
    }

    .product-container .product-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
    }

    @media screen and (max-width: 640px) {
        nav {
            display: inline-flex;
            padding: 5px 10px;
        }

        .main-container {
            padding: 0;
        }

        .product-container .product-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
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
</body>

</html>
@include('layouts.footer')
