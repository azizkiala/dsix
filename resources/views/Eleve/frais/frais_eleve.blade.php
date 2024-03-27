@extends('layouts.master1', ['title'=> 'paiement trimestriel de frais scolaires'])
@section('section')
@include('Eleve.head_eleve')
@include('Eleve.head1_eleve')

<!-- Timeline Tab start -->
<div class="tab-pane fade show active" id="timeline" role="tabpanel">
    <div class="pd-20">
        <div class="profile-timeline">
            <div class="task-title row align-items-center">

                <div class="col-md-12 col-sm-12">

                         <div class="pd-20 card-box mb-30">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h4 class="text-blue h4">Paiement Trimestriel</h4>
                                    <p class="mb-30">Afficher par année scolaire</p>
                                </div>
                            </div>
                            @foreach($VoirEleve as $eleve)
                            <form action="{{route('frais_eleve', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" method="get">
                            @csrf
                              @endforeach
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">

                                            <select
                                                class="custom-select2 form-control"
                                                name="moda"
                                                style="width: 100%; height: 38px"
                                            >

                                                <optgroup label="Mountain Time Zone">
                                                    @foreach($AnneeModalite as $moda)
                                                    <option value="{{$moda->annee_modalite}}">
                                                    {{$moda->annee_modalite}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
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
                </div>
            </div>
            @include('Eleve.frais.trimestre')
        </div>
    </div>
</div>
@include('Eleve.aside_eleve')
@include('layouts.footer1')
@stop
