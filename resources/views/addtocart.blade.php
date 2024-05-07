@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Noto Sans Bengali', Arial, sans-serif;
        background: #f1f1f1;
    }

    nav {
        background-color: #dc3545;
        width: 100%;
        padding: 8px 30px 8px 30px;
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
    }

    .select-box {
        display: flex;
        align-items: center;
    }

    .select-box span {
        font-size: 13px;
        padding: 0 5px;
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
    }

    .card-container .list-content .summary-li {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        text-transform: uppercase;
    }

    .card-container .list-content .summary-li p {
        margin: 5px 0;
        font-size: 12px;
        color: #666666;
    }

    .card-container .list-content .summary-li form .voucher {
        width: -webkit-fill-available;
        display: flex;
    }
    .card-container .list-content .summary-li .form-control {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-container .list-content .summary-li .btn-success {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .card-container .list-content .summary-li form .btn-danger {
        width: -webkit-fill-available;
        margin-top: 8px;
        border-radius: 8px;
    }

    .card-container .list-content .summary-li input::placeholder {
        font-size: 14px;
    }

    .checkout-button-bar {
        padding: 10px;
        padding-top: 5px;
        background-color: #fff;
        visibility: hidden;
        position: fixed;
        bottom: 0;
        width: 100%;
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
            padding: 5px 10px;
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
            margin-bottom: 80px;
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
            font-size: 12px;
        }

        .card-container .list-content .summary-li form .btn-danger{
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

        footer {
            display: none;
        }
    }

    @media (max-width: 475px) {
        .card-container .cart-content table tbody tr td input {
            width: 30px;
            height: 30px;
            padding: 0;
        }
    }

    @media (max-width: 320px) {}
</style>

<body>
    <nav>
        <div class="button">
            <i class="ri-arrow-left-s-line" onclick="history.back()" id="back-buttton" style="font-size: 32px;"></i>
            <p style="margin:0;">AddtoCart(3)</p>
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
                            <tr>
                                <td class="align-middle">
                                    <img src="{{ asset('products/product4.png') }}" alt="">
                                </td>
                                <td class="align-middle">Amazing Rice Flour Face Packs For All Your Skin Concerns X2
                                </td>
                                <td class="align-middle"><input type="text" style="text-align: center;"
                                        class="form-control" value="5"></td>
                                <td class="align-middle">৳500</td>
                                <td class="align-middle">
                                    <a href="" class="ri-delete-bin-7-fill btn btn-danger"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--ORDER PRODUCT LIST SECTION -->
            <div class="list-content">
                <h4>Order Summary</h4>
                <div class="summary-li">
                    <p>Subtotal items</p>
                    <p></p>
                </div>
                <div class="summary-li">
                    <p>Shopping Fee Discount</p>
                    <p style="text-transform: uppercase;">450tk</p>
                </div>
                <div class="summary-li">
                    <p>Total</p>
                    <p style="text-transform: uppercase;">400tk</p>
                </div>
                <div class="summary-li">
                    <form action="">
                        <div class="voucher">
                            <input type="text" class="form-control"
                            placeholder="Enter Voucher Code">
                            <input type="submit" class="btn btn-success" value="APPLY">
                        </div>
                        <input type="submit" class="btn btn-danger" value="CHECKOUT">

                    </form>
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
    </main>
    <!-- ORDER BUTTON SECTION -->
    <form action="">
        <input type="hidden" value="id" name="cart">
        <div class="checkout-button-bar">
            <div class="total-bar">
                <p class="name">Total:</p>
                <p class="price">2500Tk</p>
                <div class="details-bar">
                    <p>Details</p>
                    <div class="arr"></div>
                </div>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-warning" style=" font-weight:400;">CHECKOUT</button>
            </div>
        </div>
    </form>
</body>

</html>
@include('layouts.footer')
