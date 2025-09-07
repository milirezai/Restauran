@extends('admin.layouts.app')
@section('head-tag')
    <title>ادمین | ویرایش محصول </title>
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
                            <h4 class="card-title">محصول</h4>
                            <span><a href="<?= route('admin.product.index') ?>" class="btn btn-success">بازگشت</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <form class="row" action="<?= route('admin.product.update',[$product->id]) ?>" method="post" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="name">عنوان</label>
                                            <input value="<?= empty(old('name')) ? $product->name :  old('name')  ?>" name="name" type="text" id="name" class="form-control <?= errorClass('name') ?>" placeholder="نام ...">
                                            <?= errorText('name') ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="price">قیمت </label>
                                            <input value="<?= empty(old('price')) ? $product->price : old('price'); ?>" name="price" type="text" id="price" class="form-control <?= errorClass('price') ?>">
                                            <?= errorText('price') ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="image">تصویر</label>
                                            <input name="image" type="file" id="image" class="form-control-file <?= errorClass('image') ?>">
                                            <?= errorText('image') ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="cat_id">دسته بندی</label>
                                                <select name="cat_id" class="select2 form-control <?= errorClass('cat_id') ?>">
                                                    <?php foreach($categories as $categorySelect) {?>
                                                    <option value="<?= $categorySelect->id ?>" <?= $product->cat_id == $categorySelect->id ? 'selected' : ''  ?>>
                                                            <?= $categorySelect->name ?>
                                                    </option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <section class="form-group">
                                            <label for="description">توضیحات</label>
                                            <textarea class="description-control" id="description" rows="5" name="description" placeholder="توضیحات ..."><?= empty(old("description")) ? $product->description : old("description") ?></textarea>
                                            <?= errorText('description') ?>
                                        </section>
                                    </div>
                                    <?= byMethod('put') ?>
                                    <div class="col-md-6">
                                        <section class="form-group">
                                            <button type="submit" class="btn btn-primary">ویرایش</button>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="<?= asset('ckeditor/ckeditor.js') ?>"></script>
    <script type="text/javascript">
        CKEDITOR.replace('description')
    </script>
@endsection