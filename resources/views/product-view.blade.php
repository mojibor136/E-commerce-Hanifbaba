@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .main-container {
        padding: 0 50px;
    }

    .product-container {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .product-container .product-img-container {
        border: 1px solid blueviolet;
        width: 100%;
        padding: 50px;
    }

    .product-container .product-img-container .img-container {
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
    }

    .product-container .product-img-container .img-container img {
        width: 100%;
    }

    .product-container .product-info-container {
        border: 1px solid red;
        width: 100%;
    }
</style>

<body>
    <div class="main-container">
        <div class="product-container">
            <div class="product-img-container">
                <div class="img-container">
                    <img src="{{ asset('products/punjabi2.jpg') }}" alt="">
                </div>
            </div>
            <div class="product-info-container">

            </div>
        </div>
    </div>
</body>

</html>
