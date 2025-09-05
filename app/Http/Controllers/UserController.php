<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use System\Auth\Auth;
class UserController extends Controller
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

    public function index()
    {
        dd('index-user');
    }
}