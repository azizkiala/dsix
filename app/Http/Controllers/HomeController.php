<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Frais;
use App\Models\Moyekoli;
use App\Models\AutreFrais;
use App\Models\RapportFrais;
use App\Repository\KamataNioso;
use App\Models\RapportAutreFrais;
use Illuminate\Support\Facades\Auth;

class HomeController extends KamataNioso
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $premierTri = '1èr Trimestre';
    private $deuxiemeTri = '2ème Trimestre';
    private $troisiemeTri = '3ème Trimestre';
    private $premierTra = '1èr Tranche';
    private $deuxiemeTra = '2ème Tranche';
    private $troisiemeTra = '3ème Tranche';
    private $franc = 'franc';
    private $dollar = 'dollar';

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // cette méthode recupère le frais scolaires payer aujourd'hui
    public function frais_journalier($m){
        return Frais::whereDay('created_at', Carbon::now(fiso(Auth::user()->province))->format('d'))
        ->where('user_id', Auth::user()->id)
        ->whereMonth('created_at', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('created_at', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->sum($m);
     }

     public function frais_hier($m){
        return Frais::whereDay('dat_frais', Carbon::yesterday(fiso(Auth::user()->province)))
        ->where('user_id', Auth::user()->id)
        ->whereMonth('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->sum($m);
     }
     // cette méthode recupère les autrefrais payer aujourd'hui
     public function autrefrais_journalier($m){
        return AutreFrais::whereDay('date_paye', Carbon::now(fiso(Auth::user()->province))->format('d'))
        ->whereMonth('date_paye', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('date_paye', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->sum($m);
     }

     public function autrefrais_hier($m){
        return AutreFrais::whereDay('date_paye', Carbon::yesterday(fiso(Auth::user()->province)))
        ->whereMonth('date_paye', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('date_paye', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->sum($m);
     }
    public function index()
    {

        ///////////////////////RAPPORT DE FRAIS SCOLAIRE////////////////////////////////
        $date = RapportFrais::where('user_id', Auth::user()->id)->pluck('jour')->last();
        $dates = Carbon::now(fiso(Auth::user()->province))->format('d/m/Y');
        if($date == $dates){
        }else{
            $j = new RapportFrais();
            $j->franc = $this->frais_hier($this->franc);
            $j->dollar = $this->frais_hier($this->dollar);
            $j->date_rapport = Carbon::yesterday(fiso(Auth::user()->province));
            $j->jour = $dates;
            $j->annee_rapport = AnneeSco();
            $j->user_id = Auth::user()->id;
            $j->save();
        }
        ///////////////////////RAPPORT DE AUTRES FRAIS ////////////////////////////////
        $dateautre = RapportAutreFrais::where('user_id', Auth::user()->id)->pluck('jour')->last();
    $dates = Carbon::now(fiso(Auth::user()->province))->format('d/m/Y');
    if($dateautre == $dates){
    }else{
        $j = new RapportAutreFrais();
        $j->franc = $this->autrefrais_hier($this->franc);
        $j->dollar = $this->autrefrais_hier($this->dollar);
        $j->date_rapport = Carbon::yesterday(fiso(Auth::user()->province));
        $j->jour = $dates;
        $j->annee_rapport = AnneeSco();
        $j->user_id = Auth::user()->id;
        $j->save();
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////
        return view('home',  [
            'fraispayerAujourdhuiEnFranc' => $this->frais_journalier($this->franc),
            'fraispayerAujourdhuiEnDollar' => $this->frais_journalier($this->dollar),
            'AutrefraispayerAujourdhuiEnFranc' => $this->autrefrais_journalier($this->franc),
            'AutrefraispayerAujourdhuiEnDollar' => $this->autrefrais_journalier($this->dollar),
        ],
         $this->Kamata($this->getUser(), $this->id));
    }


}
