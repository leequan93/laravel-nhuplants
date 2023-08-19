<?php

namespace App\Http\Controllers;

use App\Models\Cover;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CoverController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('status')) {
            $covers = Cover::where('status', '=', $request->query('status'));
        } else {
            $covers = Cover::where('status', '!=', config('constants.status.destroy'));
        }

        $covers = $covers->orderBy('id', 'desc');
        $covers = $covers->paginate(config('constants.paginate'))->withQueryString();

        return view('admin/cover/index', [
            'request' => $request,
            'covers' => $covers,
        ]);
    }

    public function create()
    {
        return view('admin/cover/create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            $fileName = 'i-co-' . time() . rand(10,99) . '.' . $request->file('image')->extension();

            // storage file
            $image = Storage::putFileAs('public/image/cover', $request->file('image'), $fileName);
            $image = Str::replace('public', 'storage', $image);

            // resize file
            Image::make(public_path($image))
                ->resize(config('constants.resize.cover.w'), config('constants.resize.cover.h'))
                ->save();

            $validated['image'] = $image;
        }

        $validated['status'] = config('constants.status.draft');

        $cover = new Cover;
        $cover->create($validated);

        return redirect()->route('admin.cover.index')->with('success', 'Create successful!');
    }

    public function show(Cover $cover)
    {
        return view('admin/cover/show', [
            'cover' => $cover
        ]);
    }

    public function update(Request $request, Cover $cover)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            $fileName = 'i-co-' . time() . rand(10,99) . '.' . $request->file('image')->extension();

            // storage file
            $image = Storage::putFileAs('public/image/cover', $request->file('image'), $fileName);
            $image = Str::replace('public', 'storage', $image);

            // resize file
            Image::make(public_path($image))
                ->resize(config('constants.resize.cover.w'), config('constants.resize.cover.h'))
                ->save();

            // delete old file
            Storage::delete(Str::replace('storage', 'public', $cover->image));

            $validated['image'] = $image;
        }

        $cover->update($validated);

        return redirect()->route('admin.cover.show', $cover)->with('success', 'Update successful!');
    }

    public function destroy(Request $request, Cover $cover)
    {
        $cover->update([
            'status' => config('constants.status.destroy')
        ]);

        return redirect()->route('admin.cover.index')->with('success', 'Destroy successful!');
    }

    public function public(Request $request, Cover $cover)
    {
        $cover->update([
            'status' => config('constants.status.public')
        ]);

        return redirect()->route('admin.cover.index')->with('success', 'Public successful!');
    }

    public function draft(Request $request, Cover $cover)
    {
        $cover->update([
            'status' => config('constants.status.draft')
        ]);

        return redirect()->route('admin.cover.index')->with('success', 'Draft successful!');
    }
}
