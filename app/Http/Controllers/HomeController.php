<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\OurTeam;
use App\Model\Product;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('status',1)->orderBy('created_at','DESC')->limit(0,8)->get();
        return view('app.index',compact('products'));
    }
    public function about()
    {
        $users = OurTeam::where('status',1)->get();
        $chef = OurTeam::where('status',1)->where('position','chef')->get();
        $chefs = count($chef);
        return view('app.about',compact('users','chefs'));
    }

    public function services()
    {
        return view('app.service');
    }

    public function menu()
    {
        return view('app.menu');
    }

    public function booking()
    {
        return view('app.booking');
    }

    public function contact()
    {
        return view('app.contact');
    }

}
