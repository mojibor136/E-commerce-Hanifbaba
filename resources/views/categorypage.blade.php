@include('admin.logo.logo')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    nav {
        background-color: #A60DE4;
        width: 100%;
        display: flex;
        justify-content: space-between;
        display: none;
    }

    nav .button {
        display: flex;
        align-items: center;
        color: #fff;
        font-weight: 400;
        cursor: pointer;
    }

    /* shop-container html code */
    .shop-container {
        padding: 35px 0px;
        padding-top: 0px;
    }

    .shop-container .shop-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 20px;
        padding: 0 2px;
    }

    .shop-container .shop-content a {
        text-decoration: none;
    }

    .shop-container .shop-hadding {
        text-align: center;
        line-height: normal;
        padding: 10px 0;
        padding-bottom: 15px;
        color: #333;
    }

    .shop-container .shop-hadding h4 {
        text-transform: uppercase;
        margin: 10px 0;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .shop-container .shop-hadding span {
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .shop-container .shop-content a .text {
        padding: 5px 0;
        line-height: normal;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .shop-container .shop-content a .text span {
        color: #333;
        text-transform: capitalize;
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .shop-container .shop-content .card {
        box-shadow: 4px 2px 20px 0px #b4c9d3;
        overflow: hidden;
    }

    .shop-container .shop-content .card img {
        width: 100%;
    }

    @media (max-width: 640px) {
        nav {
            display: inline-flex;
            padding: 5px 10px;
        }

        .shop-container .shop-content {
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 5px;
            padding: 0 5px;
        }

        .shop-container .shop-content a .text span {
            font-size: 12px;
        }
    }
</style>

<body>
    <nav>
        <div class="button">
            <i class="ri-arrow-left-s-line" onclick="history.back()" id="back-buttton" style="font-size: 32px;"></i>
            <p style="margin:0;">Just for you</p>
        </div>
        <div class="button">
            <i class="ri-more-2-fill" style="font-size: 24px;"></i>
        </div>
    </nav>
    {{-- Shop By Department --}}
    <div class="shop-container" id="shop">
        <div class="shop-hadding">
            <h4>Shop By Department</h4>
            <span>Take A Look At Our Other Products</span>
        </div>
        <div class="shop-content">
            @foreach ($categories as $category)
                <a href="{{ route('filterproduct', ['id' => $category->id, 'slug' => $category->category_name]) }}">
                    <div class="card">
                        <img src="{{ asset('CategoryImg/' . $category->category_img) }}" alt="">
                    </div>
                    <div class="text">
                        <span>{{ $category->category_name }} ({{ $category->product_count }})</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
