<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\OrderNumber;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OrderNumber::all();
        return view('admin.order.index',compact('orders'));
    }
    public function order($id)
    {
        $order = OrderNumber::find($id);
        $orders = Order::where('order_number_id',$id)->where('user_id',$order->user_id)->get();
        return view('admin.order.show',compact('orders','order'));
    }
    public function status($id,$status)
    {
        $order = OrderNumber::find($id);
        $order->status = $status;
        $order->save();
        return back();
    }
}