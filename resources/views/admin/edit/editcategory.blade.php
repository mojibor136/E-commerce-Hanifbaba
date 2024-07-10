@extends('admin.dashboard')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update Category</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
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
                <span>Update Categories</span>
            </div>
            <div class="all-product-content">
                <div class="product-link-content">
                    <div class="add">
                        <a href="{{ route('allcategory') }}" class="btn btn-success">All Categories</a>
                    </div>
                </div>
                <div class="product-content">
                    <form action="{{ route('updatecategory') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            @error('category_name')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="category_name">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Category Name"
                                    name="category_name" value="{{ $category->category_name }}">
                            </div>
                            @error('category_img')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                            <div class="form-group mt-1">
                                <img src="{{ url('CategoryImg/' . $category->category_img) }}" width="50"
                                    alt="">
                            </div>
                            <div>
                                <label for="category_img" class="form-label mb-1">Add Image</label>
                                <input class="form-control" type="file" id="category_img" name="category_img" />
                            </div>
                            <input type="hidden" value="{{ $category->id }}" name="id">
                            <button type="submit" class="btn btn-primary mt-3">Update Categories</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
