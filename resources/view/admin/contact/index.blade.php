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
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام</th>
                                            <th>ایمیل</th>
                                            <th>تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($contacts as $contact) { ?>
                                        <tr>
                                            <td><?= $contact->id ?></td>
                                            <td><?= $contact->full_name ?></td>
                                            <td><?= $contact->email ?></td>
                                            <td>

                                                <a href="<?= route('admin.contact.message', [$contact->id]) ?>" class="btn btn-success">نمایش</a>
                                                <a href="<?= route('admin.contact.delete', [$contact->id]) ?>" class="btn btn-danger">حذف</a>

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