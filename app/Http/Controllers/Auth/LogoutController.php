<?php
namespace App\Http\Controllers\Auth;
use System\Auth\Auth;

class LogoutController
{
    private $redirectTo = '/';
    public function logout()
    {
        Auth::logout();
        return redirect($this->redirectTo);
    }
}