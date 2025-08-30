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
        $products = Product::where('status',1)->orderBy('created_at','DESC')->get();
        return view('app.menu',compact('products'));
    }
    public function search()
    {
        $request = new SearchRequest();
        $key = $request->all()['search'];
        $key = '%'.$key.'%';
        $products = Product::where('name','LIKE',$key)->get();
        return view('app.menu',compact('products'));
    }

    public function booking()
    {
        return view('app.booking');
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
        return view('app.contact');
    }
    public function storeContact()
    {
        $request = new ContactRequest();
        $inputs = $request->all();
        Contact::create($inputs);
        return redirect(route('index'));
    }


    public function cart($id)
    {
        echo json_encode("add cart $id");
    }

    public function newsLetter()
    {
        $request = new NewsLetterRequest();
        $inputs = $request->all();
        NewsLetter::create($inputs);
        return redirect(route('index'));
    }

}
