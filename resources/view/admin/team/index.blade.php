@extends('admin.layouts.app')

@section('head-tag')
    <title>ادمین / تیم ما</title>
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
                            <h4 class="card-title">تیم ما</h4>
                            <span><a href="<?= route('admin.ourTeam.create') ?>" class="btn btn-success">ایجاد</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام</th>
                                            <th>تصویر</th>
                                            <th>پوزیشن</th>
                                            <th>وضعیت</th>
                                            <th style="width: 22rem; text-align: left;">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($users as $user) { ?>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><?= $user->id ?></td>
                                            <td><?= $user->first_name.' '.$user->last_name ?></td>
                                            <td><img src="<?= asset($user->avatar) ?>" style="width:6rem;" alt=""></td>
                                            <td><?= $user->position ?></td>
                                            <td><?= $user->status() ?></td>
                                            <td style="width: 22rem; text-align: left;">

                                                    <?php if($user->status == 0) { ?>
                                                <a href="<?= route('admin.ourTeam.status',[$user->id]) ?>" class="btn btn-success">فعال</a>
                                                <?php } else { ?>
                                                <a href="<?= route('admin.ourTeam.status',[$user->id]) ?>" class="btn btn-danger">غیرفعال</a>
                                                <?php } ?>


                                                <a href="<?= route('admin.ourTeam.delete',[$user->id]) ?>" class="btn btn-danger">حذف</a>
                                                <a href="<?= route('admin.ourTeam.edit',[$user->id]) ?>" class="btn btn-primary">ویرایش</a>


                                            </td>
                                        </tr>
                                        <?php }?>
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