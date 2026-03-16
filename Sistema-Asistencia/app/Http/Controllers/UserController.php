<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('users.index', ['users'=>$users]);
    }

    public function create()
    {}

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:30',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|max:255',
        ]);
        User::create($request->only('name','email','password'));
        return back();
    }

    public function show(string $id)
    {}

    public function edit(string $id)
    {}

    public function update(Request $request, string $id)
    {}

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
