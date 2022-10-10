<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SQLController extends Controller
{
    public function index () {
        $users = User::all();
        return view('index', [
            'users' => $users
        ]);
    }
    public function create () {
        return view('create');
    }
    public function store (Request $request) {
        $email = $request->post('email');
        $password = $request->post('password');
        
        $user = new User();
        $user->name = fake()->name();
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect()->route('users.index');
    }
    public function edit ($id) {
        return view('edit', [
            'user' => User::findOrFail($id),
        ]);
    }
    public function update (Request $request, $id) {
        $user = User::findOrFail($id);
        $user->email = $request->post('email');
        $user->password = $request->post('password');
        $user->save();

        return redirect()->route('users.index');
    }
}
