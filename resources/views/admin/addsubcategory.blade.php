@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Service Category</title>
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
                <span>Add SubCategory</span>
            </div>
            <div class="all-product-content">
                <div class="product-link-content">
                    <div class="add">
                        <a href="{{ route('allsubcategory') }}" class="btn btn-success">All SubCategories</a>
                    </div>
                </div>
                <div class="product-content">
                    <form action="{{ route('storesubcategory') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            @error('subcategory_name')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="subcategory_name">Service Name</label>
                                <input type="text" class="form-control" placeholder="Enter Service Name"
                                    name="subcategory_name" id="subcategory_name">
                            </div>
                            @error('category_id')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Add SubCategory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
