@extends('layouts.master')

    @section('content')
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Men, Women, Kids</span>
                            <h1>Tailoring Design</h1>

                        <a href="{{route('mensproducts')}}" class="primary-btn">Order now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>New <span>Design</span></h2>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/Men-Shalwar-kameez-Dark-Brown_1024x1024.jpg?v=1584511265" alt="">
                        <div class="inner-text">
                            <a href="{{ route('mensproducts') }}"><h4>Men’s</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/45_47c4fede-718c-4608-8cfd-44cf30d1838d_1024x1024.jpg?v=1573451598" alt="">
                        <div class="inner-text">
                            <a href="{{ route('womensproducts') }}"><h4>Women’s</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/38_0750619e-516c-4d66-956d-7b9aacf01004_1024x1024.jpg?v=1580201694" alt="">
                        <div class="inner-text">
                            <a href="{{ route('kidsproducts') }}"><h4>Kid’s</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/DSC_1589_683x1023_108050ab-a491-4c5c-9213-15bb10cf0827_1024x1024.jpg?v=1584441784">
                        <h2>Women’s</h2>
                        <a href="{{ route('womensproducts') }}">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Women Stiching Designs</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/Purple-kurta-design-for-girls-3_1024x1024.jpg?v=1584437364" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="{{ route('womensproducts') }}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('womensproducts') }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ route('womensproducts') }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kurta Kameez</div>
                                <a href="{{route('mensproducts')}}">
                                    <h5>Premier Womens Shalwar Kameez Stiching</h5>
                                </a>
                                <div class="product-price">
                                    800
                                    <span>Rs 1000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/Women-Digital-Printed-Lawn-Kurti-White_1024x1024.jpg?v=1584438068" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="{{ route('womensproducts') }}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('womensproducts') }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ route('womensproducts') }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kurta Kameez</div>
                                <a href="#">
                                    <h5>Premier Womens Shalwar Kameez Stiching</h5>
                                </a>
                                <div class="product-price">
                                    800
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/Khaki-Kurti-Designs-For-Girls_1024x1024.jpg?v=1584438266" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="{{ route('womensproducts') }}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('womensproducts') }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ route('womensproducts') }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kurta Kameez</div>
                                <a href="#">
                                    <h5>Premier Womens Shalwar Kameez Stiching</h5>
                                </a>
                                <div class="product-price">
                                    800
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/Green-Kurti-for-Ladies_1024x1024.jpg?v=1584621255" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="{{ route('womensproducts') }}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('womensproducts') }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ route('womensproducts') }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kurta Kameez</div>
                                <a href="#">
                                    <h5>Premier Womens Shalwar Kameez Stiching</h5>
                                </a>
                                <div class="product-price">
                                    800
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Limited Time Sale</h2>
                    <div><h3>50% offer</h3></div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="{{route('mensproducts')}}" class="primary-btn">Order Now</a>
            </div>
        </div>
    </section>

    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Men Stiching Designs</li>

                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/Men-Shalwar-kameez-Dark-Brown_1024x1024.jpg?v=1584511265" alt="">

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="{{ route('mensproducts') }}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('mensproducts') }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ route('mensproducts') }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shalwar Kameez</div>
                                <a href="{{ route('mensproducts') }}">
                                    <h5>Premier Mens Shalwar Kameez Stiching</h5>
                                </a>
                                <div class="product-price">
                                    1200
                                    <span>1400</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/Men_Kameez_Shalwar_White_2_1024x1024.jpg?v=1582171089" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="{{ route('mensproducts') }}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('mensproducts') }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ route('mensproducts') }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shalwar Kameez</div>
                                <a href="{{ route('mensproducts') }}">
                                    <h5>Premier Mens Shalwar Kameez Stiching</h5>
                                </a>
                                <div class="product-price">
                                    1200
                                    <span>1500</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/159_1024x1024.jpg?v=1578651790" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="{{ route('mensproducts') }}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('mensproducts') }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ route('mensproducts') }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shalwar Kameez</div>
                                <a href="{{ route('mensproducts') }}">
                                    <h5>Premier Mens Shalwar Kameez Stiching</h5>
                                </a>
                                <div class="product-price">
                                    1100
                                    <span>1400</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/DSC_6158_638x956_521b5b4d-4df1-4850-bbbd-5f8f0a82af4c_1024x1024.jpg?v=1578650833" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="{{ route('mensproducts') }}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('mensproducts') }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ route('mensproducts') }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shalwar Kameez</div>
                                <a href="{{ route('mensproducts') }}">
                                    <h5>Premier Mens Shalwar Kameez Stiching</h5>
                                </a>
                                <div class="product-price">
                                    1100
                                    <span>1400</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="https://cdn.shopify.com/s/files/1/0247/0828/4509/products/Men-Premium-Embroidered-Kameez-Shalwar-Brown1_1024x1024.jpg?v=1578649530">
                        <h2>Men’s</h2>
                        <a href="{{ route('mensproducts') }}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
@endsection
