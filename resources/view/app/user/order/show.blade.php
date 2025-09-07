@extends('app.user.layouts.app')

@section('head-tag')
    <title>پنل کاربری /  سفارش  من</title>
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
                            <h2 class="card-title">سفارش  من</h2>
                            <span><a href="<?= route("my.panel.order") ?>" class="btn btn-success">بازگشت</a></span>
                        </div>
                        <div class="ml-5 mt-3">
                            <h3 class="pb-1"> اطلاعات کاربر</h3>
                            <h3 class="pb-1">سفارش دهنده:  <?= $order_items[0]->order()->user()->first_name.' '.$order_items[0]->order()->user()->last_name ?></h3>
                            <p class="pb-1">ایمیل:  <?= $order_items[0]->order()->user()->email ?></p>
                            <p class="pb-1">آدرس:  <?= $order_items[0]->order()->user()->address ?></p>
                            <p class="pb-1">کد پستی:  <?= $order_items[0]->order()->user()->zip_code ?></p>
                        </div>
                        <div class="ml-5 mt-3">
                            <h3 class="pb-1"> اطلاعات پرداخت</h3>
                            <h3 class="pb-1">  مبلغ پرداخت شده :  <?= $order->payment()->amount ?></h3>
                            <p class="pb-1">تاریخ پرداخت:  <?= $order->payment()->pay_date ?></p>
                            <p class="pb-1">وضعیت:  <?= $order->payStatus() ?></p>
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
                                        <?php foreach ($order_items as $product ) { ?>
                                        <tr role="row" class="odd">
                                            <td><?= $product->product()->name ?></td>
                                            <td><?= $product->product()->price ?> $ </td>
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