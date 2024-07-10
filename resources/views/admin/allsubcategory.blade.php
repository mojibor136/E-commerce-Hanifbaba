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

        .table-wrapper {
            white-space: nowrap;
        }

        .product-content table tr td {
            text-transform: capitalize;
        }

        .product-content table tr td .btn {
            padding: 4px 7px;
        }

        @media (max-width: 768px) {
            .all-product-container {
                padding: 20px 10px;
                overflow: auto;
                display: flex;
                flex-direction: column;
            }

            .product-content table tr td .btn {
                margin: 2px 0;
            }
        }
    </style>

    <body>
        <div class="all-product-container">
            <div class="product-header">
                <span>all service subcategories</span>
            </div>
            <div class="all-product-content">
                <div class="product-link-content">
                    <div class="add">
                        <a href="{{ route('addsubcategory') }}" class="btn btn-success">Add SubCategories</a>
                    </div>
                </div>
                @if (session()->has('success'))
                    <li class="alert alert-success">{{ session()->get('success') }}</li>
                @endif
                <div class="product-content">
                    <div class="table-wrapper">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>SubCategory Name</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            @php
                                use Illuminate\Support\Str;
                            @endphp
                            @foreach ($subcategories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ Str::limit($category->subcategory_name, 15) }}</td>
                                    <td>{{ Str::limit($category->category_name, 15) }}</td>
                                    <td>
                                        <a href="{{ route('editsubcategory', $category->id) }}" class="btn btn-warning">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <a href="{{ route('deletesubcategory', $category->id) }}" class="btn btn-danger">
                                            <i class="ri-close-line"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
