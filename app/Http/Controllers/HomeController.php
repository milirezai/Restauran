<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Request\ImageRequest;
use System\Service\Components\Upload\Image\ImageUpload;


class HomeController extends Controller
{
    public function index()
    {
        return view('app.index');
    }
}