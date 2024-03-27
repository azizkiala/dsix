@extends('layouts.master1', ['title'=> 'Tableau de Paiement des élèves'])
@section('section')
@include('Finance.tete_finance')
            @include('Finance.FraisScolaires.head_frais')
            <div class="invoice-wrap">
                <div class="card-box card-header">
                    <div class="mt-3">
                        <div class="invoice-header">
                            <div class="logo text-left">
                                <img width="100" src="/img/timeline.png" alt="" />
                            </div>
                        </div>
                        <h4 class="text-center text-muted mb-30 weight-600">Tableau de Paiement des élèves</h4>
                    </div>
                </div>
                  <div class="col-md-12">
                    <div class="card-body pt-2 mt-1">
                <div class="pb-20">
                    @if(!$journalFraisScolaireDuJour->isEmpty())
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead data-bgcolor="#e7ebf5" data-color="#265ed7">
                            <tr>
                                <th class="table-plus">Noms</th>
                                <th class="text-center">Sexe</th>
                                <th class="text-center">Classe</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Montant payé</th>
                                <th class="datatable-nosort text-center"><i class="icon-copy bi bi-clock-history"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($journalFraisScolaireDuJour as $journal)
                            <tr>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">
                                        <div style="border-radius: 50%; width:40px;height:40px" class="mr-4  badge badge-info  text-white font-14">
                                            <i class="icon-copy bi bi-cash"></i>
                                        </div>
                                        <div class="txt">
                                            <div class="">
                                                <a class="font-weight-semibold">{{$journal->nom}} {{$journal->post_nom}}
                                                    {{$journal->prenom}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{$journal->sexe}}</td>
                                <td class="text-center">{{$journal->classe}} {{$journal->cycle}}</td>
                                <td class="text-center">{{AfficheJour(( new DateTime($journal->dat_frais))->format('D'))}}, {{(new DateTime($journal->dat_frais))->format('d/m/Y')}}</td>

                                <td class="text-center">{{$journal->franc == ''? "$":"CDF"}} {{$journal->franc == ''? number_format($journal->dollar): number_format($journal->franc)}}</td>
                                <td class="text-center">{{(new DateTime($journal->dat_frais))->format('H:i')}}</td>
                                </a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class=" text-center mt-3 text-muted">
                        <h6 class="card-title">
                            <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun
                            élève
                        </h6>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
@include('layouts.footer1')
@stop
