<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #ddd;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    .admin-header {
        width: 100%;
        background-color: #fff;
        padding: 2px 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .admin-logo a {
        line-height: 0;
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .admin-logo a img {
        width: 60px;
    }

    .admin-logo a span {
        font-weight: bolder;
        color: #FF9800;
        text-transform: uppercase;
    }

    .admin-profile {
        margin-right: 10px;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .admin-profile .img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        margin: 0 5px;
        overflow: hidden;
    }

    .admin-profile .img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .main-content {
        display: flex;
        width: 100%;
        height: 100%;
    }

    .main-content .nav-content {
        width: 17%;
        height: 100%;
        background-color: #fff;
        border-top: 1px solid #ebebea;
    }

    .main-content .content-ul {
        width: 83%;
        height: 100%;
        padding: 20px;
        padding-top: 50px;
    }

    .main-content .content-ul .content-ui {
        width: 100%;
    }

    label {
        font-size: 14px;
        font-weight: 600;
    }

    .add-category {
        margin: 50px 100px;
        padding: 20px;
        background-color: #Fff;
        border-radius: 10px;
    }

    .dropdown-card .dropdown-btn {
        text-transform: capitalize;
        cursor: pointer;
        padding: 10px 15px;
        color: #111;
        border-bottom: 1px solid #ddd;
        font-size: 15px;
    }

    .dropdown-card .dropdown-btn:hover {
        background-color: #333;
        color: #fff;
    }

    .dropdown-card .dropdown-ul {
        display: none;
    }

    .dropdown-card .dropdown-ui {
        display: flex;
        flex-direction: column;
    }

    .dropdown-card .dropdown-ui a {
        text-decoration: none;
        text-transform: capitalize;
        border-bottom: 1px solid #ddd;
        padding: 7px 20px;
        color: #333;
        font-size: 14px;
    }

    .dropdown-card .dropdown-ui a:hover {
        background-color: #ccc;
    }
</style>

<body>
    <div class="main-container">
        <div class="admin-header">
            <div class="admin-logo">
                <a href="{{ route('admin') }}">
                    <img src="{{ asset('logo/Hanif-Baba-2-2.png') }}" alt="">
                    <span>hanibaba</span>
                </a>
            </div>
            <div class="admin-profile">
                <span>arif islam</span>
                <div class="img">
                    <img src="{{ asset('logo/profile.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="nav-content">
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>dashboard</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="admin.html">home</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>message</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="admin.html">message</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>notifications</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="admin.html">notifications</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>products</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">all products</a>
                            <a href="">add products</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>categories</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">all category</a>
                            <a href="{{route('addcategory')}}">add category</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>subcategories</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">all subcategory</a>
                            <a href="{{route('addsubcategory')}}">add subcategory</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>manage order</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">all order</a>
                            <a href="">cencel order</a>
                            <a href="">confirm order</a>
                            <a href="">panding order</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>customer</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">user management</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>customize panle</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">change profile photo</a>
                            <a href="">change profile name</a>
                            <a href="">change admin logo</a>
                            <a href="">change admin name</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>admin profile</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">admin profile</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>admin logout</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">admin logout</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-card">
                    <div class="dropdown-btn">
                        <span>Settinge</span>
                    </div>
                    <div class="dropdown-ul">
                        <div class="dropdown-ui">
                            <a href="">change logo</a>
                            <a href="">add banner</a>
                            <a href="">change name</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-ul">
                <div class="content-ui">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script>
        let dropdownBtn = document.querySelectorAll('.dropdown-btn');
        let dropdown = document.querySelectorAll('.dropdown-ul');

        dropdownBtn.forEach(function(button, index) {
            button.addEventListener("click", function() {
                var computedStyle = window.getComputedStyle(dropdown[index]);
                if (computedStyle.display === "none" || computedStyle.display === "") {
                    dropdown[index].style.display = "block";
                    this.style.background = "#333";
                    this.style.color = "#fff";
                } else {
                    dropdown[index].style.display = "none";
                    this.style.background = "#fff";
                    this.style.color = "#333";
                }
            });
        });
    </script>
</body>

</html>
