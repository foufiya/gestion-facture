<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\factures;

class Invoices_Report extends Controller
{
    public function index(){

     return view('reports.invoices_report');
        
    }

    public function Search_invoices(Request $request){

    $rdio = $request->rdio;


 // Cas: Search Type Invoices    
    
    if ($rdio == 1) {
       
       
 //     Cas: la Date n'est pas determinee
        if ($request->type && $request->start_at =='' && $request->end_at =='') {
            
           $invoices = factures::select('*')->where('Etat','=',$request->type)->get();
           $type = $request->type;
           return view('reports.invoices_report',compact('type'))->withDetails($invoices);
        }
        
        //   Cas: Date est terminee
        else {
           
          $start_at = date($request->start_at);
          $end_at = date($request->end_at);
          $type = $request->type;
          
          $invoices = factures::whereBetween('date_facturation',[$start_at,$end_at])->where('Etat','=',$request->type)->get();
          return view('reports.invoices_report',compact('type','start_at','end_at'))->withDetails($invoices);
          
        }

 
        
    } 
    
//====================================================================
    
//    Cas: Search with the numbur of the invoices
    else {
        
        $invoices = factures::select('*')->where('numero_facture','=',$request->invoice_number)->get();
        return view('reports.invoices_report')->withDetails($invoices);
        
    }

    
     
    }
    
}