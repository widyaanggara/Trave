<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function index(Request $request): View
     {
         return view('pages.account', [
             'user' => $request->user(),
         ]);
     }

     public function indexadmin(Request $request): View
     {
         return view('admin.account', [
             'user' => $request->user(),
         ]);
     }



    public function show()
    {
        // Mendapatkan data user yang login
        $user = Auth::user();

        // Mengirim data user ke view
        return view('pages.account', compact('user'));
    }

    public function showadmin()
    {
        // Mendapatkan data user yang login
        $user = Auth::user();

        // Mengirim data user ke view
        return view('admin.account', compact('user'));
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function editadmin(Request $request): View
    {
        return view('admin.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */

     public function update(Request $request)
{
    // Logika update profile
    /** @var User $user */
    $user = Auth::user();

    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8',
    ]);

    // Update data user
    $user->name = $request->input('name');
    $user->phone = $request->input('phone');
    $user->email = $request->input('email');

    // Update password jika diisi
    if ($request->filled('password')) {
        $user->password = Hash::make($request->input('password'));
    }

    // Simpan perubahan
    $user->save();

    return back()->with('success', 'Profil berhasil diperbarui!');
}

    public function updateadmin(Request $request)
    {
        // Logika update profile
        /** @var User $user */
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
        ]);

        // Update data user
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');

        // Update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Simpan perubahan
        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui!');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function destroyadmin(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
