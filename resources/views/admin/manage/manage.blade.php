@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Settings</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
        <link
            href="https://fonts.googleapis.com/css2?family=Freeman&family=Jaro:opsz@6..72&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Radio+Canada+Big:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet">
        <style>
            .main {
                grid-template-columns: 1fr;
            }

            .all-setting-container {
                background: #fff;
                padding: 30px;
                width: 100%;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .setting-header {
                text-transform: uppercase;
                font-size: 18px;
                font-family: 'Open Sans', sans-serif;
                font-weight: 600;
                margin-bottom: 20px;
            }

            .setting-content .form-group a {
                display: block;
                padding: 10px;
                background: #f8f9fa;
                border: 1px solid #dee2e6;
                border-radius: 4px;
                margin-bottom: 10px;
                text-decoration: none;
                color: #343a40;
                font-weight: 500;
                transition: background 0.3s;
            }

            .setting-content .form-group a:hover {
                background: #e2e6ea;
            }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <div class="all-setting-container">
                <div class="setting-header">
                    <span>Management System</span>
                </div>
                <div class="all-setting-content">
                    <div class="setting-content">
                        <div class="form-group">
                            <a href="{{ route('size') }}">Size</a>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('color') }}">Color</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>

    </html>
@endsection
