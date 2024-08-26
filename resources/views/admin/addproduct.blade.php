@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Product Add</title>
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

        .product-link-content .add a {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
        }

        label {
            margin-top: 8px;
            font-size: 15px;
            margin-bottom: 6px;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            color: #333;
        }

        .button {
            cursor: pointer;
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .size-show,
        .color-show {
            cursor: pointer;
        }

        .size-content,
        .color-content {
            display: none;
        }

        .size,
        .color {
            font-size: 14px;
            display: flex;
            gap: 5px;
            align-items: center;
        }
    </style>

    <body>
        <div class="all-product-container">
            <div class="product-header">
                <span>add products</span>
            </div>
            <div class="all-product-content">
                <div class="product-link-content">
                    <div class="add">
                        <a href="{{ route('allproduct') }}" class="btn btn-success">All Products</a>
                    </div>
                </div>
                <div class="product-content">
                    <form action="{{ route('storeproduct') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Product Name" name="name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="" class="form-control" cols="30" rows="5">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Regular Price</label>
                                <input type="number" class="form-control" placeholder="Enter Product Regular Price"
                                    name="regularPrice" value="{{ old('regularPrice') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Prices</label>
                                <input type="number" class="form-control" placeholder="Enter Product Prices" name="price"
                                    value="{{ old('price') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" placeholder="Enter Product Quantity"
                                    name="quantity" value="{{ old('quantity') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Products Size</label>
                                <div class="content form-control">
                                    <div class="button">
                                        <input type="checkbox" id="size-show">
                                        <label>Products Size</label>
                                    </div>
                                    <div class="size-content" id="size-content">
                                        <div class="flex">
                                            @foreach ($sizes as $index => $size)
                                                <div class="size">
                                                    <input type="checkbox" value="{{ $size->id }}"
                                                        name="size[{{ $index }}][sizeId]">
                                                    <label>{{ $size->size }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Products Color</label>
                                <div class="content form-control">
                                    <div class="button">
                                        <input type="checkbox" id="color-show">
                                        <label>Products Color</label>
                                    </div>
                                    <div class="color-content" id="color-content">
                                        <div class="flex">
                                            @foreach ($colors as $index => $color)
                                                <div class="color">
                                                    <input type="checkbox" name="color[{{ $index }}][colorId]"
                                                        value="{{ $color->id }}">
                                                    <label>{{ $color->color }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect">Select Category</label>
                                <select class="form-control" id="exampleSelect" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect">Select Category</label>
                                <select class="form-control" id="exampleSelect" name="subcategory_id">
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="formFileDisabled" class="form-label mb-1">Add Image</label>
                                <input class="form-control" type="file" id="formFileDisabled" name="image" />
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Add Products</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('size-show').addEventListener('change', function() {
                var sizeContent = document.getElementById('size-content');
                if (this.checked) {
                    sizeContent.style.display = 'block';
                } else {
                    sizeContent.style.display = 'none';
                }
            });

            document.getElementById('color-show').addEventListener('change', function() {
                var colorContent = document.getElementById('color-content');
                if (this.checked) {
                    colorContent.style.display = 'block';
                } else {
                    colorContent.style.display = 'none';
                }
            });
        </script>
    </body>

    </html>
@endsection
