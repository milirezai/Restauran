@extends('admin.layouts.app')



@section('head-tag')
    <title>ادمین / تماس با ما</title>
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
                        <div class="card-header">
                            <h4 class="card-title">تماس با ما</h4>
                            <span><a href="<?= route("admin.contact.index") ?>" class="btn btn-success">بازگشت</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>نام: <?= $contact->full_name ?></h2>
                                        <h3>ایمیل: <?= $contact->email ?></h3>
                                        <h3>عنوان: <?= $contact->title ?></h3>
                                        <h3>پیام: <?= $contact->message ?></h3>
                                    </div>

                                    <div class="col-md-12 mt-4 pt-4 border-top">
                                        <form action="<?= route('admin.contact.message.answer', [$contact->id]) ?>" method="post">
                                            <section class="form-group">
                                                <label for="answer">پاسخ</label>
                                                <textarea class="form-control <?= errorClass('answer') ?>" id="answer" rows="5" name="answer" placeholder="پاسخ ..."></textarea>
                                                <?= errorText('answer') ?>
                                            </section>
                                            <div class="col-md-6">
                                                <section class="form-group">
                                                    <button type="submit" class="btn btn-primary">پاسخ</button>
                                                </section>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>
@endsection