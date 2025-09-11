<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Request\ProductRequest;
use App\Model\Category;
use App\Model\Product;
use App\Http\Controllers\Admin\AdminController;
class ProductController extends AdminController
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }
    public function status($id)
    {
        $product = Product::find($id);
        $status = $product->status == 0 ? '1' : '0';
        $product->status = $status;
        $product->save();
        with('swal-success','تغییر وضعیت انجام شد!');
        return back();
    }
    public function destroy($id)
    {
        Product::delete($id);
        with('swal-error','محصول  با موفقیت حذف شد! ');
        return back();
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }
    public function store()
    {
        $request = new ProductRequest();
        $inputs = $request->all();
        $file = $request->file('image');
        $path = 'image/product/'.date('Y/M/d/');
        $image=date('Y_m_d_H_i_s_').rand(10,99);
        $inputs['image']= move($file, $path, $image, 800 , 532);
        $inputs['status'] = 0;
        Product::create($inputs);
        with('swal-success','محصول  جدید با موفقیت ثبت شد');
        return redirect(route('admin.product.index'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit',compact('product','categories'));
    }
    public function update($id)
    {
        $request = new ProductRequest();
        $inputs = $request->all();
        $file = $request->file('image');
        if (!empty($file['name']))
        {
            $path = 'image/product/'.date('Y/M/d/');
            $image=date('Y_m_d_H_i_s_').rand(10,99);
            $inputs['image']= move($file, $path, $image, 800 , 532);
        }
        $inputs['id'] = $id;
        Product::update($inputs);
        with('swal-success','محصول   با موفقیت ویرایش شد');
        return redirect(route('admin.product.index'));
    }
}