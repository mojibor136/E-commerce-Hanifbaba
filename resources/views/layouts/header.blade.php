<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo/Hanif-Baba-2-2.png') }}">
    <title>Hanif-Baba</title>
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background: #fff;
    }

    .top-header-container {
        width: 100%;
        padding: 3px 50px;
        background: #A60DE4;
        display: flex;
        justify-content: space-between;
    }

    .top-header-container .service a {
        text-decoration: none;
        text-transform: capitalize;
        color: #fff;
        font-size: 15px;
        margin: 0 10px;
    }

    .top-header-container .account-service {
        color: #fff;
    }

    .top-header-container .account-service a {
        text-decoration: none;
        text-transform: capitalize;
        color: #fff;
        font-size: 15px;
    }

    .top-header-container .account-service span {
        font-weight: 900;
    }

    .headerContainer {
        position: fixed;
        top: 0;
        z-index: 9999;
        width: 100%;
    }

    .header-container {
        background: #fff;
        box-shadow: 1px 1px 1px #dee;
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
    }

    .header-container .header-card .search-container {
        width: 450px;
    }

    .header-container .header-card .search-container .search-card {
        border: 1px solid #A60DE4;
        border-radius: 30px;
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
        padding: 12px 15px;
        vertical-align: middle;
        color: #777;
        width: 100%;
        font-size: 15px;
        background: transparent;
    }

    .search-container .search-card .categories-container {
        cursor: pointer;
        display: flex;
        align-items: center;
        right: 0;
        top: 0;
        height: 100%;
    }

    .search-container .search-card .categories-container .categories-card {
        border-left: 1px solid #A60DE4;
        border-right: 1px solid #A60DE4;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 8px;
        position: relative;
    }

    .search-container .search-card .categories-container .categories-card span {
        color: #777;
        font-size: 14px;
        font-family: monospace;
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
        width: max-content;
    }

    .search-container .search-card .categories-container .categories-card .categories .category {
        display: flex;
        flex-direction: column;
        max-height: 300px;
        overflow-y: auto;
    }

    .search-container .search-card .categories-container .categories-card .categories .category::-webkit-scrollbar {
        width: 5px;
    }

    .search-container .search-card .categories-container .categories-card .categories .category::-webkit-scrollbar-thumb {
        background-color: #777;
        border-radius: 10px;
    }

    .search-container .search-card .categories-container .categories-card .categories .category span {
        text-transform: capitalize;
        padding: 8px 16px;
        transition: color 0.3s, background-color 0.3s;
        color: #333;
        font-size: 14px;
        font-weight: 700;
    }

    .search-container .search-card .categories-container .categories-card .categories .category span:hover {
        color: #A60DE4;
        background-color: #f5f5f5;
    }

    .search-container .search-card .categories-container .search-icons {
        background: #A60DE4;
        padding: 7px;
        margin: 5px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-container .search-card .categories-container .search-icons i {
        color: white;
        font-size: 18px;
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

    .header-container .header-card .icons-container .account-card .user-icons .icons {
        color: #333;
        font-size: 18px;
        text-transform: capitalize;
    }

    .header-container .header-card .icons-container .account-card .user-icons .arrow {
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        border-top: 6px solid #333;
        margin: 12px 5px;
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
</style>

<body>
    <div class="top-header-container">
        <div class="service">
            <a href="">order tracking</a>
            <a href="">order checking</a>
            <a href="">top products</a>
            <a href="">my shop</a>
            <a href="">blood donation service</a>
        </div>
        <div class="account-service">
            <a href="{{Route('register')}}">registration</a>
            <span>/</span>
            <a href="{{Route('login')}}">login</a>
        </div>
    </div>
    <header>
        <div class="header-container">
            <div class="header-card">
                <div class="logo">
                    <a href="{{Route('home')}}">
                        <img src="logo/Hanif-Baba-2-2.png" alt="">
                        <span>HANIF BABA</span>
                    </a>
                </div>
                <div class="search-container">
                    <div class="search-card">
                        <form action="" class="form">
                            <input type="text" placeholder="Search for products" class="input" required>
                            <div class="categories-container">
                                <div class="categories-card">
                                    <span class="showCategory">SELECT CATEGORY</span>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="search-icons">
                                    <i class="ri-search-line"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="icons-container">
                    <div class="icons-card">
                        <a href="" class="ri-heart-line icons"></a>
                        <a href="" class="ri-shopping-cart-line icons"></a>
                    </div>
                    <div class="account-card">
                        <div class="user-icons">
                            <span class="ri-user-line icons">account</span>
                            <div class="arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="profile-container">
                    <div class="profile-card">
                        <a href="">my account</a>
                        <a href="">order tracking</a>
                        <a href="">cancel order</a>
                        <a href="">blood donation service</a>
                        <a href="">help & support</a>
                        <a href="">registration</a>
                        <a href="">login</a>
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
        let searchCard = document.querySelector('.search-card');
        let showCategory = document.querySelector('.showCategory');
        let category = document.querySelectorAll('.category span');
        let accountCard = document.querySelector('.account-card');
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
        });

        Input.addEventListener('blur', function() {
            searchCard.style.border = '1px solid #A60DE4';
        });

        category.forEach(Category => {
            Category.addEventListener('click', function() {
                let text = this.textContent;
                showCategory.textContent = text;
            });
        });

        accountCard.addEventListener('click', function() {
            if (token) {
                profileContainer.style.display = 'block';
            } else {
                profileContainer.style.display = 'none';
            }

            token = !token;
        });

        window.addEventListener('scroll', function() {
            let headerContainer = document.querySelector('.header-container');

            if (pageYOffset >= 200) {
                headerContainer.classList.add('headerContainer');
            } else {
                headerContainer.classList.remove('headerContainer');
            }
        });
    </script>
</body>

</html>
