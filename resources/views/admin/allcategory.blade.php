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

        .table> :not(caption)>*>* {
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            vertical-align: middle;
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .product-content table tr td {
            text-transform: capitalize;
        }

        .product-content table tr td .btn {
            padding: 4px 7px;
        }

        .alert-success {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .all-product-container {
                padding: 20px 5px;
            }

            .product-content table tr td .btn {
                margin: 2px 0;
            }
        }
    </style>

    <body>
        <div class="all-product-container">
            <div class="product-header">
                <span>all categories</span>
            </div>
            @if (session()->has('success'))
                <li class="alert alert-success">{{ session()->get('success') }}</li>
            @endif
            <div class="all-product-content">
                <div class="product-link-content">
                    <div class="add">
                        <a href="{{ route('addcategory') }}" class="btn btn-success">Add Categories</a>
                    </div>
                </div>
                <div class="product-content">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>SubCategory Count</th>
                            <th>Action</th>
                        </tr>
                        @php
                            use Illuminate\Support\Str;
                        @endphp
                        @foreach ($Categoires as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>
                                    <img src="{{ asset('CategoryImg/' . $category->category_img) }}" width="50"
                                        alt="">
                                </td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->subcategory_count }}</td>
                                <td>
                                    <a href="{{ route('editcategory', $category->id) }}" class="btn btn-warning">
                                        <i class="ri-pencil-line"></i>
                                    </a>
                                    <a href="" class="btn btn-danger">
                                        <i class="ri-close-line"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
