<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user

        $this->validator($request->all())->validate();

        // Update user fields
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('national_id_number')) {
            $user->national_id_number = $request->national_id_number;
        }

        if ($request->filled('dob')) {
            $user->dob = $request->dob;
        }

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $user->profile_photo = $this->uploadFile($request->file('profile_photo'));
        }

        // Handle national ID photo upload
        if ($request->hasFile('national_id_photo')) {
            $user->national_id_photo = $this->uploadFile($request->file('national_id_photo'));
        }

        $user->save(); // Save the updated user

        return redirect()->route('dashboard')->with('success', 'Profile updated successfully.');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'national_id_number' => ['nullable', 'string', 'max:255'],
            'dob' => ['nullable', 'date'],
            'profile_photo' => ['nullable', 'image', 'max:2048'], // Optional
            'national_id_photo' => ['nullable', 'image', 'max:2048'], // Optional
        ]);
    }

    protected function uploadFile($file)
    {
        if ($file) {
            return $file->store('uploads', 'public'); // Store in public/uploads
        }

        return null;
    }
}