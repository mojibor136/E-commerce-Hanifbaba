@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <title>Logo Change</title>
    <style>
        .main {
            grid-template-columns: 1fr;
        }
    </style>
    <div class="container mt-5">
        <div class="all-setting-container p-4 bg-white rounded shadow-sm">
            <div class="setting-header mb-4">
                <h3 class="text-uppercase">Logo Change</h3>
            </div>
            <div class="all-setting-content">
                <div class="row">
                    <div class="col-md-6">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('logoupload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="logo" class="form-label">Upload New Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Upload</button>
                    </div>
                    <div class="col-md-6">
                        <h5>Current Logo</h5>
                        @forelse ($logos as $logo)
                            <img src="{{ asset('LogoImg/' . $logo->logo) }}" class="img-fluid rounded mb-3"
                                alt="Current Logo">
                            <input type="hidden" value="{{ $logo->id }}" name="logoId">
                        @empty
                            <p>No logos currently set.</p>
                        @endforelse
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
