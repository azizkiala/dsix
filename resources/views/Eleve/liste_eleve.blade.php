@extends('layouts.master1', ['title'=> 'Tableau des élèves'.'|'.Auth::user()->ecole])
@section('section')
@include('Eleve.tete')
<div class="card mb-4">
    <div class="">
        <div class="invoice-header">
            <div class="logo text-left">
                <img width="100" src="/img/terms-2.png" alt="" />
            </div>
        </div>
        <h3 class="text-center text-muted mb-30 weight-600">Tableau des élèves
        </h3>
    </div>
    <!-- Account -->
    <div class="col-md-12">
        <div class="card-body pt-2 mt-1">
    <div class="pb-20">
            @if(!$Eleves->isEmpty())
            <table class="table hover multiple-select-row data-table-export nowrap">
                <thead data-bgcolor="#e7ebf5" data-color="#265ed7">
                    <tr>
                        <th class="table-plus">Noms</th>
                        <th class="text-center">Sexe</th>
                        <th class="text-center">Classe</th>
                        <th class="text-center">Date d'inscription</th>
                        <th class="text-center">Option</th>
                        <th class="text-center">Etat</th>
                        <th class="datatable-nosort text-center"><i class="icon-copy bi bi-clock-history"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Eleves as $eleve)
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" data-color="#265ed7">
                                <div class="avatar mr-2 flex-shrink-0">
                                    @if(!$eleve->photo_eleve == '')
                                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}"
                                        class="border-radius-100 shadow" style="width: 50px; height: 50px" alt="">
                                    @else
                                    <img src="/img/user.png" class="border-radius-100 shadow" width="40" height="40"
                                        alt="">
                                    @endif
                                </div>
                                </a>
                            </div>

                            <div class="name-avatar d-flex align-items-center">
                                <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                                <div class="txt">
                                    <div class="weight-600">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}
                                    </div>
                                </div>
                                </a>
                            </div>
                        </td>
                        <td class="text-center">{{$eleve->sexe}}</td>
                        <td class="text-center">{{$eleve->classe}} {{$eleve->cycle}}</td>
                        <td class="text-center">{{date('d', strtotime($eleve->created_at))}} {{AfficheMois(date('m',
                            strtotime($eleve->created_at)))}} {{date('Y', strtotime($eleve->created_at))}}</td>
                        <td class="text-center"> {{$eleve->option}}</span></td>
                        <td class="text-center">
                            <span class="badge badge-pill" data-bgcolor="#e7ebf5"
                                data-color="{{$eleve->active == 0?'#265ed7 ':'#e95959'}}">{{$eleve->active ==
                                0?'active':'désactive'}}</span>
                        </td class="text-center">
                        <td class="text-center"><a>{{(new DateTime($eleve->dat_moyekoli))->format('H:i')}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class=" text-center mt-3 text-muted">
                <h6 class="card-title text-muted">
                    <i class="icon-copy dw dw-question-1 icon h1 text-muted font-30"></i>
                    <br> Aucun élève
                </h6>
            </div>
            @endif
        </div>
    </div>
</div>
</div>
@include('layouts.footer1')
@stop
