@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection























<div class="row">

    <form method="get" action="{{route('invoice_rapport_frais_scolaire')}}">
        @csrf
        <div class="row">
            <div class="col-md-2">
                <a href="{{route('invoice_rapport_frais_scolaire', Auth::user()->ecole)}}"
                    class="bg-light-blue btn text-blue weight-400 font-20"><i
                        class="icon-copy dw dw-print"></i> Afficher pour tous le mois</a>
            </div>
                <div class="col-md-3">
                <div class="form-group">
                    <select class="custom-select2 form-control" name="mois"
                        style="width: 100%; height: 38px">
                        <optgroup label="Mois">
                            <option value="01">Janvier</option>
                            <option value="02">Février</option>
                            <option value="03">Mars</option>
                            <option value="04">Avril</option>
                            <option value="05">Mai</option>
                            <option value="06">Juin</option>
                            <option value="07">Juillet</option>
                            <option value="08">Août</option>
                            <option value="09">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">

                    <input type="text" name="annee" class="form-control" placeholder="Année scolaire">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <button type="submit" class="form-control btn-primary text-white">Afficher</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
      <!-- Search field -->
      <div class="card bg-slate">
          <div class="card-header bg-slate text-center ">
           <h5 class="card-title bg-slate-400  text-center"><i class="icon-stack3  mr-2 m-2 icon-2x   p-1 mb-3 mt-1 mr-2"></i> {{strtoupper($cicles)}}</h5>
          </div>
        <div class="card-body">
          @if($EleveParCycle->isEmpty())
          <div class="text-center mb-3 py-2">
            <span class="text-muted d-block">
              <i class="icon-notification2 mr-2"></i> il n'y a pas d'élèves dans ce cycle <a href="{{route('ajout_eleve')}}">Clique-ici pour ajouter élève</a>
            </span>
          </div>
          @endif

          <form action="#">
            <div class="input-group mb-3">
              <div class="form-group-feedback form-group-feedback-right">
                <input type="text" class="form-control form-control-lg" placeholder="Rechercher dans : {{strtoupper($cicles)}}">
                <div class="form-control-feedback form-control-feedback-lg">
                   <button style="background: non;" type="submit" class="btn btn-link"><i class="icon-search4 text-muted"></i></button>
                </div>
              </div>
            </div>

            <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
              <ul class="list-inline list-inline-condensed mb-0">
                <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-calendar mr-2"></i> {{AnneeSco()}}</a></li>
                 <li class="list-inline-item"><a href="{{route('cycle_principal')}}" class="btn btn-link text-default"><i class="icon-reset mr-2"></i> Retour</a></li>
              </ul>

              <ul class="list-inline mb-0 ml-md-auto">
                <li class="list-inline-item dropdown">
                  <a href="#" class="btn btn-link text-default dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-database mr-2"></i>
                    Archive
                  </a>

                  <div class="dropdown-menu">
                    @foreach($ArchiveCycle as $archive)
                    <a href="#" class="dropdown-item"><i class="icon-database"></i>{{$archive->annee_scolaire}}</a>
                    @endforeach
                  </div>
                </li>
              </ul>
            </div>
          </form>
        </div>
      </div>


















<div class="content-wrapper mt-4">
    <div class="page-header ">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-stack3 mr-2 icon-2x text-muted"></i> <span class="font-weight-semibold">{{Route::is('cycle_principal') ? 'Cycles':"Cycle / $cicles"}}</span></h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    @if(!Route::is('cycle_principal'))
                      <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                        <div class="btn-group">

                            <button type="button" class="btn bg-pink-300 dropdown-toggle" data-toggle="dropdown"> <i class="icon-calendar5 "></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Accès rapide</div>
                         @forelse($cycles as $cycle)
                        <a href="{{route('cycle', $cycle->slug)}}" class="dropdown-item"><i class="icon-stack3"></i> {{$cycle->cycle}}</a>
                        @empty
                        <a  class="dropdown-item"><i class="icon-cash3"></i> Aucun cycle</a>
                        @endforelse
                        <a href="{{route('cycle_principal')}}" class="dropdown-item"><i class="icon-reset"></i> Retour</a>
                        </div>
                        </div>
                    </div>
                    @endif
                </div>
           @if(!Route::is('cycle_principal'))
          <div class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
              <i class="icon-menu7 mr-2"></i>
              Voir plus d'option
            </button>
          </div>

          <div class="navbar-collapse collapse" id="navbar-second">
            <ul class="nav navbar-nav">
              <li class="nav-item">
                <a href="{{route('cycle', $cicles)}}" class="navbar-nav-link {{col_active('cycle')}}" >
                  <i class="icon-display mr-2"></i>
                  {{strtoupper($cicles)}}
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('eleve_actif', $cicles)}}" class="navbar-nav-link {{col_active('eleve_actif')}}" >
                  <i class="icon-users2 mr-2"></i>
                  Elèves fictif
                  <span class="badge badge-pill bg-indigo position-static ml-auto ml-lg-2">{{$EleveParCycle->count()}}</span>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('eleve_abandon', $cicles)}}" class="navbar-nav-link {{col_active('eleve_abandon')}}">
                  <i class="icon-user-cancel mr-2"></i>
                   Elèves abandon
                  <span class="badge badge-pill bg-indigo position-static ml-auto ml-lg-2">{{$EleveAbandon->count()}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('classe', $cicles)}}" class="navbar-nav-link {{col_active('classe')}}">
                  <i class="icon-collaboration mr-2"></i>
                  Classes
                </a>
              </li>
            </ul>

            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a data-toggle="modal" data-target="#modal_default" class="navbar-nav-link">
                  <i class="icon-printer icon-1x mr-2 text-slate"></i>
                </a>
              </li>

            </ul>
          </div>
        </div>
        @endif
    </div>
            <!-- Page header -->

            <!-- /page header -->






























<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
      <!-- Search field -->


     <div class="navbar navbar-expand-lg navbar-light">
        <div class="text-center d-lg-none w-100">
          <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
            <i class="icon-menu7 mr-2"></i>
            Voir plus d'options
          </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-second">
          <ul class="nav navbar-nav">
                <li class="nav-item">
              <a class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="icon-stack mr-2"></i> Trimestre
                <span class="d-lg-none ml-2"></span>
              </a>

              <div class="dropdown-menu dropdown-menu">
      <a href="" class="dropdown-item"><i class="icon-stack"></i> 1<sup class="mr-2">ère</sup> Trimestre</a>
      <a href="" class="dropdown-item"><i class="icon-stack"></i> 2<sup class="mr-2">ème</sup> Trimestre</a>
      <a href="" class="dropdown-item"><i class="icon-stack"></i> 3<sup class="mr-2">ème</sup> Trimestre</a>
              </div>
            </li>

            <li class="nav-item">
              <a href="{{route('journal_frais')}}" class="navbar-nav-link {{col_active('journal_frais')}}" >
                <i class="icon-clipboard3 mr-2"></i>
                Journal de paiement
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('rapport_frais_scolaire')}}" class="navbar-nav-link {{col_active('rapport_frais_scolaire')}}">
                <i class="icon-stats-growth mr-2"></i>
                Rapport journalier
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="navbar-nav-link">
                <i class="icon-stats-growth mr-2"></i>
                Statistiques
              </a>
            </li>
          </ul>

          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="icon-list3 mr-2"></i> Modalités de paiement
                <span class="d-lg-none ml-2"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right">
                <a href="{{route('modalité_frais')}}" class="dropdown-item bg-orange"><i class="icon-file-download "></i> Fixé le frais</a>
                @forelse($cycles as $cycle)
                <a href="{{route('modalite_fixe', $cycle->slug)}}" class="dropdown-item"><i class="icon-stack-text"></i> {{$cycle->cycle}}</a>
                @empty
                <a class="dropdown-item"><i class="icon-notification2"></i> Aucun cycle</a>
                @endforelse
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- /search field -->













































<!-- Layout container -->
<div class="mt-2">
    @foreach($VoirEleve as $eleve)
 <form action="{{route('frais_eleve', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" method="get">
 @csrf
   @endforeach
   <div class="input-group mb-3">
     <div class="">
       <select type="text" name="moda" class="form-control">
         @foreach($AnneeModalite as $moda)
         <option value="{{$moda->annee_modalite}}">
         {{$moda->annee_modalite}}</option>
         @endforeach
       </select>
       <div class="form-control-feedback form-control-feedback-lg">
          <button style="background: non;" type="submit" class="btn btn-light"><i class="icon-search4 text-muted"></i></button>
       </div>
     </div>
   </div>
       </form>
     </div>























@include('Eleve.tete')
<div class="row">
    @foreach($VoirElevePhoto as $eleve)
    <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box card-header height-100-p">
            <div class="profile-photo">
                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i
                        class="fa fa-pencil"></i></a>
                @if(!$eleve->photo_eleve == '')
                <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" style="width: 160px; height: 160px"
                    class="avatar-photo img-fluid" alt="">
                @else
                <img src="/img/user.png" class="avatar-photo" alt="">
                @endif
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-5">
                                <div class="img-container">
                                    @if(!$eleve->photo_eleve == '')
                                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" id="image" alt="">
                                    @else
                                    <img src="/img/user.png" id="image" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a><p class="btn btn-primary">Modifier</p></a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Fermer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center h5 mb-0">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h5>
            <p class="text-center text-muted font-14">
                {{$eleve->code_eleve}}
            </p>
            <div class="profile-info">
                <h5 class="mb-20 h5 text-blue">À propos de {{$eleve->nom}}</h5>
                <ul>
                    <li>
                        <span>Classe:</span>
                        {{$eleve->classe}} {{$eleve->cycle}}
                    </li>
                    <li>
                        <span>Option:</span>
                        {{$eleve->option}}
                    </li>
                    <li>
                        <span>Local:</span>
                        {{$eleve->local}}
                    </li>
                    <li>
                        <span>{{$eleve->sexe == 'M'?'Né à':'Née à'}}:</span>
                        {{$eleve->lieu}}<br />
                        {{(new DateTime($eleve->date_ne))->format('d/m/Y')}}
                    </li>
                    <li>
                        <span>Adresse:</span>
                        {{$eleve->adresse}}<br />
                    </li>
                    <li>
                        <span>Téléphone:</span>
                        {{$eleve->phone}}<br />
                    </li>
                </ul>
            </div>

            <div class="profile-social">
                <h5 class="mb-20 h5 text-blue">Statut</h5>
                <div class="clearfix">

                    <a href="#" class="btn  text-white"
                        data-bgcolor="{{$eleve->active == 0?'#265ed7 ':'#e95959'}}">

                        {{$eleve->active ==
                        0?'active':'désactive'}}</a>


                </div>
            </div>
            @endforeach
        </div>
    </div>




<div class="col-md-8">
    @include('Eleve.frais.annee_frais')
    <!-- Simple text stats with icons -->
    <div class="card mt-3">
      <div class="card-header bg-transparent header-elements-inline">
          <span class="text-uppercase font-size-sm font-weight-semibold">Frais scolaires / <b class="mr-2">{{$moda}}</b></span>
        </div>
        @foreach($FraisFixePourEleve as $modalite)
        @if(! $modalite->montant_franc == null)
        @if($modalite->montant_franc == $FraisPremierTPayeParEleveEnFranc)
        @if($modalite->montant_franc == $FraisDeuxiemeTPayeParEleveEnFranc)
        @if($modalite->montant_franc == $FraisTroisiemeTPayeParEleveEnFranc)
        <div class="card-body border-top-primary">
        <div class="text-center">
        <p class="mb-3 text-muted">Frais scolaires <code>Totalité</code> </p>
        </div>
        <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%">
          <span>100% totalité de paiement</span>
        </div>
        </div>
        </div>
        @else
        @include('Finance.FraisScolaires.TTrimestre')
        @endif
        @else
        @include('Finance.FraisScolaires.DTrimestre')
        @endif
        @else
        @include('Finance.FraisScolaires.PTrimestre')
        @endif
        @else
        @if($modalite->montant_dollar == $FraisPremierTPayeParEleveEnDollar)
        @if($modalite->montant_dollar == $FraisDeuxiemeTPayeParEleveEnDollar)
        @if($modalite->montant_dollar == $FraisTroisiemeTPayeParEleveEnDollar)
        <div class="card-body border-top-primary">
        <div class="text-center">
        <p class="mb-3 text-muted">Frais scolaires <code>Totalité</code> </p>
        </div>
        <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%">
          <span>100% totalité de paiement</span>
        </div>
        </div>
        </div>
        @else
        @include('Finance.FraisScolaires.TTrimestre')
        @endif
        @else
        @include('Finance.FraisScolaires.DTrimestre')
        @endif
        @else
        @include('Finance.FraisScolaires.PTrimestre')
        @endif
        @endif
        @endforeach
    </div>
  </div>
</div>






















































































































<div class="content-wrapper">
    @foreach($VoirElevePhoto as $eleve)
    <div class="">
            <div class="card-header bg-slate-700 header-elements-inline">
             <h5 class="card-title">
                 @if(!$eleve->photo_eleve == '')
                  <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
                  @else
                  <img src="/img/user.png" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
                @endif
                {{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h5>
            </div>
            </div>
          <!-- Page header -->
          <div class="profile-cover">
            <div class="profile-cover-img bg-slate" style="background-image: url(./img/bg.png); background-position:"></div>
            <div class="media align-items-center text-center text-md-left flex-column flex-md-row m-0">
              <div class="mr-md-3 mb-2 mb-md-0">
                <a  class="profile-thumb">
                @if(!$eleve->photo_eleve == '')
                  <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="border-white rounded-circle" width="48" height="48" alt="">
                  @else
                 <img src="/img/user.png" class="border-white rounded-circle" width="48" height="48" alt="">
                @endif
                 </a>
              </div>
              <div class="media-body text-white">
                <h1 class="mb-0">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h1>
                <span class="d-block">{{$eleve->code_eleve}}</span>
              </div>
              <div class="ml-md-3 mt-2 mt-md-0">
                <ul class="list-inline list-inline-condensed mb-0">
                  <li class="list-inline-item"><a class="btn bg-slate border-transparent"><i class="{{$eleve->active == 0 ?'icon-unlocked2':'icon-lock'}}"></i> </a></li>
                </ul>
              </div>
            </div>
          </div>
           @endforeach
          <!-- /cover area -->
          <div class="navbar navbar-expand-lg navbar-light bg-light-300">
            <div class="text-center d-lg-none w-100">
              <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
                <i class="icon-menu7 mr-2"></i>
                Voir plus
              </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-second">
              <ul class="nav navbar-nav">
                @foreach($VoirElevePhoto as $eleve)
                <li class="nav-item">
                  <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('eleve_show')}}">
                    <i class="icon-display mr-2"></i>
                    {{ucfirst($eleve->nom)}}
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('eleve_info',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('eleve_info')}}">
                    <i class="icon-user mr-2"></i>
                    Information de l'élève
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#notes" class="navbar-nav-link" >
                    <i class="icon-folder-download mr-2"></i>
                     Dossier de l'élève
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('eleve_photo',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('eleve_photo')}}" >
                    <i class="icon-images2 mr-2"></i>
                     Profil de l'élève
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('frais_eleve', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('frais_eleve')}}">
                    <i class="icon-bookmark4 mr-2"></i>
                    Paiement Trimestriel
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="{{route('eleve_recu',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('eleve_recu')}}" >
                    <i class="icon-clipboard3 mr-2"></i>
                     Preuve de paiement FS
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="{{route('autreFrais',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('autreFrais')}}" >
                    <i class="icon-cash2 mr-2"></i>
                     Autres frais
                  </a>
                </li>
              </ul>
              <ul class="nav navbar-nav ml-lg-auto">
                <li class="nav-item">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-gear"></i>
                  <span class="d-lg-none ml-2">Parametres</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route($eleve->active ==  0 ?'desactive':'active',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="{{$eleve->active == 0 ?'icon-lock':'icon-unlocked2'}}"></i> {{$eleve->active == 0 ?'Bloqué':'Débloqué'}}</a>
                    <a data-id="{{$eleve->id}}" data-name="{{$eleve->nom}}" data-image="{{$eleve->photo_eleve}}" class="dropdown-item eleve"><i class="icon-bin"></i> Supprimer</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('deplace_eleve',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="icon-clippy"></i> Transférer à une école</a>
                  </div>
                </li>
              </ul>
              @endforeach
            </div>
          </div>
  <!-- /profile navigation -->
  <div class="content">
  <div class="d-flex align-items-start flex-column flex-md-row">
  <div class="tab-content w-100 order-2 order-md-1">
  <div class="tab-pane fade active show" id="activity">
  <div class="">












































































<div class="card">
    <div class="table-responsive">
    @if(!$EleveQuitter->isEmpty())
      <table class="table">
        <thead class="table-light">
          <tr>
            <th class="text-truncate">Noms</th>
            <th class="text-truncate">Classe</th>
            <th class="text-truncate">Photo</th>
            <th class="text-truncate">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse($EleveQuitter as $eleve)
          <tr>
            <td>
              <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                        <div class="avatar-initial {{$eleve->nom[0] == 'K'?'bg-label-success':'bg-label-danger'}} rounded-circle">{{$eleve->nom[0]}}</div>
                      </div>
                <div>
                    <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                  <h6 class="mb-0 text-truncate">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h6>
                  <small class="text-truncate">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d', strtotime($eleve->created_at))}} {{AfficheMois(date('m', strtotime($eleve->created_at)))}} {{date('Y', strtotime($eleve->created_at))}} </small>
                    </a>
                </div>

              </div>
            </td>
            <td class="text-truncate">{{$eleve->classe}} {{$eleve->cycle}}</td>
            <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                      @if(!$eleve->photo_eleve == '')
                      <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}"  class="rounded-circle" alt="">
                          @else
                          <img src="/img/user.png" class="rounded-circle"  alt="">
                      @endif
                    </a>
                </div>
                </div>
              </td>
            <td><span
                class="btn btn-outline-secondary btn-icon"> <i class="mdi mdi-reset-outline mdi-24px"></i></span></td>
          </tr>

          @endforeach
        </tbody>
      </table>
      @else
    <div class=" text-center mt-3 text-muted">
    <h6 class="card-title">
        <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun élève</h6>
    </div>
    @endif
    </div>
  </div>


    <!-- Content area -->
    <div class="card">
        <div class="table-responsive">
        @if(!$Eleves->isEmpty())
          <table class="table">
            <thead class="table-light">
              <tr>
                <th class="text-truncate">Noms</th>
                <th class="text-truncate">Classe</th>
                <th class="text-truncate">Photo</th>
                <th class="text-truncate">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($Eleves as $eleve)
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                            <div class="avatar me-3">
                            <div class="avatar-initial {{$eleve->nom[0] == 'K'?'bg-label-success':'bg-label-danger'}} rounded-circle">{{$eleve->nom[0]}}</div>
                          </div>
                    <div>
                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                      <h6 class="mb-0 text-truncate">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h6>
                      <small class="text-truncate">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d', strtotime($eleve->created_at))}} {{AfficheMois(date('m', strtotime($eleve->created_at)))}} {{date('Y', strtotime($eleve->created_at))}} </small>
                        </a>
                    </div>

                  </div>
                </td>
                <td class="text-truncate">{{$eleve->classe}} {{$eleve->cycle}}</td>
                <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                          @if(!$eleve->photo_eleve == '')
                          <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}"  class="rounded-circle" alt="">
                              @else
                              <img src="/img/user.png" class="rounded-circle"  alt="">
                          @endif
                        </a>
                    </div>
                    </div>
                  </td>
                <td><span
                    class="btn btn-outline-secondary btn-icon"> <i class="mdi mdi-delete-outline mdi-24px"></i></span></td>
              </tr>

              @endforeach
            </tbody>
          </table>
          @else
     <div class=" text-center mt-3 text-muted">
       <h6 class="card-title">
         <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun élève</h6>
     </div>
     @endif
        </div>
      </div>
      <!-- Orders history (datatable) -->



