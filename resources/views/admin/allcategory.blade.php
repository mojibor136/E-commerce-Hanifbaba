@extends('admin.layout.tempalate')
@section('content')
    <style>
        .main-content .content-ul{
            right: 0px;
        }
        .all-category {
            margin: 20px 0px;
            padding: 20px 0px;
        }
    </style>
    <div class="all-category">
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
                    @foreach ($adminCategoires as $adminCategoires)
                        <tr>
                            <td>{{ $adminCategoires->id }}</td>
                            <td>{{ $adminCategoires->category_name }}</td>
                            <td>
                                <img src="{{ asset('assets/CategoryImg/' . $adminCategoires->category_img) }}" alt=""
                                    width="40" height="40">
                            </td>
                            <td>{{ $adminCategoires->slug }}</td>
                            <td>{{ $adminCategoires->prodcut_count }}</td>
                            <td>{{ $adminCategoires->subcategory_count }}</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="ri-close-line"></i></a>
                                <a href="" class="btn btn-success"><i class="ri-edit-2-fill"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
