<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header card-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    @if(Route::is('eleve_liste'))
                                    <a class="weight-600">Tableau</a>
                                    @elseif(Route::is('ajout_eleve'))
                                    <a class="">Ajouter</a>
                                    @elseif(Route::is('eleve_quitter'))
                                    <a class="">Abandon</a>
                                    @elseif(Route::is('edit_recu'))
                                    @foreach($VoirEleve as $eleve)
                                    <a class=""> {{$eleve->nom}} {{$eleve->post_nom}}
                                        {{$eleve->prenom}}</a>
                                    @endforeach
                                    @else
                                    @foreach($VoirEleve as $eleve)
                                    <a class=""> {{$eleve->nom}} {{$eleve->post_nom}}
                                        {{$eleve->prenom}}</a>
                                    @endforeach
                                    @endif
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Elève
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle text-white" role="button" data-toggle="dropdown">
                                Plus
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{route('ajout_eleve')}}">Ajouter élève</a>
                                <a class="dropdown-item" href="{{route('eleve_liste')}}">Tableau des élèves</a>
                                <a class="dropdown-item" href="{{route('eleve_quitter')}}">Abandon</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
