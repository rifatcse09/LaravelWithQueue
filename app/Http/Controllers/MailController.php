<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendOrderEmail;
use App\Mail\OrderShipped;
use App\Order;
use Log;

class MailController extends Controller
{
    public function index() {

       //$order = Order::findOrFail( rand(1,50) );
       $order =  Order::inRandomOrder()->limit(10)->get();       
       $userName = [];
       foreach($order as $value){
            array_push($userName, $value->name);
            SendOrderEmail::dispatch($value);
            Log::info('Dispatched order ' . $value->id);
        }
         return $userName;
    }
}
