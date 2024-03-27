@extends('layouts.master1', ['title'=> 'Elèves'])
@section('section')
@include('Eleve.tete')
<div class="main-container">
    <div class="pd-ltr-10 xs-pd-10-10">
        <div class="min-height-200px">
            <div class="row clearfix">
                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{route('ajout_eleve')}}">
                    <div class="card card-box">
                        <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span class="card-title weight-500">Ajouter élève</span></div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-center">
                                <span class="micon bi bi-person-plus font-30 text-muted"></span>
                                </p>
                                <footer class="">
                                <a href="{{route('ajout_eleve')}}" class="btn bg-light text-"><i class="icon-copy bi bi-plus-lg"></i></a>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{route('eleve_liste')}}">
                    <div class="card card-box">
                        <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span class="card-title weight-500">Tableau des élèves</span></div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-center">
                                    <span class="micon bi bi-people font-30 text-muted"></span>
                                </p>
                                <footer class="">
                                    <a href="{{route('eleve_liste')}}" class="btn bg-light text-"><i class="icon-copy bi bi-plus-lg"></i></a>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{route('eleve_quitter')}}">
                    <div class="card card-box">
                        <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span class="card-title weight-500">Abandon</span></div>

                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-center">
                                    <span class="micon bi bi-person-x font-30 text-muted"></span>
                                </p>
                                <footer class="">
                                    <a href="{{route('eleve_quitter')}}" class="btn bg-light text-"><i class="icon-copy bi bi-plus-lg"></i></a>
                                </footer>
                            </blockquote>

                        </div>
                    </div>
                    </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@include('layouts.footer1')
@stop

