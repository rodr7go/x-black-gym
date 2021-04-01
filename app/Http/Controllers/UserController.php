<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Cost;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all()->where('is_admin', false);
        $costs = Cost::all()->pluck('name', 'id');

        return view('users.index', compact('users', 'costs'));
    }

    public function adminIndex()
    {
        $users = User::all()->where('is_admin', true);
        return view('users.admins', compact('users'));
    }

    public function create()
    {
        $user = New User();
        return view('users.create', compact('user'));
    }

    public function store(UserRequest $request)
    {
        $request->merge([
            'created_by' => auth()->user()->id
        ]);
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

    public function update(UserRequest $request, User $user)
    {
        $request->merge([
            'updated_by' => auth()->user()->id
        ]);

        $user->update($request->all());

        return redirect()->route('users.index');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    public function expirationDate()
    {
       $expirations = Payment::with('user')->where('expiration_date', '<', Carbon::now()->addDays(5))->get();

       return view('users.show_expirations', compact('expirations'));
    }
}
