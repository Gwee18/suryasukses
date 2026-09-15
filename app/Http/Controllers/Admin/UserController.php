<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of admin accounts.
     */
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
        }

        $users = $query->orderBy('name', 'asc')->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new admin account.
     */
    public function create()
    {
        return view('admin.users.form');
    }

    /**
     * Store a newly created admin account.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            // Semua akun baru otomatis jadi Co-Admin.
            // Hanya admin@suryasukses.test (Head Admin) yang boleh menghapus akun.
            'role' => 'co_admin',
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Akun admin berhasil ditambahkan.');
    }

    /**
     * Show the form for editing an admin account.
     */
    public function edit(User $user)
    {
        // Hanya Head Admin yang boleh mengedit akun, termasuk akunnya sendiri.
        if (!Auth::user()->isHeadAdmin()) {
            return redirect()->route('admin.users.index')->with('error', 'Hanya Head Admin yang dapat mengedit akun admin.');
        }

        return view('admin.users.form', compact('user'));
    }

    /**
     * Update the specified admin account.
     */
    public function update(Request $request, User $user)
    {
        // Hanya Head Admin yang boleh mengedit akun, termasuk akunnya sendiri.
        if (!Auth::user()->isHeadAdmin()) {
            return redirect()->route('admin.users.index')->with('error', 'Hanya Head Admin yang dapat mengedit akun admin.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Akun admin berhasil diperbarui.');
    }

    /**
     * Remove the specified admin account.
     */
    public function destroy(User $user)
    {
        // Hanya Head Admin (admin@suryasukses.test) yang boleh menghapus akun.
        if (!Auth::user()->isHeadAdmin()) {
            return redirect()->route('admin.users.index')->with('error', 'Hanya Head Admin yang dapat menghapus akun admin.');
        }

        // Akun Head Admin tidak boleh dihapus oleh siapa pun, termasuk dirinya sendiri.
        if ($user->isHeadAdmin()) {
            return redirect()->route('admin.users.index')->with('error', 'Akun Head Admin tidak dapat dihapus.');
        }

        if ($user->id === Auth::id()) {
            return redirect()->route('admin.users.index')->with('error', 'Anda tidak bisa menghapus akun Anda sendiri saat sedang login.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Akun admin berhasil dihapus.');
    }
}
