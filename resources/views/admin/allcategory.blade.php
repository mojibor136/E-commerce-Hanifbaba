@extends('admin.layout.tempalate')
@section('content')
    <style>
        .table-container {
            overflow-x: auto;
            background: #fff;
            padding: 20px;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            font-size: 12px;
            color: #444;
        }

        .table-header {
            text-transform: uppercase;
            font-family: "Roboto", sans-serif;
            font-weight: 600;
            font-style: normal;
            color: #555;
            font-size: 18px;
            padding: 10px 0;
            padding-top: 5px;
        }

        .table th,
        .table td {
            text-align: left;
            padding: 8px;
            height: 40px;
            white-space: nowrap;
            font-size: 13px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            vertical-align: middle;
            text-align: center;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .main-content .content-ul {
            padding-top: 80px;
        }
    </style>
    <div class="table-container">
        <table class="table">
            <div class="table-header">
                <span>Category Page</span>
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CATEGORY NAME</th>
                    <th>CATEGORY IMAGE</th>
                    <th>SLUG</th>
                    <th>PRODUCT COUNT</th>
                    <th>SUBCATEGORY COUNT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>baby shopping</td>
                    <td>
                        <img src="{{ asset('products/product.png') }}" alt="" width="40" height="40">
                    </td>
                    <td>baby shopping</td>
                    <td>3</td>
                    <td>2</td>
                    <td>
                        <a href="" class="btn btn-danger"><i class="ri-close-line"></i></a>
                        <a href="" class="btn btn-success"><i class="ri-edit-2-fill"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>baby shopping</td>
                    <td>
                        <img src="{{ asset('products/product.png') }}" alt="" width="40" height="40">
                    </td>
                    <td>baby shopping</td>
                    <td>3</td>
                    <td>2</td>
                    <td>
                        <a href="" class="btn btn-danger"><i class="ri-close-line"></i></a>
                        <a href="" class="btn btn-success"><i class="ri-edit-2-fill"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>baby shopping</td>
                    <td>
                        <img src="{{ asset('products/product.png') }}" alt="" width="40" height="40">
                    </td>
                    <td>baby shopping</td>
                    <td>3</td>
                    <td>2</td>
                    <td>
                        <a href="" class="btn btn-danger"><i class="ri-close-line"></i></a>
                        <a href="" class="btn btn-success"><i class="ri-edit-2-fill"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>baby shopping</td>
                    <td>
                        <img src="{{ asset('products/product.png') }}" alt="" width="40" height="40">
                    </td>
                    <td>baby shopping</td>
                    <td>3</td>
                    <td>2</td>
                    <td>
                        <a href="" class="btn btn-danger"><i class="ri-close-line"></i></a>
                        <a href="" class="btn btn-success"><i class="ri-edit-2-fill"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
