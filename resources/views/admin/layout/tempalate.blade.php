<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .font {
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    body {
        background-color: #ddd;
        overflow: hidden;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    .admin-header {
        position: fixed;
        top: 0;
        right: 0;
        width: 100%;
        z-index: 1000;
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
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 14px;
        display: flex;
        align-items: center;
        color: #555;
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
        margin-top: 68px;
    }

    .main-content .nav-container {
        position: fixed;
        width: 100%;
        height: 100vh;
        overflow-y: auto;
    }

    .main-content .nav-content {
        width: 17%;
        height: 100%;
        background-color: #fff;
        border-top: 1px solid #ebebea;
        overflow-x: auto;
    }

    .main-content .content-ul {
        width: 83%;
        height: 100%;
        padding: 50px 20px 100px 20px;
        overflow-x: auto;
        position: fixed;
        right: 0;
    }

    .main-content .content-ul .content-ui {
        width: 100%;
    }

    label {
        font-size: 14px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        text-transform: capitalize;
    }

    .form-control::placeholder {
        font-size: 14px;
    }

    .btn-primary {
        font-size: 15px;
    }

    .dropdown-card .dropdown-btn {
        text-transform: capitalize;
        cursor: pointer;
        padding: 10px 15px;
        color: #444;
        border-bottom: 1px solid #ddd;
        font-size: 15px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
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
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .dropdown-card .dropdown-ui .active{
        color: red;
    }
    .dropdown-card .dropdown-ui a:hover {
        background-color: #ccc;
    }

    nav {
        display: flex;
        justify-content: right;
        align-items: center;
    }

    .table-container {
        overflow-x: auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
        font-size: 12px;
        color: #444;
    }

    .table th,
    .table td {
        text-align: left;
        padding: 5px 8px;
        height: 40px;
        white-space: nowrap;
        font-size: 13px;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        vertical-align: middle;
        text-align: center;
    }

    .table td {
        text-transform: lowercase;
    }

    .table td .btn {
        padding: 3px 8px;
    }

    .table tr:nth-child(even) {
        background-color: #f2f2f2;
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
            <div class="nav-container">
                <div class="nav-content">
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>dashboard</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="" class="nav-link">home</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>message</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="" class="nav-link">message</a>
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
                                <a href="{{ route('allproduct') }}" class="nav-link">all products</a>
                                <a href="{{ route('addproduct') }}" class="nav-link">add products</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>categories</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="{{ route('allcategory') }}" class="nav-link">all category</a>
                                <a href="{{ route('addcategory') }}" class="nav-link">add category</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>subcategories</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="{{ route('allsubcategory') }}" class="nav-link">all subcategory</a>
                                <a href="{{ route('addsubcategory') }}" class="nav-link">add subcategory</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>manage order</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="" class="nav-link">all order</a>
                                <a href="" class="nav-link">cencel order</a>
                                <a href="" class="nav-link">confirm order</a>
                                <a href="" class="nav-link">panding order</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>customer</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="" class="nav-link">user management</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>customize panle</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="" class="nav-link">change profile photo</a>
                                <a href="" class="nav-link">change profile name</a>
                                <a href="" class="nav-link">change admin logo</a>
                                <a href="" class="nav-link">change admin name</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>admin profile</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="" class="nav-link">admin profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>admin logout</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="" class="nav-link">admin logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-card">
                        <div class="dropdown-btn">
                            <span>Settinge</span>
                        </div>
                        <div class="dropdown-ul">
                            <div class="dropdown-ui">
                                <a href="" class="nav-link">change logo</a>
                                <a href="" class="nav-link">add banner</a>
                                <a href="" class="nav-link">change name</a>
                            </div>
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
        document.addEventListener("DOMContentLoaded", function() {
            let navLinks = document.querySelectorAll('.nav-link');
    
            navLinks.forEach(navLink => {
                navLink.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default behavior of the anchor tag
                    let href = this.getAttribute('href'); // Get the href attribute value
                    
                    // Optionally, you can add your own logic here
                    // For example, you can navigate to the href URL using JavaScript:
                    window.location.href = href;
    
                    // Add the 'active' class to the clicked nav-link
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
        });
    </script>
    
    
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
