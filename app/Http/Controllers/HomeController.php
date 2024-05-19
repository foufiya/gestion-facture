<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\factures;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //=================LES STATISTIQUES DES FACTURATIONS======================

        $count_all =factures::count();
        $count_invoices1 = factures::where('Etat_paiement', 1)->count();
        $count_invoices2 = factures::where('Etat_paiement', 0)->count();
        $count_invoices3 = factures::where('Etat_paiement', 3)->count();

        if($count_invoices2 == 0){
            $nspainvoices2=0;
        }
        else{
            $nspainvoices2 = $count_invoices2/ $count_all*100;
        }

        if($count_invoices1 == 0){
            $nspainvoices1=0;
        }
        else{
            $nspainvoices1 = $count_invoices1/ $count_all*100;
        }

        if($count_invoices3 == 0){
            $nspainvoices3=0;
        }
        else{
            $nspainvoices3 = $count_invoices3/ $count_all*100;
        }


        $chartjs = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 350, 'height' => 200])
            ->labels(['Factures Imapyees', ' Factures Payees','  Factures Partiellement Payees'])
            ->datasets([
                [
                    "label" => "Factures Imapyees",
                    'backgroundColor' => ['#ec5858'],
                    'data' => [$nspainvoices2]
                ],
                [
                    "label" => "Factures Payees  ",
                    'backgroundColor' => ['#81b214'],
                    'data' => [$nspainvoices1]
                ],
                [
                    "label" => " Factures Partiellement Payees ",
                    'backgroundColor' => ['#ff9642'],
                    'data' => [$nspainvoices3]
                ],


            ])
            ->options([]);


        $chartjs_2 = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 340, 'height' => 200])
            ->labels(['Factures Imapyees  ', 'Factures Payees ','Factures Partiellement Payees '])
            ->datasets([
                [
                    'backgroundColor' => ['#ec5858', '#81b214','#ff9642'],
                    'data' => [$nspainvoices2, $nspainvoices1,$nspainvoices3]
                ]
            ])
            ->options([]);

        return view('home', compact('chartjs','chartjs_2'));

    }


}
