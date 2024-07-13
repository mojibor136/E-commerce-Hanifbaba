@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Address</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <style>
        .main {
            grid-template-columns: 1fr;
        }

        .container {
            background-color: white;
            padding: 50px 120px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin-top: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        button {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 30px 10px;
            }
        }
    </style>

    <body>
        @php
            $shop = getShop();
        @endphp
        <div class="container">
            <h2>New Shop Address</h2>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <li>{{ session()->get('success') }}</li>
                </div>
            @endif
            <form action="{{ route('storeaddress') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if ($shop)
                    <label for="name">Shop Address</label>
                    <input type="text" class="form-control" value="{{ $shop->address }}" id="shop" name="address"
                        required>

                    <label for="name">Shop Number</label>
                    <input type="text" class="form-control" value="{{ $shop->number }}" name="number" required>

                    <label for="name">Shop Email</label>
                    <input type="email" class="form-control" value="{{ $shop->email }}" name="email" required>

                    <input type="hidden" name="id" value="{{ $shop->id }}">
                @else
                    <label for="name">Shop Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>

                    <label for="name">Shop Number</label>
                    <input type="text" class="form-control" id="number" name="number" required>

                    <label for="name">Shop Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                @endif

                <button type="submit" class="btn btn-success">Add Address</button>
            </form>
        </div>
    </body>

    </html>
@endsection
