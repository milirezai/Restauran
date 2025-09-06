<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Request\CategoryRequest;
use App\Model\Category;

class CategoryController extends AdminController
{
    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index", compact('categories'));
    }
    public function create()
    {
        return view("admin.category.create");
    }

    public function store()
    {
        $request = new CategoryRequest();
        $input = $request->all();
        Category::create($input);
        return redirect(route('admin.category.index'));
    }
    public function destroy($id){
        Category::delete($id);
        return back();
    }

    public function edit($id)
    {
        $findCategory = Category::find($id);
        return view('admin.category.edit', compact('findCategory'));
    }

    public function update($id)
    {
        $request = new CategoryRequest();
        $input = $request->all();
        Category::update(array_merge($input, ['id' => $id]));
        return redirect(route('admin.category.index'));
    }

}