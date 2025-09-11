@extends('app.layouts.app')

@section('head-tag')
    <title>services</title>
@endsection

@section('content')

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">سرویس ها</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?= route('index') ?>">خانه</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">سرویس ها</li>
                </ol>
            </nav>
        </div>
    </div>




    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>استاد آشپزها</h5>
                            <p>سرآشپزهای ما با تجربه و مهارت فراوان در دنیای آشپزی، همواره در تلاشند تا با استفاده از بهترین مواد اولیه، طعمی بی‌نظیر و به یاد ماندنی را برای شما به ارمغان بیاورند.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>غذای با کیفیت</h5>
                            <p>غذاهای ما با بهترین مواد اولیه تهیه و با دقت پخته می‌شوند تا تجربه‌ای لذت‌بخش و بی‌نظیر را برای شما فراهم کنند. ما در هر وعده غذایی، کیفیت و طعم را در اولویت قرار می‌دهیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>خدمات تمام وقت</h5>
                            <p>با خدمات ۲۴ ساعته، ما همیشه و در هر زمانی آماده پاسخگویی به نیازهای شما هستیم</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>سفارش آنلاین</h5>
                            <p>ما خدمات سفارش آنلاین سریع و راحت را ارائه می‌دهیم و یک تجربه خرید یکپارچه و قابل اعتماد را تضمین می‌کنیم. هدف ما ارائه بهترین محصولات با بهترین قیمت‌ها است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection