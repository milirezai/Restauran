<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Request\InfoUserRequest;
use App\Model\Order;
use App\Model\OrderItem;
use System\Auth\Auth;
use App\Model\User;
class UserController extends Controller
{
    public function __construct()
    {
        if (Auth::check())
        {
            if (Auth::user()->user_type != 'user' and Auth::user()->user_type == 'admin')
            {
                return redirectRoute('admin.index');
            }
            else
            {
                return redirect('/login');
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public function index()
    {
        return view('app.user.index');
    }
    public function info()
    {
        $user = Auth::user();
        return view('app.user.info.info',compact('user'));
    }
    public function changeInfo()
    {
        $request = new InfoUserRequest();
        $inputs = $request->all();
        $file = $request->file('avatar');
        if ($file['name'] != null)
        {
            $path = 'image/avatar/'.date('Y/M/d/');
            $avatar=date('Y_m_d_H_i_s_').rand(10,99);
            $inputs['avatar']= $request->move($file,$path,$avatar);
        }
        $inputs['id'] = Auth::user()->id;
        User::update($inputs);
        return redirect(route('my.panel.index'));
    }
    public function order()
    {
        $orders = Order::where('user_id',Auth::user()->id)->get();
        return view('app.user.order.index',compact('orders'));
    }
    public function orderShow($id)
    {
        $order_items = OrderItem::where('order_id',$id)->get();
        $order = Order::find($id);
        return view('app.user.order.show',compact('order_items','order'));
    }
}