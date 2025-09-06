<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use System\Auth\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        if (Auth::check())
        {
            if (Auth::user()->user_type != 'admin')
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
        return view('admin.index');
    }
}