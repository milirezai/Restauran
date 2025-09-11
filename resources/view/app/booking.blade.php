@extends('app.layouts.app')

@section('head-tag')
    <title>booking</title>
@endsection

@section('content')



    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">رزرو میز</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?= route('index') ?>">خانه</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">رزرو</li>
                </ol>
            </nav>
        </div>
    </div>




    <!-- Reservation Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp d-flex justify-content-center" data-wow-delay="0.1s">
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">رزرو میز آنلاین</h1>
                <div class="d-flex justify-content-center">
                    <?php if (erororExists()) {  ?>
                    <div class="alert alert-danger">
                        <ul>
                                <?php foreach (errorAll() as $error) { ?>
                            <li>
                                    <?= $error ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <form method="post" action="<?= route('booking.store') ?>">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" value="<?= old('name') ?>" class="form-control" name="name" id="name" placeholder="نام">
                                <label for="name">نام</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" value="<?= old('email') ?>" class="form-control" name="email" id="email" placeholder="ایمیل">
                                <label for="email">ایمیل</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="date" name="date" class="form-control datetimepicker-input" id="datetime" placeholder="تاریخ" />
                                <label for="datetime">تاریخ</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="people" class="form-select" id="select1">
                                    <option value="1">یک نفر</option>
                                    <option value="2">دونفر</option>
                                    <option value="3">سه نفر</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="description" class="form-control" placeholder="توضیحات" id="message" style="height: 100px"><?= old('description') ?></textarea>
                                <label for="message">توضیحات</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">رزرو</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Start -->



@endsection