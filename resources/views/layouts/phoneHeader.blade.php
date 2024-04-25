<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .phoneHeader {
        width: 100%;
        background: #A60DE4;
        display: flex;
        justify-content: center;
        padding: 10px;
        display: none;
    }

    .searchBox {
        display: inline-flex;
        align-items: center;
        overflow: hidden;
        border-radius: 2px;
        width: 100%;
        background: #fff;
        padding-right: 10px;
    }

    .searchBox input {
        width: 100%;
        border: none;
        outline: none;
        background: transparent;
        padding: 10px 15px;
        color: #333;
    }

    .searchBox input::placeholder {
        font-size: 15px;
    }

    .searchBox i {
        color: #555;
        font-size: 20px;
    }

    @media screen and (max-width: 640px) {
        .phoneHeader {
            display: block;
            padding: 10px 70px;
        }
    }

    @media screen and (max-width: 475px) {
        .phoneHeader {
            padding: 10px;
        }

        .searchBox input {
            padding: 8px 12px;
        }
    }
</style>

<body>
    <header class="phoneHeader">
        <div class="searchBox">
            <input type="text" placeholder="Search in Hanifbaba">
            <i class="ri-search-line"></i>
        </div>
    </header>
</body>

</html>
