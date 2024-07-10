@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>All Employer</title>
            <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        </head>
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

        .product-content table tr td .btn {
            padding: 2px 6px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .all-product-container {
                padding: 20px 10px;
            }

            .product-content table tr td .btn {
                margin: 2px 0;
            }
        }
    </style>

    <body>
        <div class="all-product-container">
            <div class="product-header">
                <span>all user & customers</span>
            </div>
            <div class="all-product-content">
                <div class="product-link-content">
                    <div class="add">
                    </div>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="product-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Join Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->number }}</td>
                                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ route('deleteuser', $user->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>

    </html>
@endsection
