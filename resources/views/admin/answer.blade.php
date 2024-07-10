@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>All Category</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
        <link
            href="https://fonts.googleapis.com/css2?family=Freeman&family=Jaro:opsz@6..72&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Radio+Canada+Big:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet">
    </head>
    <style>
        .main {
            grid-template-columns: 1fr;
        }

        .all-product-container {
            background: #fff;
            padding: 30px 20px;
            width: 100%;
            overflow: auto;
        }

        .ask-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            width: 80%;
        }

        .product-content {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-img {
            width: 250px;
        }

        .product-img img {
            width: 100%;
        }

        .product-info {
            padding: 10px 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .group {
            display: flex;
            flex-direction: column;
        }

        .group label {
            font-family: "Roboto", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .group span {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
            font-size: 16px;
            text-transform: capitalize;
        }

        form label {
            font-family: "Roboto", sans-serif;
            font-weight: 600;
            font-style: normal;
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .all-product-container {
                padding: 10px;
            }

            .content {
                width: 100%;
            }

            .ask-container {
                width: 100%;
                height: auto;
            }

            .product-img {
                width: auto;
            }
        }
    </style>

    <body>
        <div class="all-product-container">
            <div class="ask-container">
                <div class="content">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="{{ asset('ProductImg/' . $question->product->productImg) }}" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="product-info">
                            <div class="group">
                                <label for="">PRODUCT NAME</label>
                                <span>{{ $question->product->productName }}</span>
                            </div>
                            <div class="group">
                                <label for="">QUESTION</label>
                                <span>{{ $question->question }}</span>
                            </div>
                            @if ($question->answered)
                                <div class="group">
                                    <label for="">ANSWER</label>
                                    <span>{{ $question->answered }}</span>
                                </div>
                            @endif
                        </div>
                        @if ($question->answered)
                        @else
                            <form action="{{ route('answerupdate') }}" method="post">
                                @csrf
                                <label for="">ANSWER</label>
                                <input type="hidden" value="{{ $question->id }}" name="questionId">
                                <textarea name="answer" id="" class="form-control" rows="2"></textarea>
                                <input type="submit" value="Answered " class="btn btn-dark mt-3">
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
