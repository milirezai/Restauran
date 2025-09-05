<?php

namespace System\Service\Support\Cart;

use App\Model\Order;

trait Cart
{
    public function addItemCart($id)
    {
        $this->hasItemInCart($id);
        $inputs = ['user_id'=>1,'product_id'=>$id,'number'=>1];
        Order::create($inputs);
        return back();
    }
    public function hasItemInCart($id)
    {
        $cart = Order::where('user_id',1)->where('product_id',$id)->get();
        if ($cart)
        {
            dd($cart);
            return back();
        }
    }

}