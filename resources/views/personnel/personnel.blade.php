@extends('layouts.master1', ['title'=> 'Mes personnel'])
@section('section')
@include('personnel.tete_personnel')
@include('personnel.head_personnel')
<div class="content">

    <!-- Search field -->
    <div class="card bg-slate">
        <div class="card-header bg-slate text-center" data-bgcolor="#e7ebf5" data-color="#265ed7">
            <h5 class="card-title bg-slate-400  text-center" ><i
                    class="icon-stack3  mr-2 m-2 icon-2x   p-1 mb-3 mt-1 mr-2"></i> Mes Personnel
            </h5>
        </div>
        <div class="card-body">
            @if ($Personnel_active->isEmpty())
                <div class="text-center mb-3 py-2">
                    <span class="text-muted d-block">
                        <i class="icon-notification2 mr-2"></i> Aucun personnel<br /><br><a
                            href="{{ route('ajout_eleve') }}" class="btn bg-light">

                            Cliquer - ici pour ajouter personnel</a>
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
                                <th class="text-center">Fonction</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Année</th>
                                <th class="text-center">Qualification</th>
                                <th class="text-center">Status</th>
                                <th class="datatable-nosort text-center"><i class="icon-copy bi bi-clock-history"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Personnel_active as $personnel)
                            <tr>
                                    <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">
                                        <a href="{{route('voir_personnel', [$personnel->id, $personnel->slug, $personnel->post_nom, $personnel->prenom])}}" data-color="#265ed7">
                                        <div class="avatar mr-2 flex-shrink-0">
                                            @if(!$personnel->photo_personnel == '')
                                            <img src="/uploads/image_personnel/{{$personnel->photo_personnel}}"
                                                class="border-radius-100 shadow" style="width: 50px; height: 50px" alt="">
                                            @else
                                            <img src="/img/user.png" class="border-radius-100 shadow" width="40" height="40"
                                                alt="">
                                            @endif
                                        </div>
                                        <div class="txt">
                                            <div class="weight-600">{{$personnel->nom}} {{$personnel->post_nom}} {{$personnel->prenom}}
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$personnel->sexe}}</span></td>
                                <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$personnel->fonction}}</span></td>
                                <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{date('d', strtotime($personnel->created_at))}} {{AfficheMois(date('m',
                                    strtotime($personnel->created_at)))}} {{date('Y', strtotime($personnel->created_at))}}</span></td>
                                <td class="text-center"> <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$personnel->annee_scolaire}}</span></td>
                                <td class="text-center"> <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$personnel->qualification}}</span></td>
                                <td class="text-center">
                                    <span class="badge badge-pill" data-bgcolor="#e7ebf5"
                                        data-color="{{$personnel->active == 0?'#265ed7 ':'#e95959'}}">{{$personnel->active ==
                                        0?'active':'désactive'}}</span>
                                </td class="text-center">

                                <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"><a>{{\Carbon\Carbon::parse($personnel->created_at)->diffforhumans()}}</a></span></td>
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
