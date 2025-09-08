<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\OrderItem;
use App\Model\Order;
use App\Model\Payment;
use App\Http\Controllers\Admin\AdminController;
class OrderController extends AdminController
{
    public function index()
    {
        $orders = Order::orderBy('created_at','DESC')->get();
        return view('admin.order.index',compact('orders'));
    }
    public function order($id)
    {
        $order_items = OrderItem::where('order_id',$id)->get();
        $order = Order::find($id);
        return view('admin.order.show',compact('order_items','order'));
    }
    public function delivery($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        with('swal-success','سفارش ارسال شد');
        return back();
    }
}