<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Request\BookingRequest;
use App\Http\Request\ContactRequest;
use App\Http\Request\NewsLetterRequest;
use App\Http\Request\SearchRequest;
use App\Model\Booking;
use App\Model\Category;
use App\Model\Contact;
use App\Model\NewsLetter;
use App\Model\Order;
use App\Model\OurTeam;
use App\Model\Product;
use System\Auth\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('status',1)->orderBy('created_at','DESC')->limit(0,8)->get();
        $carts = allItemCart();
        $allNumberItems = allNumberItems() > 0 ? allNumberItems() : '' ;
        $totalPrice = totalPrice();
        return view('app.index',compact('products','carts','allNumberItems','totalPrice'));
    }
    public function about()
    {
        $users = OurTeam::where('status',1)->get();
        $chef = OurTeam::where('status',1)->where('position','chef')->get();
        $chefs = count($chef);
        $carts = allItemCart();
        $allNumberItems = allNumberItems() > 0 ? allNumberItems() : '' ;
        $totalPrice = totalPrice();
        return view('app.about',compact('users','chefs','carts','allNumberItems','totalPrice'));
    }

    public function services()
    {
        $carts = allItemCart();
        $allNumberItems = allNumberItems() > 0 ? allNumberItems() : '' ;
        $totalPrice = totalPrice();
        return view('app.service',compact('carts','allNumberItems','totalPrice'));
    }

    public function menu()
    {
        $products = Product::where('status',1)->orderBy('created_at','DESC')->get();
        $carts = allItemCart();
        $allNumberItems = allNumberItems() > 0 ? allNumberItems() : '' ;
        $totalPrice = totalPrice();
        return view('app.menu',compact('products','carts','allNumberItems','totalPrice'));
    }
    public function search()
    {
        $request = new SearchRequest();
        $key = $request->all()['search'];
        $key = '%'.$key.'%';
        $products = Product::where('name','LIKE',$key)->get();
        $carts = allItemCart();
        $allNumberItems = allNumberItems() > 0 ? allNumberItems() : '' ;
        $totalPrice = totalPrice();
        return view('app.menu',compact('products','carts','allNumberItems','totalPrice'));
    }

    public function booking()
    {
        $carts = allItemCart();
        $allNumberItems = allNumberItems() > 0 ? allNumberItems() : '' ;
        $totalPrice = totalPrice();
        return view('app.booking',compact('carts','allNumberItems','totalPrice'));
    }
    public function bookingStore()
    {
        $request = new BookingRequest();
        $inputs = $request->all();
        Booking::create($inputs);
        return redirect(route('index'));
    }

    public function contact()
    {
        $carts = allItemCart();
        $allNumberItems = allNumberItems() > 0 ? allNumberItems() : '' ;
        $totalPrice = totalPrice();
        return view('app.contact',compact('carts','allNumberItems','totalPrice'));
    }
    public function storeContact()
    {
        $request = new ContactRequest();
        $inputs = $request->all();
        Contact::create($inputs);
        return redirect(route('index'));
    }




    public function newsLetter()
    {
        $request = new NewsLetterRequest();
        $inputs = $request->all();
        NewsLetter::create($inputs);
        return redirect(route('index'));
    }

}
