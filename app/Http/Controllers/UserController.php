<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\CreateUser;

class UserController extends Controller
{
    public function home3()
    {
        $users = User::all();
        return view('users.home3', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(CreateUser $request)
    {
                            
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
            

        return redirect()->route('users.home3');
    }
}
