@include('layouts.header')
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

    .sort-content .category-filter .dropdown-bar {
        margin-bottom: 5px;
        position: relative;
        box-sizing: border-box;
        background: #333;
        cursor: pointer;
    }

    .sort-content .category-filter .dropdown-bar .select-bar {
        display: flex;
        align-items: center;
        color: #e9ecef;
        background-color: transparent;
        padding: 7px 25px;
        font-weight: 500;
        text-transform: capitalize;
    }

    .sort-content .category-filter .dropdown-bar .select-bar .caret {
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        border-top: 6px solid #e9ecef;
        margin-left: 7px;
        margin-top: 2px;
    }

    .sort-content .category-filter .dropdown-bar .category-bar {
        display: none;
        position: absolute;
        z-index: 10;
        width: -webkit-fill-available;
        top: 100%;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        margin: 0;
        padding: 0;
        cursor: pointer;
    }

    .sort-content .category-filter .dropdown-bar .category-bar a {
        display: block;
        padding: 5px 10px;
        text-decoration: none;
        color: #41464b;
        border-bottom: 1px solid #dee2e6;
        font-size: 15px;
        font-weight: 500;
        text-transform: capitalize;
    }

    .sort-content .category-filter .dropdown-bar .category-bar a:hover {
        color: #f8f9fa;
        background: #41464b;
    }

    .sort-content .category-filter .dropdown-bar .category-bar-block {
        display: block;
    }

    /* Products container all css */
    .product-container {
        margin: 0;
    }

    .product-container .type {
        padding: 8px 2px;
    }

    .product-container .type span {
        text-transform: capitalize;
        font-weight: 500;
        font-size: 17px;
        color: #41464b;
    }

    .product-container .product-card {
        background-color: transparent;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 10px;
        border: none;
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

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        .main-container {
            padding: 0 30px;
        }

        .category-card ul {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr;
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

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr;
            gap: 5px;
        }
        .footer{
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

        .product-container .product-card {
            grid-template-columns: 1fr 1fr;
            gap: 5px;
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

            .product-container .product-card {
                grid-template-columns: 1fr;
                gap: 5px;
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
                        <a href="{{ route('category.product', ['id' => $category->id, 'slug' => $category->slug]) }}">
                            <li><span>{{ $category->category_name }}</span></li>
                        </a>
                    @endforeach
                </ul>

                <form action="{{ route('PriceFiltur') }}" method="get">
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
                <form action="{{ route('SizeFiltur') }}" method="get">
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
                    @if (isset($categorySlugs))
                        @foreach ($categorySlugs as $slug)
                            <h1> {{ $slug->slug }}</h1>
                        @endforeach
                    @else
                        @foreach ($categoriesData as $category)
                            <h1>{{ $category['categorySlug'] }}</h1>
                        @endforeach
                    @endif
                    <div class="sort-content">
                        <div class="result-bar">
                            <span>11,174 items found for</span>
                            @if (isset($categorySlugs))
                                @foreach ($categorySlugs as $slug)
                                    <span>
                                        {{ $slug->slug }}
                                    </span>
                                @endforeach
                            @else
                                @foreach ($categoriesData as $category)
                                    <span>{{ $category['categorySlug'] }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="category-filter">
                            <div class="dropdown-bar  Click-Category">
                                <div class="select-bar">
                                    <span class="selected">
                                        @if (isset($categorySlugs))
                                            @foreach ($categorySlugs as $slug)
                                                <span> {{ $slug->slug }}</span>
                                            @endforeach
                                        @else
                                            @foreach ($categoriesData as $category)
                                                <span>{{ $category['categorySlug'] }}</span>
                                            @endforeach
                                        @endif
                                    </span>
                                    <div class="caret"></div>
                                </div>
                                <ul class="category-bar">
                                    @php
                                        $categories = getCategoryData();
                                    @endphp
                                    @foreach ($categories as $category)
                                        <a
                                            href="{{ route('category.product', ['id' => $category->id, 'slug' => $category->slug]) }}">{{ $category->category_name }}</a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /* Products container all html*/ --}}
                <div class="product-container">
                    @if (isset($error))
                        <div class="massage">
                            <span>{{ $error }} Not available products</span>
                        </div>
                    @else
                        <div class="type">
                            <span>All products</span>
                        </div>
                        <div class="card product-card">
                            @foreach ($priceProducts ?? ($products ?? $productSizes) as $Product)
                                <a
                                    href="{{ route('product.details', ['id' => $Product->id, 'productName' => $Product->product_name]) }}">
                                    <li class="card">
                                        <img src="{{ asset('assets/image/ProductImg/' . $Product->product_img) }}"
                                            alt="">
                                        <div class="text">
                                            <span class="titel">{{ $Product->product_name }}</span>
                                            <div class="price">
                                                <span class="price">bdt:{{ $Product->product_price }}</span>
                                                <div class="discount">
                                                    <span>bdt:570</span>
                                                </div>
                                            </div>
                                            <div class="star">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line"></i>
                                                <span>(25)</span>
                                                <div class="charge">
                                                    <span>free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            @endforeach
                    @endif
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
                    let CategoryId = item.id;
                    let CategorySlug = item.slug;
                    var url = '{{ route('category.product', ['id' => ':id', 'slug' => ':slug']) }}';
                    url = url.replace(':id', item.id).replace(':slug', item.slug);
                    CategoryNames +=
                        `<a href="${url}" class="card">
                    <li>
                    <img src="{{ asset('assets/img/banner/vivo.jfif') }}" alt="">
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
