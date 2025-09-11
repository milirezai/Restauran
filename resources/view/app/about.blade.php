@extends('app.layouts.app')

@section('head-tag')
    <title>about</title>
@endsection

@section('content')



    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">درباره ما</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?= route('index') ?>">خانه</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">درباره ما</li>
                </ol>
            </nav>
        </div>
    </div>





    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?= asset('assets/img/about-1.jpg') ?>">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?= asset('assets/img/about-2.jpg') ?>" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?= asset('assets/img/about-3.jpg') ?>">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= asset('assets/img/about-4.jpg') ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">درباره ما</h5>
                    <h1 class="mb-4">خوش آمدید <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                    <p class="md-4">ما با افتخار از تازه‌ترین و باکیفیت‌ترین مواد اولیه برای تهیه غذاهای خوشمزه و اشتهاآور استفاده می‌کنیم. با منویی متنوع و جذاب، هر سلیقه‌ای را راضی نگه می‌داریم. از غذاهای اصیل ایرانی گرفته تا غذاهای بین‌المللی، همه چیز با طعم‌های بی‌نظیر و کیفیتی درجه یک سرو می‌شود.</p>
                    <p class="md-4">در رستوران ما، فضایی دنج و دلنشین ایجاد کرده‌ایم تا از وقت خود بیشتر لذت ببرید. چه برای صرف غذای روزانه و چه برای رویدادها و جشن‌های خاص به اینجا آمده باشید، ما بهترین تجربه را در هر موقعیتی تضمین می‌کنیم.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">1</h1>
                                <div class="ps-4">
                                    <p class="mb-0">سال های</p>
                                    <h6 class="text-uppercase mb-0">تجربه</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"><?= $chefs ?></h1>
                                <div class="ps-4">
                                    <p class="mb-0">سرآشپز</p>
                                    <h6 class="text-uppercase mb-0">ها محبوب</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                <h1 class="mb-5">تیم ما</h1>
            </div>

            <div class="row g-4">
                <?php foreach ($users as $user){  ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="<?= asset($user->avatar) ?>" alt="">
                        </div>
                        <h5 class="mb-0"><?= $user->first_name.' '.$user->last_name ?></h5>
                        <small><?= $user->position ?></small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href="https://github.com/milirezai/Restauran"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- Team End -->


@endsection