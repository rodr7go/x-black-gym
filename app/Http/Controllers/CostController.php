<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{

    public function index()
    {
        return view('costs.index');
    }

    public function create()
    {
        $cost = new Cost();
        return view('costs.create', compact('cost'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Cost $cost)
    {
        //
    }

    public function edit(Cost $cost)
    {
        //
    }

    public function update(Request $request, Cost $cost)
    {
        //
    }

    public function destroy(Cost $cost)
    {
        //
    }
}
