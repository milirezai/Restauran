@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | محصولات </title>
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
                            <h4 class="card-title">اخبار</h4>
                            <span><a href="<?= route('admin.product.create') ?>" class="btn btn-success">ایجاد</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>عنوان</th>
                                            <th>قیمت</th>
                                            <th>توضیحات</th>
                                            <th>تصویر</th>
                                            <th>دسته بندی</th>
                                            <th>وضعیت</th>
                                            <th style="min-width: 16rem; text-align: left;">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($products as $product ) { ?>
                                        <tr role="row" class="odd">
                                            <td><?= $product->id ?></td>
                                            <td><?= $product->name ?></td>
                                            <td><?= $product->price ?></td>
                                            <td><?= substr(html_entity_decode($product->description),0,20).'...' ?></td>
                                            <td><img style="width: 90px;" src="<?= asset($product->image) ?>"></td>
                                            <td><?= $product->category()->name ?></td>
                                            <td><?= $product->status() ?></td>
                                            <td>
                                                <a href="<?= route('admin.product.delete',[$product->id]) ?>" class="btn btn-danger waves-effect waves-light">حذف</a>
                                                <a href="<?= route('admin.product.edit',[$product->id]) ?>" class="btn btn-info waves-effect waves-light">ویرایش</a>
                                                <?php if ($product->status == 0) { ?>
                                                <a href="<?= route('admin.product.status',[$product->id]) ?>" class="btn btn-success waves-effect waves-light mt-1">فعال</a>
                                                <?php } else { ?>
                                                <a href="<?= route('admin.product.status',[$product->id]) ?>" class="btn btn-danger waves-effect waves-light mt-1">غیرفعال</a>
                                                <?php }  ?>


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