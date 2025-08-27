<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }
    public function status($id)
    {
        $user = User::find($id);
        $status = $user->is_active == 1 ? 0 : 1 ;
        $user->is_active = $status;
        $user->save();
        return back();
    }

}