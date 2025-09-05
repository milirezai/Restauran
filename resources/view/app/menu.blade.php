@extends('app.layouts.app')

@section('head-tag')
    <title>menu</title>
@endsection

@section('content')

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="<?= route('index') ?>">Home</a></li>
                         <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                    </ol>
                </nav>
            </div>
        </div>



        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <form action="<?= route('menu.search') ?>" id="search" method="post">
                        <a href="<?= route('menu') ?>" class="btn btn-primary">all</a>
                        <button type="submit" class="btn btn-primary">search</button>
                        <input type="text" name="search" class="width-200 height-35-per">
                        <?= errorText('search') ?>
                    </form>
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