<div class="card mb-4">
    <h4 class="card-header">Formulaire</h4>
    <!-- Account -->
    <div class="card-body pt-2 mt-1">
        <form   action="{{route('store_eleve')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mt-2 gy-4">
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" type="text"  name="nom" placeholder="Nom"
                            autofocus />
                        <label for="nom">Nom</label>
                    </div>
                    @error('nom')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" type="text" name="post" placeholder="Post-nom" />
                        <label for="post">Post-nom</label>
                    </div>
                    @error('post')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" type="text" name="prenom"
                            placeholder="Prénom" />
                        <label for="prenom">Prénom</label>
                    </div>
                    @error('prenom')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <input type="date" class="form-control"  name="dat"
                            placeholder="Date de naissance" />
                        <label for="dat">Date de naissance</label>
                    </div>
                    @error('dat')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <select  name="lieu" class="select2 form-select">
                            <option value="">Select</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Matadi">Matadi</option>
                            <option value="Lubumbashi">Lubumbashi</option>
                            <option value="Maniema">Maniema</option>
                            <option value="Kisantu">Kisantu</option>
                            <option value="Luwozi">Luwozi</option>
                            <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                            <option value="Kolwezi">Kolwezi</option>
                            <option value="Goma">Goma</option>
                            <option value="Mbuji-mayi">Mbuji-mayi</option>
                            <option value="Kenge">Kenge</option>
                            <option value="Kikwiti">Kikwiti</option>
                            <option value="Nord-Kivu">Nord-Kivu</option>
                            <option value="Sud-Kivu">Sud-Kivu</option>
                            <option value="Boma">Boma</option>
                            <option value="Popo">Popo</option>
                            <option value="Muanda">Muanda</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kinshasa">Kinshasa</option>
                        </select>
                        <label for="lieu">Lieu de naissance</label>
                    </div>
                    @error('lieu')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <input type="text" class="form-control"  name="adresse"
                            placeholder="Ex: mayo n° 23, Q/Mbandaka, C/Kinshasa" />
                        <label for="adresse">Adresse complète</label>
                    </div>
                    @error('adresse')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <select  name="cycle" class="select2 form-select">
                            <option value="">Selectionner</option>
                            @foreach($cycles as $cycle)
                            <option value="{{$cycle->cycle}}">{{$cycle->cycle}}</option>
                            @endforeach
                        </select>
                        <label for="cycle">Cycle</label>
                    </div>
                    @error('cycle')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <select  name="classe" class="select2 form-select">
                            <option value="">Selectionner</option>
                            <option value="1èr">1èr</option>
                            <option value="2ème">2ème</option>
                            <option value="3ème">3ème</option>
                            <option value="4ème">4ème</option>
                            <option value="5ème">5ème</option>
                            <option value="6ème">6ème</option>
                            <option value="7ème">7ème</option>
                            <option value="8ème">8ème</option>
                        </select>
                        <label for="classe">Niveau de classe</label>
                    </div>
                    @error('classe')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <select  name="option" class="select2 form-select">
                            <option value="">Selectionner</option>
                            <option value="Aucune">Aucune</option>
                            @foreach($options as $option)
                            <option value="{{$option->option}}">{{$option->option}}</option>
                            @endforeach
                        </select>
                        <label for="option">Option</label>
                    </div>
                    @error('option')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <select name="local" class="select2 form-select">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                        <label for="local">Local</label>
                    </div>
                    @error('local')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <input type="number" class="form-control"  name="tel" placeholder="Téléphone" />
                        <label for="tel">Téléphone</label>
                    </div>
                    @error('tel')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-floating form-floating-outline">
                        <small class="text-light fw-medium d-block">Sexe:</small>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="sexe"
                                value="M" />
                            <label class="form-check-label" for="sexe">Garçon</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe"
                                value="F" />
                            <label class="form-check-label" for="sexe">Fille</label>
                        </div>
                    </div>
                    @error('sexe')
                    <span class="text-left text-muted">
                        <span style="color: darkred;">
                            <m>{{ $message }}</m>
                        </span>
                    </span>
                    @enderror
                </div>

                <div class="form-floating form-floating-outline mb-4">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{asset('/img/user.png')}}" alt="user-avatar"
                            class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-outline-primary me-2 mb-3" tabindex="0">
                                <span class="d-none d-sm-block">importer photo</span>
                                <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                <input type="file" id="upload" name="photo_eleve" class="account-file-input"
                                    hidden accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
                                <i class="mdi mdi-reload d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>
                            <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>

                                @error('photo_eleve')
                                <span class="text-left text-muted">
                                    <span style="color: darkred;">
                                        <m>{{ $message }}</m>
                                    </span>
                                </span>
                                @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary me-2">Confirmer</button>
                <button type="reset" class="btn btn-outline-secondary">Effacer tous</button>
            </div>
        </form>
    </div>
    <!-- /Account -->
</div>




















