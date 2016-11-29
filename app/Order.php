<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;
use DB;
use App\Product;

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

        foreach ($cartCollection as $cc){
//            $product = Product::where('id', '=', $cc['id'])->first();
            $product = Product::find($cc['id']);
            $product->quantity = $product->quantity - $cc['quantity'];
            $product->save();
        }

        Session::flash('sm', 'Your order is saved');
    }

    static public function getAllOrders(){
        $sql = "SELECT o.*,DATE_FORMAT(o.created_at,'%e/%m/%Y %H:%i:%s') ca,u.name FROM orders o "
            . "JOIN users u ON u.id = o.user_id "
            .  "ORDER BY o.created_at DESC";
        return DB::select($sql);
    }
}
