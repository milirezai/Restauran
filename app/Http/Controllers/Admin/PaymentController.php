<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Payment;
use App\Http\Controllers\Admin\AdminController;
class PaymentController extends AdminController
{
    public function index()
    {
        $payments = Payment::orderBy('created_at','DESC')->get();
        return view('admin.payment.index',compact('payments'));
    }
    public function confirmed($id)
    {
        $payment = Payment::find($id);
        $confirmed = $payment->pay_confirmed == 1 ? 0 : 1;
        $payment->pay_confirmed = $confirmed;
        $payment->save();
        with('swal-success','تغییر وضعیت انجام شد!');
        return back();
    }
}