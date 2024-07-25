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
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
</head>
<style>
    body {
        background: #fbf7f5;
    }

    nav {
        background-color: #A60DE4;
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

    .category-card a li {
        list-style: none;
    }

    .category-card a li img {
        height: 80px;
        width: 100%;
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

    .product-container .product-content {
        grid-template-columns: 1fr 1fr 1fr;
        gap: 10px;
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
        nav {
            display: inline-flex;
            padding: 7px 10px;
        }

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
            margin-top: 20px;
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

        .product-container {
            margin: 0;
        }

        .product-container .product-header {
            padding: 10px 5px;
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
            font-size: 14px;
        }

        @media (max-width: 475px) {
            .main-container {
                padding: 0 4px;
            }

            .category-card ul {
                grid-template-columns: 1fr 1fr 1fr;
            }

            .filter-box {
                padding: 0 5px;
            }

            .product-content {
                margin: 0 2px;
            }

            .product-container .product-header {
                text-align: left;
            }

            .product-container .product-header span {
                font-size: 13px;
            }

            .product-container .massage {
                font-size: 12px;
            }

            .sort-content {
                margin: 0;
            }

            .filter-content {
                width: 130px;
            }

            .product-container .product-content {
                grid-template-columns: 1fr;
                gap: 5px;
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

            .filter-content {
                width: 130px;
            }
        }
    }
</style>

<body>
    <nav>
        <div class="button">
            <i class="ri-arrow-left-s-line" onclick="history.back()" id="back-buttton" style="font-size: 32px;"></i>
            <p style="margin:0;">Category By Product</p>
        </div>
        <div class="button">
            <i class="ri-more-2-fill" style="font-size: 24px;"></i>
        </div>
    </nav>
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
                    </div>
                </div>
                {{-- product section --}}
                {{-- product html code --}}
                <div class="product-container">
                    <div class="product-header">
                        <h4>new products</h4>
                    </div>
                    <div class="product-content">
                        @foreach ($products as $product)
                            <div class="product-card">
                                <a href="{{ route('viewproduct', $product->id) }}">
                                    <div class="card">
                                        <div class="card product-img">
                                            <img src="{{ asset('ProductImg/' . $product->product_img) }}"
                                                alt="">
                                        </div>
                                        <div class="titel">
                                            <span>{{ $product->product_name }}</span>
                                        </div>
                                        <div class="star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line"></i>
                                        </div>
                                        <div class="price">
                                            @if ($product->regularPrice)
                                                <div class="discount">
                                                    <span>DKK {{ $product->regular_price }}.00</span>
                                                </div>
                                            @endif
                                            <span>DKK {{ $product->product_price }}.00</span>
                                        </div>
                                        @if ($product->product_quantity > 0)
                                            <a href="javascript:void(0);" class="btn btn-dark"
                                                onclick="submitForm(this);">
                                                <span class="ri-shopping-cart-line"></span>
                                                addtocart
                                            </a>
                                        @else
                                            <input type="submit" class="btn btn-dark" disabled value="out of stock">
                                        @endif
                                        <form action="{{ route('storecart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="1" id="quantityHidden2"
                                                name="productQuantity" class="form-control">
                                            <input type="hidden" name="productImg"
                                                value="{{ $product->product_img }}">
                                            <input type="hidden" name="productName"
                                                value="{{ $product->product_name }}">
                                            <input type="hidden" name="productPrice"
                                                value="{{ $product->product_price }}">
                                            <input type="hidden" name="productId" value="{{ $product->id }}">
                                        </form>
                                    </div>
                                </a>
                            </div>
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
