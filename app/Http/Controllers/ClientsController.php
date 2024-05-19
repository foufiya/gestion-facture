<?php

namespace App\Http\Controllers;
use App\Models\clients_details;

use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\ArrayToXml\ArrayToXml;
//use Spatie\ArrayToXml\ArrayToXml;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients= clients::all();
        return view('clients.client',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = clients::all();
        return view('clients.add_clients',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        clients::create(
            [
                

                'name_client'=>$request->name_client,
                'clientprenom'=>$request->clientprenom,
                'clientemail'=>$request->clientemail,
                'clientaddress'=>$request->clientaddress,
                'clienttel'=>$request->clienttel,
                'client_CompteBancaire'=>$request->client_CompteBancaire,
                

            ]
        );
        

        
        
        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     */
    /*public function show($id)
    {
        $clients = clients::where('id', $id)->first();
        return view('clients.status_update', compact('clients')); 
    }*/

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clients $clients)
    {
        $clients = clients::findOrFail($request->cli_id);
    $clients->update(
        [
            'name_client'=> $request->name_client,
            'clientprenom'=> $request->clientprenom,
            'clientemail'=> $request->clientemail,
            'clientaddress'=> $request->clientaddress,
            'clienttel'=> $request->clienttel,
            'client_CompteBancaire'=> $request->client_CompteBancaire,
        ]
        );
        return redirect('/clients');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clients $clients,Request $request)
    {
        $clients=clients::findOrFail($request->cli_id);
        $clients->delete();
        return back();
     }
/*    public function Status_Update($id, Request $request)
    {
        $clients = clients::findOrFail($id);

        if ($request->Status === 'payée') {

            $clients->update([
                'Etat_paiement' => 1,
                'Etat' => $request->Status,
                'Payment_Date' => $request->Payment_Date,
            ]);

            clients_Details::create([
                'id_client' =>$clients->id,
                'client_number' => $request->num,
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
            $clients->update([
                'Etat_paiement' => 3,
                'Etat' => $request->Status,
                'Payment_Date' => $request->Payment_Date,
            ]);
            clients_Details::create([
                'id_client' =>$clients->id,
                'client_number' => $request->num,
                'product' => $request->product,
                //'Section' => $request->Section,
                'Status' => $request->Status,
                'Value_Status' => 3,
                //'note' => $request->note,
                'Payment_Date' => $request->Payment_Date,
                'user' => (Auth::user()->name),
            ]);
        }
        return redirect('/clients');
}*/
/*public function File(clients $clients)
    {
        $clients = clients::all()->toArray();

        // Convertir les données en XML
        $xmlContent = ArrayToXml::convert(['clients' => $clients], 'clients');

        // Retourner la réponse XML
        return response()->make($xmlContent, 200, ['Content-Type' => 'text/xml']);
    }

*/
}