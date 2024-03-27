<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

                    <div class="page-header">
                        @include('ebandeli.ebandeli4')
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <nav aria-label="breadcrumb" role="navigation">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            @if(Route::is('info_ecole') OR Route::is('info_ecole_show'))
                                            <a class="text-muted h5">Information de l'école</a>
                                            @elseif (Route::is('cycle_ecole') OR Route::is('cycle_show'))
                                            <a class="text-muted h5">Cycle</a>
                                            @elseif (Route::is('option_ecole') OR Route::is('option_show'))
                                            <a class="text-muted h5">Option</a>
                                            @elseif (Route::is('info_admin') OR Route::is('admin_show'))
                                            <a class="text-muted h5">Administrateur</a>
                                            @else
                                            @endif
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Configuration du compte
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <div class="dropdown">
                                    <a class="dropdown-toggle"  role="button" data-toggle="dropdown">

                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route($photoAdmin->isEmpty() ?  'info_ecole':'info_ecole_show')}}">Infos école</a>
                                        <a class="dropdown-item" href="{{route($photoAdmin->isEmpty() ?  'info_admin' :'admin_show')}}">Administrateur</a>
                                        <a class="dropdown-item" href="{{route($cycles->isEmpty() ?  'cycle_ecole' :'cycle_show')}}">Cycle</a>
                                        <a class="dropdown-item" href="{{route($options->isEmpty() ?  'option_ecole' :'option_show')}}">Option</a>
                                        <a class="dropdown-item" href="">Multiple gestionnaire</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

