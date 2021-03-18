<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{

    public function index()
    {
        $costs = Cost::all();
        return view('costs.index', compact('costs'));
    }

    public function create()
    {
        $cost = new Cost();
        $months = Cost::$months;

        return view('costs.create', compact('cost', 'months'));
    }

    public function store(Request $request)
    {
        Cost::create($request->all());
        return redirect()->route('costs.index');
    }

    public function show(Cost $cost)
    {
        //
    }

    public function edit(Cost $cost)
    {
        $months = Cost::$months;
        return view('costs.create', compact('cost', 'months'));
    }

    public function update(Request $request, Cost $cost)
    {
        $cost->update($request->all());
        return redirect()->route('costs.index');
    }

    public function destroy(Cost $cost)
    {
        $cost->delete();
        return redirect()->route('costs.index');
    }
}
