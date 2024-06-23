<?php

namespace App\Http\Controllers\Admin;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function dashboard()
    {
        // Logika untuk mengambil data dan menampilkan halaman dashboard
        return view('admin.dashboard'); // Ganti dengan nama view yang sesuai
    }
    public function index()
    {
        $admin = Admin::all();
        return view('admin.index', compact('admin'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        Admin::create($data);

        return redirect()->route('admin.index')
            ->with('success', 'admin created successfully.');
    }

    public function show(Admin $admin)
    {
        return view('admin.show', compact('admin'));
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin,email,' . $admin->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        $data = $request->all();
        if($request->filled('password')) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $admin->update($data);

        return redirect()->route('admin.index')
            ->with('success', 'Admin updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Admin deleted successfully.');
    }
}
