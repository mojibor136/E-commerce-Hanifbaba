@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deliver Update</title>
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

        input[type="number"],
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
        <div class="container">
            <h2>New Delivery Charge</h2>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <li>{{ session()->get('success') }}</li>
                </div>
            @endif
            <form action="{{ route('storecharge') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="name">Delivery Charge:</label>
                @if ($charge)
                    <input type="number" class="form-control" value="{{ $charge->charge }}" id="charge" name="charge"
                        required>
                    <input type="hidden" name="id" value="{{ $charge->id }}">
                @else
                    <input type="number" class="form-control" id="charge" name="charge" required>
                @endif

                <button type="submit" class="btn btn-success">Add Charge</button>
            </form>
        </div>
    </body>

    </html>
@endsection
