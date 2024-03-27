@extends('layouts.master1', ['title'=> 'Ajouter élève'])
@section('section')
            @include('Eleve.tete')
            @if(!$cycles->isEmpty())
            @include('Eleve.form')
            @else
            <div class="row">
                <div class="col-md-12">
                    @include('ebandeli.ebandeli2')
                    <!-- Left aligned buttons -->
                    <div class="card">
                        <div class="text-center text-muted p-5">
                            <i style="font-size: 50px" class="icon-notification2"></i><br>
                            <h4>Impossible d'ajouter l'élève, aucun cycle n'est séléctioné.</h4>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@include('layouts.footer1')
@stop
