@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | ویرایش دسته بندی</title>
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
                        <h4 class="card-title">دسته بندی</h4>
                        <span><a href="<?= route("admin.category.index") ?>" class="btn btn-success">بازگشت</a></span>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <form class="row" action="<?= route('admin.category.update',[$findCategory->id])?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="helperText">نام دسته</label>
                                        <input value="<?= olrOrValue('name',$findCategory->name) ?>" name="name" type="text" id="helperText" class="form-control <?= errorClass('name') ?>" placeholder="نام ..." >
                                        <?= errorText('name') ?>
                                    </fieldset>
                                </div>
                                <?= byMethod('put') ?>

                                <div class="col-md-6 mt-2">
                                    <fieldset class="form-group">
                                        <button type="submit" class="btn btn-primary">ویرایش</button>
                                    </fieldset>
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