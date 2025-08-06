<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserDataController extends Controller
{
    private $jsonFilePath;
    public function __construct()
    {
        $this->jsonFilePath = base_path('storage/app/data/user.json');
    }
    
    public function index()
    {
        $users = json_decode(File::get($this->jsonFilePath), true);
        return view('admin.user_data', compact('users'));
    }
    
    public function create()
    {
        return view('admin.add_user');
    }

    public function store(Request $request)
    {
        $users = json_decode(File::get($this->jsonFilePath), true);
        $newUser  = [
            'id' => count($users) + 1,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
        $users[] = $newUser ;
        File::put($this->jsonFilePath, json_encode($users, JSON_PRETTY_PRINT));
        return redirect('/product')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $users = json_decode(File::get($this->jsonFilePath), true);
        $user = collect($users)->firstWhere('id', $id);
        return view('admin.edit_user', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $users = json_decode(File::get($this->jsonFilePath), true);
        $userIndex = array_search($id, array_column($users, 'id'));
        
        if ($userIndex !== false) {
            $users[$userIndex]['name'] = $request->name;
            $users[$userIndex]['email'] = $request->email;
            $users[$userIndex]['phone'] = $request->phone;
            File::put($this->jsonFilePath, json_encode($users, JSON_PRETTY_PRINT));
            return redirect('/user_data')->with('success', 'Pengguna berhasil diperbarui.');
        }
        return redirect('/user_data')->with('error', 'Pengguna tidak ditemukan.');
    }

    public function destroy($id)
    {
        $users = json_decode(File::get($this->jsonFilePath), true);
        $users = array_filter($users, function ($user) use ($id) {
            return $user['id'] != $id;
        });
        File::put($this->jsonFilePath, json_encode(array_values($users), JSON_PRETTY_PRINT));
        return redirect('/user_data')->with('success', 'Pengguna berhasil dihapus.');
    }
        
}
