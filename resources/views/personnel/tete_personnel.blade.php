<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header card-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    @if (Route::is('ajout_personnel'))
                                        <a class="">Ajouter</a>
                                    @elseif(Route::is('personnel'))
                                        <a class="">Mes Personnel</a>
                                    @elseif(Route::is('eleve_quitter'))
                                        <a class="">Abandon</a>
                                    @elseif(Route::is('edit_recu'))
                                        @foreach ($VoirEleve as $eleve)
                                            <a class=""> {{ $eleve->nom }} {{ $eleve->post_nom }}
                                                {{ $eleve->prenom }}</a>
                                        @endforeach
                                    @else
                                        @foreach ($VoirEleve as $eleve)
                                            <a class=""> {{ $eleve->nom }} {{ $eleve->post_nom }}
                                                {{ $eleve->prenom }}</a>
                                        @endforeach
                                    @endif
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Personnel
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle text-white" role="button" data-toggle="dropdown">
                                Personnel
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('ajout_personnel') }}" class="dropdown-item"><i
                                        class="icon-user-plus"></i> Ajouter personnel</a>

                                <a href="{{ route('personnel') }}" class="dropdown-item"><i class="icon-user-check"></i>
                                    Mes personnel</a>
                                <a href="{{ route('personnel_principal') }}" class="dropdown-item"><i
                                        class="icon-reset"></i> Retour</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
