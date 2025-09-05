@extends('app.layouts.app')

@section('head-tag')
    <title>Restauran</title>
@endsection

@section('content')


    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">If you're on a diet and craving a delicious fast food, be sure to try our restaurant's organic sandwiches!</p>
                    <a href="<?= route('booking') ?>" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="<?= asset('assets/img/hero.png') ?>" alt="">
                </div>
            </div>
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
                            <h5>Master Chefs</h5>
                            <p>Our chefs, with extensive experience and skills in the culinary world, are always striving to bring you a unique and memorable flavor using the finest ingredients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>Quality Food</h5>
                            <p>Our dishes are made with the finest ingredients and cooked with precision to provide you with a delightful and unique experience. We prioritize quality and taste in every meal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>24/7 Service</h5>
                            <p>With 24/7 service, we're always available to meet your needs at any time</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>Online Order</h5>
                            <p>We provide fast and convenient online ordering services, ensuring a seamless and reliable shopping experience. Our goal is to offer the best products at the best prices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->






    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>




                <div class="container-xxl py-5">

                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">

                            <?php foreach ($products as $product) { ?>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <a href="<?= $product->image ?>"><img class="flex-shrink-0 img-fluid rounded" src="<?= asset($product->image) ?>" alt="" style="width: 80px;"></a>
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span><?= $product->name ?></span>
                                            <span class="text-primary"> $ <?= $product->price ?></span>
                                        </h5>
                                        <h6 class="d-flex justify-content-between">
                                            <small class="fst-italic"><?= $product->name ?></small>
                                            <a class="btn btn-primary" href="<?= route('cart.add',[$product->id]) ?>">add cart</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            </div>

                        </div>

                    </div>

                </div>

                </div>
        </div>
    <!-- Menu End -->







@endsection