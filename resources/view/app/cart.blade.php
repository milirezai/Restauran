@extends('app.layouts.app')

@section('head-tag')
    <title>menu</title>
@endsection

@section('content')

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">سبد خرید</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="<?= route('index') ?>">خانه</a></li>
                         <li class="breadcrumb-item text-white active" aria-current="page">سبد خرید</li>
                    </ol>
                </nav>
            </div>
        </div>



        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Cart</h5>
                    <div class="cart-payment">
                        <div class="count-order-item">
                            <h6>محصول (<?= $allNumberItems ?>)</h6>
                            <h5> تومان <?= $totalPrice ?> </h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="<?= route('payment') ?>" class="btn btn-success btn-order-registration">پرداخت</a>
                        </div>
                    </div>
                </div>




                <div class="container-xxl py-5">

                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">

                                <?php foreach ($carts as $cart) { ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <a href="<?= $cart->product()->image ?>"><img class="flex-shrink-0 img-fluid rounded" src="<?= asset($cart->product()->image) ?>" alt="" style="width: 80px;"></a>
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?= $cart->product()->name ?></span>
                                                <span class="text-primary"> تومان <?= $cart->price() ?></span>
                                            </h5>
                                            <h6 class="d-flex justify-content-between">
                                                <small class="fst-italic"><?= $cart->product()->name ?></small>
                                                <span><?= $cart->number ?></span>
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
