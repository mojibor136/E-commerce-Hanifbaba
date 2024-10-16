@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Billing & Shipping</title>
    @livewireStyles
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
        padding: 0!important;
    }

    body {
        background: #f1f1f1;
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

    /* Form styles */
    form {
        padding: 0;
    }

    /* Main container styles */
    main {
        display: flex;
        padding: 20px 70px;
        padding-bottom: 70px;
    }

    /* Order form styles */
    main .order-form {
        width: 50%;
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        height: fit-content;
    }

    .form-control {
        margin-top: 2px;
    }

    main .order-form h4 {
        text-align: center;
    }

    main .order-form .form-group {
        margin: 5px 0;
    }

    /* Order content container styles */
    .order-content-container {
        margin: 0 10px;
        width: 50%;
    }

    /* Order content styles */
    main .order-content {
        width: 100%;
        height: fit-content;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }

    main .order-content table> :not(caption)>*>* {
        padding: 10px 5px;
    }

    main .order-content table thead tr th {
        font-size: 14px;
    }

    main .order-content table tbody tr td {
        text-transform: capitalize;
        font-size: 14px;
        vertical-align: middle;
    }

    main .order-content table tbody tr td img {
        width: 40px;
        height: 40px;
        cursor: pointer
    }

    /* Summary styles */
    main .summary-ul {
        width: 100%;
        height: fit-content;
        padding: 20px;
        margin: 5px 0;
        background-color: #fff;
        border-radius: 5px;
    }

    main .summary-ul button {
        color: #fff;
        font-size: 16px;
        width: 100%;
        margin-top: 5px;
    }

    main .summary-ul h4 {
        font-size: 16px;
        color: #555666;
        text-transform: uppercase;
    }

    main .summary-ul .summary-li {
        display: flex;
        justify-content: space-between;
        text-transform: capitalize;
    }

    main .summary-ul .summary-li p {
        margin: 5px 0;
        font-size: 14px;
        font-weight: 500;
        color: #333;
    }

    .btn-success {
        width: 100%;
        font-weight: 400;
    }

    /* Place button bar styles */
    .button-container {
        padding: 10px;
        padding-top: 5px;
        background-color: #fff;
        visibility: hidden;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .button-container .total-bar {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .button-container .total-bar p {
        margin: 0;
    }

    .button-container .total-bar .name {
        padding: 5px 0;
        text-transform: uppercase;
    }

    .button-container .total-bar .price {
        color: rgb(255, 0, 149);
        padding: 5px;
        font-weight: 600;
    }

    .button-container .total-bar .details-bar {
        display: flex;
        align-items: center;
        position: absolute;
        right: 15px;
        text-transform: uppercase;
    }

    .button-container .total-bar .details-bar p {
        font-size: 13px;
    }

    .button-container .total-bar .details-bar .arr {
        width: 9px;
        height: 9px;
        border-top: 2px solid;
        border-left: 2px solid;
        transform: rotate(-135deg);
        margin: 5px;
        margin-top: 0;
    }

    .button-container .button {
        width: 100%;
    }

    .button-container .button button {
        width: 100%;
        font-weight: 600;
    }

    .text-danger {
        padding: 0;
        margin: 2px 0;
    }

    /* Media queries for responsiveness */

    @media (max-width: 768px) {
        main {
            display: flex;
            padding: 20px 30px;
        }

        main .order-form {
            width: 45%;
        }

        .order-content-container {
            width: 55%;
        }

        main .order-content {
            margin-bottom: 15px;
        }

        main .order-content table tbody tr td {
            text-align: left;
        }
    }

    @media (max-width: 640px) {
        .header-tow-ul {
            display: none;
        }

        nav {
            display: inline-flex;
            padding: 7px 10px;
        }

        main {
            display: flex;
            flex-direction: column;
            padding: 80px 5px;
            padding-top: 15px;
        }

        main .order-content table thead tr th {
            font-size: 14px;
        }

        main .order-form {
            width: auto;
        }

        .order-content-container {
            margin: 10px 0;
            width: auto;
        }

        .summary-ul button {
            display: none;
        }

        .summary-ul #total-div {
            display: none;
        }

        .button-container {
            visibility: visible;
        }

        footer {
            display: none;
        }
    }

    @media (max-width: 475px) {
        main {
            padding-bottom: 80px;
        }
    }
</style>

<body>
    <nav>
        <div class="button">
            <i class="ri-arrow-left-s-line" onclick="history.back()" id="back-buttton" style="font-size: 32px;"></i>
            <p style="margin:0;">Checkout</p>
        </div>
        <div class="button">
            <i class="ri-more-2-fill" style="font-size: 24px;"></i>
        </div>
    </nav>
    <form action="{{ route('storeshipping') }}" method="post">
        @csrf
        <main>
            <!-- ORDER FORM CUSTOMER DETAILS -->
            <div class="order-form">
                <h4>Billing & Shipping</h4>
                <div class="form-group">
                    @error('name')
                        <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                    <label for="Name">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Name" name="name">
                </div>
                <div class="form-group">
                    @error('email')
                        <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email">
                </div>
                <div class="form-group">
                    @error('phone')
                        <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                    <label for="phone">Mobile Number</label>
                    <input type="phone" class="form-control" placeholder="Enter your phone number" name="phone">
                </div>
                <div class="form-group">
                    @error('division')
                        <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                    <label for="division">Division</label>
                    <select name="division" id="division" class="form-control" wire:model="divisionId">
                        <option value="" selected disabled>Select Division</option>
                        @foreach ($divisions as $division)
                            <option value="{{ $division->divison }}">{{ $division->divison }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    @error('city')
                        <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                    <label for="city">City</label>
                    <select name="city" id="city" class="form-control" wire:model="cityId">
                        <option value="" selected disabled>Select City</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->city }}">{{ $city->city }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    @error('address')
                        <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                    <label for="Address">Address</label>
                    <input type="address" class="form-control" placeholder="Enter your Address" name="address">
                </div>
            </div>

            <!-- ORDER TABLE CONTENT SECTION -->
            <div class="order-content-container">
                <div class="order-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalPrice = 0;
                            @endphp
                            @foreach ($cartItem ?? [$buynowItem] as $index => $items)
                                @if ($buynowItem)
                                    @php
                                        $color = $items['productColor'] ?? 'Not Specified';
                                        $size = $items['productSize'] ?? 'Not Specified';
                                    @endphp
                                @endif
                                @if ($cartItem)
                                    @php
                                        $totalProducts = count($cartItem);
                                        $color = $items['productColor'] ?? 'Not Specified';
                                        $size = $items['productSize'] ?? 'Not Specified';
                                    @endphp
                                @else
                                    @php
                                        $totalProducts = '1';
                                    @endphp
                                @endif
                                <tr>
                                    <td>
                                        <img src="{{ asset('ProductImg/' . $items['productImg']) }}" alt="">
                                    </td>
                                    <td></td>
                                    <td>{{ $items['productName'] }} X {{ $items['productQuantity'] }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>BDT {{ $items['productQuantity'] * $items['productPrice'] }}</td>
                                </tr>
                                @php
                                    $totalPrice += $items['productQuantity'] * $items['productPrice'];
                                @endphp

                                {{-- data pass and checkout product hidden input  --}}
                                <input type="hidden" name="products[{{ $index }}][productId]"
                                    value="{{ $items['productId'] }}">
                                <input type="hidden" name="products[{{ $index }}][name]"
                                    value="{{ $items['productName'] }}">
                                <input type="hidden" name="products[{{ $index }}][price]"
                                    value="{{ $items['productPrice'] }}">
                                <input type="hidden" name="products[{{ $index }}][color]"
                                    value="{{ $color }}">
                                <input type="hidden" name="products[{{ $index }}][size]"
                                    value="{{ $size }}">
                                <input type="hidden" name="products[{{ $index }}][quantity]"
                                    value="{{ $items['productQuantity'] }}">
                                <input type="hidden" name="products[{{ $index }}][image]"
                                    value="{{ $items['productImg'] }}">
                            @endforeach
                        </tbody>
                        <thead>
                            <tr>
                                <th>TOTAL</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>BDT {{ $totalPrice }}</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                @php
                    $charge = getCharge();
                @endphp

                <div class="summary-ul">
                    <h4>Total Summary</h4>
                    <div class="summary-li">
                        <p>Items Total</p>
                        <p> {{ $totalProducts }}</p>
                    </div>
                    <div class="summary-li">
                        <p>Delivery Fee</p>
                        <p style="text-transform: uppercase;">BDT
                            {{ $charge && $charge->charge ? $charge->charge : 0 }}</p>
                    </div>
                    @php
                        $chargeAmount = $charge && $charge->charge ? $charge->charge : 0;
                        $total = $chargeAmount + $totalPrice;
                    @endphp
                    <div class="summary-li">
                        <p>Total Payment</p>
                        <p style="text-transform: uppercase;">BDT {{ $total }}</p>
                    </div>
                    <div class="summary-li" id="total-div">
                        <p>Total</p>
                        <p style="text-transform: uppercase;">BDT {{ $total }}</p>
                    </div>
                    <input type="hidden" value="{{ $total }}" name="total">
                    <button type="submit" class="btn btn-success">PLACE ORDER</button>
                </div>
            </div>
        </main>

        <!-- ORDER BUTTON SECTION -->

        <div class="button-container">
            <div class="total-bar">
                <p class="name">Total:</p>
                <p class="price">700Tk</p>
                <div class="details-bar">
                    <p>Details</p>
                    <div class="arr"></div>
                </div>
            </div>
            <div class="button">
                <input type="submit" class="btn btn-success" value="PLACE ORDER">
            </div>
        </div>
    </form>
    @livewireScripts
</body>

</html>
@include('layouts.footer')
