@extends('admin.layouts.app')
@section('head-tag')
<title>ادمین | ویرایش عضو </title>
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
                  <h4 class="card-title">ویرایش عضو</h4>
                  <span><a href="<?= route('admin.ourTeam.index') ?>" class="btn btn-success">بازگشت</a></span>
               </div>
               <div class="card-content">
                  <div class="card-body card-dashboard">
                     <form class="row" action="<?= route('admin.ourTeam.update',[$user->id]) ?>" method="post" enctype="multipart/form-data">
                         <?= byMethod('put') ?>
                         <div class="col-md-6">
                           <fieldset class="form-group">
                              <label for="first_name">نام</label>
                              <input value="<?= empty(old('first_name')) ? $user->first_name : old('first_name') ?>" name="first_name" type="text" id="first_name" class="form-control <?= errorClass('first_name') ?>" placeholder="نام ...">
                           <?= errorText('first_name') ?>
                           </fieldset>
                        </div>
                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label for="last_name">نام خانوادگی</label>
                              <input value="<?= empty(old('last_name')) ? $user->last_name : old('last_name'); ?>" name="last_name" type="text" id="last_name" class="form-control <?= errorClass('last_name') ?>">
                               <?= errorText('last_name') ?>
                           </fieldset>
                        </div>
                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label for="avatar">تصویر</label>
                              <input name="avatar" type="file" id="avatar" class="form-control-file <?= errorClass('avatar') ?>">
                               <?= errorText('avatar') ?>
                           </fieldset>
                        </div>
                         <div class="col-md-6">
                             <fieldset class="form-group">
                                 <label for="position">موقعیت شغلی</label>
                                 <input value="<?= empty(old('position')) ? $user->position : old('position'); ?>" name="position" type="text" id="position" class="form-control <?= errorClass('position') ?>">
                                 <?= errorText('position') ?>
                             </fieldset>
                         </div>
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