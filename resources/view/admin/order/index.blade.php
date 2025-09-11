@extends('admin.layouts.app')



@section('head-tag')
<title>ادمین / سفارشات</title>
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
                            <h4 class="card-title">سفارشات</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>شماره سفارش</th>
                                            <th>قیمت</th>
                                            <th>سفارش دهنده</th>
                                            <th> سفارش</th>
                                            <th>پرداخت</th>
                                            <th>تاریخ</th>
                                            <th>تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($orders as $order) { ?>
                                        <tr>
                                            <td><?= $order->id ?></td>
                                            <td><?= $order->order_final_amount ?></td>
                                            <td><?= $order->user()->first_name.' '.$order->user()->last_name ?></td>
                                            <td><?= $order->status() ?></td>
                                            <td><?= $order->payStatus() ?></td>
                                            <td><?= $order->created_at ?></td>
                                            <td>
                                                <?php if ($order->status != 1) {?>
                                                <a href="<?= route('admin.orders.delivery',[$order->id]) ?>" class="btn btn-primary">ارسال شد</a>
                                                <?php }?>

                                                <a href="<?= route('admin.orders.show',[$order->id]) ?>" class="btn btn-info mt-2">نمایش</a>


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