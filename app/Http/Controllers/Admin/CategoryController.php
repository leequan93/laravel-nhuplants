<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

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
        ]);

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
        ]);

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
