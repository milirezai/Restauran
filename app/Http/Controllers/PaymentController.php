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
            return redirect(route('my.panel.info'));
        }
    }

    public function payment()
    {
        addOrderItemsAndOrder();
        dd('payment-oki');
    }
}