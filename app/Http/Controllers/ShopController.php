<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('status', '=', config('constants.status.public'))->get();

        return view('shop', [
            'request' => $request,
            'categories' => $categories
        ]);
    }
}
