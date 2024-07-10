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
        background-color: #dc3545;
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

    .main-category-container {
        display: flex;
        width: 100%;
    }

    .category-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .category-container a {
        cursor: pointer;
        text-decoration: none;
        color: #555;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-weight: 500;
    }

    .category-container .category-card {
        background-color: #eee;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .category-card .category-img {
        width: 75px;
        height: 65px;
        padding: 10px;
        padding-bottom: 0px;
    }

    .category-card .category-img img {
        width: 100%;
        height: 100%;
    }

    .category-card .name {
        text-align: center;
        padding: 5px;
        line-height: normal;
        text-transform: capitalize;
        font-size: 13px;
    }

    .subcategory-container {}

    .subcategory-container a {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .subcategory-card {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .subcategory-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        row-gap: 10px;
    }

    .subcategory-content a {
        text-decoration: none;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-weight: 500;
        color: #111;

    }

    .subcategory-card .subcategory-img {
        width: 80px;
        height: 70px;
        padding: 10px;
        padding-bottom: 5px
    }

    .subcategory-card .subcategory-img img {
        width: 100%;
        height: 100%;
    }

    .subcategory-card .name {
        text-align: center;
        padding: 0 5px;
        line-height: normal;
        text-transform: capitalize;
        font-size: 13px;
    }

    @media (max-width: 640px) {
        nav {
            display: inline-flex;
            padding: 0px 10px;
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
    <div>
        <div class="main-category-container">
            <div class="category-container">
                <a href="">
                    <div class="category-card">
                        <div class="category-img">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>health care</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="category-img">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>health care</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="category-img">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>health care</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="category-img">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>health care</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="category-img">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>health care</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="category-img">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>health care</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="category-img">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>health care</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="category-img">
                            <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>health care</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="subcategory-container">
                <div class="subcategory-content">
                    <a href="">
                        <div class="subcategory-card">
                            <div class="subcategory-img">
                                <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                            </div>
                            <div class="name">
                                <span>health care</span>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="subcategory-card">
                            <div class="subcategory-img">
                                <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                            </div>
                            <div class="name">
                                <span>electronic device</span>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="subcategory-card">
                            <div class="subcategory-img">
                                <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                            </div>
                            <div class="name">
                                <span>health care</span>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="subcategory-card">
                            <div class="subcategory-img">
                                <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                            </div>
                            <div class="name">
                                <span>health care</span>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="subcategory-card">
                            <div class="subcategory-img">
                                <img src="{{ asset('products/1711678828-6606256c475ea.jpg') }}" alt="">
                            </div>
                            <div class="name">
                                <span>health care</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
