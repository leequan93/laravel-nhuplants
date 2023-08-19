<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('status')) {
            $categories = Category::where('status', '=', $request->query('status'));
        } else {
            $categories = Category::where('status', '!=', config('constants.status.destroy'));
        }

        if ($request->query('title')) {
            $categories = $categories->where('title', 'like', '%' . $request->query('title') . '%');
        }

        $categories = $categories->orderBy('id', 'desc');
        $categories = $categories->paginate(config('constants.paginate'))->withQueryString();

        return view('admin/category/index', [
            'request' => $request,
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin/category/create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $fileName = 'i-c-' . time() . rand(10,99) . '.' . $request->file('image')->extension();

            // storage file
            $image = Storage::putFileAs('public/image/category', $request->file('image'), $fileName);
            $image = Str::replace('public', 'storage', $image);

            // resize file
            Image::make(public_path($image))
                ->resize(config('constants.resize.category.w'), config('constants.resize.category.h'))
                ->save();

            $validated['image'] = $image;
        }

        $validated['status'] = config('constants.status.draft');

        $category = new Category;
        $category->create($validated);

        return redirect()->route('admin.category.index')->with('success', 'Create successful!');
    }

    public function show(Category $category)
    {
        return view('admin/category/show', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:1024',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $fileName = 'i-c-' . time() . rand(10,99) . '.' . $request->file('image')->extension();

            // storage file
            $image = Storage::putFileAs('public/image/category', $request->file('image'), $fileName);
            $image = Str::replace('public', 'storage', $image);

            // resize file
            Image::make(public_path($image))
                ->resize(config('constants.resize.category.w'), config('constants.resize.category.h'))
                ->save();

            // delete old file
            Storage::delete(Str::replace('storage', 'public', $category->image));

            $validated['image'] = $image;
        }

        $category->update($validated);

        return redirect()->route('admin.category.show', $category)->with('success', 'Update successful!');
    }

    public function destroy(Request $request, Category $category)
    {
        $category->update([
            'status' => config('constants.status.destroy')
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Destroy successful!');
    }

    public function public(Request $request, Category $category)
    {
        $category->update([
            'status' => config('constants.status.public')
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Public successful!');
    }

    public function draft(Request $request, Category $category)
    {
        $category->update([
            'status' => config('constants.status.draft')
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Draft successful!');
    }
}
