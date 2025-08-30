@extends('admin.layouts.app')



@section('head-tag')
<title>ادمین / خبرنامه</title>
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
                            <h4 class="card-title">خبرنامه</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ایمیل</th>
                                            <th>تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($newsLetters as $newsLetter) { ?>
                                        <tr>
                                            <td><?= $newsLetter->id ?></td>
                                            <td><?= $newsLetter->email ?></td>
                                            <td>

                                                <a href="<?= route('admin.newsLetter.message', [$newsLetter->id]) ?>" class="btn btn-success">نمایش</a>

                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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