@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <title>Password Change</title>
    <style>
        .main {
            grid-template-columns: 1fr;
        }

        .row {
            display: flex;
            justify-content: center;
            padding: 20px 0;
        }

        .setting-header {
            text-align: center;
        }

        .alert-danger {
            margin: 5px 0;
            margin-top: 7px;
        }
    </style>
    <div class="container mt-5">
        <div class="all-setting-container p-4 bg-white rounded shadow-sm">
            <div class="setting-header mb-4">
                <h3 class="text-uppercase">Password Change</h3>
            </div>
            <div class="all-setting-content">
                <div class="row">
                    <div class="col-md-8">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('old'))
                            <div class="alert alert-success">
                                {{ session('old') }}
                            </div>
                        @endif
                        <form action="{{ route('passwordupload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <div>
                                    @error('old')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="logo" class="form-label">Old Password</label>
                                    <input type="text" class="form-control" name="old">
                                </div>
                                <div class="form-group mb-3">
                                    @error('new')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="logo" class="form-label">New Password</label>
                                    <input type="text" class="form-control" name="new">
                                </div>
                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                <button type="submit" class="btn btn-primary w-100">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
