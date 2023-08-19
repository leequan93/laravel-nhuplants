<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function show()
    {
        return view('admin/user/show');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        if ($request->password) {
            $request->validate([
                'old_password' => 'required|string',
                'password' => 'required|string|confirmed',
            ]);

            if (!Hash::check($request->old_password, Auth::user()->password)) {
                return redirect()->route('admin.user.show')->with('error', 'Incorrect password');
            }

            $validated['password'] = Hash::make($request->password);
        }

        $user = Auth::user();
        $user->update($validated);

        return redirect()->route('admin.user.show')->with('success', 'Update successful!');
    }
}
