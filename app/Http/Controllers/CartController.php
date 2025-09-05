<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Order;
use System\Service\Support\Cart\Cart;

class CartController extends Controller
{
    use Cart;
    public function addCart($id)
    {
        addItemCart($id);
    }
    public function removeItem($id)
    {
        removeItem($id);
        return back();
    }
    public function removeItemNumber($id)
    {
        removeItemNumber($id);
        return back();
    }
}