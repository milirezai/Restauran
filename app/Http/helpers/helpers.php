<?php
  

    /*
    |--------------------------------------------------------------------------
    |  Helper functions
    |--------------------------------------------------------------------------
    |
    | Helper functions are defined here
    | They are available program-wide
    | Contact them at your preferred location.
    |
    */
use App\Model\Order;
use App\Model\CartItem;
use App\Model\OrderItem;
use System\Auth\Auth;

function errorClass($name)
{
    return erororExists($name) ? 'is-invalid' : '';
}

function errorText($name)
{
    return erororExists($name) ? '<div><small class="text-danger">' .error($name) . '</small></div>' : '';
}

function olrOrValue($name,$value)
{
    return empty(old($name)) ? $value : old($name) ;
}

function messageNewsLetter($answer)
{
    $msg =
        '
        <h2>Restauran</h2>
        <p>به خبرنامه ما خوش آمدید</p>
       <p style="text-align: center">"'. $answer .'"</p>
       ';
    return $msg;
}

function answerForMessageContact($answer)
{
    $msg =
        '
        <h2>Restauran</h2>
        <p>به خبرنامه ما خوش آمدید</p>
       <p style="text-align: center">"'. $answer .'"</p>
       ';
    return $msg;
}



function confirmedMessageBooking()
{
    $msg =
        '
        <h2>Restauran</h2>
        <p>مشتری گرامی رزور شما به موفقیت تایید شد</p>
        <p>ممنون از انتخاب شما</p>
        ';
    return $msg;
}

function cancelMessageBooking()
{
    $msg =
        '
        <h2>Restauran</h2>
        <p>  مشتری گرامی رزور شما تایید نشد برای اطلاعات بیشتر با پشتیبانی تماس بگیرید</p>
        <p>ممنون از انتخاب شما</p>
        ';
    return $msg;
}

function activationEmailMessage($token)
{
    $msg =
        '
        <h2>divar</h2>
       <p>کاربر گرامی ثبت  نام شما با موفقیت انجام  شد برای فعال سازی حساب کاربری خود روی لینک زیر کلیک کنید</p>
       <p style="text-align: center">
       <a href="'.route('auth.activation', [$token]).'">فعال سازی حساب کاربری</a>
       </p>
       ';
    return $msg;
}

function passwordRecoveryMsg($token)
{
    $msg =
        '
        <h2>divar</h2>
       <p>کاربر گرامی  برای تغییر رمز عبور حساب کاربری خود روی لینک زیر کلیک کنید</p>
       <p style="text-align: center">
       <a href="'.route('auth.reset-password.show', [$token]).'">بازیابی رمز عبور</a>
       </p>
       ';
    return $msg;
}








function addItemCart($id)
{
    if (!itemExists($id))
        return back();
    $inputs = ['user_id' => Auth::user()->id, 'product_id' => $id];
    \App\Model\CartItem::create($inputs);
    return back();
}

function allItemCart()
{
    if (isset(Auth::user()->id))
        $carts = \App\Model\CartItem::where('user_id',Auth::user()->id)->where('number','>',0)->get();
    else
        $carts = [];
    return $carts;
}

function itemExists($id)
{
    $item = \App\Model\CartItem::where('user_id',Auth::user()->id)->where('product_id',$id)->get();
    if ($item != null)
    {
        $item = $item[0];
        $item->number += 1;
        $item->save();
        return false;
    }
    return true;
}

function removeItem($id)
{
    \App\Model\CartItem::delete($id);
    return back();
}
function removeItemNumber($id)
{
    $item = \App\Model\CartItem::where('user_id',Auth::user()->id)->where('product_id',$id)->get();
    if ($item != null)
    {
        $item = $item[0];
        $item->number -= 1;
        $item->save();
        return true;
    }
    return false;
}
function addOrderNumberId($id)
{
}

function totalPrice()
{
    if (isset(Auth::user()->id))
    {
        $totalPrice = [];
        for ($i = 0; $i < count(allItemCart()); $i++){
            array_push($totalPrice,allItemCart()[$i]->price());
        }
        return array_sum($totalPrice);
    }
}
function allNumberItems()
{
    if (isset(Auth::user()->id))
    {
        $allNumberItems = [];
        for ($i = 0; $i < count(allItemCart()); $i++){
            array_push($allNumberItems,allItemCart()[$i]->number);
        }
        return array_sum($allNumberItems);
    }
}

function addOrderItemsAndOrder()
{
    $order_id = addOrder();
    foreach (allItemCart() as $item){
        OrderItem::create([
            'user_id' => $item->user_id,
            'product_id' => $item->product_id,
            'number' => $item->number,
            'order_id' => $order_id,
            'expiration_date' => time()+1800
        ]);
    }
    removeCartItem();
}
function addOrder()
{
    if (count(allItemCart()) > 0)
    {
        Order::create([
            'user_id' => Auth::user()->id,
            'order_final_amount' => totalPrice(),
            'expiration_date' => time()+1800
        ]);
        $order_id = Order::where('user_id',Auth::user()->id)->where('payment_status',0)->where('status',0)->where('expiration_date','>',time())->get();
        return $order_id[0]->id;
    }
}
function removeCartItem()
{
    foreach (allItemCart() as $item){
        CartItem::delete($item->id);
    }
}

function expirationDate()
{
    $orders = Order::where('expiration_date','<',time())->where('user_id',Auth::user()->id)->where('status',0)->where('payment_status',0)->get();
    if (count($orders) > 0)
    {
        foreach ($orders as $ordersItem)
        {
            $items = $ordersItem->orderItems()->get();
            foreach ($items as $item)
            {
                OrderItem::delete($item->id);
            }
        }
    }
    foreach ($orders as $order)
    {
        Order::delete($order->id);
    }
}
