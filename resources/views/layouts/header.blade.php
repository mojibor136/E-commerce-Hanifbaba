<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo/Hanif-Baba-2-2.png') }}">
    <title>Hanif-Baba</title>
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Noto Sans Bengali', Arial, sans-serif;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    /* TOP HEADER */
    .top-header {
        width: 100%;
        background-color: #dee2e6;
        padding: 0;
    }

    .top-header ul {
        display: flex;
        margin: 0;
        padding: 0;
        justify-content: center;
        align-items: center;
    }

    .top-header ul li {
        list-style: none;
        padding: 0 10px;
        margin-top: -3px;
    }

    .top-header ul li a {
        text-decoration: none;
        text-transform: uppercase;
        font-size: 11px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        color: #636464;
    }

    /* HEADER */
    .headerContainer {
        position: fixed;
        top: 0;
        z-index: 9999;
        width: 100%;
    }

    .header-container {
        background: #fff;
        box-shadow: 1px 2px 1px #dee;
        padding: 5px 0;
        margin-bottom: 20px;
    }

    .header-container .header-card {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .header-container .header-card .logo a {
        line-height: 0;
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .header-container .header-card .logo img {
        width: 60px;
    }

    .header-container .header-card .logo span {
        font-weight: bolder;
        color: #FF9800;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    /* SEARCH */
    .search-container {
        position: relative;
    }

    .search-container .search-content {
        border: 1px solid #A60DE4;
        padding: 0px 10px;
        padding-right: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-radius: 20px;
        overflow: hidden;
    }

    .dropdown-category {
        position: absolute;
        top: 100%;
        background: #fff;
        color: #333;
        padding: 10px 0;
        z-index: 999;
        display: none;
        width: 200px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .dropdown-category a {
        display: block;
        padding: 8px 15px;
        text-decoration: none;
        color: #333;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .dropdown-category a:hover {
        background-color: #f5f5f5;
        /* Optional: Highlight on hover */
    }

    .search-container .search-content .h-category-container .h-category-content {
        padding: 7px 0;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        cursor: pointer;
    }

    .search-container .search-content .h-category-container .h-category-content span {
        text-transform: uppercase;
        color: #333;
        font-size: 14px;
    }

    .search-container .search-content .search-card {
        display: flex;
        align-items: center;
        margin: 0 10px;
    }

    .search-container .search-content .search-card input {
        border: none;
        outline: none;
        font-size: 16px;
        padding: 0 5px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    /* ICONS */
    .search-container .search-content .search-card .search-icons {
        cursor: pointer;
    }

    /* ACCOUNT */
    .header-container .header-card .icons-container .account-card .user-icons {
        padding: 0 10px;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .header-container .header-card .icons-container .account-card .user-icons img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin: 0 5px;
    }

    .header-container .header-card .icons-container .account-card .user-icons i {
        margin: 0 2px;
        color: #555;
        font-weight: 600;
    }

    .header-container .header-card .icons-container .account-card .user-icons span {
        color: #555;
        font-weight: 500;
    }

    .header-container .header-card .icons-container .account-card .user-icons .arrow {
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        border-top: 6px solid #333;
        margin: 12px 5px;
    }

    .header-container .header-card .icons-container .account-card .user-link a {
        text-decoration: none;
        color: #555;
        margin: 0;
        padding: 0;
        font-size: 15px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    /* PROFILE */
    .header-container .profile-container {
        position: absolute;
        top: 100%;
        right: 0;
        background: #fff;
        display: none;
        z-index: 9999;
    }

    .header-container .profile-container .profile-card {
        display: flex;
        flex-direction: column;
    }

    .header-container .profile-container .profile-card a {
        padding: 8px 20px;
        padding-right: 50px;
        text-transform: capitalize;
        text-decoration: none;
        color: #333;
        font-size: 14px;
        font-weight: 700;
    }

    .header-container .profile-container .profile-card a:hover {
        color: #A60DE4;
        background-color: #f5f5f5;
    }

    /* MEDIA QUERIES */
    @media screen and (max-width: 1440px) {
        .header-container {
            padding: 5px 115px;
        }
    }

    @media screen and (max-width: 1280px) {
        .header-container {
            padding: 5px 80px;
        }
    }

    @media screen and (max-width: 1024px) {
        .header-container {
            padding: 5px 40px;
        }
    }

    @media screen and (max-width: 768px) {
        .top-header ul li {
            padding: 0 5px;
        }

        .top-header ul li a {
            font-size: 10px;
        }

        .header-container {
            padding: 5px 20px;
        }

        .header-container .header-card .logo span {
            display: none;
        }

        .header-container .header-card .icons-container .icons-card {
            display: none;
        }
    }

    @media screen and (max-width: 640px) {
        .top-header {
            display: none;
        }

        .header-container {
            display: none;
        }
    }

    @media screen and (max-width: 475px) {
        /* Styles for screens between 480px and 380px */
    }

    @media screen and (max-width: 375px) {
        /* Styles for screens below 380px */
    }
</style>

<body>
    <div class="top-header">
        <ul>
            <li><a href="">save more on app</a></li>
            <li><a href="">online donates</a></li>
            <li><a href="">sell on online</a></li>
            <li><a href="">customer care</a></li>
            <li><a href="">track my order</a></li>
            <li><a href="">daily shop affiliate program</a></li>
        </ul>
    </div>
    <header>
        <div class="header-container">
            <div class="header-card">
                <div class="logo">
                    <a href="{{ Route('home') }}">
                        <img src="{{ asset('LogoImg/Hanif-Baba-2-2.png') }}" alt="">
                        <span>HANIF BABA</span>
                    </a>
                </div>
                <div class="search-container">
                    <form action="" class="form">
                        <div class="search-content">
                            <div class="dropdown h-category-container">
                                <div class="h-category-content">
                                    <span>All Category</span>
                                    <i class="ri-arrow-down-s-fill"></i>
                                </div>
                            </div>
                            <div class="search-card">
                                <input type="text" placeholder="Search in hanifbaba" class="input" required>
                                <div class="search-icons">
                                    <i class="ri-search-line"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    @php
                        $categories = getCategoryData();
                    @endphp
                    <div class="dropdown-category">
                        @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{ $category->id }}">{{ $category->category_name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="icons-container">
                    @if (Auth::check())
                        <div class="icons-card">
                            <a href="" class="ri-heart-line icons"></a>
                            <a href="{{ route('addtocart') }}" class="ri-shopping-cart-line icons"></a>
                        </div>
                    @endif
                    <div class="account-card">
                        @if (Auth::check())
                            <div class="user-icons">
                                <img src="{{ asset('logo/profile.png') }}" alt="no image">
                                <span>Mojibor</span>
                                <div class="arrow"></div>
                            </div>
                        @else
                            <div class="user-link">
                                <a href="{{ route('login') }}"><i class="ri-login-box-line"></i>Login</a>
                                |
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="profile-container">
                    <div class="profile-card">
                        <a href="">my account</a>
                        <a href="">order tracking</a>
                        <a href="">cancel order</a>
                        <a href="">blood donation service</a>
                        <a href="">help & support</a>
                        <a href="{{ route('logout') }}">logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        let searchIcons = document.querySelector('.search-icons');
        let form = document.querySelector('.form');
        let arrow = document.querySelector('.arrow');
        let Input = document.querySelector('.input');
        let searchCard = document.querySelector('.search-content');
        let accountCard = document.querySelector('.user-icons');
        let profileContainer = document.querySelector('.profile-container');
        let token = true;


        let dropdownToggle = document.querySelector('.h-category-content');
        let dropdownMenu = document.querySelector('.dropdown-category');

        dropdownToggle.addEventListener('click', function(event) {
            event.stopPropagation();
            if (dropdownMenu.style.display === 'block') {
                dropdownMenu.style.display = 'none';
            } else {
                dropdownMenu.style.display = 'block';
            }
        });

        document.addEventListener('click', function(event) {
            let isClickInside = dropdownToggle.contains(event.target) || dropdownMenu.contains(event.target);
            if (!isClickInside) {
                dropdownMenu.style.display = 'none';
            }
        });



        searchIcons.addEventListener('click', function() {
            if (Input.value.trim() !== '') {
                form.submit();
            } else {
                form.reportValidity();
            }
        });

        Input.addEventListener('focus', function() {
            searchCard.style.border = '1px solid rgb(205,205,205)';
            categorycolorcard.style.borderRight = '1px solid rgb(205,205,205)';
        });

        Input.addEventListener('blur', function() {
            searchCard.style.border = '1px solid #A60DE4';
            categorycolorcard.style.borderRight = '1px solid #A60DE4';
        });

        window.addEventListener('scroll', function() {
            let headerContainer = document.querySelector('.header-container');

            if (pageYOffset >= 200) {
                headerContainer.classList.add('headerContainer');
            } else {
                headerContainer.classList.remove('headerContainer');
            }
        });
        accountCard.addEventListener('click', function() {
            if (token) {
                profileContainer.style.display = 'block';
            } else {
                profileContainer.style.display = 'none';
            }

            token = !token;
        });
    </script>
</body>

</html>
