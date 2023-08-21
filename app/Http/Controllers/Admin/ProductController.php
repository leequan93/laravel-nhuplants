<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImageExtra;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // categories
        $categories = Category::where('status', '!=', config('constants.status.destroy'))
                ->orderBy('id', 'desc')
                ->paginate(config('constants.paginate'));

        // products
        if ($request->query('status')) {
            $products = Product::where('status', '=', $request->query('status'));
        } else {
            $products = Product::where('status', '!=', config('constants.status.destroy'));
        }

        if ($request->query('title')) {
            $products = $products->where('title', 'like', '%' . $request->query('title') . '%');
        }

        if ($request->query('category_id')) {
            $products = $products->where('category_id', '=', $request->query('category_id'));
        }

        $products = $products->orderBy('id', 'desc');
        $products = $products->paginate(config('constants.paginate'))->withQueryString();

        return view('admin/product/index', [
            'request' => $request,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function create()
    {
        $categories = Category::where('status', '!=', config('constants.status.destroy'))
                ->orderBy('id', 'desc')
                ->paginate(config('constants.paginate'));

        return view('admin/product/create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|numeric',
            'title' => 'required|string',
            'label' => 'string',
            'price' => 'required|numeric',
            'price_old' => 'numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'image_extra.*' => 'image|mimes:jpeg,png,jpg|max:1024',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $fileName = 'i-p-' . time() . rand(10,99) . '.' . $request->file('image')->extension();

            // storage file
            $image = Storage::putFileAs('public/image/product', $request->file('image'), $fileName);
            $image = Str::replace('public', 'storage', $image);

            // resize file
            Image::make(public_path($image))
                ->resize(config('constants.resize.product.w'), config('constants.resize.product.h'))
                ->save();

            $validated['image'] = $image;
        }

        $validated['status'] = config('constants.status.draft');

        $product = new Product;
        $product = $product->create($validated);

        if ($request->hasFile('image_extra')) {
            foreach ($request->file('image_extra') as $image_extra) {
                $fileName = 'i-p-' . time() . rand(10,99) . '.' . $image_extra->extension();

                // storage file
                $image = Storage::putFileAs('public/image/product', $image_extra, $fileName);
                $image = Str::replace('public', 'storage', $image);

                // resize file
                Image::make(public_path($image))
                    ->resize(config('constants.resize.product.w'), config('constants.resize.product.h'))
                    ->save();

                $productImageExtra = new ProductImageExtra;
                $productImageExtra->create([
                    'product_id' => $product->id,
                    'image' => $image,
                ]);
            }
        }

        return redirect()->route('admin.product.index')->with('success', 'Create successful!');
    }

    public function show(Product $product)
    {
        $categories = Category::where('status', '!=', config('constants.status.destroy'))
                ->orderBy('id', 'desc')
                ->paginate(config('constants.paginate'));

        return view('admin/product/show', [
            'categories' => $categories,
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'category_id' => 'required|numeric',
            'title' => 'required|string',
            'label' => 'string',
            'price' => 'required|numeric',
            'price_old' => 'numeric',
            'image' => 'image|mimes:jpeg,png,jpg|max:1024',
            'image_extra.*' => 'image|mimes:jpeg,png,jpg|max:1024',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $fileName = 'i-p-' . time() . rand(10,99) . '.' . $request->file('image')->extension();

            // storage file
            $image = Storage::putFileAs('public/image/product', $request->file('image'), $fileName);
            $image = Str::replace('public', 'storage', $image);

            // resize file
            Image::make(public_path($image))
                ->resize(config('constants.resize.product.w'), config('constants.resize.product.h'))
                ->save();

            // delete old file
            Storage::delete(Str::replace('storage', 'public', $product->image));

            $validated['image'] = $image;
        }

        $product->update($validated);

        if ($request->hasFile('image_extra')) {
            foreach ($request->file('image_extra') as $image_extra) {
                $fileName = 'i-p-' . time() . rand(10,99) . '.' . $image_extra->extension();

                // storage file
                $image = Storage::putFileAs('public/image/product', $image_extra, $fileName);
                $image = Str::replace('public', 'storage', $image);

                // resize file
                Image::make(public_path($image))
                    ->resize(config('constants.resize.product.w'), config('constants.resize.product.h'))
                    ->save();

                $productImageExtra = new ProductImageExtra;
                $productImageExtra->create([
                    'product_id' => $product->id,
                    'image' => $image,
                ]);
            }
        }

        return redirect()->route('admin.product.show', $product)->with('success', 'Update successful!');
    }

    public function destroy(Request $request, Product $product)
    {
        $product->update([
            'status' => config('constants.status.destroy')
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Destroy successful!');
    }

    public function public(Request $request, Product $product)
    {
        $product->update([
            'status' => config('constants.status.public')
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Public successful!');
    }

    public function draft(Request $request, Product $product)
    {
        $product->update([
            'status' => config('constants.status.draft')
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Draft successful!');
    }

    public function productImageExtraDestroy(Request $request, ProductImageExtra $productImageExtra)
    {
        // delete old file
        Storage::delete(Str::replace('storage', 'public', $productImageExtra->image));

        $productImageExtra->delete();

        $request->session()->flash('success', 'Destroy successful!');

        return response()->json(true);
    }
}
