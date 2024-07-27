@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>All Question & Answer</title>
        <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
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
            position: relative;
        }

        .product-header {
            text-transform: uppercase;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            padding: 10px 0;
        }

        .table> :not(caption)>*>* {
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            vertical-align: middle;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .product-content table tr td {
            text-transform: capitalize;
        }

        .product-content table tr td a {
            text-decoration: none;
            font-size: 18px;
        }

        .table-wrapper {
            white-space: nowrap;
        }

        .table {
            width: 100%;
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
                <span>All Question & Answer</span>
            </div>
            @if (session()->has('success'))
                <li class="alert alert-success">{{ session()->get('success') }}</li>
            @endif
            <div class="all-product-content">
                <div class="product-content">
                    <div class="table-wrapper">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Titel</th>
                                    <th>Question</th>
                                    <th>Question Time</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $question)
                                    @if ($question->status == 1)
                                        <tr>
                                            <td>{{ $question->id }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($question->product->product_name, 20) }}
                                            </td>
                                            <td>{{ \Illuminate\Support\Str::limit($question->question, 10, '...') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($question->created_at)->format('Y-m-d') }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($question->answered, 10, '...') }}</td>
                                            <td>
                                                <a href="{{ route('answer', $question->id) }}">
                                                    <i class="ri-question-answer-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @else
                                        <tr style="background: #eee">
                                            <td>{{ $question->id }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($question->product->product_name, 20) }}
                                            </td>
                                            <td>{{ \Illuminate\Support\Str::limit($question->question, 10, '...') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($question->created_at)->diffForHumans() }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($question->answered, 10, '...') }}</td>
                                            <td>
                                                <a href="{{ route('answer', $question->id) }}">
                                                    <i class="ri-question-answer-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end text-end">
                            {{ $questions->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
