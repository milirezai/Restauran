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









function addItemCart($id)
{
    if (!itemExists($id))
        return back();
    $inputs = ['user_id' => 1, 'product_id' => $id];
    \App\Model\Order::create($inputs);
    return back();
}

function allItemCart()
{
    $carts = \App\Model\Order::where('user_id',1)->where('number','>',0)->get();
    return $carts;
}

function itemExists($id)
{
    $item = \App\Model\Order::where('user_id',1)->where('product_id',$id)->get();
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
    \App\Model\Order::delete($id);
    return back();
}
function removeItemNumber($id)
{
    $item = \App\Model\Order::where('user_id',1)->where('product_id',$id)->get();
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
    $totalPrice = [];
    for ($i = 0; $i < count(allItemCart()); $i++){
        array_push($totalPrice,allItemCart()[$i]->price());
    }
    return array_sum($totalPrice);
}
function allNumberItems()
{
    $allNumberItems = [];
    for ($i = 0; $i < count(allItemCart()); $i++){
        array_push($allNumberItems,allItemCart()[$i]->number);
    }
    return array_sum($allNumberItems);
}