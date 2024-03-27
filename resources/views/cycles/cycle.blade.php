@extends('layouts.master1', ['title' => $cicles])
@section('section')
    @include('cycles.tete_cycle')
    @include('cycles.head_cycle')
    <div class="content">

                <!-- Search field -->
                <div class="card bg-slate">
                    <div class="card-header bg-slate text-center" data-bgcolor="#e7ebf5" data-color="#265ed7">
                        <h5 class="card-title bg-slate-400  text-center" ><i
                                class="icon-stack3  mr-2 m-2 icon-2x   p-1 mb-3 mt-1 mr-2"></i> {{ strtoupper($cicles) }}
                        </h5>
                    </div>
                    <div class="card-body">
                        @if ($EleveParCycle->isEmpty())
                            <div class="text-center mb-3 py-2">
                                <span class="text-muted d-block">
                                    <i class="icon-notification2 mr-2"></i> Aucun élève<br /><br><a
                                        href="{{ route('ajout_eleve') }}" class="btn bg-light">

                                        Cliquer - ici pour ajouter élève</a>
                                </span>
                            </div>
                        @else

                        <div class="card-body pt-2 mt-1">
                            <div class="pb-20">
                                <table class="table hover multiple-select-row data-table-export nowrap">
                                    <thead data-bgcolor="#e7ebf5" data-color="#265ed7">
                                        <tr>
                                            <th class="table-plus">Noms</th>
                                            <th class="text-center">Sexe</th>
                                            <th class="text-center">Classe</th>
                                            <th class="text-center">Date d'inscription</th>
                                            <th class="text-center">Option</th>
                                            <th class="text-center">Etat</th>
                                            <th class="text-center"><i class="icon-copy dw dw-eye"></i></th>
                                            <th class="datatable-nosort text-center"><i class="icon-copy bi bi-clock-history"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($EleveParCycle as $eleve)
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
                                                    <div class="txt">
                                                        <div class="weight-600">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$eleve->sexe}}</span></td>
                                            <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$eleve->classe}} {{$eleve->cycle}}</span></td>
                                            <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{date('d', strtotime($eleve->created_at))}} {{AfficheMois(date('m',
                                                strtotime($eleve->created_at)))}} {{date('Y', strtotime($eleve->created_at))}}</span></td>
                                            <td class="text-center"> <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$eleve->option}}</span></td>
                                            <td class="text-center">
                                                <span class="badge badge-pill" data-bgcolor="#e7ebf5"
                                                    data-color="{{$eleve->active == 0?'#265ed7 ':'#e95959'}}">{{$eleve->active ==
                                                    0?'active':'désactive'}}</span>
                                            </td class="text-center">
                                            <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"><a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" data-color="#265ed7"><i class="icon-copy dw dw-eye font-14"></i></a></span></td>
                                            <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"><a>{{\Carbon\Carbon::parse($eleve->dat_moyekoli)->diffforhumans()}}</a></span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>


            @include('layouts.footer1')
        @stop
