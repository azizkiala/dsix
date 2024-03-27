@extends('layouts.master1', ['title' => 'Personnel'])
@section('section')
    @include('personnel.tete_personnel')
    <!-- /seamless button group -->
    <!-- /seamless button group -->
    <div class="main-container">
        <div class="pd-ltr-10 xs-pd-10-10">
            <div class="min-height-200px">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-4 mb-30">
                        <a href="{{ route('ajout_personnel') }}">
                            <div class="card card-box">
                                <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header"><span
                                        class="card-title weight-500">Ajouter personnel</span></div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="text-center">
                                            <span class="micon bi bi-person-plus font-30 text-muted"></span>
                                        </p>
                                        <footer class="">
                                            <a href="{{ route('ajout_personnel') }}" class="btn bg-light text-"><i
                                                    class="icon-copy bi bi-plus-lg"></i></a>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-30">
                        <a href="{{ route('personnel') }}">
                            <div class="card card-box">
                                <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header"><span
                                        class="card-title weight-500">Mes personnel</span></div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="text-center">
                                            <span class="micon bi bi-people font-30 text-muted"></span>
                                        </p>
                                        <footer class="">
                                            <a href="{{ route('personnel') }}" class="btn bg-light text-"><i
                                                    class="icon-copy bi bi-plus-lg"></i></a>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4 mb-30">
                        <a href="">
                            <div class="card card-box">
                                <div data-bgcolor="#e7ebf5" data-color="#265ed7" class="card-header"><span
                                        class="card-title weight-500">Quitté</span></div>

                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="text-center">
                                            <span class="micon bi bi-person-x font-30 text-muted"></span>
                                        </p>
                                        <footer class="">
                                            <a href="" class="btn bg-light text-"><i
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
