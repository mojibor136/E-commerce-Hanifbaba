@include('admin.logo.logo')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: grid;
            grid-template-columns: 180px 1fr;
            grid-template-rows: 60px 1fr;
            grid-template-areas:
                "side header"
                "side main";
        }

        .header {
            background-color: #3498db;
            grid-area: header;
            display: flex;
            padding: 0 20px;
            align-items: center;
            justify-content: flex-end;
        }

        .header i {
            font-weight: 700;
            font-size: 20px;
            cursor: pointer;
            display: none;
        }

        .admin-content {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .admin-content .image {
            border-radius: 100%;
            overflow: hidden;
            margin: 0 5px;
        }

        .admin-content span {
            color: #eee;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
            text-transform: capitalize;
        }

        .sidebar {
            background-color: #212b36;
            border-right: 1px solid #212b36;
            transition: margin .25s ease-out;
            grid-area: side;
            overflow-y: auto;
        }

        .sidebar::-webkit-scrollbar {
            display: none;
        }

        .admin-logo .admin-brand {
            text-decoration: none;
        }

        .admin-logo .admin-brand span {
            text-transform: uppercase;
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 16px;
            color: #eee;
        }

        .sidebar .admin-logo {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid;
        }

        .sidebar .nav-link {
            padding: .5rem 1rem;
            display: flex;
            align-items: center;
            color: #919eab;
            font-weight: 500;
            line-height: 1.8;
            -webkit-transition: all .5s;
            white-space: nowrap;
            transition: all .5s;
            text-transform: capitalize;
        }

        .sidebar .nav-link .nav-icon {
            font-size: 16px;
            margin: 0 2px;
        }

        .sidebar .nav-link:hover {
            color: #f4f6f8;
        }

        .sidebar .active {
            color: #eff;
        }

        .navbar-heading {
            color: #515e65;
            padding: 10px 10px;
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .08rem;
            font-weight: 700;
        }

        .main {
            background-color: #eee;
            grid-area: main;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            padding: 25px;
        }

        .card:nth-child(1) {
            background-color: #db0000;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card:nth-child(2) {
            background-color: #e18600;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card:nth-child(3) {
            grid-row: 2 / span 30;
            grid-column: 1 / span 2;
        }

        .main .card {
            display: flex;
            padding: 10px;
        }

        .main .card .content {
            display: flex;
            flex-direction: column;
        }

        .main .card .content .icons {
            display: flex;
            width: 100%;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .main .card h1 {
            margin: 0;
            font-size: 20px;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .main .card h3 {
            margin: 0;
            font-size: 16px;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .m-sidebar {
            display: none;
        }

        @media (max-width: 768px) {
            body {
                grid-template-columns: 0;
            }

            .header {
                padding: 0 20px;
                justify-content: space-between;
            }

            .header i {
                display: block;
            }

            .main {
                grid-template-columns: 1fr 1fr;
                gap: 5px;
                padding: 5px;
            }

            .sidebar {
                display: none;
            }

            .m-sidebar {
                margin-top: 60px;
                background-color: #212b36;
                height: inherit;
                width: fit-content;
                z-index: 9999;
            }

            .m-sidebar .admin-logo {
                padding: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid;
            }

            .m-sidebar .nav-link {
                padding: .5rem 1rem;
                display: flex;
                align-items: center;
                color: #919eab;
                font-weight: 500;
                line-height: 1.8;
                -webkit-transition: all .5s;
                white-space: nowrap;
                transition: all .5s;
                text-transform: capitalize;
            }

            .m-sidebar .nav-link .nav-icon {
                font-size: 16px;
                margin: 0 2px;
            }

            .m-sidebar .nav-link:hover {
                color: #f4f6f8;
            }

            .m-sidebar .active {
                color: #eff;
            }
        }
    </style>
</head>

<body>
    @php
        $admin = getAdmin();
    @endphp
    <header class="header">
        <i id="button" class="ri-menu-line"></i>
        <div class="admin-content">
            <div class="image">
                @if (!empty($admin) && !empty($admin->image))
                    <img src="{{ asset('Admins/' . $admin->image) }}" alt="Admin Image" width="45">
                @else
                    <img src="{{ asset('Admins/profile.jpg') }}" width="45">
                @endif
            </div>
            <div>
                <span>{{ !empty($admin->name) ? $admin->name : 'Hanifbaba.com' }}</span>
            </div>
        </div>
    </header>
    <section class="sidebar">
        <div class="admin-logo">
            <a href="{{ route('admin') }}" class="admin-brand">
                <span>hanifbaba.com</span>
            </a>
        </div>
        <ul class="navbar-nav flex-column accordion">
            <div class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link"><i class="ri-computer-line nav-icon"></i>dashboard</a>
            </div>
            <div class="nav-item">
                <div class="navbar-heading">CREATE FUTURE</div>
            </div>
            <div class="nav-item">
                <a href="{{ route('allproduct') }}" class="nav-link"><i
                        class="ri-shopping-bag-line nav-icon"></i>products</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('allcategory') }}" class="nav-link"><i class="ri-apps-line nav-icon"></i>category</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('allsubcategory') }}" class="nav-link"><i
                        class="ri-apps-line nav-icon"></i>subcategory</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('allorder') }}" class="nav-link"><i class="ri-file-list-line nav-icon"></i>order
                    manage</a>
            </div>
            <div class="nav-item">
                <div class="navbar-heading">ADVANCE SYSTEM</div>
            </div>
            <div class="nav-item">
                <a href="" class="nav-link"><i class="ri-briefcase-line nav-icon"></i>managemet</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('alluser') }}" class="nav-link"><i class="ri-user-line nav-icon"></i>user
                    managemet</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('allquestion') }}" class="nav-link">
                    <i class="ri-question-answer-fill nav-icon"></i>
                    Question Answer</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('setting') }}" class="nav-link"><i
                        class="ri-settings-4-line nav-icon"></i>settings</a>
            </div>
        </ul>
    </section>
    <div class="m-sidebar">
        <ul class="navbar-nav flex-column accordion">
            <div class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link"><i class="ri-computer-line nav-icon"></i>dashboard</a>
            </div>
            <div class="nav-item">
                <div class="navbar-heading">CREATE FUTURE</div>
            </div>
            <div class="nav-item">
                <a href="{{ route('allproduct') }}" class="nav-link"><i
                        class="ri-shopping-bag-line nav-icon"></i>products</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('allcategory') }}" class="nav-link"><i class="ri-apps-line nav-icon"></i>category</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('allorder') }}" class="nav-link"><i class="ri-file-list-line nav-icon"></i>order
                    manage</a>
            </div>
            <div class="nav-item">
                <div class="navbar-heading">ADVANCE SYSTEM</div>
            </div>
            <div class="nav-item">
                <a href="" class="nav-link"><i class="ri-briefcase-line nav-icon"></i>managemet</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('alluser') }}" class="nav-link"><i class="ri-user-line nav-icon"></i>user
                    managemet</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('allquestion') }}" class="nav-link">
                    <i class="ri-question-answer-fill nav-icon"></i>
                    Question Answer</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('setting') }}" class="nav-link"><i
                        class="ri-settings-4-line nav-icon"></i>settings</a>
            </div>
        </ul>
    </div>
    <main class="main">
        @yield('content')
    </main>
    <script>
        let sidebar = document.querySelector('.m-sidebar');
        let button = document.querySelector('#button');

        button.addEventListener('click', function() {
            if (sidebar.style.display === 'block') {
                sidebar.style.display = 'none';
                button.classList.remove('ri-close-large-line');
                button.classList.add('ri-menu-line');
            } else {
                sidebar.style.display = 'block';
                button.classList.remove('ri-menu-line');
                button.classList.add('ri-close-large-line');
            }
        });
    </script>
</body>

</html>
