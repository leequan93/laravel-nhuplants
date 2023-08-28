<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    private $cart;

    public function __construct(){
        $this->middleware(function ($request, $next){
            $this->cart = $request->session()->has('cart') ? $request->session()->get('cart') : [];
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $products = [];
        foreach ($this->cart as $id => $total) {
            $product = Product::where('id', $id)
                ->where('status', config('constants.status.public'))
                ->first();

            if ($product) {
                $product->total = $total;
                $products[] = $product;
            }
        }

        return view('cart', [
            'products' => $products
        ]);
    }

    public function store(Request $request, Product $product)
    {
        if (!empty($this->cart[$product->id])) {
            $this->cart[$product->id] = $this->cart[$product->id] + (int) $request['total'];
        } else {
            $this->cart[$product->id] = (int) $request['total'];
        }

        // store in session
        $request->session()->put('cart', $this->cart);

        return redirect()->route('cart');
    }

    public function update(Request $request)
    {
        $this->cart = array_map('intval', $request->cart);

        // store in session
        $request->session()->put('cart', $this->cart);

        return redirect()->route('cart');
    }
}
