<!doctype html>
<html lang="en">

<head>
    @include('maincss')
    {{-- kmd link --}}

    {{-- CSS start --}}
    <style>
        nav {
            width: 100%;
            left: 0;
            z-index: 100;
            background-color: white;
            text-transform: uppercase;
        }

        .nav-link {
            color: white;
        }

        .nav-link:hover {
            color: white;
        }

        .dropdown-menu {
            max-height: 200px;
            overflow-y: scroll;
        }

        .filters-news {
            margin-top: 40px;
            padding: 0 8px;
        }

        section {
            display: block;
        }

        .carousel-inner {
            max-width: 100%;
            /* Adjust as needed */
            overflow: hidden;
            padding: 0 20px;
            /* Adjust horizontal padding */
        }

        .carousel-item {
            /* display: flex; */
            align-items: center;
            justify-content: center;
        }

        .card-img-top {
            max-width: 100%;
            /* Ensure images don't exceed container width */
            max-height: 400px;
            /* Set max height for vertical images */
            object-fit: contain;
            /* Maintain aspect ratio */
        }

        .carousel-control-prev {
            position: absolute;
            left: -2%;
        }

        .carousel-control-prev-icon {
            width: 30px;
            height: 50px;
            background-color: rgb(68, 68, 71);
        }

        .carousel-control-next {
            position: absolute;
            right: -2%;
        }

        .carousel-control-next-icon {
            width: 30px;
            height: 50px;
            background-color: rgb(68, 68, 71);
        }

        .carousel-indicators button[Type="button"] {
            height: 10px;
        }

        p {
            -webkit-line-clamp: 3;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    {{-- CSS end --}}
</head>



<body>
    {{-- Header start --}}
   @include('header')
    {{-- Header end --}}

    {{-- navbar start --}}
    @include('mainnav')
    {{-- nav end --}}

    <div class="container my-5">
        {{-- Title start --}}
        <h1 class="my-3" style="text-align:center;"> KMD News
            {{-- <button class="btn btn-outline-dark dropdown-toggle btn-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></button> --}}
        </h1>
        {{-- Title end --}}

        {{-- Offcanvas --}}
        {{-- <div class="offcanvas offcanvas-start shadow" style="width: 150px" data-bs-scroll="true"
            data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
            aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close btn btn-sm" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class=""> --}}
                {{-- Year list start --}}
                {{-- <div class="list-group border border-0 rounded-0 text-center">
                    <a href="#" class="list-group-item border border-0 rounded-0 list-group-item-action active"
                        aria-current="true">
                        2023
                    </a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2022</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2021</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2020</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2019</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2018</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2017</a>
                </div> --}}
                {{-- Year list end --}}
            </div>
        </div>
        {{-- Offcanvas end --}}

        {{-- Latest News start --}}
        {{-- @include('latest_news') --}}
        {{-- <div class="carousel-item">
                    <div class=" card mb-3 pt-3 m-4 shadow">
                        <img src="{{ asset('img/csr1.jpg') }}" class="card-img-top justify-content-center "
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">KMD မိသားစု၏ (၂၂) ကြိမ်မြောက် စုပေါင်းသွေးလှူခြင်း</h5>
                            <p class="card-text">KMD မိသားစု၏ (၂၂) ကြိမ်မြောက် စုပေါင်းသွေးလှူခြင်း အစီအစဉ် ကို
                                ၂၉.၁.၂၀၂၄ ရက်နေ့၊ မနက် (၈:၃၀ နာရီမှ ၁၂:၀၀ နာရီအထိ) အောင်မြင်စွာ ပြုလုပ် ပြီးစီးခဲ့ပါသည်။
                                စာရင်းပေး ဝန်ထမ်း (၃၁) ဦး ထဲမှဝန်ထမ်း (၂၇) ဦး သွေးလှူဒါန်း နိုင်ခဲ့ပါသည်။
                                စုပေါင်းသွေးလှူ ခြင်း အစီအစဉ်အရ (၂၂) ကြိမ်မြောက်အထိ လှူဒါန်း .....</p>
                            <p class="card-text"><small class="text-body-secondary">Media 2023 </small> <a
                                    href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                    aria-disabled="true">Read
                                    More</a></p>

                        </div>
                    </div>
                </div> --}}
    {{-- Latest News end --}}

    {{-- mini nav start --}}
    @include('mini_nav')
    {{-- mini nav end --}}

    {{-- Card start --}}
    @include('post_body')
    {{-- <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/KMD-03.png') }}" class="card-img-top" alt="...">
                        <div class="card-body shadow">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                aria-disabled="true">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/KMD-03.png') }}" class="card-img-top" alt="...">
                        <div class="card-body shadow">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content.</p>
                            <a href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                aria-disabled="true">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/KMD-03.png') }}" class="card-img-top" alt="...">
                        <div class="card-body shadow">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                aria-disabled="true">See More</a>
                        </div>
                    </div>
                </div> --}}
    </div>
    </div>
    </div>
    {{-- Card end --}}

    {{-- Footer start --}}
    @include('footer')
</body>

</html>
