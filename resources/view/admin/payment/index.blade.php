@extends('admin.layouts.app')



@section('head-tag')
<title>ادمین / پرداخت ها</title>
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
                            <h4 class="card-title">پرداخت ها</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> مبلع پرداخت</th>
                                            <th>پرداخت کننده</th>
                                            <th>تاریخ پرداخت</th>
                                            <th>شماره سفارش</th>
                                            <th> وضعیت پرداخت</th>
                                            <th>وضعیت</th>
                                            <th>تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($payments as $payment) { ?>
                                        <tr>
                                            <td><?= $payment->id ?></td>
                                            <td><?= $payment->amount ?></td>
                                            <td><?= $payment->user()->first_name.' '.$payment->user()->last_name ?></td>
                                            <td><?= $payment->pay_date ?></td>
                                            <td><?= $payment->order()->id ?></td>
                                            <td><?= $payment->status() ?></td>
                                            <td><?= $payment->confirmed() ?></td>
                                            <td>
                                                <?php if ($payment->pay_confirmed == 1) {  ?>
                                                <a href="<?= route('admin.payments.confirmed',[$payment->id]) ?>" class="btn btn-danger">لغو</a>
                                                <?php } else { ?>
                                                <a href="<?= route('admin.payments.confirmed',[$payment->id]) ?>" class="btn btn-success">تایید</a>
                                                <?php } ?>


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