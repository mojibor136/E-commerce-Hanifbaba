@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add City</title>
        <link rel="stylesheet" href="styles.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    </head>
    <style>
        .main {
            grid-template-columns: 1fr;
        }

        .container {
            background: white;
            padding: 50px 120px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin: 20px 0;
        }

        h2 {
            text-align: center;
            size: #333;
            font-family: "Roboto", sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 3px;
            margin-top: 5px;
            font-family: "Roboto", sans-serif;
        }

        input[type="number"],
        button {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .table> :not(caption)>*>* {
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            vertical-align: middle;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
            text-align: center;
        }

        .btn {
            font-family: "Roboto", sans-serif;
        }

        .btn-danger {
            padding: 0 2px;
        }

        .back {
            display: flex;
            gap: 2px;
            width: fit-content;
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 30px 10px;
            }
        }
    </style>

    <body>
        <div class="container">
            <div class="back">
                <div class="btn btn-success back" onclick="goBack()">
                    <i class="ri-arrow-left-line"></i>
                    <span>Back</span>
                </div>
            </div>
            <h2>Add City</h2>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <li>{{ session()->get('success') }}</li>
                </div>
            @endif
            <form action="{{ route('store.city') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleSelect">Select Division</label>
                    <select class="form-control" id="exampleSelect" name="divisonId">
                        @foreach ($divisions as $division)
                            <option value="{{ $division->id }}">{{ $division->divison }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Add City</label>
                    <input type="text" class="form-control" name="city" required placeholder="Enter Your City">
                </div>
                <button type="submit" class="btn btn-success mt-3">Add City</button>
            </form>

            <div class="size-content">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>Division</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($citys as $city)
                        <tr>
                            <td>{{ $city->id }}</td>
                            <td>{{ $city->city }}</td>
                            <td>{{ $city->divisionName }}</td>
                            <td>
                                <a href="{{ route('delete.city', $city->id) }}" class="btn btn-danger">
                                    <i class="ri-close-line"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <script>
            function goBack() {
                history.back();
            }
        </script>

    </body>

    </html>
@endsection
