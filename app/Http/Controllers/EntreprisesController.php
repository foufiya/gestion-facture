<?php

namespace App\Http\Controllers;

use App\Models\entreprises;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entreprises= entreprises::all();
        return view('entreprises.entreprise',compact('entreprises'));
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
        entreprises::create(
            [
                'company_name'=>$request->company_name,
                'company_tel'=>$request->company_tel,
                'company_email'=>$request->company_email,
                'company_address'=>$request->company_address,
                'company_CompteBancaire'=>$request->company_address,
            ]
        );
        // session()->flash('Add','Le entreprise est bien ajouté');
        return redirect('/entreprises');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(entreprises $entreprises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entreprises $entreprises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, entreprises $entreprises)
    {
            $entreprises = entreprises::findOrFail($request->ent_id);
        $entreprises->update(
            [
                'company_name'=>$request->company_name,
                'company_tel'=>$request->company_tel,
                'company_email'=>$request->company_email,
                'company_address'=>$request->company_address,
                'company_CompteBancaire'=>$request->company_CompteBancaire,
            ]
            );
           // return back();
            return redirect('/entreprises');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entreprises $entreprises,Request $request)
    {
       $entreprises=entreprises::findOrFail($request->ent_id);
       $entreprises->delete();
       return back();
    }
}