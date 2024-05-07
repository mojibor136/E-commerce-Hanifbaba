@extends('admin.layout.tempalate')
@section('content')
    <style>
        .add-product {
            margin: 20px 70px;
            padding: 20px;
            background-color: #Fff;
            border-radius: 10px;
        }
    </style>
    <div class="add-product">
        <div class="card-header d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">ADD PRODUCTS</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        @if (session()->has('massage'))
            <li class="text-success mb-2">{{ session()->get('massage') }}</li>
        @endif
        <div class="card-body">
            <form action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS NAME</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="name" value=""
                        placeholder="PRODUCTS NAME" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS DESCRIPTION</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="desc" value=""
                        placeholder="PRODCUTS DESCRIPTION" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS REGULAR PRICE</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="ragular_price"
                        value="" placeholder="PRODCUTS REGULAR PRICE" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS PRICE</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="price" value=""
                        placeholder="PRODCUTS PRICE" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS QUANTITY</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="quantity" value=""
                        placeholder="PRODCUTS QUANTITY" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS SIZE</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="size" value=""
                        placeholder="PRODCUTS SIZE" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">BRAND NAME</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="brande" value=""
                        placeholder="BRAND NAME" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">SELECT CATEGORY</label>
                    <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                        <option selected>SELECT CATEGORY</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-company">SELECT SUBCATEGORY</label>
                    <select class="form-select" id="subcategory_id" name="subcategory_id"
                        aria-label="Default select example">
                        <option selected>SELECT SUB-CATEGORY</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="formFileDisabled" class="form-label mb-1">ADD CATEGORY IMG</label>
                    <input class="form-control" type="file" id="formFileDisabled" name="image" />
                </div>
                <div>
                    <label for="formFileDisabled" class="form-label">ADD MULTIPLE IMG</label>
                    <input class="form-control" multiple type="file" id="formFileDisabled" name="multipleImg[]" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">ADD PRODUCTS</button>
            </form>
        </div>
    </div>
@endsection
