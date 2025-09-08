<?php
namespace App\Http\Controllers;
use App\Model\Order;
use System\Auth\Auth;
use App\Http\Controllers\CartController;
class PaymentController extends CartController
{

    public function __construct()
    {
        if (Auth::user()->address == null)
        {
            return redirect(route('my.panel.info'));
        }
    }

    public function payment()
    {
        addOrderItemsAndOrder();


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://gateway.zibal.ir/v1/request',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
  "merchant": "zibal",
  "amount": "230000",
  "callbackUrl": "https://my.sabzlearn.ir/",
  "orderId": "12"
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }
}