<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Cost;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        $costs = Cost::all()->reverse()->pluck('name', 'id');

        return view('users.index', compact('users', 'costs'));
    }

    public function create()
    {
        $user = New User();
        return view('users.create', compact('user'));
    }

    public function store(UserRequest $request)
    {
        if ($request->is_admin) {
            $request->merge([
                'is_admin' => 1
            ]);
        }
        $user = User::create($request->all());

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        if ($request->is_admin) {
            $request->merge([
                'is_admin' => 1
            ]);
        }
        $user->update($request->all());

        return redirect()->route('users.index');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
