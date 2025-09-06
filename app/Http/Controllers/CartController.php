<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Order;
use System\Auth\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        if (Auth::check())
        {
            if (Auth::user()->user_type != 'user')
            {
                return redirect('/login');
            }
        }
        else
        {
            return redirect('/login');
        }
    }
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
    public function cart()
    {
        return view('app.cart');
    }
}