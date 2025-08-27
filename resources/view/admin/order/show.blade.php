@extends('admin.layouts.app')

@section('head-tag')
    <title>ادمین | سفارش </title>
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
                            <h2 class="card-title">سفارش</h2>
                            <span><a href="<?= route("admin.orders.index") ?>" class="btn btn-success">بازگشت</a></span>
                        </div>
                        <div class="ml-5 mt-3">
                            <h3 class="pb-1"> اطلاعات کاربر</h3>
                            <h3 class="pb-1">سفارش دهنده:  <?= $orders[0]->user()->first_name.' '.$orders[0]->user()->last_name ?></h3>
                            <p class="pb-1">ایمیل:  <?= $orders[0]->user()->email ?></p>
                            <p class="pb-1">آدرس:  <?= $orders[0]->user()->address ?></p>
                            <p class="pb-1">کد پستی:  <?= $orders[0]->user()->zip_code ?></p>
                        </div>
                        <div class="ml-5 mt-3 mb-2">
                            <h3 class="pb-1">وضعیت سفارش</h3>
                            <p><?= $order->status() ?></p>
                            <a href="<?= route('admin.orders.status',[$order->id,100]) ?>" class="btn btn-info">ارسال شد</a>
                            <a href="<?= route('admin.orders.status',[$order->id,1]) ?>" class="btn btn-danger">درحال ارسال</a>
                            <a href="<?= route('admin.orders.status',[$order->id,0]) ?>" class="btn btn-success">ارسال نشده</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>عنوان</th>
                                            <th>قیمت</th>
                                            <td>تعداد سفارش</td>
                                             <th style="min-width: 16rem; text-align: left;">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($orders as $product ) { ?>
                                        <tr role="row" class="odd">
                                            <td><?= $product->product()->name ?></td>
                                            <td><?= $product->product()->price ?></td>
                                            <td><?= $product->number ?></td>
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