<?php
namespace App\Http\Controllers;
use App\Model\Order;
use System\Auth\Auth;
use App\Http\Controllers\CartController;
class PaymentController extends CartController
{

    public function __construct()
    {
        if (Auth::user()->address == null)
        {
            with('swal-error','لطفا ابتدا فیلد آدرس خود را کامل کنید وبعد دوباره امنحان کنید!');
            return redirect(route('my.panel.info'));
        }
    }

    public function payment()
    {
        addOrderItemsAndOrder();https:
        if (paymet())
             header("location: https://gateway.zibal.ir/start/".paymet()->trackId);
        else{
            with('swal-error','مشکلی در پرداخت به وجود آمده لطفا بعدا امتحان کنید!');
            return redirectRoute('index');
        }
    }

    public function verify()
    {
        addPayment();
    }
}