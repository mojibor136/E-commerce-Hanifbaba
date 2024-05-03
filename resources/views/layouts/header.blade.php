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
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
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

    body {
        background: #fff;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    /* TOP HEADER  */
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

    .header-container .header-card .search-container {
        width: 450px;
    }

    .header-container .header-card .search-container .search-card {
        border: 1px solid #A60DE4;
        border-radius: 20px;
        width: 100%;
    }

    .header-container .header-card .search-container .search-card form {
        display: flex;
        justify-content: space-around;
    }

    .header-container .header-card .search-container .search-card input {
        border: none;
        outline: none;
        box-shadow: none;
        padding: 0 0 0 5px;
        vertical-align: middle;
        color: #777;
        width: 100%;
        height: 37px;
        font-size: 16px;
        background: transparent;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .search-container .search-card .categories-container {
        cursor: pointer;
        display: flex;
        width: 130px;
        align-items: center;
    }

    .search-container .search-card .categories-container .categories-card {
        border-right: 1px solid #A60DE4;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 8px;
        width: 100%;
        padding-left: 10px;
        position: relative;
    }

    .search-container .search-card .categories-container .categories-card span {
        color: #777;
        font-size: 13px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        white-space: nowrap;
        text-overflow: ellipsis;
        text-transform: uppercase;
    }

    .search-container .search-card .categories-container .categories-card .arrow {
        border-right: 6px solid transparent;
        border-left: 6px solid transparent;
        border-top: 7px solid #777;
        margin-left: 5px;
    }

    .search-container .search-card .categories-container .categories-card .categories {
        visibility: hidden;
        position: absolute;
        z-index: 99999;
        top: 40px;
        left: 0;
        right: 0;
        background-color: white;
        width: fit-content;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .search-container .search-card .categories-container .categories-card .categories .category {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .search-container .search-card .categories-container .categories-card .categories .category::-webkit-scrollbar {
        display: none;
    }

    .search-container .search-card .categories-container .categories-card .categories .category span {
        text-transform: capitalize;
        padding: 5px 12px;
        transition: color 0.3s, background-color 0.3s;
        color: #333;
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .search-container .search-card .categories-container .categories-card .categories .category span:hover {
        color: #A60DE4;
        background-color: #f2f2f2;
    }

    .search-container .search-card .search-icons {
        display: flex;
        justify-content: center;
        align-items: center;
        line-height: normal;
        padding: 0 7px;
    }

    .search-container .search-card .search-icons i {
        color: #333;
        font-size: 18px;
        vertical-align: middle;
    }

    .header-container .header-card .icons-container {
        display: flex;
        justify-content: flex-start;
    }

    .header-container .header-card .icons-container .icons-card {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .header-container .header-card .icons-container .icons-card .icons {
        text-decoration: none;
        color: #333;
        font-size: 18px;
        cursor: pointer;
        margin: 0 10px;
    }

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

    /* Default styles */
    /* Your default CSS styles go here */

    /* Media query for screens between 1280px and 1024px */
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

    /* Media query for screens between 1024px and 768px */
    @media screen and (max-width: 1024px) {

        .header-container {
            padding: 5px 40px;
        }
    }

    /* Media query for screens between 768px and 480px */
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

    /* Media query for screens between 480px and 380px */
    @media screen and (max-width: 475px) {}

    /* Media query for screens below 380px */
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
                        <img src="logo/Hanif-Baba-2-2.png" alt="">
                        <span>HANIF BABA</span>
                    </a>
                </div>
                <div class="search-container">
                    <div class="search-card">
                        <form action="" class="form">
                            <div class="categories-container">
                                <div class="categories-card">
                                    <span class="showCategory">All-CATEGORY</span>
                                    <div class="arrow"></div>
                                    <div class="categories">
                                        <div class="category">
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                            <span>facebook</span>
                                            <span>youtube</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" placeholder="Search in hanifbaba" class="input" required>
                            <div class="search-icons">
                                <i class="ri-search-line"></i>
                            </div>
                        </form>
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
                                <img src="{{ asset('logo/profile.png') }}" alt="">
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
    <script>
        let searchIcons = document.querySelector('.search-icons');
        let form = document.querySelector('.form');
        let categories = document.querySelector('.categories');
        let categoriesCard = document.querySelector('.categories-card');
        let arrow = document.querySelector('.arrow');
        let Input = document.querySelector('.input');
        let categorycolorcard = document.querySelector('.categories-card');
        let searchCard = document.querySelector('.search-card');
        let showCategory = document.querySelector('.showCategory');
        let category = document.querySelectorAll('.category span');
        let accountCard = document.querySelector('.user-icons');
        let profileContainer = document.querySelector('.profile-container');
        let token = true;

        searchIcons.addEventListener('click', function() {
            if (Input.value.trim() !== '') {
                form.submit();
            } else {
                form.reportValidity();
            }
        });

        categoriesCard.addEventListener('click', function() {
            if (token) {
                categories.style.visibility = 'visible';
            } else {
                categories.style.visibility = 'hidden';
            }
            token = !token;
        });

        Input.addEventListener('focus', function() {
            searchCard.style.border = '1px solid rgb(205,205,205)';
            categorycolorcard.style.borderRight = '1px solid rgb(205,205,205)';
        });

        Input.addEventListener('blur', function() {
            searchCard.style.border = '1px solid #A60DE4';
            categorycolorcard.style.borderRight = '1px solid #A60DE4';
        });

        category.forEach(Category => {
            Category.addEventListener('click', function() {
                let text = this.textContent;
                showCategory.textContent = text;
            });
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
