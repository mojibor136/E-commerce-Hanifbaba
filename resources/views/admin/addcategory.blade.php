@extends('admin.layout.tempalate')
@section('content')
    <style>
        .add-category {
            margin: 50px 100px;
            padding: 20px;
            background-color: #Fff;
            border-radius: 10px;
        }

        .main-content .content-ul {
            right: 0px;
        }

        .form-control {
            text-transform: capitalize;
        }

        form label {
            text-transform: capitalize;
        }
    </style>
    <div class="add-category">
        <div class="card-header d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">ADD CATEGORY</h5>
            <small class="text-muted float-end"><a href="{{ route('allcategory') }}" style="text-decoration: none;"
                    class="text-success">View Data</a></small>
        </div>
        <div class="card-body">
            <form action="{{ route('storecategory') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    @error('category_name')
                        <div class="text-danger error">{{ $message }}</div>
                    @enderror
                    <label class="form-label mb-1" for="basic-default-fullname">add category</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="category_name"
                        value="" placeholder="add category">
                </div>
                <div>
                    <label for="formFileDisabled" class="form-label mb-1">add actegory image</label>
                    <input class="form-control" type="file" id="formFileDisabled" name="category_img" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add Category</button>
            </form>
        </div>
    </div>
@endsection
