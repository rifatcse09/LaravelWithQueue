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
       foreach($order as $value){
        echo '<pre>';
        echo    $value->id.' '.$value->name;

       
        echo '<pre>';
        //print_r($order);
       // exit();
        SendOrderEmail::dispatch($value);

        //Log::info('Dispatched order ' . $order->id);
        //return 'Dispatched order ' . $order->id;
        }
    //     $value = ['name'=>'Rifat','email'=>'test@test.com','item_count'=>4];
    //    // echo $value->id;
    //     ///exit();
    //    /// $order = new Order($value);
    //     SendOrderEmail::dispatch($value);
         return true;
    }
}
