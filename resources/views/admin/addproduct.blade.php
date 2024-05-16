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
            text-transform: capitalize;
        }

        .size-content input {
            margin: 0 3px;
            text-transform: capitalize;
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
            <h5 class="mb-0">ADD PRODUCT</h5>
            <small class="text-muted float-end"><a href="{{ route('allproduct') }}" style="text-decoration: none;"
                    class="text-success">View Data</a></small>
        </div>
        @if (session()->has('massage'))
            <li class="text-success mb-2">{{ session()->get('massage') }}</li>
        @endif
        <div class="card-body">
            <form action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label mb-1" for="basic-default-fullname">product name</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="name"
                        value="{{ old('name') }}" placeholder="product name">
                </div>
                <div class="mb-2">
                    @error('desc')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label mb-1" for="basic-default-fullname">product descrption</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="desc"
                        value="{{ old('desc') }}" placeholder="product descrption">
                </div>
                <div class="mb-2">
                    @error('regular_price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label mb-1" for="basic-default-fullname">product regual price</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="regular_price"
                        value="{{ old('regular_price') }}" placeholder="product regual price">
                </div>
                <div class="mb-2">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label mb-1" for="basic-default-fullname">product price</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="price"
                        value="{{ old('price') }}" placeholder="product price">
                </div>
                <div class="mb-2">
                    @error('quantity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label mb-1" for="basic-default-fullname">product quantity</label>
                    <input type="NUMBER" class="form-control" id="basic-default-fullname" name="quantity"
                        value="{{ old('quantity') }}" placeholder="product quantity">
                </div>
                <div class="mb-2">
                    <div class="form-group">
                        <label for="sizes">select product size</label>
                        <div class="form-control size-btn" onclick="toggleSizeContent()"><span>select product size</span>
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
                    <label class="form-label mb-1" for="basic-default-fullname">brande name</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="brande"
                        value="{{ old('brande') }}" placeholder="brande name">
                </div>
                <div class="mb-3">
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label" for="basic-default-fullname">Select Category</label>
                    <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                        <option selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    @error('subcategory_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label" for="basic-default-company">Select Sub-Category</label>
                    <select class="form-select" id="subcategory_id" name="subcategory_id"
                        aria-label="Default select example">
                        <option selected disabled>Select Sub-Category</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label for="formFileDisabled" class="form-label mb-1">add product image</label>
                    <input class="form-control" type="file" id="formFileDisabled" name="image" />
                </div>
                <div>
                    <label for="formFileDisabled" class="form-label">add multipale image</label>
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
