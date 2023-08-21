<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // categories
        $categories = Category::where('status', '=', config('constants.status.public'))->get();

        // products
        $products = Product::select('products.*')
                        ->join('categories', 'categories.id', '=', 'products.category_id')
                        ->where('categories.status', '=', config('constants.status.public'))
                        ->where('products.status', '=', config('constants.status.public'));

        if ($request->query('title')) {
            $products = $products->where('products.title', 'like', '%' . $request->query('title') . '%');
        }

        if ($request->query('category')) {
            $products = $products->where('products.category_id', '=', $request->query('category'));
        }

        $products = $products->orderBy('products.id', 'desc');
        $products = $products->paginate(12)->withQueryString();

        return view('shop', [
            'request' => $request,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function show(Product $product)
    {
        if ($product->status != config('constants.status.public')) {
            return redirect()->route('home');
        }

        return view('product', [
            'product' => $product,
        ]);
    }
}
