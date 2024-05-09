@extends('admin.layout.tempalate')
@section('content')
    <style>
        .add-product {
            margin: 20px 70px;
            padding: 20px;
            background-color: #Fff;
            border-radius: 10px;
        }

        .form-control {
            cursor: pointer;
        }

        .size-content input {
            margin: 0 3px;
            cursor: pointer;
        }

        .size-content .size {
            margin: 5px 0;
            display: flex;
            align-items: center;
        }

        .size-content.hidden {
            display: none;
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
                    <input type="text" class="form-control" id="basic-default-fullname" name="name"
                        value="{{ old('name') }}" placeholder="PRODUCTS NAME">
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS DESCRIPTION</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="desc"
                        value="{{ old('desc') }}" placeholder="PRODCUTS DESCRIPTION">
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS REGULAR PRICE</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="regular_price"
                        value="{{ old('regular_price') }}" placeholder="PRODCUTS REGULAR PRICE">
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS PRICE</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="price"
                        value="{{ old('price') }}" placeholder="PRODCUTS PRICE">
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">PRODCUTS QUANTITY</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="quantity"
                        value="{{ old('quantity') }}" placeholder="PRODCUTS QUANTITY">
                </div>
                <div class="mb-2">
                    <div class="form-group">
                        <label for="sizes">SELECT PRODUCT SIZE</label>
                        <div class="form-control size-btn" onclick="toggleSizeContent()"><span>SELECT PRODUCT SIZE</span>
                        </div>
                        <div class="size-content hidden">
                            <div class="form-control size"><input name="size[]" type="checkbox"
                                    value="38"><span>38</span></div>
                            <div class="form-control size"><input name="size[]" type="checkbox"
                                    value="39"><span>39</span></div>
                            <div class="form-control size"><input name="size[]"type="checkbox"
                                    value="40"><span>40</span></div>
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">BRAND NAME</label>
                    @error('email')
                        <div class="text-danger">{{ $brande }}</div>
                    @enderror
                    <input type="text" class="form-control" id="basic-default-fullname" name="brande"
                        value="{{ old('brande') }}" placeholder="BRAND NAME">
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
    <script>
        function toggleSizeContent() {
            var sizeContent = document.querySelector('.size-content');
            sizeContent.classList.toggle('hidden');
        }
        let sizes = document.querySelectorAll('.size');

        sizes.forEach(function(size) {
            size.addEventListener("click", function() {
                let checkbox = this.querySelector('input[type="checkbox"]');
                checkbox.checked = !checkbox.checked;
            });
        });
    </script>
@endsection
