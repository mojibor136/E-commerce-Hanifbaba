@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Category</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
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
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .product-link-content {
            width: 100%;
            padding: 20px 0;
        }

        label {
            margin-top: 5px;
            margin-bottom: 2px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }
    </style>

    <body>
        <div class="all-product-container">
            <div class="product-header">
                <span>Add Categories</span>
            </div>
            <div class="all-product-content">
                <div class="product-link-content">
                    <div class="add">
                        <a href="{{ route('allcategory') }}" class="btn btn-success">All Categories</a>
                    </div>
                </div>
                <div class="product-content">
                    <form action="{{ route('storecategory') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            @error('category_name')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Category Name" name="category_name">
                            </div>
                            @error('category_img')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                            <div>
                                <label for="formFileDisabled" class="form-label mb-1">Add Image</label>
                                <input class="form-control" type="file" id="formFileDisabled" name="category_img" />
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Add Categories</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
