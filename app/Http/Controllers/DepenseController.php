<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depense;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depenses = Depense::all();
        return view('depenses.index', compact('depenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|unique:depenses',
            'date' => 'required|date',
            'montant' => 'required|numeric',
            'etat' => 'required',
            'date_paiement' => 'nullable|date',
            'description' => 'nullable|string',
        ]);

        Depense::create($request->all());

        return redirect()->route('depenses.index')
            ->with('success', 'Depense created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function show(Depense $depense)
    {
        return view('depenses.show', compact('depense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function edit(Depense $depense)
    {
        return view('depenses.edit', compact('depense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depense $depense)
    {
        $request->validate([
            'numero' => 'required|unique:depenses,numero,'.$depense->id,
            'date' => 'required|date',
            'montant' => 'required|numeric',
            'etat' => 'required',
            'date_paiement' => 'nullable|date',
            'description' => 'nullable|string',
        ]);

        $depense->update($request->all());

        return redirect()->route('depenses.index')
            ->with('success', 'Depense updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depense $depense)
    {
        $depense->delete();

        return redirect()->route('depenses.index')
            ->with('success', 'Depense deleted successfully.');
    }
}
