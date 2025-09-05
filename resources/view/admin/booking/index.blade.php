@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | رزروها </title>
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
                            <h4 class="card-title">رزروها</h4>
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
                                            <th>تاریخ</th>
                                            <th>نفرات</th>
                                            <th>توضیحات</th>
                                            <th>وضعیت</th>
                                            <th style="min-width: 16rem; text-align: left;">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($bookings as $booking ) { ?>
                                        <tr role="row" class="odd">
                                            <td><?= $booking->id ?></td>
                                            <td><?= $booking->name ?></td>
                                            <td><?= $booking->email ?></td>
                                            <td><?= $booking->date ?></td>
                                            <td><?= $booking->people ?></td>
                                            <td><?= $booking->description ?></td>
                                            <td><?= $booking->status() ?></td>
                                            <td>
                                                <a href="<?= route('admin.bookings.confirmed',[$booking->id]) ?>" class="btn btn-success waves-effect waves-light mt-1">تایید</a>
                                                <a href="<?= route('admin.bookings.cancel',[$booking->id]) ?>" class="btn btn-danger waves-effect waves-light mt-1">لغو</a>
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