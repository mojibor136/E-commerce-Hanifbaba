@include('layouts.header')
@include('admin.logo.logo')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
</head>
<style>
    body {
        background: #fbf7f5;
    }

    .main-container {
        padding: 0 80px;
    }

    /*------ Category-container all css */
    .category-container {
        margin: 20px 0;
    }

    .category-container .category-card {
        background-color: transparent;
        height: 107px;
        overflow: hidden;
    }

    .category-card ul {
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 5px;
    }

    .category-card a {
        text-decoration: none;
    }

    .category-card a li img {
        max-width: 100%;
        height: 80px;
    }

    .category-card a .card {
        border-radius: 3px;
        overflow: hidden;
    }

    .category-card a li span {
        text-align: center;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-transform: capitalize;
        padding: 2px 0;
        color: #2a2f3b;
        font-size: 14px;
        font-weight: 500;
    }

    /* FILTER CONTAINER */
    .filter-container {
        display: grid;
        grid-template-columns: 1fr 4.5fr;
    }

    /* FILTER CONTENT */
    .filter-content {
        width: 180px;
        margin-bottom: 20px;
    }

    .filter-content ul {
        border-bottom: 2px solid #efefef;
        padding: 10px 0 5px 0;
        margin: 0;
        background-color: #ffffff;
    }

    .filter-content .category a {
        padding: 6px 15px;
        display: block;
    }

    .filter-content .category a:hover {
        background: #dee2e6;
    }

    .filter-content .category a li {
        padding: 0;
        margin: 0;
    }

    .filter-content ul a {
        text-decoration: none;
    }

    .filter-content span {
        font-size: 16px;
        padding: 0 15px;
        text-transform: capitalize;
        color: #5f5f5f;
    }

    .filter-content .type {
        font-weight: 600;
    }

    .filter-content li {
        display: flex;
        list-style: none;
        padding: 2px 15px;
        margin: 5px 0;
        font-family: system-ui;
    }

    .filter-content li input {
        margin-top: 1px;
    }

    .filter-content li span {
        text-decoration: none;
        color: #464646;
        padding: 0 3px;
        font-size: 14.5px;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* PRODUCT CONTENT */
    .product-content {
        margin-left: 10px;
    }

    /* FILTER BOX */
    .filter-box h1 {
        font-size: 20px;
        margin: 0;
        color: #41464b;
        text-transform: capitalize;
    }

    .result-bar {
        font-size: 14px;
        line-height: 40px;
        font-weight: 500;
        color: #41464b;
        text-transform: capitalize;
    }

    .sort-content {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        border-bottom: 1px solid #d7d7d7;
    }

    /* Products container all css */
    .main-product-container {
        margin: 25px 0;
        margin-bottom: 10px;
    }

    .main-product-container .type {
        width: 100%;
        padding: 5px 10px;
    }

    .main-product-container .type span {
        font-size: 18px;
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
        color: #444;
    }

    .product-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        column-gap: 5px;
        row-gap: 15px;
    }

    .product-container a {
        text-decoration: none;
    }

    .product-card {
        width: 100%;
        background: #fff;
        padding-bottom: 2px;
        overflow: hidden;
    }

    .product-card .image {
        width: 100%;
    }

    .product-card .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-card .name {
        line-height: normal;
        font-size: 14px;
        color: #222;
        padding: 2px 5px;
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        max-height: 2 * (14px + 4px);
    }

    .product-card .free-card {
        padding: 2px 5px;
    }

    .product-card .free {
        background: #02473e;
        border-radius: 10px;
        font-size: 11px;
        text-transform: capitalize;
        width: fit-content;
        padding: 2px 8px;
        padding-left: 5px;
        color: #eee;
        line-height: normal;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .product-card .free i {
        font-size: 10px;
    }

    .product-card .price-card {
        display: flex;
        align-items: center;
        padding: 3px 5px;
        line-height: 1.1;
        padding-bottom: 4px;
        text-transform: uppercase;
    }

    .product-card .price-card .tk {
        color: #96006d;
        font-size: 16px;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .product-card .price-card .discount {
        text-decoration: line-through;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        color: #333;
        font-size: 14px;
    }

    .product-card .price-card .percent {
        margin-left: 10px;
        background: #af009c;
        transform: skew(-18deg);
        padding: 1px 10px;
        color: #eee;
        font-size: 12px;
        line-height: normal;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .product-container .massage {
        width: 70vw;
        height: 30vh;
        font-weight: 500;
        color: #41464b;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase;
    }

    @media (max-width: 1280px) {}

    @media (max-width: 1024px) {
        .category-card ul {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        .main-container {
            padding: 0 30px;
        }

        .category-card ul {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }
    }

    @media (max-width: 640px) {
        .top-header {
            display: none;
        }

        .header-container {
            margin: 0%;
        }

        header {
            display: none;
        }

        .header-tow-ul {
            background-color: #f85606;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            padding: 10px 15px;
        }

        .sticky_header_tow {
            background-color: #f85606;
            top: 0;
            position: fixed;
            z-index: 10;
        }

        .header-tow-ul .search-box {
            display: flex;
            line-height: 35px;
            height: 35px;
            margin: auto 0;
            cursor: pointer;
            background-color: #ffffff;
        }


        .header-tow-ul .search-box i {
            font-size: 22px;
            color: #292929;
            height: 100%;
            padding: 0 5px;
        }

        .header-tow-ul .search-box input {
            width: 400px;
            height: 100%;
            outline: none;
            border: none;
            font-size: 14px;
            text-transform: capitalize;
        }

        .header-tow-ul .search-box input::placeholder {
            color: rgb(20, 20, 20);
            font-size: 14px;
            padding-top: 2px;
            text-transform: capitalize;
        }

        .main-container {
            padding: 0 6.5px;
        }

        .category-container {
            margin-top: 70px;
        }

        .category-card ul {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }

        .filter-content {
            width: 160px;
        }

        .footer {
            margin-bottom: 0;
        }
    }

    @media (max-width: 475px) {
        .header-container {
            margin: 0%;
        }


        header {
            display: none;
        }

        .header-tow-ul {
            background-color: #f85606;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            padding: 10px 15px;
        }

        .header-tow-ul .search-box {
            display: flex;
            line-height: 35px;
            height: 35px;
            margin: auto 0;
            cursor: pointer;
            background-color: #ffffff;
        }

        .header-tow-ul .search-box input {
            width: 300px;
        }

        .category-card ul {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }

        .filter-content {
            width: 150px;
        }

        .filter-box h1 {
            font-size: 16px;
        }

        .result-bar {
            line-height: 20px;
            font-display: 13px;
        }

        @media (max-width: 475px) {
            .main-container {
                padding: 0 4px;
            }

            .product-container .massage {
                font-size: 12px;
            }

            .filter-content {
                width: 130px;
            }
        }

        @media (max-width: 375px) {
            .filter-box h1 {
                display: none;
            }

            .sort-content {
                flex-direction: column-reverse;
            }

            .filter-content {
                width: 150px;
            }

        }

        @media (max-width: 320px) {
            .header-tow-ul .search-box input {
                width: 250px;
            }

            .category-card ul {
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }

            .filter-content {
                width: 130px;
            }
        }
    }
</style>

<body>
    <div class="main-container">
        {{-- /* Category-container all html*/ --}}
        <div class="category-container">
            <div class="card category-card border-0">
                <ul></ul>
            </div>
        </div>

        <div class="filter-container">
            <div class="filter-content">
                <ul class="category">
                    <span class="type">categories</span>
                    @php
                        $categories = getCategoryData();
                    @endphp
                    @foreach ($categories as $category)
                        <a href="{{ route('filterproduct', ['id' => $category->id, 'slug' => $category->slug]) }}">
                            <li><span>{{ $category->category_name }}</span></li>
                        </a>
                    @endforeach
                </ul>

                <form action="{{ route('pricefilter') }}" method="get">
                    <ul>
                        <span class="type">price</span>
                        <li>
                            <input type="radio" name="price" value="100-500">
                            <span>100-500</span>
                        </li>
                        <li>
                            <input type="radio" name="price" value="500-1000">
                            <span>500-1000</span>
                        </li>
                        <li>
                            <input type="radio" name="price" value="1000-1500">
                            <span>1000-1500</span>
                        </li>
                        <li>
                            <input type="radio" name="price" value="1500-2000">
                            <span>1500-2000</span>
                        </li>
                        <li>
                            <input type="radio" name="price" value="2000-2500">
                            <span>2000-2500</span>
                        </li>
                        <li>
                            <input type="radio" name="price" value="3000-3500">
                            <span>3000-3500</span>
                        </li>
                        <input type="submit" class="mt-2 mb-2">
                    </ul>
                </form>

                <ul>
                    <span class="type">brand</span>
                    <li>
                        <input type="radio">
                        <span>Fashoin</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>Ramond</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>Indian</span>
                    </li>
                </ul>
                <form action="{{ route('sizefilter') }}" method="get">
                    <ul>
                        <span class="type">size</span>
                        <li>
                            <input type="radio" value="38" name="size">
                            <span>38</span>
                        </li>
                        <li>
                            <input type="radio" value="39" name="size">
                            <span>39</span>
                        </li>
                        <li>
                            <input type="radio" value="40" name="size">
                            <span>40</span>
                        </li>
                        <li>
                            <input type="radio" value="41" name="size">
                            <span>41</span>
                        </li>
                        <li>
                            <input type="radio" value="42" name="size">
                            <span>42</span>
                        </li>
                        <li>
                            <input type="radio" value="43" name="size">
                            <span>43</span>
                        </li>
                        <li>
                            <input type="radio" value="44" name="size">
                            <span>44</span>
                        </li>
                    </ul>
                    <input type="submit">
                </form>
                <ul>
                    <span class="type">Color Family</span>
                    <li>
                        <input type="radio">
                        <span>Red</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>Yellow</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>DarkBlue</span>
                    </li>
                </ul>

                <ul>
                    <span class="type">Location</span>
                    <li>
                        <input type="radio">
                        <span>dhaka</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>lalmonirhat</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>sylhet</span>
                    </li>
                </ul>


                <ul>
                    <span class="type">Warranty Type</span>
                    <li>
                        <input type="radio">
                        <span>2year</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>1yaer</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>6manth</span>
                    </li>
                </ul>


                <ul>
                    <span class="type">Gender</span>
                    <li>
                        <input type="radio">
                        <span>Female</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>Male</span>
                    </li>
                    <li>
                        <input type="radio">
                        <span>Others</span>
                    </li>
                </ul>


            </div>
            <div class="product-content">
                <div class="filter-box">
                    <div class="sort-content">
                        <div class="result-bar">
                            <span>11,174 items found for</span>
                        </div>
                        <select name="" id="">
                            @php
                                $categories = getCategoryData();
                            @endphp
                            <option disabled selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="" style="text-transform: capitalize;">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- top products container --}}
                <div class="main-product-container">
                    <div class="type">
                        <span>category by products</span>
                    </div>
                    <div class="product-container">
                        @foreach ($priceProducts ?? ($products ?? $productSizes) as $product)
                            <a href="{{ route('singleproduct', $product->id) }}">
                                <div class="product-card">
                                    <div class="image">
                                        <img src="{{ asset('assets/ProductImg/' . $product->product_img) }}"
                                            alt="">
                                    </div>
                                    <div class="name">
                                        {{ $product->product_name }}
                                    </div>
                                    <div class="free-card">
                                        <div class="free">
                                            <i class="ri-star-fill"></i>
                                            <span>cash delivery</span>
                                        </div>
                                    </div>
                                    <div class="price-card">
                                        <div>
                                            <span class="tk">৳{{ $product->product_price }}</span>
                                            <span class="discount">৳{{ $product->regular_price }}</span>
                                        </div>
                                        <div class="percent">
                                            <span>10%</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('assets/js/filter.js') }}"></script>
    <script>
        let CategoryNames = '';
        fetch('/GetCategoriesData')
            .then(response => response.json())
            .then(data => {
                data.forEach(item => {
                    let CategoryName = item.category_name.split(' ', 1);
                    let CategoryImg = item.category_img;
                    let imageUrl = `/CategoryImg/${CategoryImg}`;
                    var url = '{{ route('filterproduct', ['id' => ':id', 'slug' => ':slug']) }}';
                    url = url.replace(':id', item.id).replace(':slug', item.slug);
                    CategoryNames +=
                        `<a href="${url}" class="card">
                    <li>
                    <img src="${imageUrl}" alt="">
                    <span>${CategoryName.join(' ')}</span>
                    </li>
                </a>`;
                });
                let CategoryElement = document.querySelector('.category-card ul');
                CategoryElement.innerHTML = CategoryNames;
            })
            .catch(error => console.error('Error:', error));
    </script>
    @include('layouts.footer')
</body>

</html>
