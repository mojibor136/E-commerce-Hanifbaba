<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Data</title>
</head>
<style>
    body {
        padding: 50px 80px;
    }

    .card {
        padding: 20px;
    }
</style>

<body>
    <div class="card">
        <table class="table">
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->city }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