<div class="layout-page">
    <!-- Navbar -->

    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                    <input type="text" class="form-control border-0 shadow-none bg-body" placeholder="Recherche..."
                        aria-label="Search..." />
                </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                    <a class="github-button" href="">{{Auth::user()->name}}</a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                        data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <div class="avatar avatar-sm me-3">
                                @if(! $photoAdmin->isEmpty())
                                @foreach($photoAdmin as $user)
                                <img src="/Dossier/images_admin/{{$user->photo_user}}" class="rounded-circle" alt="">
                                @endforeach
                                @else
                                <img src="{{asset('img/user.png')}}" class="rounded-circle" alt="">
                                @endif
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                        <li>
                            <a class="dropdown-item pb-2 mb-1" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2 pe-1">
                                        <div class="avatar avatar-online">
                                            <div class="avatar avatar-sm me-3">
                                                @if(! $photoAdmin->isEmpty())
                                                @foreach($photoAdmin as $user)
                                                <img src="/Dossier/images_admin/{{$user->photo_user}}"
                                                    class="rounded-circle" alt="">
                                                @endforeach
                                                @else
                                                <img src="{{asset('img/user.png')}}" class="rounded-circle" alt="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">{{Auth::user()->name}}</h6>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider my-1"></div>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="{{route($photoAdmin->isEmpty() ?  'info_admin':'admin_show')}}">
                                <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                                <span class="align-middle">Profile</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{route($photoAdmin->isEmpty() ?  'info_ecole':'info_ecole_show')}}">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                                    <span class="flex-grow-1 align-middle ms-1">Configuration compte</span>

                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider my-1"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-power me-1 mdi-20px"></i>
                                <span class="align-middle">Se déconnecter</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>


    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->

          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo me-1">
                  <span style="color: var(--bs-primary)">
                    <img width="75" src="{{asset('/img/ds.png')}}"/>
                  </span>
                </span>

              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
              </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <!-- Dashboards -->
              <li class="menu-item ">
                <a href="{{route('home')}}" class="menu-link ">
                  <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                  <div>Accueil</div>
                </a>
              </li>

              <!-- Layouts -->
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                  <div data-i18n="Layouts">Cycles</div>
                  <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">{{ $cycles->count() }}</div>
                </a>
                <ul class="menu-sub">
                  @forelse($cycles as $cycle)
                  <li class="menu-item">
                    <a href="{{ route('cycle', $cycle->slug) }}" class="menu-link">
                      <div data-i18n="Without menu">{{ $cycle->cycle }}</div>

                    </a>
                  </li>
                  @empty
                  <li class="menu-item"><a  class="menu-link"> Aucun cycle</a></li>
                  @endforelse
                </ul>
              </li>

              <!-- Front Pages -->
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                  <div data-i18n="Front Pages">Option</div>
                  <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">{{ $options->count() }}</div>
                </a>
                <ul class="menu-sub">
                    @forelse($options as $option)
                    <li class="menu-item">
                      <a href="{{ route('options', $option->option) }}" class="menu-link">
                        <div data-i18n="Without menu">{{ $option->option }}</div>
                      </a>
                    </li>
                    @empty
                    <li class="menu-item"><a  class="menu-link"> Aucune option</a></li>
                    @endforelse
                </ul>
              </li>

              <li class="menu-header fw-medium mt-4">
                <span class="menu-header-text">Ges</span>
              </li>
              <!-- Apps -->

              <!-- Pages -->
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                  <div data-i18n="Account Settings">Elèves</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('ajout_eleve')}}" class="menu-link">
                      <div data-i18n="Account">Ajouter</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('eleve_liste')}}" class="menu-link">
                      <div data-i18n="Notifications">Répertoire</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('eleve_quitter')}}" class="menu-link">
                      <div data-i18n="Connections">Abandon</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
                  <div data-i18n="Authentications">Personnel</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('ajout_personnel')}}" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Ajouter</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('personnel')}}" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Répertoire</div>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Components -->
              <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Finance</span></li>
              <!-- User interface -->
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
                  <div data-i18n="User interface">Finance</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('journal_frais')}}" class="menu-link">
                      <div data-i18n="Accordion">Frais scolaires</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('autre_frais')}}" class="menu-link">
                      <div data-i18n="Alerts">Autres frais</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('journal_caisse')}}"  class="menu-link">
                      <div data-i18n="Badges">Journal de caisse</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="ui-buttons.html" class="menu-link">
                      <div data-i18n="Buttons">Dépense journalier</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="ui-carousel.html" class="menu-link">
                      <div data-i18n="Carousel">Prévision budgetaire</div>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Misc -->
              <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Arch</span></li>
              <li class="menu-item">
                <a
                  href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues"
                  target="_blank"
                  class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
                  <div data-i18n="Support">Infos</div>
                </a>
              </li>
              <li class="menu-item">
                <a
                  href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/"
                  target="_blank"
                  class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                  <div data-i18n="Documentation">Document</div>
                </a>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->



          <!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <!-- Congratulations card -->
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-1">{{Auth::user()->ecole}}</h4>
                        <p class="pb-0">{{Auth::user()->province}}</p>
                        <h4 class="text-primary mb-1">{{date('d')}} {{AfficheMois(date('m'))}} {{date('Y')}}</h4>
                        <p class="mb-2 pb-1">Aujourd'hui</p>
                        <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}"
                            class="btn btn-sm btn-primary">Voir plus</a>
                    </div>
                    <img src="{{asset('r/assets/img/icons/misc/triangle-light.png')}}"
                        class="scaleX-n1-rtl position-absolute bottom-0 end-0" width="166" alt="triangle background"
                        data-app-light-img="icons/misc/triangle-light.png"
                        data-app-dark-img="icons/misc/triangle-dark.png" />
                    <img src="{{asset('/img/2.png')}}"
                        class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2" width="83"
                        alt="view sales" />
                </div>
            </div>
            <!--/ Congratulations card -->

            <!-- Transactions -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Transactions</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> ðŸ˜Ž this month</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-primary rounded shadow">
                                            <a href="{{route($options->isEmpty() ?  'option_ecole' :'option_show')}}"><i
                                                    class="mdi mdi-flip-to-front text-white mdi-24px"></i></a>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Options</div>
                                        <h5 class="mb-0">{{ $options->count() }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-success rounded shadow">
                                            <a href="{{route('eleve_liste')}}"><i
                                                    class="mdi mdi-account-outline text-white mdi-24px"></i></a>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">{{ count_number('Elève', $Eleves->count()) }}</div>
                                        <h5 class="mb-0">{{ $Eleves->count() }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-warning rounded shadow">
                                            <a href="{{route($cycles->isEmpty() ?  'cycle_ecole' :'cycle_show')}}"><i
                                                    class="mdi text-white mdi-cellphone-link mdi-24px"></i></a>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Cycles</div>
                                        <h5 class="mb-0">{{ $cycles->count() }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-info rounded shadow">
                                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Personnel</div>
                                        <h5 class="mb-0">$88k</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Frais scolaires</h5>
                        </div>
                        <p class="mt-3">déroulement du jour</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-primary rounded shadow">
                                            <i class="mdi mdi-trending-up mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Franc</div>
                                        <h5 class="mb-0">{{$fraispayerAujourdhuiEnFranc}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-success rounded shadow">
                                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Dollar</div>
                                        <h5 class="mb-0">{{$fraispayerAujourdhuiEnDollar}}</h5>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Autres frais</h5>

                        </div>
                        <p class="mt-3">déroulement du jour</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-primary rounded shadow">
                                            <i class="mdi mdi-trending-up mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Franc</div>
                                        <h5 class="mb-0">{{$AutrefraispayerAujourdhuiEnFranc}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-success rounded shadow">
                                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Dollar</div>
                                        <h5 class="mb-0">{{$AutrefraispayerAujourdhuiEnDollar}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
            <!-- Weekly Overview Chart -->
        </div>
    </div>

    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Icon Container -->
        <div class="d-flex flex-wrap" id="icons-container">
            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                    <i class="mdi mdi-account-outline mdi-36px"></i>
                    <p class="icon-name text-capitalize text-truncate mb-0 mt-2">Ajouter élève</p>
                </div>
            </div>

            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                    <i class="mdi mdi-abjad-hebrew mdi-36px"></i>
                    <p class="icon-name text-capitalize text-truncate mb-0 mt-2">Cycle</p>
                </div>
            </div>
            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                    <i class="mdi mdi-abugida-devanagari mdi-36px"></i>
                    <p class="icon-name text-capitalize text-truncate mb-0 mt-2">Frais scolaire</p>
                </div>
            </div>
            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                    <i class="mdi mdi-abugida-thai mdi-36px"></i>
                    <p class="icon-name text-capitalize text-truncate mb-0 mt-2">abugida-thai</p>
                </div>
            </div>
            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                    <i class="mdi mdi-access-point mdi-36px"></i>
                    <p class="icon-name text-capitalize text-truncate mb-0 mt-2">access-point</p>
                </div>
            </div>

            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                    <i class="mdi mdi-access-point mdi-36px"></i>
                    <p class="icon-name text-capitalize text-truncate mb-0 mt-2">access-point</p>
                </div>
            </div>
        </div>
    </div>












































<div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner ">
            <!-- Register Card -->
            <div class="card">

                <!-- /Logo -->
                <div class="card-body mt-2">
                    <h4 class="mb-4 text-center">Créer compte de gestion</h4>
                    <hr>
                    <ul>

                        @error('ecole')<span class="text-left text-muted"><span style="color: darkred;">
                                <m>
                                    <ol>{{ $message }}
                                </m>
                            </span>
                        </span>@enderror</ol>
                        @error('name')<span class="text-left text-muted"><span style="color: darkred;">
                                <m>
                                    <ol>{{ $message }}
                                </m>
                            </span>
                        </span>@enderror</ol>
                        @error('telephone')<span class="text-left text-muted"><span style="color: darkred;">
                                <m>
                                    <ol>{{ $message }}
                                </m>
                            </span>
                        </span>@enderror</ol>
                        @error('password')<span class="text-left text-muted"><span style="color: darkred;">
                                <m>
                                    <ol>{{ $message }}
                                </m>
                            </span>
                        </span>@enderror</ol>
                        @error('password_confirmation')<span class="text-left text-danger">
                                {{ $message }}
                            </span>
                        @enderror

                    </ul>
                    <form action="{{route('register')}}" method="POST" class="mb-3">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating form-floating-outline mb-3">
                                    <input type="text" class="form-control" id="ecole" name="ecole"
                                        placeholder="Nom de l'école" autofocus />

                                    <label for="ecole">Nom de l'école</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-floating-outline mb-3">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nom d'administrateur" autofocus />

                                    <label for="name">Nom d'administrateur</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating form-floating-outline mb-3">
                            <input type="text" class="form-control" id="telephone" name="telephone"
                                placeholder="Téléphone" />

                            <label for="telephone">Téléphone</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />

                                            <label for="password">Mot de passe</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i
                                                class="mdi mdi-eye-off-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" id="password" class="form-control"
                                                name="password_confirmation"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />

                                            <label for="password">Confirme mot de passe</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i
                                                class="mdi mdi-eye-off-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="input-group input-group-merge">
                                <div class="form-floating form-floating-outline">
                                    <select name="province" class="form-control">
                                        <option value="Kinshasa">Kinshasa</option>
                                        <option value="Matadi">Matadi</option>
                                        <option value="Lubumbashi">Lubumbashi</option>
                                        <option value="Maniema">Maniema</option>
                                        <option value="Kisantu">Kisantu</option>
                                        <option value="Luwozi">Luwozi</option>
                                        <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                                        <option value="Kolwezi">Kolwezi</option>
                                        <option value="Goma">Goma</option>
                                        <option value="Mbuji-mayi">Mbuji-mayi</option>
                                        <option value="Kenge">Kenge</option>
                                        <option value="Kikwiti">Kikwiti</option>
                                        <option value="Nord-Kivu">Nord-Kivu</option>
                                        <option value="Sud-Kivu">Sud-Kivu</option>
                                        <option value="Boma">Boma</option>
                                        <option value="Popo">Popo</option>
                                        <option value="Muanda">Muanda</option>
                                    </select>

                                </div>

                            </div>
                        </div>


                        <button class="btn btn-primary d-grid w-100">Confirmer</button>
                    </form>

                    <p class="text-center">
                        <span>J'ai déjà un compte</span>
                        <a href="{{route('login')}}">
                            <span>Cliquer ici</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
            <img src="{{asset('/img/about-img.svg')}}" alt="auth-tree" width="200"
                class="authentication-image-object-left d-none d-lg-block" />
            <img src="{{asset('r/assets/img/illustrations/auth-basic-mask-light.png')}}"
                class="authentication-image d-none d-lg-block" alt="triangle-bg"
                data-app-light-img="illustrations/auth-basic-mask-light.png"
                data-app-dark-img="illustrations/auth-basic-mask-dark.png" />
        </div>
    </div>
</div>



@section('section')
<div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-4">
        <!-- Login -->
        <div class="card p-2">
          <!-- Logo -->
          <div class="app-brand justify-content-center mt-4">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <span>
                <img width="100" src="{{asset('/img/ds.png')}}"/>
                </span>
              </span>
            </a>
          </div>
          <!-- /Logo -->

          <div class="card-body mt-2">
            <p class="mb-4 text-center">Se connecter avec votre numéro de compte</p>

            <form id="formAuthentication" class="mb-3" method="POST" action="{{route('login')}}">
            @csrf
              <div class="form-floating form-floating-outline mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="telephone"
                  placeholder="Numéro de téléphone"
                  autofocus />
                <label for="email">Numéro de téléphone</label>
              </div>
              <div class="mb-3">
                <div class="form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="Mot de passe" />
                      <label for="password">Mot de passe</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                  </div>
                </div>
              </div>
              <div class="mb-3 d-flex justify-content-between">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
                <a href="auth-forgot-password-basic.html" class="float-end mb-1">
                  <span>Mot de passe oublié ?</span>
                </a>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Connexion</button>
              </div>
            </form>

            <p class="text-center">
              <span>N'avez vous pas compte ?</span>
              <a href="{{route('register')}}">
                <span>Créer compte</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Login -->
        <img
          src="{{asset('/img/about-img.svg')}}"
          alt="auth-tree"
          width="200"
          class="authentication-image-object-left d-none d-lg-block" />
        <img
          src="{{asset('r/assets/img/illustrations/auth-basic-mask-light.png')}}"
          class="authentication-image d-none d-lg-block"
          alt="triangle-bg"
          data-app-light-img="illustrations/auth-basic-mask-light.png"
          data-app-dark-img="illustrations/auth-basic-mask-dark.png" />

      </div>
    </div>
  </div>


























 <div class="row">
    <div class="col-md-3">
     <div class="card">
       <div class="card-header ">
     <div data-toggle="modal" data-target="#ajout" class="btn bg-orange-400 btn-block mt-1">
       <span class="text-uppercase  font-size-sm font-weight-semibold"><i class="icon-user-plus mr-2"></i>Ajouter élève</span>
           </div>
           <div class="mt-4">
          </div>
           <div class="card-header bg-transparent header-elements-inline">
             <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
           </div>
           <div class=" border-0 p-0">
             <ul class="nav nav-sidebar ">
               @foreach($ArchiveCycle as $archive)
                 <li class="nav-item ">
                 <a href="" class="nav-link"><i class="icon-arrow-right13"></i>{{$archive->annee_scolaire}}</a>
               </li>
               @endforeach
             </ul>
           </div>
           </div>
           </div>
           </div>
         <!-- /categories -->

   <div class="col-md-9">
        <div class="card">
               <div class="card-body">

                   <form action="{{route('eleve_liste')}}" method="get">
                     @csrf
                       <div class="input-group mb-3">
                           <div class="form-group-feedback form-group-feedback-left">
                               <input type="text" name="qbjnnknknk1047" class="form-control form-control-lg" placeholder="Tapez le nom de la recherche">
                               <div class="form-control-feedback form-control-feedback-lg">
                                   <i class="icon-search4 text-muted"></i>
                               </div>
                           </div>

                           <div class="input-group-append">
                               <button type="submit" class="btn bg-light btn-lg">Recherche</button>
                           </div>
                       </div>

                       <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                           <ul class="list-inline list-inline-condensed mb-0">
                               <li class="list-inline-item dropdown">
                                   <a href="#" class="btn btn-link text-default dropdown-toggle" data-toggle="dropdown">
                                       <i class="icon-stack2 mr-2"></i>
                                       All categories
                                   </a>

                                   <div class="dropdown-menu">
                                       <a href="#" class="dropdown-item"><i class="icon-question7"></i> Getting started</a>
                                   </div>
                               </li>
                               <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-calendar mr-2"></i> {{AnneeSco()}}</a></li>
                           </ul>

                           <ul class="list-inline mb-0 ml-md-auto">
                               <li class="list-inline-item"><a  class="btn btn-link text-default"><i class="icon-users4 mr-2"></i> {{$Eleves->count()}} {{count_number('Elève', $Eleves->count())}}</a></li>
                           </ul>
                       </div>
                   </form>
               </div>
           </div>
           <!-- /search field -->

     <div class="card-body">
       @if($Eleves->isEmpty())
       <div class="text-center mb-3 py-2">
         <span class="text-muted d-block">
            il n'y a pas d'élèves <a href="{{route('ajout_eleve')}}">Clique-ici pour ajouter élève</a>
         </span>
       </div>
       @endif


     @if(!$Eleves->isEmpty())
       <div class="row">
     @foreach($Eleves as $eleve)
     <div class="col-md-6">
       <div class="card card-body">
         <div class="media">
           <div class="mr-3">
             <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
               @if(!$eleve->photo_eleve == '')
               <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="52" height="52" class="rounded-circle" alt="">
                   @else
                   <img src="/img/user.png" width="52" height="52" class="rounded-circle" alt="">
               @endif
             </a>
           </div>
           <div class="media-body">
             <h6 class="mb-0 font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h6>
             <span class="text-muted">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d', strtotime($eleve->created_at))}} {{AfficheMois(date('m', strtotime($eleve->created_at)))}} {{date('Y', strtotime($eleve->created_at))}} | Classe: {{$eleve->classe}} {{$eleve->cycle}}</span>
           </div>

           <div class="ml-3 align-self-center">
             <div class="list-icons">
                         <div class="list-icons-item dropdown">
                           <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                           <div class="dropdown-menu dropdown-menu-right">
                   <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="icon-eye"></i> Voir plus</a>
                   <a data-id="{{$eleve->id}}" data-name="{{$eleve->nom}}" class="dropdown-item eleve"><i class="icon-bin "></i> Supprimer</a>
                   <div class="dropdown-divider"></div>
                   <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                 </div>
                         </div>
                       </div>
           </div>
         </div>
         </div>
         </div>
         @endforeach

       <!-- /inline user card -->
   <!-- Customers -->

      @else
     <div class=" text-center mt-3 text-muted">
       <h6 class="card-title">
         <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun élève</h6>
     </div>
     @endif
   </div>











































 <div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Formulaire</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
    <form  action="{{route('store_eleve')}}" method="post" enctype="multipart/form-data">
     @csrf
        <div class="row">
            <div class="col-md-4">
            <div class="form-group">

                <input type="text" name="nom" class="form-control" placeholder="Nom">
                @error('nom')
                 <span class="text-left text-muted">
                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                </span>
                @enderror
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                <input type="text" name="post" class="form-control" placeholder="Post-nom">
                @error('post')
                 <span class="text-left text-muted">
                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                </span>
                @enderror
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                @error('prenom')
                 <span class="text-left text-muted">
                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                </span>
                @enderror
            </div>
            </div>
            </div>
            <!--- bloc 1 --->
            <div class="row">
            <div class="col-md-4">
            <div class="form-group">
            <label>Lieu de naissance:</label>
            <select class="form-control" name="lieu" id="exampleSelect1">
              <option value="Kinshasa">Kinshasa</option>
              <option value="Matadi">Matadi</option>
              <option value="Lubumbashi">Lubumbashi</option>
              <option value="Maniema">Maniema</option>
              <option value="Kisantu">Kisantu</option>
              <option value="Luwozi">Luwozi</option>
              <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
              <option value="Kolwezi">Kolwezi</option>
              <option value="Goma">Goma</option>
              <option value="Mbuji-mayi">Mbuji-mayi</option>
              <option value="Kenge">Kenge</option>
              <option value="Kikwiti">Kikwiti</option>
              <option value="Nord-Kivu">Nord-Kivu</option>
              <option value="Sud-Kivu">Sud-Kivu</option>
              <option value="Boma">Boma</option>
              <option value="Popo">Popo</option>
              <option value="Muanda">Muanda</option>
              <option value="Kinshasa">Kinshasa</option>
              <option value="Kinshasa">Kinshasa</option>
              <option value="Kinshasa">Kinshasa</option>
              <option value="Kinshasa">Kinshasa</option>
              <option value="Kinshasa">Kinshasa</option>
              <option value="Kinshasa">Kinshasa</option>
              <option value="Kinshasa">Kinshasa</option>
            </select>
            @error('lieu')
            <span class="text-left text-muted">
            <span style="color: darkred;" ><m>{{ $message }}</m></span>
            </span>
            @enderror
            </div>
            </div>

             <div class="col-md-4">
            <div class="form-group">
                <label>Date de naissance:</label>
                <input type="date" name="dat" class="form-control" placeholder="Date de naissance">
                @error('date_ne')
                 <span class="text-left text-muted">
                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                </span>
                @enderror
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                <label>Adresse complète:</label>
                <input type="text" name="adresse" class="form-control" placeholder="Exemple: Av. Kinshasa, n°20, C/Kinshasa">
                @error('adresse')
                 <span class="text-left text-muted">
                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                </span>
                @enderror
            </div>
            </div>

            </div>

             <!--- bloc 1 --->
            <div class="row">

            <div class="col-md-4">
            <div class="form-group">
            <label>Cycle:</label>
            <select class="form-control" name="cycle" id="exampleSelect1">
            @foreach($cycles as $cycle)
            <option value="{{$cycle->cycle}}">{{$cycle->cycle}}</option>
            @endforeach
            </select>
            @error('cycle')
            <span class="text-left text-muted">
            <span style="color: darkred;" ><m>{{ $message }}</m></span>
            </span>
            @enderror
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label>Niveau:</label>
            <select class="form-control" name="classe" id="exampleSelect1">
            <option value="1èr">1èr</option>
            <option value="2ème">2ème</option>
            <option value="3ème">3ème</option>
            <option value="4ème">4ème</option>
            <option value="5ème">5ème</option>
            <option value="6ème">6ème</option>
            <option value="7ème">7ème</option>
            <option value="8ème">8ème</option>
            </select>
            @error('classe')
            <span class="text-left text-muted">
            <span style="color: darkred;" ><m>{{ $message }}</m></span>
            </span>
            @enderror
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label>Option:</label>
            <select class="form-control" name="option" id="exampleSelect1">
            <option value="Aucune">Aucune</option>
            @foreach($options as $option)
           <option value="{{$option->option}}">{{$option->option}}</option>
           @endforeach
            </select>
            @error('option')
            <span class="text-left text-muted">
            <span style="color: darkred;" ><m>{{ $message }}</m></span>
            </span>
            @enderror
            </div>
            </div>
            </div>

             <!--- bloc 1 --->
            <div class="row">
            <div class="col-md-4">
            <div class="form-group">
            <label>Local:</label>
            <select class="form-control" name="local" id="exampleSelect1">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
              <option value="G">G</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
            @error('local')
            <span class="text-left text-muted">
            <span style="color: darkred;" ><m>{{ $message }}</m></span>
            </span>
            @enderror
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                <label>Téléphone:</label>
                <input type="text" name="tel" class="form-control" placeholder="Téléphone">
                @error('tel')
                 <span class="text-left text-muted">
                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                </span>
                @enderror
            </div>
            </div>

            <div class="col-md-4">
             <div class="form-group row">
                <label class="col-lg-3 col-form-label">Sexe:</label>
                <div class="col-lg-9">
                <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-input-styled" name="sexe" value="M">
                            Garçon
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-input-styled" name="sexe" value="F">
                            Fille
                        </label>
                    </div>
                    @error('sexe')
                    <span class="text-left text-muted">
                    <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>
            </div>
            </div>
            </div>
             <!--- bloc 1 --->
            <div class="form-group row">
            <label class="col-form-label col-lg-2">Photo de l'élève</label>
            <div class="col-lg-10">
                <input type="file" name="photo_eleve" class="form-control-uniform-custom">
                @error('photo_eleve')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                @enderror
            </div>
        </div>


             <!--- bloc 1 --->
 <div class="d-flex justify-content-start align-items-center">

     <button type="submit" class="btn bg-warning-400 ml-3">Ajouter <i class="icon-paperplane ml-2"></i></button>
 </div>
</form>
</div>
</div>









 <!-- Page content -->
      <!-- Main content -->
      <div class="content-wrapper">
        @include('layouts.app')
        <!-- Content area -->
        <div class="content">
            <!-- Search field -->
            <div class="card">
                <div class="card-body">

                    <form action="#">
                        <div class="input-group mb-3">
                            <div class="form-group-feedback form-group-feedback-left">
                                <input type="text" class="form-control form-control-lg" placeholder="Tapez le nom de la recherche">
                                <div class="form-control-feedback form-control-feedback-lg">
                                    <i class="icon-search4 text-muted"></i>
                                </div>
                            </div>

                            <div class="input-group-append">
                                <button type="submit" class="btn bg-slate btn-lg">Recherche</button>
                            </div>
                        </div>

                        <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                            <ul class="list-inline list-inline-condensed mb-0">
                                <li class="list-inline-item dropdown">
                                    <a href="#" class="btn btn-link text-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-stack2 mr-2"></i>
                                        All categories
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item"><i class="icon-question7"></i> Getting started</a>
                                        <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Registration</a>
                                        <a href="#" class="dropdown-item"><i class="icon-reading"></i> General info</a>
                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Your settings</a>
                                        <a href="#" class="dropdown-item"><i class="icon-graduation"></i> Copyrights</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-mail-read"></i> Contacting authors</a>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-reload-alt mr-2"></i> Refine your search</a></li>
                            </ul>

                            <ul class="list-inline mb-0 ml-md-auto">
                                <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-make-group mr-2"></i> Browse articles</a></li>
                                <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-menu7 mr-2"></i> Advanced search</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /search field -->


            <!-- Info blocks -->
            <div class="row">
                 <div class="col-lg-3"><a href="{{route('eleve')}}">
                    <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-body text-center">
                        <i class="icon-users icon-4x border-slate border-3 rounded-round border text-slate-400  p-3 mb-3 mt-1"></i>
                            <h4 class="card-title text-slate">Elèves</h4>
                        </div>
                    </div>
               </a></div>
                    <div class="col-lg-3"><a href="{{route('personnel_principal')}}">
                    <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-body text-center">
                            <i class="icon-user-tie icon-4x border-slate border-3 rounded-round text-slate-400 border- p-3 mb-3 mt-1"></i>
                             <h4 class="card-title text-slate">Personnel</h4>
                        </div>
                    </div>
                </a></div>

                <div class="col-lg-3"> <a href="{{route('cycle_principal')}}">
                    <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-body text-center">
                            <i class="icon-dropbox text-slate-400 icon-4x border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h4 class="card-title text-slate">Cycles</h4>
                        </div>
                    </div>
                </a></div>

                   <div class="col-lg-3"><a href="{{route('option_principal')}}">
                    <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-body text-center">
                            <i class="icon-align-bottom icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                             <h4 class="card-title text-slate">Options</h4>
                        </div>
                    </div>
                </a></div>

                    <div class="col-lg-3"><a href="{{route('modalite_frais')}}">
                    <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-body text-center">
                            <i class="icon-coins icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                             <h4 class="card-title text-slate">Finances</h4>
                        </div>
                    </div>
                </a></div>

                    <div class="col-lg-3"><a href="">
                    <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-body text-center">
                            <i class="icon-graduation2 icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                          <h4 class="card-title text-slate">Pédagogie</h4>
                        </div>
                    </div>
                </a></div>

                    <div class="col-lg-3"><a href="#">
                    <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-body text-center">
                            <i class="icon-folder-open2 icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                             <h4 class="card-title text-slate">Documents</h4>
                        </div>
                    </div>
                </a></div>

                    <div class="col-lg-3"><a href="#">
                    <div class="card   text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-body text-center">
                            <i class="icon-archive icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                             <h4 class="card-title text-slate">Archives</h4>
                        </div>
                    </div>
                </a></div>

            </div>
            <!-- /info blocks -->






        </div>










 <div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Content area -->
      <div style="background-image: url(/img/3.jpg)" class="content d-flex justify-content-center align-items-center">
        <!-- Registration form -->
        <form action="{{route('register')}}" method="POST" class="flex-fill">
          @csrf
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="text-center mb-3">

                    <h4 class="mb-0 text-muted"><b>Créer votre compte de gestion</b></h4>
                    <span class="d-block text-muted">Gérer  votre Ecole <br>Autrement avec sécurité. (2-Six)</span>
                  </div>
                <div class="form-group form-group-feedback form-group-feedback-right">
                    <input type="text" name="ecole" class="form-control" placeholder="Nom de l'établissement">
                     @error('ecole')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                    <div class="form-control-feedback">
                      <i class="icon-office text-muted"></i>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="text" name="name" class="form-control" placeholder="Nom d'administrateur">
                        @error('name')
                         <span class="text-left text-muted">
                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                        </span>
                        @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-check text-muted"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="number" name="telephone" class="form-control" placeholder="Téléphone">
                        @error('telephone')
                       <span class="text-left text-muted">
                       <span style="color: darkred;" ><m>{{ $message }}</m></span>
                      </span>
                       @enderror
                        <div class="form-control-feedback">
                          <i class="icon-phone text-muted"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                        @error('password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-lock text-muted"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passe">
                        @error('confirme_password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-lock text-muted"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <select name="province" class="form-control">
                        <option value="Kinshasa">Kinshasa</option>
                        <option value="Matadi">Matadi</option>
                        <option value="Lubumbashi">Lubumbashi</option>
                        <option value="Maniema">Maniema</option>
                        <option value="Kisantu">Kisantu</option>
                        <option value="Luwozi">Luwozi</option>
                        <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                        <option value="Kolwezi">Kolwezi</option>
                        <option value="Goma">Goma</option>
                        <option value="Mbuji-mayi">Mbuji-mayi</option>
                        <option value="Kenge">Kenge</option>
                        <option value="Kikwiti">Kikwiti</option>
                        <option value="Nord-Kivu">Nord-Kivu</option>
                        <option value="Sud-Kivu">Sud-Kivu</option>
                        <option value="Boma">Boma</option>
                        <option value="Popo">Popo</option>
                        <option value="Muanda">Muanda</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn bg-orange-400 btn-labeled "> Confirmer</button>
                  <a href="{{route('login')}}" class="btn btn-light btn-labeled "> J'ai un compte</a>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- /registration form -->
      </div>
    </div>
</div>
</div>




























 <div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area style="background-image: url(/img/ban.jpg)"-->
            <div style="background-image: url(/img/1.jpg)" class="content d-flex justify-content-center align-items-center">
            <!-- Login card -->
            <div class="row">

              <div class="col-md-3">
                <div class="login-form">
                <img class="text-center text-muted mt-5" src="/img/d6.png">
               <h1 class="mt-1 text-white">Avec 2-Six vous avez la possibilité de gérer  votre Ecole  Autrement avec sécurité et fiabilité.</h1>
               </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-lg-5 ">
            <form class="login-form mt-1" method="POST" action="{{route('login')}}">
             @csrf
                <div class="card  mb-0">
                    <div class="card-body">
                    <div class="text-center mb-2">
                        <h4 class="text-muted"><b>Se connecter</b></h4>
                        </div>
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" name="telephone" class="form-control" placeholder="Numéro mobile">
                            @error('telephone')
                             <span class="text-left text-muted">
                              <span style="color: darkred;" >{{ $message }}</span>
                            </span>
                            @enderror
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input  type="password" name="password" class="form-control" placeholder="Mot de passe">
                            @error('password')
                             <span class="text-left text-muted">
                              <span style="color: darkred;" >{{ $message }}</span>
                            </span>
                            @enderror
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center">

                            <a href="login_password_recover.html" class="ml-auto">Mot de passe oublié ?</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-orange-400 btn-block">Connexion <i class="icon-circle-right2 ml-2"></i></button>
                        </div>
                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">Vous n'avez pas un compte ?</span>
                        </div>

                        <div class="form-group">
                            <a href="{{url('register')}}" class="btn btn-dark btn-block">Créer compte</a>
                        </div>
                    </div>
                </div>

            </form>
            <!-- /login card -->
        </div>

        </div>
    </div>

        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->




















































































































































<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="row mt-4">

                                <div class="col-md-6">

                                    <a href="{{route('journal_frais')}}" class=""><button type="button" class="btn  btn-block btn-float m-0">
                                        <i class="icon-cash4 text-info-400 icon-3x border-3 rounded-round p-3"></i>
                                        <span class="text-muted">Frais scolaires</span>
                                    </button></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('autre_frais')}}" class=""><button type="button" class="btn  btn-block btn-float m-0">
                                        <i class="icon-cash text-success-400 icon-3x border-3 rounded-round p-3"></i>
                                        <span class="text-muted">Autre frais</span>
                                    </button></a>
                                </div>

                                <div class="col-md-6">
                                    <a href="{{route('journal_caisse')}}" class=""><button type="button" class="btn  btn-block btn-float m-0">
                                        <i class="icon-stack-text text-orange-700 icon-3x border-3 rounded-round p-3"></i>
                                        <span class="text-muted">Journal de caisse</span>
                                    </button></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('option_principal')}}" class=""><button type="button" class="btn  btn-block btn-float m-0">
                                        <i class="icon-stack-check text-slate-400 icon-3x border-3 rounded-round p-3"></i>
                                        <span class="text-muted">Caisse-E</span>
                                    </button></a>
                                </div>





         </div>              <!-- /seamless button group -->
         </div>
        <div class="col-md-2"></div>

    </div>
    </div>
</div>
























@extends('layouts.master_imp', ['title'=> 'rapport frais scolaires'])
@section('section')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
                <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <h1 class="mb-2 mt-md-2"><b>{{Auth::user()->ecole}}</b></h1>

                                <ul class="list list-unstyled mb-0 h4">
                                    @foreach($infoEcole as $ecole)
                                    <li>{{$ecole->adresse}}</li>
                                    <li>{{Auth::user()->province}}/{{$ecole->commune}}</li>
                                    <li>RDC</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-4">
                                <div class="text-sm-right">
                                    <h4 class="text-primary mb-2 mt-md-2">{{Auth::user()->province}} le, {{date('d/m/Y')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="">
                        <div class="mb-4 mb-md-2">

                            <span class="font-weight-semibold h1">Rapport de frais scolaires </span>

                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <span class="font-weight-semibold text-float-right h4">Période: {{$mois == ''?'Toutes': AfficheMois($mois)}} / {{$annee}}</span>
                     <table class="table table-striped text-nowrap tex-font-weight-bold h4">
                        <thead >
                            <tr>
                                <th>Jour</th>
                                <th>Mois</th>
                                <th>Année scolaire</th>
                                <th>Montant en Dollar</th>
                                <th>Montant en Franc</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($datePaye as $journal)
                            <tr>
                                <td>
                                    <span class="">{{AfficheJour(( new DateTime($journal->date_rapport))->format('D'))}}</span>
                                    <span class="">{{( new DateTime($journal->date_rapport))->format('d/m/Y')}}</span>
                                </td>
                                <td>{{AfficheMois(( new DateTime($journal->date_rapport))->format('m'))}}</td>
                                <td>{{$journal->annee_rapport}}</td>
                                <td>{{$journal->dollar}} $</td>
                                <td><span class="font-weight-semibold">{{$journal->franc}} CDF</span></td>
                            </tr>
                            @empty
                            <tr>
                                <td></td>
                                <td></td>
                            <td><div class="text-center">
                                <p class="text-center h2"><i class="icon-alert icon-3x mr-2"></i> Vide !</p>
                            </div></td>
                          </tr>
                           @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="card-body">
                    <div class="d-md-flex flex-md-wrap">
                        <div class="pt-2 mb-3">
                            <h6 class="mb-3">Responsable de la caisse</h6>

                            <ul class="list-unstyled">
                                <li class="h4">{{Auth::user()->name}}</li>
                            </ul>
                        </div>

                        <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                            <h6 class="mb-3">Total Général</h6>
                            <div class="table-responsive">
                                 <table class="table table-striped text-nowrap">
                                    <tbody>
                                        <tr>
                                            <th>En Dollar:</th>
                                            <td class="text-right"><h1 class="font-weight-semibold">$ {{$somDollar}}</h1></td>
                                        </tr>
                                        <tr>
                                            <th>En Franc:</th>
                                            <td class="text-right"><h1 class="font-weight-semibold">CDF {{$somFranc}}</h1></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td class="text-right text-primary"><h5 class="font-weight-semibold"></h5></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right mt-3">
                                <button onclick="window.addEventListener('load', window.print())" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-printer"></i></b> Imprimer</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center">
                <span class="text-muted"> <i class="icon-thumbs-up2 mr-2"></i> Merci pour avoir utilisé 2-Six</span>
              </div>
            </div>
        </div>

@include('layouts.footer1')
@stop






       <!--  -->


    <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Voir plus
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                       {{Auth::user()->ecole}} / {{Auth::user()->province}}
                    </span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a  class="navbar-nav-link" target="_blank"><i class="icon-calendar mr-2"></i> {{AnneeScolaire()}}</a></li>

                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
@if (Session::has('messages'))

    toastr.options={

        "closeButton": true,
        "progressBar": true,
    };
    toastr.success("{{Session::get('messages')}}",'Success!',({timeOut:12000}));

@endif

@if (Session::has('message'))
    toastr.options={
        "closeButton": true,
        "progressBar": true,
    };
    toastr.error("{{Session::get('message')}}",'Success!',({timeOut:12000}));

@endif
</script>
</body>
</html>




































<!-- Main navbar -->
<!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-slate navbar-static fixed-top">
         <div class="navbar-header navbar-light d-none d-md-flex align-items-md-center">
            <div class="navbar-brand navbar-brand-md">
               <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>

            <div class="navbar-brand navbar-brand-xs">
                <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>
        </div>
        <!-- /header with logos -->


        <!-- Mobile controls -->
        <div class="d-flex flex-1 d-md-none">
            <div class="navbar-brand mr-auto">
               <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-menu9 icon-1x"></i>
            </button>


        </div>
        <!-- /mobile controls -->


        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-users2 icon-1x"></i>
                        <span class="d-md-none ml-2">Elèves</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content wmin-md-300">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Elèves</span>
                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                @foreach($Eleves as $eleve)
                                <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                                <li class="media">
                                    <div class="mr-3">
                                     @if(!$eleve->photo_eleve == '')
                                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="40" height="40" class="rounded-circle" alt="">
                                    @else
                                    <img src="/img/user.png" width="36" height="36" class="rounded-circle" alt="">
                                    @endif
                                    </div>
                                    <div class="media-body">
                                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="media-title font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</a>
                                        <span class="d-block text-muted font-size-sm">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d M, Y', strtotime($eleve->created_at))}}</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                                </li>
                                </a>
                                @endforeach
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="{{route('eleve_liste')}}" class="text-grey mr-auto">Voir tous</a>
                            <a href="#" class="text-grey"><i class="icon-eye"></i></a>
                        </div>
                    </div>
                </li>


            </ul>

            <span class="badge bg-light-400 badge-pill ml-md-3 mr-md-auto">{{$Eleves->count()}}</span>

            <ul class="navbar-nav">
                @if(!Route::is('home'))
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-menu9 mr-2"></i>
                        Menu
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-body p-2">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-4">
                                    <a href="{{route('eleve')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-users2 text-blue-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">élèves</div>
                                    </a>

                                    <a href="{{route('personnel_principal')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-user-tie text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Personnel</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <a href="{{route('cycle_principal')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-stack3 text-orange-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Cycles</div>
                                    </a>

                                    <a href="{{route('option_principal')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-align-right text-pink-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Option</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <a href="{{route('modalite_frais')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-coins text-indigo-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Finance</div>
                                    </a>

                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-envelope text-blue-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Messages</div>
                                    </a>
                                </div>
                                 <div class="col-12 col-sm-4">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-folder-open text-success-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">documents</div>
                                    </a>

                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-database text-indigo-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Archive</div>
                                    </a>
                                </div>
                                 <div class="col-12 col-sm-4">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-cogs text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Parametres</div>
                                    </a>
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-earth text-blue-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Infos</div>
                                    </a>
                                    <a href="{{route('home')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-home text-danger-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Accueil</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="#" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">James Alexander</span>
                                                <span class="text-muted float-right font-size-sm">04:58</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Margo Baker</span>
                                                <span class="text-muted float-right font-size-sm">12:16</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>


                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#" class="text-grey mr-auto">All messages</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                 <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        @if(! $photoAdmin->isEmpty())
                        @foreach($photoAdmin as $user)
                        <img src="/Dossier/images_admin/{{$user->photo_user}}" class="rounded-circle mr-2" width="34" height="34" alt="">
                         @endforeach
                        @else
                        <img src="/img/user.png" class="rounded-circle mr-2" height="34" alt="">
                        @endif
                        <span>{{Auth::user()->name}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('admin_show')}}" class="dropdown-item"><i class="icon-user-plus"></i> Mon profil</a>
                        <a href="{{route('modalite_frais')}}" class="dropdown-item"><i class="icon-coins"></i> Finance</a>
                        <div class="dropdown-divider"></div>
                        <a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                         <i class="icon-exit3"></i>    Se déconnecter
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /navbar content -->

    </div>
    <!-- /main navbar -->











































<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="zoom-in">
          <div  class="section-title">
          <h2><i class="bx bx-user-plus"></i></h2>
        </div>

        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8  mt-lg-0">
            <div class="card bg-light">
              <div class="card-header text-center ">
             <h5 class="card-title font-weight-semibold h3 text-slate text-center"><i class="mr-2 m-2   p-1 mb-3 mt-1 mr-2"></i> Créer un compte</h5>
             <hr>
            </div>
                <div class="card-img-actions mx-1 p-2">
            <form action="{{route('register')}}" method="POST"  class="">
                @csrf
              <div class="row">
                <div class="col-md-4 form-group">
                  <input style="background: none;" type="text"  class="form-control" name="ecole" placeholder="Nom de l'école" required>
                  @error('ecole')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4 form-group  mt-md-0">
                <input style="background: none;" type="text" class="form-control" name="name" placeholder="Nom d'administrateur" required>
                @error('name')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4 form-group mt-1 mt-md-0">
                <input style="background: none;" type="text" class="form-control" name="telephone"  placeholder="Téléphone" required>
                 @error('telephone')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 form-group">
                  <input style="background: none;" type="password"  class="form-control" name="password"  placeholder="Mot de passe" required>
                  @error('password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4 form-group mt-md-0">
                <input style="background: none;" type="password" class="form-control" name="password_confirmation" placeholder="Conformier mot de passe" required>
                @error('confirme_password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>

              <div class="col-md-4 form-group mt-md-0">
                <select name="province" class="form-control p-1">
                <option value="Kinshasa">Kinshasa</option>
                <option value="Matadi">Matadi</option>
                <option value="Lubumbashi">Lubumbashi</option>
                <option value="Maniema">Maniema</option>
                <option value="Kisantu">Kisantu</option>
                <option value="Luwozi">Luwozi</option>
                <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                <option value="Kolwezi">Kolwezi</option>
                <option value="Goma">Goma</option>
                <option value="Mbuji-mayi">Mbuji-mayi</option>
                <option value="Kenge">Kenge</option>
                <option value="Kikwiti">Kikwiti</option>
                <option value="Nord-Kivu">Nord-Kivu</option>
                <option value="Sud-Kivu">Sud-Kivu</option>
                <option value="Boma">Boma</option>
                <option value="Popo">Popo</option>
                <option value="Muanda">Muanda</option>
                </select>
              </div>
              <div ><input  type="submit" value="Confirmer" class="btn btn-primary bg-indigo text-center form-control mt-2"></div>
            </form>

          </div>
          </div>
          </div>
          @include('auth.footer2')
          </div>
         <div class="col-lg-2"></div>
        </div>

      </div>
    </section><!-- End Contact Section -->
</main>










<main id="main">
  <!-- ======= Contact Section C:\xampp\htdocs\Dsix ======= -->
    <section id="" class="contact">
      <div class="container text-center" data-aos="zoom-in">
        <div  class="section-title">
          <h2><i class="bx bx-user"></i></h2>
        </div>

        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 mt-5 mt-lg-0">
            <div class="card bg-light">
              <div class="card-header  text-center ">
             <h5 class="card-title text-muted font-weight-semibold h3  text-center"><i class=" mr-2 m-2   p-1 mb-3 mr-2"></i> Se connecter</h5>
            </div>
            <div class="card-img-actions mx-1 mt-1 p-2">
            <form method="POST" action="{{route('login')}}" role="" class="">
              @csrf
              <div class="form-group mt-1">
                <input type="text" class="form-control" name="telephone" placeholder="Numéro mobile" required>
                 @error('telephone')
                  <span class=" text-muted">
                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                 </span>
                @enderror
              </div>
             <div class="form-group mt-3">
                <input type="password" class="form-control " name="password"  placeholder="Mot de passe" required>
                @error('password')
                     <span class="text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                @enderror
              </div>
              <p class="text-center mt-3 text-muted"><a href=""><i class="icon-lock mr-2"></i> Mot de passe oublié ?</a></p>
              <div ><input type="submit" value="Connexion" class="btn btn-primary bg-indigo text-center form-control"></div>
            </form>
          </div>
          </div>
          @include('auth.footer2')
          </div>
          <div class="col-lg-3"></div>
        </div>

      </div>
    </section><!-- End Contact Section -->
</main>



 <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title">Les élèves récents</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pb-0">
                                <div class="row">
                                     @forelse($EleveRecent as $eleve)
                                    <div class="col-xl-6">
                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                                                        @if(!$eleve->photo_eleve == '')
                                                        <img style="border-radius: 50%; height: 50px; width: 50px" src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="40" height="40" class="img-fluid img-preview " alt="">
                                                        @else
                                                        <img style="border-radius: 50%; height: 50px; width: 50px" src="/img/user.png" width="40" height="40" class="img-fluid img-preview " alt="">
                                                        @endif

                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</a></h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-earth mr-2"></i> {{\Carbon\Carbon::parse($eleve->created_at)->diffforhumans()}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                        @empty
                                        <div class="text-center text-muted">
                                            <i style="font-size: 50px" class="icon-notification2"></i><br>
                                        <h4>Aucun élève !</h4>
                                        </div>
                                        @endforelse
                                </div>
                                </div>
                         </div>
@extends('layouts.master1', ['title'=> Auth::user()->ecole])
@section('section')



        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content">
                <!-- Dashboard content -->
                <div class="row">
                    <div class="col-xl-8">

                        <!-- Marketing campaigns -->

                        <!-- /marketing campaigns -->


                        <!-- Quick stats boxes -->
                        <div class="row">
                            <div class="col-lg-4">

                                <!-- Members online -->
                                <div class="card bg-teal-400">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h3 class="font-weight-semibold mb-0">3,450</h3>
                                            <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
                                        </div>

                                        <div>
                                            Members online
                                            <div class="font-size-sm opacity-75">489 avg</div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div id="members-online"></div>
                                    </div>
                                </div>
                                <!-- /members online -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Current server load -->
                                <div class="card bg-pink-400">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                            <div class="list-icons ml-auto">
                                                <div class="list-icons-item dropdown">
                                                    <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            Current server load
                                            <div class="font-size-sm opacity-75">34.6% avg</div>
                                        </div>
                                    </div>

                                    <div id="server-load"></div>
                                </div>
                                <!-- /current server load -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Today's revenue -->
                                <div class="card bg-blue-400">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h3 class="font-weight-semibold mb-0">$18,390</h3>
                                            <div class="list-icons ml-auto">
                                                <a class="list-icons-item" data-action="reload"></a>
                                            </div>
                                        </div>

                                        <div>
                                            Today's revenue
                                            <div class="font-size-sm opacity-75">$37,578 avg</div>
                                        </div>
                                    </div>

                                    <div id="today-revenue"></div>
                                </div>
                                <!-- /today's revenue -->

                            </div>
                        </div>
                        <!-- /quick stats boxes -->





                        <!-- Latest posts -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title">Latest posts</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="#">
                                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
                                                        <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="#">Up unpacked friendly</a></h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
                                                </ul>
                                                The him father parish looked has sooner. Attachment frequently terminated son hello...
                                            </div>
                                        </div>

                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="#">
                                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
                                                        <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="#">It allowance prevailed</a></h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
                                                </ul>
                                                Alteration literature to or an sympathize mr imprudence. Of is ferrars subject enjoyed...
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="#">
                                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
                                                        <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="#">Case read they must</a></h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
                                                </ul>
                                                On it differed repeated wandered required in. Then girl neat why yet knew rose spot...
                                            </div>
                                        </div>

                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="#">
                                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
                                                        <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="#">Too carriage attended</a></h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
                                                </ul>
                                                Marianne or husbands if at stronger ye. Considered is as middletons uncommonly...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /latest posts -->

                    </div>

                    <div class="col-xl-4">

                        <!-- Progress counters -->
                        <div class="row">
                            <div class="col-sm-6">

                                <!-- Available hours -->
                                <div class="card text-center">
                                    <div class="card-body">

                                        <!-- Progress counter -->
                                        <div class="svg-center position-relative" id="hours-available-progress"></div>
                                        <!-- /progress counter -->


                                        <!-- Bars -->
                                        <div id="hours-available-bars"></div>
                                        <!-- /bars -->

                                    </div>
                                </div>
                                <!-- /available hours -->

                            </div>

                            <div class="col-sm-6">

                                <!-- Productivity goal -->
                                <div class="card text-center">
                                    <div class="card-body">

                                        <!-- Progress counter -->
                                        <div class="svg-center position-relative" id="goal-progress"></div>
                                        <!-- /progress counter -->

                                        <!-- Bars -->
                                        <div id="goal-bars"></div>
                                        <!-- /bars -->

                                    </div>
                                </div>
                                <!-- /productivity goal -->

                            </div>
                        </div>
                        <!-- /progress counters -->
                    </div>
                </div>
                <!-- /dashboard content -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


@include('layouts.footer1')
@stop













    <div class="content-wrapper mt-4">
    <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-stack3 mr-2 icon-2x text-muted"></i> <span class="font-weight-semibold">{{Route::is('cycle_principal') ? 'Cycles':"Cycle / $cicles"}}</span></h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-bars-alt text-pink-300"></i>
                                <span>Statistics</span>
                            </a>
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-calculator text-pink-300"></i>
                                <span>Invoices</span>
                            </a>
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-calendar5 text-pink-300"></i>
                                <span>Schedule</span>
                            </a>
                        </div>
                    </div>
                      <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                        <div class="btn-group">

                            <button type="button" class="btn bg-pink dropdown-toggle" data-toggle="dropdown"> <i class="icon-calendar5 "></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Accès rapide</div>
                         @forelse($cycles as $cycle)
                        <a href="{{route('cycle', $cycle->slug)}}" class="dropdown-item"><i class="icon-stack3"></i> {{$cycle->cycle}}</a>
                        @empty
                        <a  class="dropdown-item"><i class="icon-cash3"></i> Aucun cycle</a>
                        @endforelse
                        <a href="{{route('cycle_principal')}}" class="dropdown-item"><i class="icon-reset"></i> Retour</a>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index.html" class="breadcrumb-item"><i class="icon-display icon-2x mr-2"></i>
                  {{strtoupper($cicles)}}</a>
                            <a href="animations_css3.html" class="breadcrumb-item">Animations</a>
                            <span class="breadcrumb-item active">CSS3 animations</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                            <a href="#" class="breadcrumb-elements-item">
                                <i class="icon-comment-discussion mr-2"></i>
                                Support
                            </a>

                            <div class="breadcrumb-elements-item dropdown p-0">
                                <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear mr-2"></i>
                                    Settings
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                    <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                                </div>
                            </div>

                            <div class="breadcrumb-elements-item dropdown p-0">
                                <a data-toggle="modal" data-target="#modal_default" class="breadcrumb-elements-item ">
                                    <i class="icon-printer mr-2"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page header -->

            <!-- /page header -->








   <!-- Main -->
                         <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link {{col_active('home')}}">
                                    <i class="icon-home4"></i>
                                    <span>
                                        Accueil
                                        <span class="d-block font-weight-normal opacity-50">No active orders</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="{{route('cycle_principal')}}" class="nav-link"><i class="icon-stack3"></i> <span>Cycles</span></a>

                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="{{route('option_principal')}}" class="nav-link {{col_active('option_principal')}}"><i class="icon-align-right"></i> <span>Options</span></a>

                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="{{route('eleve')}}" class="nav-link {{col_active('eleve')}}"><i class="icon-users2"></i> <span>Elèves</span></a>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="{{route('personnel_principal')}}" class="nav-link {{col_active('personnel_principal')}}"><i class="icon-user-tie"></i> <span>Personnel</span></a>

                        </li>
                        <!-- /main -->
                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Structure</div> <i class="icon-menu" title="Forms"></i></li>
                        <li class="nav-item">
                        <a href="{{route('modalite_frais')}}"  class="nav-link {{col_active('modalite_frais')}}"><i class="icon-coins"></i> <span>Finance</span></a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-envelope"></i> <span>Messages</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Messages">
                                <li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Nouveau</a></li>
                                <li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Boîte de reception</a></li>
                                <li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Message envoyé</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-folder-open"></i> <span>Mes Documents</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Mes Documents">
                                <li class="nav-item"><a href="editor_summernote.html" class="nav-link">Elèves</a></li>
                                <li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">Personnel</a></li>
                                <li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Bureau</a></li>
                                <li class="nav-item"><a href="editor_code.html" class="nav-link">Finance</a></li>
                            </ul>
                        </li>
<!-- Main navbar -->
<!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-blue-800 navbar-static fixed-top">
         <div class="navbar-header navbar-light d-none d-md-flex align-items-md-center">
            <div class="navbar-brand navbar-brand-md">
               <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>

            <div class="navbar-brand navbar-brand-xs">
                <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>
        </div>
        <!-- /header with logos -->


        <!-- Mobile controls -->
        <div class="d-flex flex-1 d-md-none">
            <div class="navbar-brand mr-auto">
               <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>

            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>
        <!-- /mobile controls -->


        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-users2"></i>
                        <span class="d-md-none ml-2">Users</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content wmin-md-300">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Elèves</span>
                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                @foreach($Eleves as $eleve)
                                <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                                <li class="media">
                                    <div class="mr-3">
                                     @if(!$eleve->photo_eleve == '')
                                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="40" height="40" class="rounded-circle" alt="">
                                    @else
                                    <img src="/img/user.png" width="36" height="36" class="rounded-circle" alt="">
                                    @endif
                                    </div>
                                    <div class="media-body">
                                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="media-title font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</a>
                                        <span class="d-block text-muted font-size-sm">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d M, Y', strtotime($eleve->created_at))}}</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                                </li>
                                </a>
                                @endforeach
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="{{route('eleve_liste')}}" class="text-grey mr-auto">Voir tous</a>
                            <a href="#" class="text-grey"><i class="icon-eye"></i></a>
                        </div>
                    </div>
                </li>


            </ul>

            <span class="badge bg-light-400 badge-pill ml-md-3 mr-md-auto">{{$Eleves->count()}}</span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="#" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">James Alexander</span>
                                                <span class="text-muted float-right font-size-sm">04:58</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Margo Baker</span>
                                                <span class="text-muted float-right font-size-sm">12:16</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Jeremy Victorino</span>
                                                <span class="text-muted float-right font-size-sm">22:48</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Beatrix Diaz</span>
                                                <span class="text-muted float-right font-size-sm">Tue</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Richard Vango</span>
                                                <span class="text-muted float-right font-size-sm">Mon</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#" class="text-grey mr-auto">All messages</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                 <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        @if(! $photoAdmin->isEmpty())
                        @foreach($photoAdmin as $user)
                        <img src="/Dossier/images_admin/{{$user->photo_user}}" class="rounded-circle mr-2" width="34" height="34" alt="">
                         @endforeach
                        @else
                        <img src="/img/user.png" class="rounded-circle mr-2" height="34" alt="">
                        @endif
                        <span>{{Auth::user()->name}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('admin_show')}}" class="dropdown-item"><i class="icon-user-plus"></i> Mon profil</a>
                        <a href="{{route('modalite_frais')}}" class="dropdown-item"><i class="icon-coins"></i> Finance</a>
                        <div class="dropdown-divider"></div>
                        <a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                         <i class="icon-exit3"></i>    Se déconnecter
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /navbar content -->

    </div>
    <!-- /main navbar -->
















                    <div class="wrapper">

                      <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap text-center ">


                              <h1 class="nav-link ml-10 btn btn-info " id="apps_modal_btn" data-toggle="modal" data-target="#appsModal">Commencer</h1>

                    </div>

            </div>
            </div>
        </div>
    </div>
</div>

 <div style="background-color:royalblue;" class="modal fade apps-modal " id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="{{route('login')}}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>










        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>











@extends('auth.master', ['title'])
@section('section')
   <!-- ======= Hero Section ======= -->
   <main  id="main">
  <div  id="hero" class="d-flex flex-column justify-content-center">
    <div  class="container" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-6">
          <h1><img src="/img/ds.png"></h1>
      <p>Gérer <span class="typed" data-typed-items="votre école autrement, avec sécurité et fiabilité"></span></p>
      <div class="social-links">
      </div>
        </div>
        <div class="col-lg-6">
           <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img width="300" class="image-fluid" src="/img/about-img.svg" alt="">
                </div>
                 <div class="swiper-slide">
                  <img width="300" class="image-fluid" src="/img/features-2.svg" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
      </div>
      </div>

    </div>
  </div><!-- End Hero -->
</main>
@include('auth.footer2')
@stop
































<ul class="nav nav-group-sub" data-submenu-title="Personnel">
<li class="nav-item"><a href="{{route('ajout_personnel')}}" class="nav-link {{col_active('ajout_personnel')}}">Ajouter</a></li>
 <li class="nav-item"><a href="{{route('personnel')}}" class="nav-link">Personnel Ajoutés</a></li>
      <li class="nav-item nav-item-submenu">
        <a href="#" class="nav-link">Catégorie du personnel</a>
      <ul class="nav nav-group-sub">
        @foreach($PersonnelCategorie as $perso)
        <li class="nav-item"><a href="blog_classic_v.html" class="nav-link">{{$perso->fonction}}</a></li>
            @endforeach
          </ul>
      </li>
  </ul>










@extends('auth.master', ['title'=>'Création comptre de gestion'])
@section('section')
 <!-- ======= Contact Section ======= -->
     <main style="margin-top: -50px; " id="main">
    <section   class="contact">
      <div class="container" data-aos="fade-up">
        @include('auth.tete')
        <br>
        <br>
        <br>
        <div class="row mt-5">
           <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <div class="">
              <div class="">
                <img width="300" class="image-fluid mt-5" src="/img/2.png" alt="">
              </div>
            </div>

          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-5 mt-5 mt-lg-0">
            <div class="card">
            <div class="card-img-actions mx-1 mt-1 p-3">
          <form action="{{route('register')}}" method="POST" class="">
          @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="ecole" class="form-control p-2"  placeholder="Nom de l'école" required>
                  @error('ecole')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control p-2" name="name"  placeholder="Nom d'administrateur" required>
                  @error('name')
                  <span class="text-left text-muted">
                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                  </span>
                 @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control p-2" name="telephone"  placeholder="Téléphone" required>
                 @error('telephone')
                       <span class="text-left text-muted">
                       <span style="color: darkred;" ><m>{{ $message }}</m></span>
                      </span>
                 @enderror
              </div>
              <div class="row mt-3">
              <div class="col-md-6 form-group">
                  <input type="password" name="password" class="form-control p-2"  placeholder="Mot de passe" required>
                  @error('password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control p-2" name="password_confirmation"  placeholder="Confirmer mot de passe" required>
                  @error('confirme_password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <select name="province" class="form-control p-2">
                <option value="Kinshasa">Kinshasa</option>
                <option value="Matadi">Matadi</option>
                <option value="Lubumbashi">Lubumbashi</option>
                <option value="Maniema">Maniema</option>
                <option value="Kisantu">Kisantu</option>
                <option value="Luwozi">Luwozi</option>
                <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                <option value="Kolwezi">Kolwezi</option>
                <option value="Goma">Goma</option>
                <option value="Mbuji-mayi">Mbuji-mayi</option>
                <option value="Kenge">Kenge</option>
                <option value="Kikwiti">Kikwiti</option>
                <option value="Nord-Kivu">Nord-Kivu</option>
                <option value="Sud-Kivu">Sud-Kivu</option>
                <option value="Boma">Boma</option>
                <option value="Popo">Popo</option>
                <option value="Muanda">Muanda</option>
                </select>
              </div>
              <div class="text-center mt-3"><button type="submit" class="btn btn-primary text-white p-2 form-control">Créer Maintenant</button></div>
               <a href="{{route('login')}}">
              <div class="text-center mt-3 btn btn-light p-2 form-control ">J'ai déjà un compte</div></a>
            </form>
          </div>
          </div>
          </div>
           <div class="col-lg-1"></div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
@include('auth.footer2')
@stop





  @extends('auth.master', ['title'=>'Se connecter'])
@section('section')
     <!-- ======= Contact Section ======= -->
    <main style="margin-top: -50px; " id="main">
    <section   class="contact">
      <div class="container" data-aos="zoom-in">
        @include('auth.tete')
        <br>
        <br>
        <br>
        <div class="row mt-5">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-4">
              <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img width="300" class="image-fluid" src="/img/features-2.svg" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-5 mt-5 mt-lg-0">
              <div class="card">
                <div class="card-img-actions mx-1 mt-1 p-3">
            <form method="POST" action="{{route('login')}}" class="">
                @csrf
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="telephone" class="form-control p-3"  placeholder="Numéro mobile" required>
                  @error('telephone')
                       <span class="text-left text-muted">
                       <span style="color: darkred;" ><m>{{ $message }}</m></span>
                      </span>
                  @enderror
                </div>
                <div class="col-md-12 form-group mt-3 ">
                  <input type="password" class="form-control p-3" name="password"  placeholder="Mot de passe" required>
                   @error('password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="text-center mt-3"><button type="submit" class="btn btn-primary text-white form-control">Connexion</button></div>
               <p class="text-center mt-3 text-muted">Vous n'avez pas un compte ?</p>
               <a href="{{route('register')}}">
              <div class="text-center mt-3 btn btn-success text-white form-control ">Créer compte</div></a>
            </form>
          </div>
          </div>
          </div>
          <div class="col-lg-1">
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@include('auth.footer2')
@stop






























  <ul class="nav nav-group-sub" data-submenu-title="Options">
                                    @forelse($options as $option)
                                    <li class="nav-item"><a href="{{route('option', $option->option)}}" class="nav-link">{{$option->option}}</a></li>
                                    @empty
                                    <li class="nav-item"><a  class="nav-link">Aucune option</a></li>
                                    @endforelse
                                </ul>




  <div class="card-body">
            <h5 class="mb-3 bg-info-700"><i class="icon-stack2 mr-2 m-2 icon-2x text-default-400 border-default-400 border-2 rounded-round p-1 mb-3 mt-1"></i>Cycle {{strtoupper($cicles)}}</h5>
              <form action="">
              <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                <ul class="list-inline list-inline-condensed mb-0">
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-calendar mr-2"></i> {{AnneeSco()}}</a></li>
                </ul>
                <ul class="list-inline mb-0 ml-md-auto">
                  <li class="list-inline-item"><a href="{{route('cycle_principal')}}" class="btn btn-link text-default"><i class="icon-reset mr-2"></i> Cycles</a></li>
                </ul>
              </div>
            </form>
          </div>








<div class="row mt-5">
          @forelse($ecoles as $ecole)

          <div class="col-lg-4 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
               @if(!$ecole->photo_ecole == '')
                <img src="/Dossier/images_ecole/{{$ecole->photo_ecole}}" class="border-muted rounded-circle" width="100" height="100" alt="">
                 @else
                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="border-white rounded-circle" width="100" height="100" alt="">
              @endif
              </div>
              <h4><a href="{{route('voir_ecole', [$ecole->id, $ecole->ecole])}}">{{$ecole->ecole}}</a></h4>
              <p>{{$ecole->province}}</p>
            </div>
          </div>

           @empty
           <div class="mt-2 mt-sm-0">
            <a> Aucune école enregistrée</a>
          </div>
        @endforelse
      </div>




       <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
       @include('auth.tete')
        <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">
          @foreach($eleves as $eleve)
          <div class="col-lg-4 align-items-stretch">
            <a href="">
            <div class="icon-box iconbox-blue">
              <div class="icon">
            <div class="testimonial-item">
              @if(!$eleve->photo_eleve == '')
                <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="78" height="78"  class="border-white rounded-circle " alt="">
              @else
              <img src="/img/user.png" width="78" height="78"  class="border-white rounded-circle "alt="">
              @endif
                <h3>{{ucfirst($eleve->nom)}} {{ucfirst($eleve->post_nom)}} {{ucfirst($eleve->prenom)}}</h3>
                <h4>{{ucfirst($eleve->classe)}} &amp; {{ucfirst($eleve->cycle)}}</h4>
              </div>
            </div><!-- End testimonial item -->
            </div><!-- End testimonial item -->
            </a>
            <hr class="text-muted">
            </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->


































 <!-- Header with logos -->
        <div class="navbar-header navbar-light d-none d-md-flex align-items-md-center">
            <div class="navbar-brand navbar-brand-md">
               <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>

            <div class="navbar-brand navbar-brand-xs">
                <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>
        </div>
        <!-- /header with logos -->


        <!-- Mobile controls -->
        <div class="d-flex flex-1 d-md-none">
            <div class="navbar-brand mr-auto">
               <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>

            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>
        <!-- /mobile controls -->


        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-people"></i>
                        <span class="d-md-none ml-2">Users</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content wmin-md-300">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Elèves ajoutés</span>
                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                @foreach($Eleves as $eleve)
                                <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                                <li class="media">
                                    <div class="mr-3">
                                     @if(!$eleve->photo_eleve == '')
                                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="40" height="40" class="rounded-circle" alt="">
                                    @else
                                    <img src="/img/user.png" width="36" height="36" class="rounded-circle" alt="">
                                    @endif
                                    </div>
                                    <div class="media-body">
                                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="media-title font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</a>
                                        <span class="d-block text-muted font-size-sm">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d M, Y', strtotime($eleve->created_at))}}</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                                </li>
                                </a>
                                @endforeach
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="{{route('eleve_liste')}}" class="text-grey mr-auto">Voir tous</a>
                            <a href="#" class="text-grey"><i class="icon-eye"></i></a>
                        </div>
                    </div>
                </li>
            </ul>

            <span class="badge bg-pink-400 badge-pill ml-md-3 mr-md-auto">16 orders</span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="../../../../global_assets/images/lang/gb.png" class="img-flag mr-2" alt="">
                        English
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item english active"><img src="../../../../global_assets/images/lang/gb.png" class="img-flag" alt=""> English</a>
                        <a href="#" class="dropdown-item ukrainian"><img src="../../../../global_assets/images/lang/ua.png" class="img-flag" alt=""> Українська</a>
                        <a href="#" class="dropdown-item deutsch"><img src="../../../../global_assets/images/lang/de.png" class="img-flag" alt=""> Deutsch</a>
                        <a href="#" class="dropdown-item espana"><img src="../../../../global_assets/images/lang/es.png" class="img-flag" alt=""> España</a>
                        <a href="#" class="dropdown-item russian"><img src="../../../../global_assets/images/lang/ru.png" class="img-flag" alt=""> Русский</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="#" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">James Alexander</span>
                                                <span class="text-muted float-right font-size-sm">04:58</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Margo Baker</span>
                                                <span class="text-muted float-right font-size-sm">12:16</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Jeremy Victorino</span>
                                                <span class="text-muted float-right font-size-sm">22:48</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Beatrix Diaz</span>
                                                <span class="text-muted float-right font-size-sm">Tue</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Richard Vango</span>
                                                <span class="text-muted float-right font-size-sm">Mon</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light error">
                            <a href="#" class="text-grey mr-auto">All messages</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                 <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        @if(! $photoAdmin->isEmpty())
                        @foreach($photoAdmin as $user)
                        <img src="/Dossier/images_admin/{{$user->photo_user}}" class="rounded-circle mr-2" width="34" height="34" alt="">
                         @endforeach
                        @else
                        <img src="/img/user.png" class="rounded-circle mr-2" height="34" alt="">
                        @endif
                        <span>{{Auth::user()->name}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('admin_show')}}" class="dropdown-item"><i class="icon-user-plus"></i> Mon profil</a>
                        <a href="{{route('modalite_frais')}}" class="dropdown-item"><i class="icon-coins"></i> Finance</a>
                        <div class="dropdown-divider"></div>
                        <a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                         <i class="icon-exit3"></i>    Se déconnecter
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /navbar content -->

    </div>
    <!-- /main navbar -->









!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-fixed sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="sidebar-user-material-body">
                        <div class="card-body text-center">
                            @foreach($photos as $photo)
                            <a href=""><img src="/Dossier/images_ecole/{{$photo->photo_ecole}}" width="80" height="80" class="rounded-circle " alt=""></a>
                            @endforeach
                            <h6 class="mb-0 text-white text-shadow-dark">{{Auth::user()->ecole}}</h6>
                            <span class="font-size-sm text-white text-shadow-dark">{{Auth::user()->province}}</span>
                        </div>

                        <div class="sidebar-user-material-footer bg-info">
                            <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>Mon école</span></a>
                        </div>
                    </div>

                    <div class="collapse" id="user-nav">
                        <ul class="nav nav-sidebar">
                            <li class="nav-item">
                                <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="nav-link">
                                    <i class="icon-user-plus"></i>
                                    <span>Profile de l'école</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('modalite_frais')}}" class="nav-link">
                                    <i class="icon-coins"></i>
                                    <span>Finance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-comment-discussion"></i>
                                    <span>Messages</span>
                                    <span class="badge bg-success-400 badge-pill align-self-center ml-auto">58</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="nav-link">
                                    <i class="icon-cog5"></i>
                                    <span>Paramettres du compte</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                 <i class="icon-exit3"></i>
                                 <span> Se déconnecter</span>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                              </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                     <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!-- Main -->
                         <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link active">
                                    <i class="icon-home4"></i>
                                    <span>
                                        Accueil
                                        <span class="d-block font-weight-normal opacity-50">No active orders</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Cycles</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Cycles">
                            @forelse($cycles as $cycle)
                            <li class="nav-item"><a href="{{route('cycle', $cycle->slug)}}" class="nav-link">{{$cycle->cycle}}</a></li>
                            @empty
                            <li class="nav-item"><a  class="nav-link">Aucun cycle</a></li>
                            @endforelse
                            </ul>
                            </li>
                            @if($options)
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Options</span></a>
                                <ul class="nav nav-group-sub" data-submenu-title="Options">
                                    @forelse($options as $option)
                                    <li class="nav-item"><a href="{{route('option', $option->option)}}" class="nav-link">{{$option->option}}</a></li>
                                    @empty
                                    <li class="nav-item"><a  class="nav-link">Aucune option</a></li>
                                    @endforelse
                                </ul>
                            </li>
                            @endif
                            <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-users2"></i> <span>Elèves</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Elèves">
                            <li class="nav-item"><a href="{{route('ajout_eleve')}}" class="nav-link">Ajouter</a></li>
                            <li class="nav-item"><a href="{{route('eleve_liste')}}" class="nav-link">Elèves Ajoutés</a></li>
                            </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a class="nav-link"><i class="icon-user-tie"></i> <span>Personnel</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Personnel">
                            <li class="nav-item"><a href="{{route('ajout_personnel')}}" class="nav-link">Ajouter</a></li>
                            <li class="nav-item"><a href="{{route('personnel')}}" class="nav-link">Personnel Ajoutés</a></li>
                            <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Catégorie du personnel</a>
                                    <ul class="nav nav-group-sub">
                                     @foreach($PersonnelCategorie as $perso)
                                    <li class="nav-item"><a href="blog_classic_v.html" class="nav-link">{{$perso->fonction}}</a></li>
                                    @endforeach
                               </ul>
                            </li>
                            </ul>
                            </li>
                        <!-- /main -->
                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Structure</div> <i class="icon-menu" title="Forms"></i></li>
                        <li class="nav-item">
                        <a href="{{route('modalite_frais')}}"  class="nav-link"><i class="icon-coins"></i> <span>Finance</span></a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-envelope"></i> <span>Messages</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Messages">
                                <li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Nouveau</a></li>
                                <li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Boîte de reception</a></li>
                                <li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Message envoyé</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-folder-open"></i> <span>Mes Documents</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Mes Documents">
                                <li class="nav-item"><a href="editor_summernote.html" class="nav-link">Elèves</a></li>
                                <li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">Personnel</a></li>
                                <li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Bureau</a></li>
                                <li class="nav-item"><a href="editor_code.html" class="nav-link">Finance</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Pickers">
                                <li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time pickers</a></li>
                                <li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
                                <li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Form layouts">
                                <li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
                                <li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
                                <li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <!-- /forms -->


                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->

<section style="background: whitesmoke" id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="">
          <h2>Ecoles</h2>
          <p>suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row gy-4">

        <div class="col-lg-8 text-center">
        <div class="row">
          @forelse($ecoles as $ecole)

          <div class="col-lg-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
               @if(!$ecole->photo_ecole == '')
                <img src="/Dossier/images_ecole/{{$ecole->photo_ecole}}" class="border-muted rounded-circle" width="100" height="100" alt="">
                 @else
                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="border-white rounded-circle" width="100" height="100" alt="">
              @endif
              </div>
              <h4><a href="{{route('voir_ecole', [$ecole->id, $ecole->ecole])}}">{{$ecole->ecole}}</a></h4>
              <p>{{$ecole->province}}</p>
            </div>
          </div>

           @empty
           <div class="mt-2 mt-sm-0">
            <a> Aucune école enregistrée</a>
          </div>
        @endforelse
      </div>
      </div>
      <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Catégorie</h3>
              <ul>
                <li><strong>Adresse</strong>: </li>

              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Dévise de l'école:</h2>
              <p>
                je
              </p>
            </div>

          </div>
          </div>
    </section><!-- End Services Section -->


<div class="content-wrapper">
         <div style="background-image: url('/img/px21.jpg'); background-position: center;" class="">
                    <div class="sidebar-user-material-body">
                        <div class="card-body text-center">
                            <a href="#">
                                <span  class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt=""></span>
                            </a>
                            <h1 class="mb-0 text-white text-shadow-dark p-5">Gérer  votre Ecole Autrement</h1>
                            <span class="font-size-sm text-white text-shadow-dark h3">Si vous n'avez pas le compte de gestion, vous pouvez le créer avec facilité en remplissant le formulaire ci-dessous. </span>
                        </div>
                        <div class="sidebar-user-material-footer">
                            <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>Création de compte de gestion</span></a>
                        </div>
                    </div>
            </div>
<!-- Content area -->
            <div class="content">
                <!-- Collapsible options -->
                <!-- Accordion and collapsible -->
                <div class="row">
                    <div class="col-lg-3 text-center">
                    </div>


                    <div class="col-lg-6">
                        <!-- Basic collapsible -->


            <div class="card-group-control card-group-control-right">
         <form action="{{route('register')}}" method="POST" class="flex-fill">
          @csrf
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">

                <div class="form-group form-group-feedback form-group-feedback-right">
                    <input type="text" name="ecole" class="form-control" placeholder="Nom de votre école">
                     @error('ecole')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                    <div class="form-control-feedback">
                      <i class="icon-office text-muted"></i>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="text" name="name" class="form-control" placeholder="Nom du promoteur ou administrateur">
                        @error('name')
                         <span class="text-left text-muted">
                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                        </span>
                        @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-check text-muted"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="number" name="telephone" class="form-control" placeholder="Téléphone">
                        @error('telephone')
                       <span class="text-left text-muted">
                       <span style="color: darkred;" ><m>{{ $message }}</m></span>
                      </span>
                       @enderror
                        <div class="form-control-feedback">
                          <i class="icon-phone text-muted"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                        @error('password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-lock text-muted"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passe">
                        @error('confirme_password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-lock text-muted"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <select name="province" class="form-control">
                        <option value="Kinshasa">Kinshasa</option>
                        <option value="Matadi">Matadi</option>
                        <option value="Lubumbashi">Lubumbashi</option>
                        <option value="Maniema">Maniema</option>
                        <option value="Kisantu">Kisantu</option>
                        <option value="Luwozi">Luwozi</option>
                        <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                        <option value="Kolwezi">Kolwezi</option>
                        <option value="Goma">Goma</option>
                        <option value="Mbuji-mayi">Mbuji-mayi</option>
                        <option value="Kenge">Kenge</option>
                        <option value="Kikwiti">Kikwiti</option>
                        <option value="Nord-Kivu">Nord-Kivu</option>
                        <option value="Sud-Kivu">Sud-Kivu</option>
                        <option value="Boma">Boma</option>
                        <option value="Popo">Popo</option>
                        <option value="Muanda">Muanda</option>
                        </select>
                      </div>
                    </div>
                  </div>
                      <button type="submit" class="btn bg-teal-400 btn-labeled"> Créer Maintenant</button>
                      <a href="{{route('login')}}" class="btn bg-teal-400 btn-labeled"> J'ai un compte</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
                    <!-- /login card -->
                        </div>
                        <!-- /collapsible with right control button -->
                        </div>
                        <div class="col-lg-3">
                      </div>

                        <!-- /collapsible with different card styling -->

                    </div>
                </div>












<div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4 text-center">

                    </div>


                    <div class="col-lg-4">
                        <!-- Basic collapsible -->
                      <form method="POST" action="{{route('login')}}" >
                      @csrf

                      <div class="form-group">
                        <input type="text" name="telephone" class="form-control p-2" placeholder="Téléphone">
                        @error('telephone')
                       <span class="text-left text-muted">
                       <span style="color: darkred;" ><m>{{ $message }}</m></span>
                      </span>
                       @enderror
                      </div>

                      <div class="form-group">
                      <input type="password" name="password" class="form-control p-2 mt-2" placeholder="Mot de passe">
                        @error('password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror

                    </div>


                    <div class="form-group align-items-center">
                    <a href="login_password_recover.html" class="ml-auto">Mot de passe oublié ?</a>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Connexion <i class="icon-circle-right2 ml-2"></i></button>
                    </div>
                    <div class="form-group text-center text-muted content-divider">
                      <span class="px-2">Vous n'avez pas un compte ?</span>
                    </div>

                      <div class="form-group">
                      <a href="{{url('register')}}" class="btn btn-success btn-block">Créer compte</a>
                      </div>


                        </form>
                <!-- /login card -->
                        </div>


                         <div class="col-lg-4">
                    </div>

                        <!-- /collapsible with different card styling -->

                    </div>
                  <!-- /accordion and collapsible -->
                </div>
                </div>










<main id="main">

    <section id="" class="contact">
      <div class="container">

        <div class="section-header mt-3">
          <h2>Se connecter</h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>

      </div>


      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

   </main><!-- End #main -->





















 <div class="content-wrapper">
            <!-- Page header -->
                <!-- Homepage Slider -->
        <div class="">
            <div  id="sequence">
                <ul  class="sequence-canvas">
                    <!-- Slide 1 -->
                    <li  class="bg4">
                        <!-- Slide Title -->
                        <h2 class="title">Bienvenue sur 2-SIX </h2>
                        <!-- Slide Text -->

                    <h3 class="subtitle">La sécurité de la bonne gestion de votre école</h3>

                        <!-- Slide Image -->
                        <img class="slide-img" src="{{asset('/img/01.png')}}" alt="Slide 1" />
                    </li>
                    <!-- End Slide 1 -->
                    <!-- Slide 2 -->
                    <li class="bg3">
                        <!-- Slide Title -->
                        <h2 class="title">Gérer votre école Autrement</h2>
                        <!-- Slide Text -->
                        <h3 class="subtitle">avec sécurité et fiabilité</h3>
                        <!-- Slide Image -->
                        <img class="slide-img" src="{{asset('/img/02.png')}}" alt="Slide 2" />
                    </li>
                    <!-- End Slide 2 -->
                    <!-- Slide 3 -->
                    <li class="bg1">
                        <!-- Slide Title -->
                        <h2 class="title">Feature Rich</h2>
                        <!-- Slide Text -->
                        <h3 class="subtitle">Huge amount of components and over 30 sample pages!</h3>
                        <!-- Slide Image -->
                        <img class="slide-img" src="{{asset('/slide/img/homepage-slider/slide3.png')}}" alt="Slide 3" />
                    </li>
                    <!-- End Slide 3 -->
                </ul>
                <div class="sequence-pagination-wrapper">
                    <ul class="sequence-pagination">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Homepage Slider -->
            <!-- Content area -->
            <div class="content">
                <!-- Inner container -->
                <div class="d-flex align-items-start flex-column flex-md-row">
                    <!-- Left content -->
                    <div class="w-100 overflow-auto order-2 order-md-1">
                        <!-- Horizontal cards -->
                        <div class="row">
                            @forelse($ecoles as $ecole)
                            <div class="col-xl-6">
                                <div class="card blog-horizontal">
                                    <div class="card-body">

                                         <div class=" card-img-actions mr-md-3 mb-2 mb-md-0">
                                          <a  class="profile-thumb">
                                          @if(!$ecole->photo_ecole == '')
                                            <img src="/Dossier/images_ecole/{{$ecole->photo_ecole}}" class="border-white rounded-circle" width="48" height="48" alt="">
                                            @else
                                           <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="border-white rounded-circle" width="48" height="48" alt="">
                                          @endif
                                           </a>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="d-flex font-weight-semibold flex-nowrap my-1">
                                                <a href="#" class="text-default mr-2">{{$ecole->ecole}}</a>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                                        <ul class="list-inline list-inline-dotted mb-0">
                                            <li class="list-inline-item"><i class="icon-pin"></i> {{$ecole->province}}</li>
                                        </ul>
                                        <div class="mt-2 mt-sm-0">
                                            <a href="{{route('voir_ecole', [$ecole->id, $ecole->ecole])}}" class="badge bg-slate"> Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="mt-2 mt-sm-0">
                                <a> Aucune école enregistrée</a>
                            </div>
                            @endforelse
                         </div>
                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-3 mb-3">
                            <div class="pagination">

                            </div>
                        </div>
                        <!-- /pagination -->


                    </div>
                    <!-- /left content -->


                    <!-- Right sidebar component -->
                    <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

                        <!-- Sidebar content -->
                        <div class="sidebar-content">
                            <!-- Categories -->
                            <div  class="">
                                <div class="card-header bg-transparent header-elements-inline">
                                    <span class=" font-size-lg font-weight-semibold">Categories</span>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div class="nav nav-sidebar mb-2">
                                        <li class="nav-item-header font-size-xs text-uppercase">Development</li>
                                        @foreach($categorieEcole as $categorie)
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                {{$categorie->regime}}
                                                <span class="badge badge-secondary badge-pill ml-auto"> {{$categorie->count()}}</span>
                                            </a>
                                        </li>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <!-- /categories -->


                            <!-- Assigned users -->
                            <div class="">
                                <div class="card-header bg-transparent header-elements-inline">
                                    <span class="font-size-lg font-weight-semibold">Ecoles récentes</span>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="media-list">
                                        @foreach($ecolesRecentes as $eco)
                                        <li class="media">
                                            <a href="#" class="mr-3">
                                                <img src="/Dossier/images_ecole/{{$eco->photo_ecole}}" width="36" height="36" class="rounded-circle" alt="">
                                            </a>
                                            <div class="media-body">
                                                <div class="font-weight-semibold">{{$eco->ecole}}</div>
                                                <span class="font-size-sm text-muted">{{$eco->province}}</span>
                                            </div>
                                            <div class="ml-3 align-self-center">
                                                <div class="dropdown">
                                                    <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{route('voir_ecole', [$eco->id, $eco->ecole])}}" class="dropdown-item"><i class="icon-eye"></i> Voir plus</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- /assigned users -->
                        </div>
                        <!-- /sidebar content -->
                    </div>
                    <!-- /right sidebar component -->
                </div>
                <!-- /inner container -->
            </div>
             <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <script src="{{asset('/slide/js/bootstrap.min.js')}}"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="{{asset('/slide/js/jquery.fitvids.js')}}"></script>
        <script src="{{asset('/slide/js/jquery.sequence-min.js')}}"></script>
        <script src="{{asset('/slide/js/jquery.bxslider.js')}}"></script>
        <script src="{{asset('/slide/js/main-menu.js')}}"></script>
        <script src="{{asset('/slide/js/template.js')}}"></script>













<div class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="navbar-brand">
            <a href="{{url('/')}}" class="d-inline-block">
                 <img src="/img/ds.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-paragraph-justify3"></i>
            </button>

        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <div class="navbar-nav">

                        <form action="#">
                            <div class="input-group">
                                <div class="form-group-feedback form-group-feedback-left">
                                    <input style="background: none; border: none; color: white"  type="text" class="form-control form-control-lg alpha-grey"  placeholder="Rechercher">
                                    <div class="form-control-feedback form-control-feedback-lg">

                                    </div>
                                </div>

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-slate"> <i class="icon-search4 text-white"></i></button>
                                </div>
                            </div>
                        </form>
            </div>


            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">

                        Menu
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-body p-2">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-12">
                                    <a href="{{url('/')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-office icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">écoles</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-12">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-users text-pink-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Elèves</div>
                                    </a>

                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-google-drive text-success-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Professeurs</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-12">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-user-tie text-info-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Parents</div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="{{url('/')}}" class="navbar-nav-link ">
                        Accueil
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link">
                        Contact
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link">
                        À propos
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{route('login')}}" class="navbar-nav-link btn btn-slate text-uppercase">
                        Gérer
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->















































    <!-- Main navbar -->
    <div  class="navbar navbar-expand-md navbar-dark  fixed-top">
        <div class="navbar-brand wmin-200">
           <a href="" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <div class="navbar-nav">
                 <ul class="navbar-nav">

                <li class="nav-item dropdown dropdown-user">
                <a href="{{url('/')}}" class="navbar-nav-link d-flex align-items-center"><span>Accueil</span></a>
                </li>

                <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center"><span>À propos</span></a>
                </li>

                <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center"><span>Contact</span></a>
                </li>

            </ul>
            </div>

            <span class="badge bg-pink ml-md-auto mr-md-3">2-SIX</span>
            <div class="navbar-nav">

                        <form action="#">
                            <div class="input-group">
                                <div class="form-group-feedback form-group-feedback-left">
                                    <input style="background: none; border: none; color: white"  type="text" class="form-control form-control-lg alpha-grey"  placeholder="Rechercher">
                                    <div class="form-control-feedback form-control-feedback-lg">

                                    </div>
                                </div>

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-slate"> <i class="icon-search4 text-muted"></i></button>
                                </div>
                            </div>
                        </form>

            </div>
        </div>
    </div>
    <!-- /main navbar -->
























    <!-- Main navbar -->
    <div style="background: whitesmoke" class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="navbar-brand wmin-200">
           <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                <i class="icon-paragraph-justify3"></i>
                </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bell2"></i>
                        <span class="d-md-none ml-2">Activity</span>
                        <span class="badge badge-pill badge-mark bg-warning-400  border-orange-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Latest activity</span>
                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                        <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                        <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
                                        <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Shipping cost to the Netherlands has been reduced, database updated
                                        <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
                                    </div>

                                    <div class="media-body">
                                        New review received on <a href="#">Server side integration</a> services
                                        <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                        <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#" class="text-grey mr-auto">All activity</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class="badge bg-success-400 ml-md-auto mr-md-3">En ligne</span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bubbles5"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-pill badge-mark bg-orange-400 border-orange-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="#" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Beatrix Diaz</span>
                                                <span class="text-muted float-right font-size-sm">Tue</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer justify-content-center p-0">
                            <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        @if(! $photoAdmin->isEmpty())
                        @foreach($photoAdmin as $user)
                        <img src="/Dossier/images_admin/{{$user->photo_user}}" class="rounded-circle mr-2" height="34" alt="">
                         @endforeach
                        @else
                        <img src="/img/user.png" class="rounded-circle mr-2" height="34" alt="">
                        @endif
                        <span>{{Auth::user()->name}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('admin_show')}}" class="dropdown-item"><i class="icon-user-plus"></i> Mon profil</a>
                        <a href="{{route('modalite_frais')}}" class="dropdown-item"><i class="icon-coins"></i> Finance</a>
                        <div class="dropdown-divider"></div>
                        <a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                         <i class="icon-exit3"></i>    Se déconnecter
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->







<div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-fixed sidebar-expand-md">
            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Menu
                <a  class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->
            <!-- Sidebar content -->
            <div class="sidebar-content">
                 <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="card-body">
                            <div class="media">
                                <div class="mr-3">
                                    @foreach($photos as $photo)
                                    <a href=""><img src="/Dossier/images_ecole/{{$photo->photo_ecole}}" width="38" height="38" class="rounded-circle " alt=""></a>
                                    @endforeach
                                </div>
                                <div class="media-body">
                                    <div class="media-title font-weight-semibold bold"><strong>{{Auth::user()->ecole}}</strong></div>
                                    <div class="font-size-xs opacity-50">
                                        <i class="icon-pin font-size-sm"></i> &nbsp;{{Auth::user()->province}}
                                    </div>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->
                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!-- Main -->
                         <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link active">
                                    <i class="icon-home4"></i>
                                    <span>
                                        Accueil
                                        <span class="d-block font-weight-normal opacity-50">No active orders</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Cycles</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Cycles">
                            @forelse($cycles as $cycle)
                            <li class="nav-item"><a href="{{route('cycle', $cycle->slug)}}" class="nav-link">{{$cycle->cycle}}</a></li>
                            @empty
                            <li class="nav-item"><a  class="nav-link">Aucun cycle</a></li>
                            @endforelse
                            </ul>
                            </li>
                            @if($options)
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Options</span></a>
                                <ul class="nav nav-group-sub" data-submenu-title="Options">
                                    @forelse($options as $option)
                                    <li class="nav-item"><a href="{{route('option', $option->option)}}" class="nav-link">{{$option->option}}</a></li>
                                    @empty
                                    <li class="nav-item"><a  class="nav-link">Aucune option</a></li>
                                    @endforelse
                                </ul>
                            </li>
                            @endif
                            <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-users2"></i> <span>Elèves</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Elèves">
                            <li class="nav-item"><a href="{{route('ajout_eleve')}}" class="nav-link">Ajouter</a></li>
                            <li class="nav-item"><a href="{{route('eleve_liste')}}" class="nav-link">Elèves Ajoutés</a></li>
                            </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a class="nav-link"><i class="icon-user-tie"></i> <span>Personnel</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Personnel">
                            <li class="nav-item"><a href="{{route('ajout_personnel')}}" class="nav-link">Ajouter</a></li>
                            <li class="nav-item"><a href="{{route('personnel')}}" class="nav-link">Personnel Ajoutés</a></li>
                            <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Catégorie du personnel</a>
                                    <ul class="nav nav-group-sub">
                                     @foreach($PersonnelCategorie as $perso)
                                    <li class="nav-item"><a href="blog_classic_v.html" class="nav-link">{{$perso->fonction}}</a></li>
                                    @endforeach
                               </ul>
                            </li>
                            </ul>
                            </li>
                        <!-- /main -->
                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Structure</div> <i class="icon-menu" title="Forms"></i></li>
                        <li class="nav-item nav-item-submenu">
                        <a href="{{route('modalite_frais')}}"  class="nav-link"><i class="icon-coins"></i> <span>Finance</span></a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-envelope"></i> <span>Messages</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Messages">
                                <li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Nouveau</a></li>
                                <li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Boîte de reception</a></li>
                                <li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Message envoyé</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-folder-open"></i> <span>Mes Documents</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Mes Documents">
                                <li class="nav-item"><a href="editor_summernote.html" class="nav-link">Elèves</a></li>
                                <li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">Personnel</a></li>
                                <li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Bureau</a></li>
                                <li class="nav-item"><a href="editor_code.html" class="nav-link">Finance</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Pickers">
                                <li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time pickers</a></li>
                                <li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
                                <li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Form layouts">
                                <li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
                                <li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
                                <li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <!-- /forms -->


                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->
    <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">


                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a  class="breadcrumb-item"><i class="icon-calendar mr-2"></i> {{AnneeScolaire()}}</a>

                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                        <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Parametres
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('ajout_eleve')}}" class="dropdown-item"><i class="icon-user-plus"></i> Ajouter élève</a>
                            <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="dropdown-item"><i class="icon-cog3"></i> Configuration compte</a>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->







































<div class="navbar navbar-expand-md navbar-dark bg-slate-700">
        <div class="mb-3 mt-2">
        <h6 class="mb-0 font-weight-semibold">
         <img width="70" src="/img/ds.png">
        </h6>
        <span class=" d-block">Gérer  votre école autrement avec sécurité et fiabilité.</span>
        </div>
</div>

 <div class="card-body">
                                        Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                    </div>
 <!-- Main navbar -->
    <div class="navbar navbar-expand-md  mt-3">

    </div>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content bg-blue-800">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <div class="row">
                  <div class="col-md-6">
                    <br>

                    <div class="login-form mt-5">
                    <img class="text-center" src="/img/ds.png">
                   <p class="mt-1 h4">Gérer  votre établissement Scolaire autrement avec sécurité et fiabilité.</p>
                   </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                <form class="login-form mt-1" method="POST" action="{{route('login')}}">
                 @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="text" name="telephone" class="form-control p-3" placeholder="E-mail ou Numéro mobile">
                                @error('telephone')
                                 <span class="text-left text-muted">
                                  <span style="color: darkred;" >{{ $message }}</span>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="password" name="password" class="form-control p-3" placeholder="Mot de passe">
                                @error('password')
                                 <span class="text-left text-muted">
                                  <span style="color: darkred;" >{{ $message }}</span>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group d-flex align-items-center">

                                <a href="login_password_recover.html" class="ml-auto">Mot de passe oublié ?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Connexion <i class="icon-circle-right2 ml-2"></i></button>
                            </div>
                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Vous n'avez pas un compte ?</span>
                            </div>

                            <div class="form-group">
                                <a href="{{url('register')}}" class="btn btn-success btn-block">Créer compte</a>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- /login card -->
            </div>

            </div>

            </div>
            <!-- /content area -->



 FraisFixePourEleve










 public function show($id)
    {
        $eleves = DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('moyekolis.id', $id)
                ->where('user_id', Auth::user()->id)
                ->get();
        foreach($eleves as $eleve){
                $classe = $eleve->classe;
                $cycle = $eleve->cycle;
        }
        $trims = Modalite::where('cycles', $cycle)->where('classe', $classe)->DISTINCT('trimestre')->get();
        foreach($trims as $trim){$trima = $trim->trimestre;}
        return view('Eleve.voir_eleve', [
            'FraisFixePourEleve' => $trima == $this->tous ? $this->modaTous($classe, $cycle) : $this->modaliteParTrimestre($classe, $cycle, $this->premierTri),
            'FraisFixePourDeuxiemeT' => $trima == $this->tous ? $this->modaTous($classe, $cycle) : $this->modaliteParTrimestre($classe, $cycle, $this->deuxiemeTri),
            'FraisFixePourTroisiemeT' => $trima == $this->tous ? $this->modaTous($classe, $cycle) : $this->modaliteParTrimestre($classe, $cycle, $this->troisiemeTri),
        ], $this->Kamata($this->getUser(), $id));
    }


  protected function modalites($classe, $cycle, $user){
        return Modalite::where('classe', isset($classe))
                        ->where('cycles', isset($cycle))
                        ->where('annee_modalite', AnneeSco())
                        ->where('user_id', $user)->get();
      }

      protected function modaliteParTrimestre($classe, $cycle, $trimestre, $user){
        return Modalite::where('classe', isset($classe))
                        ->where('cycles', isset($cycle))
                        ->where('trimestre', $trimestre)
                        ->where('annee_modalite', AnneeSco())
                        ->where('user_id', $user)->paginate(1);
      }

      public function FraisFixePourEleve($user, $id){
        $eleves = DB::table('kelasis')
                    ->join('moyekolis','kelasis.moyekoli_id','moyekolis.id')
                    ->where('moyekolis.id', $id)->where('user_id', $user)->get();
        foreach($eleves as $eleve){
                $cla = $eleve->classe;
                $cy = $eleve->cycle;
        }
        $modalites = $this->modalites($cla, $cy, $user);
        foreach($modalites as $modalite){
                $moda = $modalite->trimestre;
        }
        if($moda == $this->tous){
            return $this->modalites($cla, $cy, $user);
        }elseif($moda == $this->premierTri){
            return $this->modaliteParTrimestre($cla, $cy,$this->premierTri,$user);
        }elseif($moda == $this->deuxiemeTri){
            return $this->modaliteParTrimestre($cla, $cy,$this->deuxiemeTri,$user);
        }elseif($moda == $this->troisiemeTri){
            return $this->modaliteParTrimestre($cla, $cy,$this->troisiemeTri,$user);
        }else{
        }
    }







   <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-coins"></i> <span>Finance</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="General pages">
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Frais Scolaires</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="blog_classic_v.html" class="nav-link">Classe</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Timelines</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="timelines_left.html" class="nav-link">Left timeline</a></li>
                                        <li class="nav-item"><a href="timelines_right.html" class="nav-link">Right timeline</a></li>
                                        <li class="nav-item"><a href="timelines_center.html" class="nav-link">Centered timeline</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Gallery</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media grid</a></li>
                                        <li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media with titles</a></li>
                                        <li class="nav-item"><a href="gallery_description.html" class="nav-link">Media with description</a></li>
                                        <li class="nav-item"><a href="gallery_library.html" class="nav-link">Media library</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

onclick="window.addEventListener('load', window.print())"

@extends('auth.master', ['title'=>'Connexion'])
@section('section')



@include('auth.footer')
@stop













<div class="content">
        <!-- Inner container -->

@include('cycles.effectif_cycle')

</div>







@empty
            <div  class="text-center text-muted">
            <i style="font-size: 50px;" class="icon-notification2"></i>
            <h5>Aucun élève</h5>

          </div>

@foreach($VoirCycle as $cycle)
<div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
              <i class="icon-users4 icon-2x text-success-400 border-success-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="card-title">Effectif {{$cycle->cycle}}</h5>
                <a class="btn bg-success-400">0 élève</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-woman icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="card-title">Fille</h5>
                <a  class="btn bg-warning-400">0 élève</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-man icon-2x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="card-title">Garçon</h5>
                <a  class="btn bg-blue">0 élève</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-user-cancel icon-2x text-pink border-pink border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="card-title">Abandon</h5>
                <a  class="btn bg-pink">0 élève</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /info blocks -->
  @endforeach

         <!-- Vertical cards view -->
        <div class="pt-2 mb-3">
          <h6 class="mb-0 font-weight-semibold">
            Elèves
          </h6>
          <span class="text-muted d-block">{{$cycle->cycle}}</span>
        </div>
        @endforeach
        <div class="row">
          <div class="col-xl-3 col-sm-6">
            <div class="">
              <div class="card-body text-center">
                <div class="card-img-actions d-inline-block mb-3">
                  <img class="img-fluid rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
                  <div class="card-img-actions-overlay card-img rounded-circle">
                    <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                      <i class="icon-plus3"></i>
                    </a>
                    <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>

                  <h6 class="font-weight-semibold mb-0">James Alexander</h6>
                  <span class="d-block text-muted">Lead developer</span>

                  <div class="list-icons list-icons-extended mt-3">
                            <a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
                            <a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
                            <a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
                          </div>
                </div>
              </div>
          </div>























</div>


   <!-- Footer -->
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                <i class="icon-unfold mr-2"></i>
                Voir plus
            </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-footer">
            <span class="navbar-text">
                &copy; 2023. <a href="#">{{Auth::user()->ecole}}</a> / <a href="http://themeforest.net/user/Kopyov" target="_blank">{{Auth::user()->province}}</a>
            </span>

            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
            </ul>
        </div>
    </div>
    <!-- /footer -->

</body>
</html>









<div class="page-header">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('home')}}" class="breadcrumb-item"><i class="icon-phone2 mr-2"></i> Téléphone</a>
                    <span class="breadcrumb-item active">{{Auth::user()->telephone}}</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Parametres
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="dropdown-item"><i class="icon-statistics"></i> Info Ecole</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h3><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold text-muted">{{Auth::user()->ecole}}</span></h3>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-indigo-400"></i> <span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-indigo-400"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-indigo-400"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>
</div>
    <!-- /page header -->


    <!-- Page content -->
    <div class="page-content pt-0">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">Main sidebar</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">
                <div class="card card-sidebar-mobile">

                    <!-- Header -->
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title"><i class="icon-folder-open"></i></h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="card-body">
                            <div class="media">
                                <div class="mr-3">
                                    @foreach($photos as $photo)
                                    <a href=""><img src="/Dossier/images_ecole/{{$photo->photo_ecole}}" width="38" height="38" class="rounded-circle " alt=""></a>
                                    @endforeach
                                </div>

                                <div class="media-body">
                                    <div class="media-title font-weight-semibold bold"><strong>{{Auth::user()->ecole}}</strong></div>
                                    <div class="font-size-xs opacity-50">
                                        <i class="icon-pin font-size-sm"></i> &nbsp;{{Auth::user()->province}}
                                    </div>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="card-body p-0">
                        <ul class="nav nav-sidebar" data-nav-type="accordion">

                            <!-- Main -->
                            <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">Ecole</div> <i class="icon-menu" title="Main"></i></li>
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link active">
                                    <i class="icon-home4"></i>
                                    <span>
                                        Accueil
                                        <span class="d-block font-weight-normal opacity-50">No active orders</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Cycles</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                    @forelse($cycles as $cycle)
                                    <li class="nav-item"><a href="" class="nav-link">{{$cycle->cycle}}</a></li>
                                    @empty
                                    <li class="nav-item"><a  class="nav-link">Aucun cycle</a></li>
                                    @endforelse
                                </ul>
                            </li>

                            @if($options)
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Options</span></a>

                                <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                    @forelse($options as $option)
                                    <li class="nav-item"><a href="index.html" class="nav-link">{{$option->option}}</a></li>
                                    @empty
                                    <li class="nav-item"><a  class="nav-link">Aucune option</a></li>
                                    @endforelse
                                </ul>
                            </li>
                            @endif

                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-users4"></i> <span>Elèves</span></a>
                            <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="{{route('ajout_eleve')}}" class="nav-link">Ajouter</a></li>
                            <li class="nav-item"><a href="{{route('eleve_liste')}}" class="nav-link">Liste des élèves</a></li>
                            </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-user-tie"></i> <span>Personnel</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                            <li class="nav-item"><a href="{{route('ajout_personnel')}}" class="nav-link">Ajouter</a></li>
                            <li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Liste du personnel</a></li>
                            </ul>
                            </li>
                            <!-- /main -->















<div class="content-wrapper">

      <!-- Content area -->
      <div class="content">
        <!-- Orders history (datatable) -->
        <div class="card">
          <div class="card-header bg-transparent header-elements-inline">
            <h6 class="card-title">Liste des élèves</h6>
            <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
              </div>
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>Status</th>
                <th>Sexe</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Eleves as $eleve)
              <tr>
                <td>
                  <div class="media">
                    <a href="#" class="mr-3">
                      <img style="height: 50px; width: 50px; border-radius: 50%" src="/uploads/image_eleves/{{$eleve->photo_eleve}}"  alt="">
                    </a>
                    <div class="media-body align-self-center">
                      <a href="#" class="font-weight-semibold"><strong>{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</strong></a>
                      <div class="text-muted font-size-sm">
                        <span class="badge badge-mark bg-success border-success mr-1"></span>
                        {{date('d M, Y', strtotime($eleve->created_at))}}
                      </div>
                    </div>
                  </div>
                </td>
                <td>{{$eleve->sexe}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /orders history (datatable) -->
      </div>
    </div>
  <!-- /content area -->



<div class="navbar">

        <!-- Bottom right menu -->
        <ul class="fab-menu fab-menu-fixed fab-menu-bottom-right" data-fab-toggle="click">
          <li>
            <a class="fab-menu-btn btn bg-primary-400 btn-float btn-rounded btn-icon">
              <i class="fab-icon-open icon-plus3"></i>
              <i class="fab-icon-close icon-cross2"></i>
            </a>

            <ul class="fab-menu-inner">
              <li>
                <div data-fab-label="youtube">
                  <a href="https://www.youtube.com/channel/UCxxgPy0XQ1Dkd2zG0qaLRTw" class="btn bg-default-400 btn-rounded btn-icon btn-float">
                    <img width="100" src="{{asset('public/img/youtube.png')}}" class="img-responsive" alt="">
                  </a>
                </div>
              </li>
              <li>
                <div data-fab-label="facebook">
                  <a href="https://www.facebook.com/bureauchristkongo.matadi/" class="btn bg-default-400 btn-rounded btn-icon btn-float">
                    <img width="100" src="{{asset('public/img/facebook.png')}}" class="img-responsive" alt="">
                  </a>
                </div>
              </li>
              <li>
                <div data-fab-label="Qui sommes nous ?">
                  <a data-toggle="modal" data-target="#modal_default" class="btn btn-default btn-rounded btn-icon btn-float">
                    <i class="icon-rotate-ccw"></i>
                  </a>
                  <span class="status-mark border-pink-400"></span>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- /bottom right menu -->

    </div>



















 $gestion = gestionnaire::where('user_id', Auth::user()->id)->get();
        $cycle = Cycle::where('user_id', Auth::user()->id)->get();
        $ecole = Info_ecole::where('user_id', Auth::user()->id)->get();
        $option = Option::where('user_id', Auth::user()->id)->get();
        $admin = Admin::where('user_id', Auth::user()->id)->get();
        if($gestion == '' || $ecole == '' || $cycle == '' || $option == '' || $admin == ''){
            return redirect()->route('home');
        }

        return $next($request);









@extends('layouts.master', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')
<!-- Content area -->
            <div class="content">
                @include('ecole.message_ecole')
                <!-- Form action components -->
                <div class="row">
                    <div class="col-md-12">

                        <!-- Left aligned buttons -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title">Créer un gestionnaire</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                            <form action="{{route('gestion_store')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom:</label>
                                        <input type="text" name="nom" class="form-control" placeholder="Nom">
                                        @error('nom')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Téléphone:</label>
                                        <input type="text" name="telephone" class="form-control" placeholder="Téléphone">
                                        @error('telephone')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    </div>
                                        <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Code</label>
                                        <input type="password" name="code" class="form-control" placeholder="code">
                                        @error('code')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Rôle:</label>
                                    <select class="form-control" name="role" id="exampleSelect1">
                                    <option value="FI">Financier</option>
                                    <option value="CI">Charger d'inscription</option>
                                    </select>
                                    </div>
                                    </div>
                                    </div>


                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date de naissance:</label>
                                        <input type="date" name="date_ne" class="form-control" placeholder="Date de naissance">
                                        @error('nom')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Qualification:</label>
                                    <select class="form-control" name="qualification" id="exampleSelect1">
                                    <option value="SRF">SRF</option>
                                    <option value="D6">D6</option>
                                    <option value="Gradué">Gradué</option>
                                    <option value="Licencié">Licencié</option>
                                    <option value="Docteur">Docteur</option>
                                    <option value="S.E">S.E</option>
                                    </select>
                                    </div>
                                    </div>
                                    </div>
                                        <div class="row">
                                    <div class="col-md-6">
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Etat civil:</label>
                                        <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="etat_civil" value="Marié">
                                                    Marié
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="etat_civil" value="Célibataire">
                                                    Célibataire
                                                </label>
                                            </div>
                                            @error('sexe')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sexe:</label>
                                        <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="sexe" value="M">
                                                    Homme
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="sexe" value="F">
                                                    Femme
                                                </label>
                                            </div>
                                            @error('sexe')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Photo de gestionnaire:</label>
                                <div class="col-lg-10">
                                    <input type="file" name="photo_gestion" class="file-input" data-fouc>
                                    @error('photo_gestion')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                    <div class="d-flex justify-content-start align-items-center">

                                        <button type="submit" class="btn bg-blue ml-3">Confirmer <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- /content area -->
@include('layouts.footer')
@endsection







<img class="text-center" src="/img/dsix.png">


 <td>{{$eleve->sexe}}</td>
                <td>{{$eleve->date_ne}}</td>
                <td>
                  <a href="#">{{$eleve->annee_scolaire}}</a>
                </td>
                <td>
                  <h6 class="mb-0 font-weight-semibold">{{Auth::user()->ecole}}</h6>
                </td>
                <td class="text-center">
                  <div class="list-icons">
                    <div class="list-icons-item dropdown">
                      <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                        <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                        <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                      </div>
                    </div>
                  </div>
                </td>





                <th>Date de naissance</th>
                <th>Année scolaire</th>
                <th>Ecole</th>
                <th></th>

































<tr>
                                    <td>Error type</td>
                                    <td><button type="button" class="btn btn-light" id="erreur_ecole">Launch <i class="icon-play3 ml-2"></i></button></td>
                                    <td>Error notification type using <code>type: error</code> option</td>
                                </tr>






























<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark navbar-slide-top fixed-top">
		<div class="navbar-brand">
			<a href="{{route('home')}}" class="d-inline-block">
				<img src="/img/D6.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
				<li class="nav-item dropdown">
				<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>

									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">En ligne</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>

										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						@foreach($users as $user)
						<img src="/Dossier/images_admin/{{$user->photo_user}}" class="rounded-circle mr-2" height="34" alt="">
						@endforeach
						<span>{{Auth::user()->name}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                         <i class="icon-switch2"></i>    Se déconnecter
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      </a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
