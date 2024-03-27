<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header card-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-right">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    @if (Route::is('journal_frais') or
                                            Route::is('modalite_fixe') or
                                            Route::is('modalité_frais') or
                                            Route::is('frais_trimestre') or
                                            Route::is('frais_trimestre') or
                                            Route::is('frais_premier_trimestre') or
                                            Route::is('frais_deuxieme_trimestre') or
                                            Route::is('frais_troisieme_trimestre') or
                                            Route::is('rapport_frais_scolaire'))
                                        <h4><i class="icon-arrow-left52 mr-2"></i> <span
                                                class="font-weight-semibold">Frais</span> - Scolaires</h4>
                                        <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                                class="icon-more"></i></a>
                                    @elseif(Route::is('journal_caisse') or Route::is('journal_rapport'))
                                        <h4><i class="icon-arrow-left52 mr-2"></i> <span
                                                class="font-weight-semibold">Journal</span> - Caisse</h4>
                                        <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                                class="icon-more"></i></a>
                                    @elseif(
                                    Route::is('depense') or
                                    Route::is('tableaudepense')
                                    )
                                        <h4><i class="icon-arrow-left52 mr-2"></i> <span
                                                class="font-weight-semibold">Dépenses</span></h4>
                                        <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                                class="icon-more"></i></a>
                                    @elseif(Route::is('autre_frais') or Route::is('rapport_autre_frais'))
                                        <h4><i class="icon-arrow-left52 mr-2"></i> <span
                                                class="font-weight-semibold">Autre</span> - Frais</h4>
                                        <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                                class="icon-more"></i></a>
                                    @else
                                        <h4><i class="icon-arrow-left52 mr-2"></i> <span
                                                class="font-weight-semibold">Finance</span> - E</h4>
                                        <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                                class="icon-more"></i></a>
                                    @endif
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Finance
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            @if (Route::is('modalite_frais'))
                                <span class="micon bi bi-pie-chart font-30 text-muted"></span>
                            @else
                                <a class="dropdown-toggle btn btn-primary text-white" role="button"
                                    data-toggle="dropdown">
                                    Finance
                                </a>
                            @endif
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('journal_frais') }}" class="dropdown-item font-14"><i
                                        class="icon-cash3"></i>
                                    Frais scolaires</a>
                                <a href="{{ route('autre_frais') }}" class="dropdown-item font-14"><i
                                        class="icon-cash2"></i>
                                    Autres frais</a>
                                <a href="{{ route('journal_caisse') }}" class="dropdown-item font-14"><i
                                        class="icon-stack-text"></i> Journal de Caisse</a>
                                <a href="{{ route('depense') }}" class="dropdown-item font-14"><i
                                        class="icon-stack-text"></i>
                                    Dépenses</a>
                                <a href="" class="dropdown-item"><i class="icon-stack-check"></i> Caisse - E</a>
                                <a href="{{ route('modalite_frais') }}" class="dropdown-item font-14"><i
                                        class="icon-reset"></i>
                                    Finance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
