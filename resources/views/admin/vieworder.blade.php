@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Order Invoice</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Freeman&family=Jaro:opsz@6..72&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Radio+Canada+Big:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet">
    </head>
    <style>
        .main {
            grid-template-columns: 1fr;
        }

        .order-view-container {
            background: #fff;
            padding: 30px;
            width: 100%;
        }

        .order-hedding {
            text-transform: capitalize;
            display: flex;
            flex-direction: column;
            padding-bottom: 0px;
        }

        .order-hedding h2 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .order-hedding span {
            font-weight: 600;
            text-transform: capitalize;
            font-size: 16px;
        }

        .order-view-content {
            width: 100%;
            padding: 0 30px;
        }

        .order-details {
            height: initial;
            padding: 15px 0;
            display: flex;
            align-items: center;
        }

        .order-list {
            border-top: 1px solid #999;
            padding: 30px 0;
            padding-bottom: 5px;
            padding-top: 10px;
        }

        .order-info {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .order-info .name,
        .Address,
        .email,
        .phone {
            margin: 6px 0;
            text-transform: capitalize;
        }

        .type {
            font-weight: 600;
            font-size: 18px;
        }

        .table> :not(caption)>*>* {
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            vertical-align: middle;
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .total td {
            border-bottom: none !important;
            font-weight: 600;
        }

        .print-button {
            width: 100%;
            text-align: right;
        }

        label {
            text-transform: capitalize;
        }

        @media print {
            .main {
                padding: 0;
            }

            .print-button {
                display: none !important;
            }

            body {
                display: flow-root;
            }

            .navbar-nav {
                display: none;
            }

            .sidebar .admin-logo {
                border: none;
            }

            .order-view-container,
            .order-view-container {
                display: revert !important;
            }
        }
    </style>

    <body>
        <div class="order-view-container">
            <div class="order-view-content">
                <div class="order-hedding">
                    <h2>Order Invoice</h2>
                    <span>Date: {{ $order->payment->paymentDate }}</span>
                </div>
                <div class="order-details">
                    <div class="order-info">
                        <div class="type">
                            <span>Order Detailes</span>
                        </div>
                        <div class="name">
                            <label for="">Name :</label>
                            <span>{{ $order->shipping->name }}</span>
                        </div>
                        <div class="email">
                            <label for="">Email :</label>
                            <span>{{ $order->shipping->email }}</span>
                        </div>
                        <div class="Address">
                            <label for="">Address :</label>
                            <span>{{ $order->shipping->country }} {{ $order->shipping->city }}
                                {{ $order->shipping->address }}</span>
                        </div>
                        <div class="phone">
                            <label for="">Phone number :</label>
                            <span>{{ $order->shipping->number }}</span>
                        </div>
                    </div>
                </div>
                <div class=order-list>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                        @foreach ($products as $orderInfo)
                            <tr>
                                <td>{{ $orderInfo->id }}</td>
                                <td>
                                    <img src="{{ asset('ProductImg/' . $orderInfo->product_img) }}" width="40"
                                        alt="">
                                </td>
                                <td>{{ $orderInfo->productName }}</td>
                                <td>BDT {{ $orderInfo->quantity * $orderInfo->product_price }}.00</td>
                                <td>{{ $orderInfo->quantity }}</td>
                            </tr>
                        @endforeach
                        <tr class="total">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>TOTAL</td>
                            <td>BDT {{ $order->payment->amount }}.00</td>
                        </tr>
                    </table>
                </div>
                <div class="print-button">
                    <button class="btn btn-primary" onclick="window.print()">Print Invoice</button>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
