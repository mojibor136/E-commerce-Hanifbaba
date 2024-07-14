@include('layouts.header')
@include('admin.logo.logo')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo/Hanif-Baba-2-2.png') }}">
    <title>Hanif-Baba</title>
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap"
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
        padding: 0 70px;
        margin-bottom: 50px;
    }

    .card-container {
        margin-top: 20px;
        width: 100%;
        display: flex;
    }

    .cart-container {
        margin-right: 10px;
        width: 60%;
    }

    .delete-content-btn {
        display: flex;
        justify-content: space-between;
        width: 100%;
        background-color: rgb(255, 255, 255);
        padding: 10PX;
        border-radius: 5px;
    }

    .delete-content-btn a {
        text-decoration: none;
        color: black;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .select-box {
        display: flex;
        align-items: center;
    }

    .select-box span {
        font-size: 14px;
        padding: 0 5px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .card-container .cart-content {
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        height: fit-content;
        width: 100%;
        margin: 5px 0;
    }

    .card-container .cart-content li {
        text-align: center;
    }

    .card-container .cart-content .table> :not(caption)>*>* {
        padding: 10px 5px;
    }

    .card-container .cart-content table tbody tr td img {
        width: 40px;
        height: 40px;
        cursor: pointer
    }

    .card-container .cart-content table tbody tr td input {
        width: 40px;
        height: 34px;
        padding: 0;
    }

    .card-container .cart-content table tbody tr td {
        text-transform: capitalize;
        font-size: 14px;
    }

    .card-container .cart-content table tbody tr td .btn {
        padding: 3px 7px;
    }

    .card-container .list-content {
        height: fit-content;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        width: 40%;
    }

    .card-container .list-content button {
        color: #fff;
        font-size: 16px;
        width: 100%;
        margin-top: 5px;
    }

    .card-container .list-content h4 {
        font-size: 14px;
        text-transform: uppercase;
        color: #555666;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .card-container .list-content .summary-li {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        text-transform: capitalize;
    }

    .card-container .list-content .summary-li p {
        margin: 5px 0;
        font-size: 14px;
        color: #666666;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .card-container .list-content .button-content form .voucher {
        width: -webkit-fill-available;
        display: flex;
    }

    .card-container .list-content .button-content .form-control {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .card-container .list-content .button-content .btn-success {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .card-container .list-content .button-content form .btn-danger {
        width: -webkit-fill-available;
        margin-top: 8px;
        border-radius: 8px;
    }

    .card-container .list-content .button-content input::placeholder {
        font-size: 14px;
    }

    .checkout-button-bar .total-bar {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .checkout-button-bar .total-bar p {
        margin: 0;
    }

    .checkout-button-bar .total-bar .name {
        padding: 5px 0;
        text-transform: uppercase;
    }

    .checkout-button-bar .total-bar .price {
        color: rgb(255, 0, 149);
        padding: 5px;
        font-weight: 600;
    }

    .checkout-button-bar .total-bar .details-bar {
        display: flex;
        align-items: center;
        position: absolute;
        right: 15px;
        text-transform: uppercase;
    }

    .button-container .total-bar .details-bar p {
        font-size: 13px;
    }

    .checkout-button-bar .total-bar .details-bar .arr {
        width: 9px;
        height: 9px;
        border-top: 2px solid;
        border-left: 2px solid;
        transform: rotate(-135deg);
        margin: 5px;
        margin-top: 0;
    }

    .checkout-button-bar .button {
        width: 100%;
    }

    .checkout-button-bar .button button {
        width: 100%;
    }


    @media (max-width: 1280px) {}

    @media (max-width: 1024px) {}

    @media (max-width: 768px) {
        nav {
            padding: 0px 10px;
        }

        .main-container {
            padding: 0 30px;
        }
    }

    @media (max-width: 640px) {

        nav {
            display: inline-flex;
        }

        .main-container {
            padding: 0;
        }

        .card-container {
            width: 100%;
            flex-direction: column;
            height: fit-content;
            padding: 6.5px;
            padding-bottom: 0;
            margin: 0;
        }

        .cart-container {
            margin: 0;
            width: 100%;
        }

        .card-container .list-content {
            width: initial;
            margin: 0;
            padding: 15px 10px;
        }

        .card-container .list-content h4 {
            font-size: 14px;
        }

        .card-container .list-content .summary-li p {
            font-size: 14px;
        }

        .card-container .list-content .summary-li form .btn-danger {
            display: none;
        }

        .card-container .cart-content {
            width: initial;
            margin: 5px 0;
            padding: 10px 0;
        }

        .checkout {
            display: none;
        }

        .checkout-button-bar {
            visibility: visible;
        }
    }

    @media (max-width: 475px) {
        .card-container .cart-content table tbody tr td input {
            width: 30px;
            height: 30px;
            padding: 0;
        }
    }
</style>

<body>
    <nav>
        <div class="button">
            <i class="ri-arrow-left-s-line" onclick="history.back()" id="back-buttton" style="font-size: 32px;"></i>
            <p style="margin:0;">AddtoCart({{ $carts->count() ? $carts->count() : 0 }})</p>
        </div>
        <div class="button">
            <i class="ri-more-2-fill" style="font-size: 24px;"></i>
        </div>
    </nav>
    <main class="main-container">
        <div class="card-container">
            <div class="cart-container">
                <div class="delete-content-btn">
                    <div class="select-box">
                        <span>All Product Items</span>
                    </div>
                    <div>
                        <a href="">
                            <span class="ri-delete-bin-7-fill" style="color: #adb5bd;"></span>
                            <span style="font-size: 14px;">All Delete</span>
                        </a>
                    </div>
                </div>

                <!-- ORDER TABLE PRODUCT SECTION  -->

                <div class="cart-content">
                    <table class="table">
                        <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="align-middle">
                                        <img src="{{ asset('ProductImg/' . $cart->product_img) }}" alt="">
                                    </td>
                                    <td class="align-middle">{{ $cart->product_name }} X{{ $cart->product_quantity }}
                                    </td>
                                    <td class="align-middle"><input type="text" style="text-align: center;"
                                            class="form-control" disabled value="{{ $cart->product_quantity }}"></td>
                                    <td class="align-middle">BDT{{ $cart->product_price }}</td>
                                    <td class="align-middle">
                                        <a href="{{ route('delete.cart', $cart->id) }}"
                                            class="ri-close-line btn btn-danger"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--ORDER PRODUCT LIST SECTION -->
            <div class="list-content">
                <h4>Order Summary</h4>
                <div class="summary-li">
                    <p>Subtotal items</p>
                    <p>{{ $carts->count() ? $carts->count() : 0 }}</p>
                </div>
                <div class="summary-li">
                    <p>Shopping Fee Discount</p>
                    <p style="text-transform: uppercase;">BDT{{ $carts->isEmpty() ? 0 : $carts->sum('product_price') }}
                    </p>
                </div>
                <div class="summary-li">
                    <p>Total</p>
                    <p style="text-transform: uppercase;">BDT{{ $carts->isEmpty() ? 0 : $carts->sum('product_price') }}
                    </p>
                </div>
                <div class="button-content">
                    <form action="{{ route('sanddata') }}" method="POST">
                        @csrf
                        <div class="voucher">
                            <input type="text" class="form-control" placeholder="Enter Voucher Code">
                            <input type="submit" class="btn btn-success" value="APPLY">
                        </div>
                        @foreach ($carts as $index => $cart)
                            <input type="hidden" value="{{ $cart->id }}"
                                name="cart[{{ $index }}][productId]">
                            <input type="hidden" value="{{ $cart->product_img }}"
                                name="cart[{{ $index }}][productImg]">
                            <input type="hidden" value="{{ $cart->product_name }}"
                                name="cart[{{ $index }}][productName]">
                            <input type="hidden" value="{{ $cart->product_quantity }}"
                                name="cart[{{ $index }}][productQuantity]">
                            <input type="hidden" value="{{ $cart->product_price }}"
                                name="cart[{{ $index }}][productPrice]">
                            <input type="hidden" value="{{ $cart->product_size }}"
                                name="cart[{{ $index }}][productSize]">
                        @endforeach
                        <input type="hidden" value="{{ $carts->sum('product_price') }}" name="totalPrice">
                        <input type="submit" class="btn btn-danger" value="CHECKOUT">
                    </form>
                </div>
            </div>
        </div>
        {{-- products container --}}

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
        {{-- products container --}}
    </main>
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script>
        function updateCart(cartId, quantity) {
            $.ajax({
                url: '/update-cart',
                method: 'POST',
                data: {
                    cartId: cartId,
                    quantity: quantity,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    location.reload();
                },
                error: function(error) {
                    console.error('Error updating cart:', error);
                }
            });
        }
        $(document).on('change', '.form-control', function() {
            var cartId = $(this).data('cart-id');
            var quantity = $(this).val();
            updateCart(cartId, quantity);
        });

        function submitForm(element) {
            element.nextElementSibling.submit();
        }
    </script>
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
</body>

</html>
@include('layouts.footer')
