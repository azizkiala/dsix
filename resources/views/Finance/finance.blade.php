@extends('layouts.master1', ['title'=> 'Finance'])
@section('section')

    @include('Finance.tete_finance')


<div class="main-container">
    <div class="pd-ltr-10 xs-pd-10-1">
        <div class="min-height-200px">
            <div class="row clearfix">
                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{ route('journal_frais') }}">
                        <div class="card card-box">
                            <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span
                                    class="card-title weight-500">Frais scolaires</span></div>
                            <div class="card-body bg-dark">
                                <blockquote class="blockquote mb-0">
                                    <p class="text-center">
                                        <span class="micon bi bi-cash-stack font-30 text-muted"></span>
                                    </p>
                                    <footer class="">
                                        <a href="{{ route('journal_frais') }}" class="btn bg-light text-"><i
                                                class="icon-copy bi bi-plus-lg"></i></a>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{ route('autre_frais') }}">
                        <div class="card card-box">
                            <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span
                                    class="card-title weight-500">Autres frais</span></div>
                            <div class="card-body bg-dark">
                                <blockquote class="blockquote mb-0">
                                    <p class="text-center">
                                        <span class="micon bi bi-cash font-30 text-muted"></span>
                                    </p>
                                    <footer class="">
                                        <a href="{{ route('autre_frais') }}" class="btn bg-light text-"><i
                                                class="icon-copy bi bi-plus-lg"></i></a>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{ route('journal_caisse') }}">
                        <div class="card card-box">
                            <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span
                                    class="card-title weight-500">Journal de caisse</span></div>

                            <div class="card-body bg-dark  bg-dark">
                                <blockquote class="blockquote mb-0">
                                    <p class="text-center">
                                        <i class="icon-copy dw dw-file font-30 text-muted"></i>
                                    </p>
                                    <footer class="">
                                        <a href="{{ route('journal_caisse') }}" class="btn bg-light text-"><i
                                                class="icon-copy bi bi-plus-lg"></i></a>
                                    </footer>
                                </blockquote>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{ route('depense') }}">
                        <div class="card card-box">
                            <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span
                                    class="card-title weight-500">Dépenses</span></div>

                            <div class="card-body bg-dark">
                                <blockquote class="blockquote mb-0">
                                    <p class="text-center">
                                        <span class="micon bi bi-exclude font-30 text-muted"></span>
                                    </p>
                                    <footer class="">
                                        <a href="{{ route('depense') }}" class="btn bg-light text-"><i
                                                class="icon-copy bi bi-plus-lg"></i></a>
                                    </footer>
                                </blockquote>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{ route('journal_caisse') }}">
                        <div class="card card-box">
                            <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span
                                    class="card-title weight-500">Prévision budgétaire</span></div>

                            <div class="card-body bg-dark">
                                <blockquote class="blockquote mb-0">
                                    <p class="text-center">
                                        <span class="micon bi bi-lightbulb font-30 text-muted"></span>
                                    </p>
                                    <footer class="">
                                        <a href="{{ route('journal_caisse') }}" class="btn bg-light text-"><i
                                                class="icon-copy bi bi-plus-lg"></i></a>
                                    </footer>
                                </blockquote>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 mb-30">
                    <a href="{{ route('journal_caisse') }}">
                        <div class="card card-box">
                            <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header text-center"><span
                                    class="card-title weight-500">Caisse - E</span></div>

                            <div class="card-body bg-dark">
                                <blockquote class="blockquote mb-0">
                                    <p class="text-center">
                                        <span class="micon bi bi-layout-text-sidebar-reverse font-30 text-muted"></span>
                                    </p>
                                    <footer class="">
                                        <a href="{{ route('journal_caisse') }}" class="btn bg-light text-"><i
                                                class="icon-copy bi bi-plus-lg"></i></a>
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

