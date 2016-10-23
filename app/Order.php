<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;

class Order extends Model
{
    static public function saveOrder(){
        $cartCollection = Cart::getContent();
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = $cartCollection->toJson();
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::flash('sm', 'Your order is saved');
    }
}
