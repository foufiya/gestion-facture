<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // abort_if(Gate::denies('lesson_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $produits = produits::all();
        return view('produits.produit', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        produits::create(
            [
                'nom_produit' => $request->Product_name,
                'description' => $request->description,
            ]
        );
        // session()->flash('Add','Le produit est bien ajouté');
        return redirect('/produit');

    }

    /**
     * Display the specified resource.
     */
    public function show(produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produits $produits)
    {
        $produits = produits::findOrFail($request->pro_id);
        $produits->update(
            [
                'nom_produit' => $request->Product_name,
                'description' => $request->description,
            ]
        );
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produits $produits, Request $request)
    {
        $produits = produits::findOrFail($request->pro_id);
        $produits->delete();
        return back();
    }
}
