@extends('admin.layout.tempalate')
@section('content')
    <style>
        .main-content .content-ul {
            right: 0px;
        }
    </style>
    <div class="table-container">
        <table class="table">
            <div class="table-header">
                <span>subCategory Page</span>
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SUBCATEGORY NAME</th>
                    <th>SLUG</th>
                    <th>PRODUCT COUNT</th>
                    <th>CATEGORY NAME</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($adminSubCategories as $adminSubCategory)
                    <tr>
                        <td>{{ $adminSubCategory->id }}</td>
                        <td>{{ $adminSubCategory->subcategory_name }}</td>
                        <td>{{ $adminSubCategory->slug }}</td>
                        <td>{{ $adminSubCategory->product_count }}</td>
                        <td>{{ $adminSubCategory->category_name }}</td>
                        <td>
                            <a href="" class="btn btn-danger"><i class="ri-close-line"></i></a>
                            <a href="" class="btn btn-success"><i class="ri-edit-2-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-container mt-3 mb-3">
            @if ($adminSubCategories->count() > 0)
                {{ $adminSubCategories->links() }}
            @endif
        </div>
    </div>
@endsection
