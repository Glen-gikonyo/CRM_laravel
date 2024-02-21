<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    public function index()
    {
        $deals = Deal::all();
        return view('deals.index', compact('deals'));
    }

    public function create()
    {
        return view('deals.create');
    }

    public function store(Request $request)
    {
        Deal::create($request->all());
        return redirect()->route('deals.index')->with('success', 'Deal created successfully.');
    }

    public function show(Deal $deal)
    {
        return view('deals.show', compact('deal'));
    }

    public function edit(Deal $deal)
    {
        return view('deals.edit', compact('deal'));
    }

    public function update(Request $request, Deal $deal)
    {
        $deal->update($request->all());
        return redirect()->route('deals.index')->with('success', 'Deal updated successfully.');
    }

    public function destroy(Deal $deal)
    {
        $deal->delete();
        return redirect()->route('deals.index')->with('success', 'Deal deleted successfully.');
    }
}
