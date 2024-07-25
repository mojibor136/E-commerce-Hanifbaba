@extends('admin.dashboard')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
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

        .all-product-container {
            background: #fff;
            padding: 30px;
            width: 100%;
        }

        .product-header {
            text-transform: uppercase;
            font-size: 18px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
        }

        .product-link-content {
            width: 100%;
            padding: 20px 0;
        }

        label {
            margin-top: 5px;
            margin-bottom: 2px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 500;
        }
    </style>

    <body>
        <div class="all-product-container">
            <div class="product-header">
                <span>update products</span>
            </div>
            <div class="all-product-content">
                <div class="product-link-content">
                    <div class="add">
                        <a href="{{ route('allproduct') }}" class="btn btn-success">All Products</a>
                    </div>
                </div>
                <div class="product-content">
                    <form action="{{ route('updateproduct') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            @foreach ($products as $product)
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Name"
                                        name="name" value="{{ $product->product_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Description"
                                        name="description" value="{{ $product->product_desc }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Prices</label>
                                    <input type="number" class="form-control" placeholder="Enter Product Prices"
                                        name="price" value="{{ $product->product_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Regular Prices</label>
                                    <input type="number" class="form-control" placeholder="Enter Product Prices"
                                        name="regular_price" value="{{ $product->regular_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Quantity</label>
                                    <input type="number" class="form-control" placeholder="Enter Product Quantity"
                                        name="quantity" value="{{ $product->product_quantity }}">
                                </div>
                                <div class="form-group mt-1">
                                    <img src="{{ asset('ProductImg/' . $product->product_img) }}" width="50">
                                </div>
                                <div>
                                    <label for="formFileDisabled" class="form-label mb-1">Add Image</label>
                                    <input class="form-control" type="file" id="formFileDisabled" name="image" />
                                </div>
                                <input type="hidden" name="id" value="{{ $product->id }}">
                            @endforeach
                            <button type="submit" class="btn btn-primary mt-3">Update Products</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
