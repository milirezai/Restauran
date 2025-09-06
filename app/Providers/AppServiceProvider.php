<?php

namespace App\Providers;

use System\View\Composer;

class AppServiceProvider extends Provider
{

    /*
    |--------------------------------------------------------------------------
    | App service provider
    |--------------------------------------------------------------------------
    |
    | The application service provider includes views and data
    | which we need in more than one view.
    | We define them in one place to avoid code duplication and improve application performance
    | and we pass them to the views we're interested in.
    | 
    */
    public function boot()
    {
        Composer::view(['app.index', 'app.about', 'app.service', 'app.menu', 'app.booking', 'app.contact', 'app.cart'],function (){
            $carts = allItemCart();
            $allNumberItems = allNumberItems() > 0 ? allNumberItems() : '' ;
            $totalPrice = totalPrice();
            return
                [
                    'carts' => $carts,
                    'allNumberItems' => $allNumberItems,
                    'totalPrice' => $totalPrice
                ];
        });
    }
    
}