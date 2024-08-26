<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<style>
    body {
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        padding: 20px;
        width: 350px;
    }
</style>

<body>
    <div class="card">
        <form action="{{ route('data') }}" method="post">
            @csrf
            <div class="form-group mb-2">
                @error('division')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
                <label for="division" class="mb-1">Division</label>
                <select name="division" id="division" class="form-control" wire:model="divisionId">
                    <option value="" selected disabled>Select Division</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">{{ $division->divison }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="DataTest" class="w-100 btn btn-success">
        </form>
    </div>
</body>

</html>
