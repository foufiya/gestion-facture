<?php

namespace App\Http\Controllers;
use App\Models\invoices_details;
use App\Models\factures;
use App\Models\produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\ArrayToXml\ArrayToXml;
use Illuminate\Support\Facades\Notification;

use App\Models\User;
//use Spatie\ArrayToXml\ArrayToXml;


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
                'entreprise_email'=>$request->email_entreprise,
                'entreprise_adresse'=>$request->inputadresseE,
                'entreprise_tel'=>$request->tel_Entreprise,
                'client_nom'=>$request->Nom_client,
                'client_prenom'=>$request->prenom_client,
                'client_email'=>$request->email_client,
                'client_adresse'=>$request->Adresse_Client,
                'client_tel'=>$request->Tel_Client,
                'Etat'=>'impayée',
                'prix'=>$request->Amount_Commission,
                'tva'=>$request->Value_VAT,
                'montant_total'=>$request->Total,

            ]
        );
        

        
        $invoice_id = factures::latest()->first()->id;
        invoices_details::create([
            'id_Invoice' => $invoice_id,
            'invoice_number' => $request->invoice_number,
            'product' => $request->produit,
            //'Section' => $request->Section,
            'Status' => 'impayée',
            'Value_Status' => 0,
            //'note' => $request->note,
            'user' => (Auth::user()->name),
        ]);
        
        $user = User::get();
        $factures = factures::latest()->first();
        Notification::send($user, new \App\Notifications\AjouterFac_new($factures));

        return redirect('/factures');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $invoices = factures::where('id', $id)->first();
        return view('invoices.status_update', compact('invoices')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
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
    public function Status_Update($id, Request $request)
    {
        $invoices = factures::findOrFail($id);

        if ($request->Status === 'payée') {

            $invoices->update([
                'Etat_paiement' => 1,
                'Etat' => $request->Status,
                'Payment_Date' => $request->Payment_Date,
            ]);

            invoices_Details::create([
                'id_Invoice' =>$invoices->id,
                'invoice_number' => $request->num,
                'product' => $request->product,
                //'Section' => $request->Section,
                'Status' => $request->Status,
                'Value_Status' => 1,
                //'note' => $request->note,
                'Payment_Date' => $request->Payment_Date,
                'user' => (Auth::user()->name),
            ]);
        }

        else {
            $invoices->update([
                'Etat_paiement' => 3,
                'Etat' => $request->Status,
                'Payment_Date' => $request->Payment_Date,
            ]);
            invoices_Details::create([
                'id_Invoice' =>$invoices->id,
                'invoice_number' => $request->num,
                'product' => $request->product,
                //'Section' => $request->Section,
                'Status' => $request->Status,
                'Value_Status' => 3,
                //'note' => $request->note,
                'Payment_Date' => $request->Payment_Date,
                'user' => (Auth::user()->name),
            ]);
        }
        return redirect('/factures');
}
public function File(factures $factures)
    {
        $factures = factures::all()->toArray();

        // Convertir les données en XML
        $xmlContent = ArrayToXml::convert(['factures' => $factures], 'factures');

        // Retourner la réponse XML
        return response()->make($xmlContent, 200, ['Content-Type' => 'text/xml']);
    }
    public function indexF_paid(){
        $invoices = factures::all()->where('Etat_paiement',1);
        return view('invoices.facture_paid',compact('invoices'));
    }
    public function indexF_impaid(){
        $invoices = factures::all()->where('Etat_paiement',0);
        return view('invoices.facture_imapaid',compact('invoices'));
    }
    public function indexF_paidP(){
        $invoices = factures::all()->where('Etat_paiement',3);
        return view('invoices.facture_paidP',compact('invoices'));
    }
}
