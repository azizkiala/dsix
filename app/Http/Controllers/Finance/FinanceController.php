<?php

namespace App\Http\Controllers\Finance;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Frais;
use App\Models\Kumba;
use App\Models\Kelasi;
use App\Models\Depense;
use App\Models\Modalite;
use App\Models\Moyekoli;
use App\Models\Trimestre;
use Nette\Utils\DateTime;
use App\Models\AutreFrais;
use Carbon\CarbonTimeZone;
use App\Models\RapportFrais;
use Illuminate\Http\Request;
use App\Repository\KamataNioso;
use App\Models\RapportAutreFrais;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FinanceController extends KamataNioso
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $r;

    private $auth;
    private $huma = 'Humanité';
    private $prima = 'Primaire';
    private $mat = 'Maternelle';
    private $seco = 'ETB';
    private $sexe_fille = 'F';
    private $sexe = 'M';
    private $cicle = 'Maternelle';
    //private $classe = '4eme';
    private $active = '0;';
    private $premierTri = '1èr Trimestre';
    private $deuxiemeTri = '2ème Trimestre';
    private $troisiemeTri = '3ème Trimestre';
    private $premierTra = '1èr Tranche';
    private $deuxiemeTra = '2ème Tranche';
    private $troisiemeTra = '3ème Tranche';
    private $franc = 'franc';
    private $dollar = 'dollar';


    public function index()
    {
        return view();
    }

    public function finance()
    {
        $kumbas = Kumba::where('user_id', Auth::user()->id)->get();
        return view('Finance.finance', compact('kumbas'), $this->Kamata($this->getUser(), $this->id));
    }

    public function fina_kumba()
    {
        $kumbas= Kumba::where('user_id', Auth::user()->id)->get();
        return view('Finance.kumba', compact(
            'kumbas'
        ), $this->Kamata($this->getUser(), $this->id));
    }
    //-----------------------------autre frais-------------------------------------------------

    public function autre_frais()
    {
        $autres = DB::table('autre_frais')
                    ->join('moyekolis', 'autre_frais.moyekoli_id', 'moyekolis.id')
                    ->where('user_id', Auth::user()->id)->orderBy('autre_frais.id', 'DESC')->get();
        return view('Finance.AutreFrais.journal_autre_frais', compact(
            'autres'
        ), $this->Kamata($this->getUser(), $this->id));
    }
    //---------------------------------fin------------------------------------------------------
    //cette méthode pour l'insertion de mot de passe qui securise la partie de la finance
    public function store_kumba(Request $request)
    {
        if(strlen($request->kumba)==8){
            $kumba= new Kumba();
            $kumba->kumba = $request->input('kumba');
            $kumba->user_id = Auth::user()->id;
            $kumba->save();
            return redirect()->route('modalite_frais');
        }else{
            Session()->flash('message','Votre mot de passe trop faible, vous devez avoir 8 caractères');
            return redirect()->back();
        }
    }
    //cette méthode pour se connecter a la partie de la finance
    public function kumba_connexion(Request $request)
    {
        $kumba = $request->kumba;
        $result = Kumba::where('kumba', $kumba)->where('user_id', Auth::user()->id)->get();
        if(count($result)>0){
            $request->session()->put('kumba_id', $result[0]->id);
            return redirect()->route('modalite_frais');
        }
        else{
            session()->flash('message', 'Votre mot de passe est invalide ');
            return redirect()->route('fina_kumba');
        }
    }

    public function deconnexion($id){

        session()->forget($id);
        return redirect()->route('fina_kumba');
    }

    public function journal_frais(){
        return view('Finance.FraisScolaires.journal_frais', $this->Kamata($this->getUser(), $this->id));
    }



    public function recu_imprime($id){
        return view('Eleve.frais.imp_recu', $this->Kamata($this->getUser(), $id));
    }

    /**
     * journal de caisse
     *
     * @return void
     */
    // cette méthode recupère le frais scolaires payer aujourd'hui
     public function frais_journalier($m){
        return Frais::whereDay('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('d'))
        ->where('user_id', Auth::user()->id)
        ->whereMonth('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->sum($m);
     }

     // cette méthode recupère le frais scolaires payer hier
     public function frais_hier($m){
        return Frais::whereDay('dat_frais', Carbon::yesterday(fiso(Auth::user()->province)))
        ->where('user_id', Auth::user()->id)
        ->whereMonth('dat_frais',Carbon::now(fiso(Auth::user()->province))->format('m'))
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

     // cette méthode recupère les autrefrais payer hier
     public function autrefrais_hier($m){
        return AutreFrais::whereDay('date_paye', Carbon::yesterday(fiso(Auth::user()->province)))
        ->whereMonth('date_paye', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('date_paye', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->sum($m);
     }
     // cette méthode recupère nombre d'élèves payer aujourd'hui
     public function nombreElevePayerAujourdhui($n){
        return Frais::whereDay('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('d'))
        ->where('user_id', Auth::user()->id)
        ->whereMonth('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->whereRaw($n)->DISTINCT('moyekoli_id')->count('id');
     }

     // cette méthode recupère nombre d'élèves payer aujourd'hui
     public function nombreElevePayerHier($n){
        return Frais::whereDay('dat_frais', Carbon::yesterday(fiso(Auth::user()->province)))
        ->where('user_id', Auth::user()->id)
        ->whereMonth('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('dat_frais', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->whereRaw($n)->DISTINCT('moyekoli_id')->count('id');
     }

     // cette méthode recupère nombre d'élèves payer autres frais aujourd'hui
     public function nombreElevePayerAujourdhuiAutre($n){
        return AutreFrais::whereDay('date_paye', Carbon::now(fiso(Auth::user()->province))->format('d'))
        ->whereMonth('date_paye', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('date_paye', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->whereRaw($n)->DISTINCT('moyekoli_id')->count('id');
     }

     // cette méthode recupère nombre d'élèves autres frais payer hier
     public function nombreElevePayerHierAutre($n){
        return AutreFrais::whereDay('date_paye', Carbon::yesterday(fiso(Auth::user()->province)))
        ->whereMonth('date_paye', Carbon::now(fiso(Auth::user()->province))->format('m'))
        ->whereYear('date_paye', Carbon::now(fiso(Auth::user()->province))->format('Y'))
        ->whereRaw($n)->DISTINCT('moyekoli_id')->count('id');
     }
    public function journal_caisse(){
        return view('Finance.JournalCaisse.journal', [
            'fraispayerAujourdhuiEnFranc' => $this->frais_journalier($this->franc),
            'fraispayerHierEnFranc' => $this->frais_hier($this->franc),
            'nombreElevePayerDollar' => $this->nombreElevePayerAujourdhui($this->dollar),
            'nombreElevePayerDollarHier' => $this->nombreElevePayerHier($this->dollar),
            'nombreElevePayerFranc' => $this->nombreElevePayerAujourdhui($this->franc),
            'nombreElevePayerFrancHier' => $this->nombreElevePayerHier($this->franc),
            'fraispayerAujourdhuiEnDollar' => $this->frais_journalier($this->dollar),
            'fraispayerHierEnDollar' => $this->frais_hier($this->dollar),
            // --------------------------------------------------------------------
            'AutrefraispayerAujourdhuiEnFranc' => $this->autrefrais_journalier($this->franc),
            'AutrefraispayerAujourdhuiEnDollar' => $this->autrefrais_journalier($this->dollar),
            'AutrefraispayerHierEnDollar' => $this->autrefrais_hier($this->dollar),
            'AutrefraispayerHierEnFranc' => $this->autrefrais_hier($this->franc),

            'nombreElevePayerHierAutreFranc' => $this->nombreElevePayerHierAutre($this->franc),
            'nombreElevePayerHierAutreDollar' => $this->nombreElevePayerHierAutre($this->dollar),
            'nombreElevePayerAujourdhuiAutreDollar' => $this->nombreElevePayerAujourdhuiAutre($this->dollar),
            'nombreElevePayerAujourdhuiAutreFranc' => $this->nombreElevePayerAujourdhuiAutre($this->franc),
        ], $this->Kamata($this->getUser(), $this->id));

    }

//-------------------------Rapport de frais scolaires rapportFraisScoliares------------------------------
public function rapportFraisScoliares(){
    return view('Finance.FraisScolaires.rapport_frais_scolaire',[
        'datePaye' =>  RapportFrais::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get(),
    ], $this->Kamata($this->getUser(), $this->id));
}


public function rapport_frais_scolaire(){
    $zuaMois = Carbon::now(fiso(Auth::user()->province));
    $sommeF = RapportFrais::where('user_id', Auth::user()->id)->sum('franc');
    $sommeD = RapportFrais::where('user_id', Auth::user()->id)->sum('dollar');

    return view('Finance.FraisScolaires.rapport_frais_scolaire',[
        'datePaye' =>  RapportFrais::where('user_id', Auth::user()->id)->get(),
        'sommeF' => $sommeF,
        'sommeD' => $sommeD,
    ], $this->Kamata($this->getUser(), $this->id));
}
//-------------------------Rapport des autres frais ----------------------------
public function rapportAutreFrais(){

    return view('Finance.AutreFrais.rapport_autre_frais',[
        'datePayes' =>  RapportAutreFrais::where('user_id', Auth::user()->id)->get(),
    ], $this->Kamata($this->getUser(), $this->id));
}
public function rapport_autre_frais(){
    return view('Finance.AutreFrais.rapport_autre_frais',[
        'datePayes' =>  RapportAutreFrais::where('user_id', Auth::user()->id)->get(),
    ], $this->Kamata($this->getUser(), $this->id));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    // cette méthode enregistre les frais scolaires payer
    public function dola_frais(Request $request, $id){
        $uso = Auth::user()->id;
        $use = User::find($uso);
        $moye = Moyekoli::select('id')->where('id', $id)->get();
        $kombos = Moyekoli::all()->where('id', $id);
        $moy = Moyekoli::find($moye);
        $eleveClasse = Kelasi::all()->where('moyekoli_id', $id);
        foreach($eleveClasse as $classe){
            $idclasse = $classe->id;
            $cla = $classe->classe;
            $cy = $classe->cycle;
        }
        foreach($kombos as $kombo){
            $nom = $kombo->nom;
            $post = $kombo->post_nom;
            $prenom = $kombo->prenom;
            $sexe = $kombo->sexe;
        }
        $eleveModalite = Modalite::all()
                          ->where('classe', $cla)
                          ->where('cycles', $cy)
                          ->where('user_id', Auth::user()->id);
        foreach($eleveModalite as $modale){
            $dola = $modale->montant_dollar;
            $fra = $modale->montant_cdf;
            $tri = $modale->trimestre;
            $tra = $modale->tranche;
        }
        $modaleFranc = DB::table('modalites')
                        ->where('classe', $cla)
                        ->where('cycles', $cy)
                        ->where('user_id', Auth::user()->id)
                        ->sum('montant_franc');
        $modaleDollar = DB::table('modalites')
                        ->where('classe', $cla)
                        ->where('cycles', $cy)
                        ->where('user_id', Auth::user()->id)
                        ->sum('montant_dollar');

        //verification de montant dont l'élève doit payé
        if(empty($request->input('franc')) && empty($request->input('dollar'))){
                    Session()->flash('message','Vous devez entrer le montant !');
                    return redirect()->back();
        }
        else{
        if(empty($request->input('tranche')) && empty($request->input('trimestre'))){
                    Session()->flash('message','Vous devez preciser le tranche ou le trimestre !');
                    return redirect()->back();
        }
        else{
            if($request->input('dollar') > $modaleDollar OR $request->input('franc') > $modaleFranc){
                Session()->flash('message','Montant payé est plus élevé que le montant fixé !');
                return redirect()->back();
            }
            else{
            $fina = new Frais();
            $fina->nom = $nom;
            $fina->post_nom = $post;
            $fina->prenom = $prenom;
            $fina->trimestre = $request->input('trimestre');
            $fina->franc = $request->input('franc');
            $fina->dollar = $request->input('dollar');
            $fina->annee_frais = $request->input('annee');
            $fina->cycle = $cy;
            $fina->moyekoli_id = $id;
            $fina->classe = $cla;
            $fina->dat_frais = Carbon::now(fiso(Auth::user()->province));
            $fina->user_id = Auth::user()->id;
            $fina->save();

            Session()->flash('messages','Votre Paiement a été fait');
            return redirect()->back();
        }
      }
    }
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_recu($id)
    {
        return view('Eleve.frais.edit_recu', $this->Kamata($this->getUser(), $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    function all_recu()
    {
        $recus = Frais::all();
        return response([
            'recus' => $recus,
        ]);
    }

    public function update_recu(Request $request, $num_recu)
    {
        DB::table('frais')->where('num_recu', $num_recu)->update([
            'franc'=> $request->input('franc'),
            'dollar'=> $request->input('dollar'),
            'trimestre' => $request->input('trimestre'),
            'annee_frais' => $request->input('annee'),
        ]);
        Session()->flash('messages','Le reçu est modifié');
        return redirect()->back();

    }

    // les méthodes delete reçus

    public function delete_recu($id){
        DB::table('frais')->where('id', $id)->delete();
        Session()->flash('messages','La soupression est éffectuée');
        return redirect()->back();
    }
    ////////////////////////////// TRIMESTRE /////////////////////////////////////////////
    public function getFraisScolaireParTrimestre($tri){
        return   Trimestre::all()->where('user_id', Auth::user()->id)->where('trimestre', $tri);
    }

     public function frais_premier_trimestre(){
        return  view('Finance.FraisScolaires.frais_premier_trimestre', [
            'fraisPremier' => $this->getFraisScolaireParTrimestre($this->premierTri),
       ], $this->Kamata($this->getUser(), $this->id));
     }
     public function frais_deuxieme_trimestre(){
        return  view('Finance.FraisScolaires.frais_deuxieme_trimestre', [
            'fraisPremier' => $this->getFraisScolaireParTrimestre($this->deuxiemeTri),
       ], $this->Kamata($this->getUser(), $this->id));
     }
     public function frais_troisieme_trimestre(){
        return  view('Finance.FraisScolaires.frais_troisieme_trimestre', [
            'fraisPremier' => $this->getFraisScolaireParTrimestre($this->troisiemeTri),
        ], $this->Kamata($this->getUser(), $this->id));
     }

     public function frais_trimestre(){
        return  view('Finance.FraisScolaires.frais_trimestre', [
            'fraisTroisieme' => $this->getFraisScolaireParTrimestre($this->troisiemeTri),
            'fraisDeuxieme' => $this->getFraisScolaireParTrimestre($this->deuxiemeTri),
            'fraisPremier' => $this->getFraisScolaireParTrimestre($this->premierTri),
        ], $this->Kamata($this->getUser(), $this->id));
     }
    ////////////////////////////// /////////////////////////////////////////////
    ////////////////////////////// LES INVOICE /////////////////////////////////////////////

    public function invoice_rapport_frais_scolaire(Request $request){
        $mois = $request->input('mois');
        $annee = $request->input('annee');
        $datePaye = RapportFrais::where('user_id', Auth::user()->id)->orderBy('id','DESC')->get();
        $soD = RapportFrais::where('user_id', Auth::user()->id)->sum('dollar');
        $soF = RapportFrais::where('user_id', Auth::user()->id)->sum('franc');
        $datePayes = RapportFrais::where('user_id', Auth::user()->id)->whereMonth('created_at', $mois)->where('annee_rapport', $annee)->orderBy('id','DESC')->get();
        $somDollar = RapportFrais::where('user_id', Auth::user()->id)->whereMonth('created_at', $mois)->where('annee_rapport', $annee)->sum('dollar');
        $somFranc = RapportFrais::where('user_id', Auth::user()->id)->whereMonth('created_at', $mois)->where('annee_rapport', $annee)->sum('franc');
        return view('Finance.invoice.invoice_rapport_frais_scolaire',[
            'datePaye' => $mois == '' ? $datePaye:$datePayes,
            'mois' => $mois,
            'annee' => $annee,
            'somDollar' => $mois ==''?$soD:$somDollar,
            'somFranc' => $mois == ''?$soF:$somFranc,
        ], $this->Kamata($this->getUser(), $this->id));
    }
    /////////////////////////////////fin///////////////////////////////////////////////////

    //-----------------------------------------dépense-------------------------------------

    public function depense(){
        return view('Finance.Depense.depense_principale', $this->Kamata($this->getUser(), $this->id));
    }
    public function JournalierDepense(){
        $jour = Carbon::now(fiso(Auth::user()->province));
        $depenses = Depense::where('user_id', Auth::user()->id)->whereDay('dat_depense', $jour)->get();
        $depensesJournaliereEnDollar = Depense::where('user_id', Auth::user()->id)->whereDay('dat_depense', $jour)->sum('dollar');
        $depensesJournaliereEnFranc = Depense::where('user_id', Auth::user()->id)->whereDay('dat_depense', $jour)->sum('franc');
        return view('Finance.Depense.depense', [
            'depenses'=> $depenses,
            'depensesJournaliereEnDollar' => $depensesJournaliereEnDollar,
            'depensesJournaliereEnFranc' => $depensesJournaliereEnFranc,
        ], $this->Kamata($this->getUser(), $this->id));
    }
    public function tableaudepense(){
        $depenses = Depense::where('user_id', Auth::user()->id)->get();
        return view('Finance.Depense.tableaudepense',[
            'depenses' => $depenses,
        ], $this->Kamata($this->getUser(), $this->id));
    }
    public function AnnuelleDepense(){
        return view('Finance.Depense.depense_annuelle', $this->Kamata($this->getUser(), $this->id));
    }

    public function store_depense(Request $request){
        //verification de montant dont l'élève doit payé
        if(empty($request->input('franc')) && empty($request->input('dollar'))){
            Session()->flash('message',"Vous n'avez pas préciser le montant");
            return redirect()->back();
        }
        else{
        if(!empty($request->input('franc')) && !empty($request->input('dollar'))){
            Session()->flash('message','Vous ne pouvez pas utiliser le deux montants');
            return redirect()->back();
        }
        else{
            $fina = new Depense();
            $fina->nom = Auth::user()->name;
            $fina->franc = $request->input('franc');
            $fina->dollar = $request->input('dollar');
            $fina->description = $request->input('description');
            $fina->dat_depense = Carbon::now(fiso(Auth::user()->province));
            $fina->user_id = Auth::user()->id;
            $fina->save();
            Session()->flash('messages','Effectué');
            return redirect()->back();
        }
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('modalites')->where('id', $id)->delete();
        Session()->flash('messages','La soupression est éffectuée');
        return redirect()->back();
    }
}
