<?php

namespace App\Http\Controllers;

use App\Models\factures;
use App\Models\produits;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factures= factures::all();
        return view('invoice',compact('factures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produits = produits::all();
        return view('invoices.add_invoices',compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        factures::create(
            [
                'numero_facture'=>$request->invoice_number,
                'date_facturation'=>$request->invoice_Date,
                'entreprise_nom'=>$request->inputNameE,
                'nom_produit'=>$request->produit,
                'entreprise_email'=>$request->inputNameE,
                'entreprise_adresse'=>$request->inputadresseE,
                'entreprise_tel'=>$request->tel_Entreprise,
                'client_nom'=>$request->Nom_client,
                'client_prenom'=>$request->prenom_client,
                'client_email'=>$request->inputNameE,
                'client_adresse'=>$request->Adresse_Client,
                'client_tel'=>$request->Tel_Client,
                'Etat'=>'impayée',
                'prix'=>$request->Amount_Commission,
                'tva'=>$request->Value_VAT,
                'montant_total'=>$request->Total,

            ]
        );
        return redirect('/factures');
    }

    /**
     * Display the specified resource.
     */
    public function show(factures $factures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(factures $factures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, factures $factures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(factures $factures)
    {
        //
    }
}
