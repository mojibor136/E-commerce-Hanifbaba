@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Account Settings</title>
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
                margin-bottom: 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .setting-header span {
                text-transform: uppercase;
                font-size: 18px;
                font-family: 'Open Sans', sans-serif;
                font-weight: 600;
            }

            .setting-header a {
                text-transform: capitalize;
                text-decoration: none;
                font-size: 14px;
                font-family: 'Open Sans', sans-serif;
                font-weight: 500;
            }

            .profile-image {
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .profile-image .image {
                width: 100px;
                height: 100px;
                border-radius: 100%;
                overflow: hidden;
            }

            .profile-image .image img {
                width: 100%;
                height: 100%;
            }

            .profile-info .group {
                margin: 10px 0;
            }

            .profile-info .group label {
                margin: 3px 0;
                font-size: 14px;
                font-family: 'Open Sans', sans-serif;
                font-weight: 600;
            }

            @media (max-width: 768px) {
                .all-setting-container {
                    padding: 20px;
                }

                .setting-header span {
                    font-size: 16px;

                }

                .container {
                    padding: 10px 5px;
                }
            }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <div class="all-setting-container">
                <div class="setting-header">
                    <span>Account Settings</span>
                    <a href="{{ route('passwordchange') }}">change password</a>
                </div>
                <div class="all-setting-content">
                    <div class="setting-content">
                        <div class="profile-content">
                            <div class="profile-image">
                                <div class="image">
                                    @if (!empty($admin) && !empty($admin->image) && file_exists(public_path('Admins/' . $admin->image)))
                                        <img src="{{ asset('Admins/' . $admin->image) }}" alt="Admin Image" width="45">
                                    @else
                                        <img src="{{ asset('Admins/profile.jpg') }}" width="45">
                                    @endif
                                </div>
                            </div>
                            <form action="{{ route('adminupdate') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="profile-info">
                                    <div class="group">
                                        <label for="">Admin Name</label>
                                        <input type="text" class="form-control" placeholder="Admin Name" name="name"
                                            value="{{ $admin->name ?? '' }}">
                                    </div>
                                    <div class="group">
                                        <label for="">Admin Email</label>
                                        <input type="email" class="form-control" placeholder="Admin Email"
                                            value="{{ $admin->email }}" name="email">
                                    </div>
                                    <div class="group">
                                        <label for="">Admin Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="group">
                                        <input type="hidden" value="{{ $admin->id }}" name="adminId">
                                        <input type="submit" value="Update" class="btn btn-dark">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>

    </html>
@endsection
