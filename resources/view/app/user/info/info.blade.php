@extends('app.user.layouts.app')


@section('head-tag')
    <title>پنل کاربری / ویرایش اطلاعات </title>
@endsection


@section('content')
    <div class="content-header row">

    </div>
    <div class="content-body">

        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                            <div class="d-flex justify-content-center">
                                <img width="300" src="<?= asset($user->avatar) ?>">
                            </div>
                            
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form class="row" action="<?= route('my.panel.change.info') ?>" method="post" enctype="multipart/form-data">

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="first_name">نام</label>
                                            <input value="<?= old('first_name',$user->first_name) ?>"  name="first_name" type="text" id="first_name" class="form-control <?= errorClass('first_name') ?>" placeholder="نام ...">
                                            <?= errorText('first_name') ?>
                                        </fieldset>
                                    </div>



                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="last_name">نام خانوادگی</label>
                                            <input value="<?= old('last_name',$user->last_name) ?>"  name="last_name" type="text" id="last_name" class="form-control <?= errorClass('last_name') ?>" placeholder="نام خانوادگی ...">
                                            <?= errorText('last_name') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="email">ایمیل</label>
                                            <input value="<?= old('email',$user->email) ?>"  name="email" type="text" id="email" class="form-control <?= errorClass('email') ?>" placeholder="ایمیل  ...">
                                            <?= errorText('email') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="address">آدرس</label>
                                            <input value="<?= old('address',$user->address) ?>"  name="address" type="text" id="address" class="form-control <?= errorClass('address') ?>" placeholder="آدرس ...">
                                            <?= errorText('address') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="avatar">عکس</label>
                                            <input value="<?= old('avatar') ?>"  name="avatar" type="file" id="avatar" class="form-control <?= errorClass('avatar') ?>" placeholder="عکس ...">
                                            <?= errorText('avatar') ?>
                                        </fieldset>
                                    </div>



                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="zip_code">کد پستی</label>
                                            <input value="<?= old('zip_code',$user->zip_code) ?>"  name="zip_code" type="text" id="zip_code" class="form-control <?= errorClass('zip_code') ?>" placeholder="کد پستی ...">
                                            <?= errorText('zip_code') ?>
                                        </fieldset>
                                    </div>






                                    <div class="col-md-6 mt-2">
                                        <section class="form-group">
                                            <button type="submit" class="btn btn-primary">ویرایش</button>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


@section('script')
    <script src="<?= asset('ckeditor/ckeditor.js'); ?>"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'description' );
    </script>
@endsection