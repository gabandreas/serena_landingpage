<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{   
    private $jsonFilePath;
    public function __construct()
    {
        $this->jsonFilePath = base_path('storage/app/data/admin.json');
    }

    public function showLoginForm()
    {
        return view('admin.login'); // sesuaikan dengan nama view form login kamu
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        try {
            // Baca file JSON sebagai string lalu decode sekali saja
            $jsonString = File::get($this->jsonFilePath);
            // dd($jsonString)
            $admins = json_decode($jsonString, true);
            // dd($admins);
        } catch (\Exception $e) {
            return back()->with('error', 'File admin.json tidak ditemukan.');
        }

        // Validasi hasil decode JSON
        if (!$admins || !is_array($admins)) {
            return back()->with('error', 'Data admin tidak valid.');
        }

        foreach ($admins as $admin) {
            if (
                $admin['username'] === $request->username &&
                Hash::check($request->password, $admin['password']) &&
                $admin['is_admin'] === true
            ) {
                Session::put('admin_logged_in', true);
                Session::put('admin_username', $admin['username']);
                Session::put('admin_id', $admin['id']);

                return redirect('/admin/dashboard'); // gunakan '/' bukan '.'
            }
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login')->with('error', 'Anda telah logout.');
    }
}
