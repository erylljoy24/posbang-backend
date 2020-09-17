<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request){

        $result = DB::table('carts')->insert(
            $request->all()
        );

        return $result;
    }

    public function getCartList(){
        $cart = Cart::all();
        return $cart;
    }
}
