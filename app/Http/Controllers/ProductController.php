<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index() {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    function detail($id) {
    $data = Product::find($id);
    return view('detail', ['products' => $data]);
    }

    function addToCart(Request $request) {
        if($request->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItem() {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cart() {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();
        return view('cart', ['products' => $products]);
    }

    function removeFromCart($id) {
        Cart::destroy($id);
        return redirect('cart');
    }

    function proceedToPayment() {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');
        return view('payment', ['total' => $total]);
        }
}
