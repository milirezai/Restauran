@extends('app.layouts.app')

@section('head-tag')
    <title>contact</title>
@endsection

@section('content')

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">تماس با ما</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?= route('index') ?>">خانه</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">تماس با ما</li>
                </ol>
            </nav>
        </div>
    </div>




    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                <h1 class="mb-5">برای هرگونه سوال تماس بگیرید</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4  d-flex justify-content-center">

                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">عمومی</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>monarchframework@gmail.com</p>
                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-center">
                <div class="col-md-6 ">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form action="<?= route('contact.store') ?>" method="post">
                            <div class="row g-3 ">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="<?= old('full_name') ?>" type="text" name="full_name" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">نام</label>
                                        <?= errorText('full_name') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="<?= old('email') ?>" type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">ایمیل</label>
                                        <?= errorText('email') ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input value="<?= old('title') ?>" type="text" name="title" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">عنوان</label>
                                        <?= errorText('title') ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"><?= old('full_name') ?></textarea>
                                        <label for="message">پیام</label>
                                        <?= errorText('message') ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">ارسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




@endsection