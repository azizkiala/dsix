@extends('layouts.master1', ['title'=> "$cicle Modalité de frais scolaires"])
@section('section')
@include('Finance.tete_finance')
@include('Finance.FraisScolaires.head_frais')
<!-- Content area -->
<div class="content">
    <!-- Orders history (datatable) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <!-- Basic tables title -->
                <div class="mb-3">
                    <h6 class="mb-0 font-weight-semibold">
                        Tableau Modalités de paiement / {{$cicle}}
                    </h6>
                    <!-- /course widget -->
                    <div class="card mb-4 mt-4">
                        <h4 class="card-header">Tableau</h4>
                        <div class="card-body pt-2 mt-1">
                            <div class="pb-20">
                                @if(!$ModaFixe->isEmpty())
                                <table class="table hover multiple-select-row data-table-export nowrap">
                                    <thead>
                                        <tr>
                                            <th class="table-plus">Classe</th>
                                            <th>Trimestre</th>
                                            <th>Montant à payer</th>
                                            <th>Année Scolaire</th>
                                            <th class="datatable-nosort width-400 font-20 text-center"><i
                                                    class="icon-copy bi bi-gear"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ModaFixe as $mode)
                                        <tr>
                                            <td class="table-plus">
                                                <div class="name-avatar d-flex align-items-center">
                                                    <div style="border-radius: 5%; width:140px;height:40px"
                                                        class="  mr-4  badge badge-info  text-white font-14">
                                                        {{$mode->classe}} {{$mode->cycles}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$mode->trimestre == ''?'Tous':'Trimestre'}}</td>
                                            <td><span class="badge badge-warning font-14">{{$mode->montant_franc ==
                                                    ''? "$mode->montant_dollar $": "$mode->montant_franc CDF"}}
                                            </td>
                                            <td>{{$mode->annee_modalite}}</td>
                                            <td class="text-center">
                                                <div class="table-actions">
                                                    <a data-color="#265ed7"><i class="icon-copy dw dw-eye"></i></a>
                                                    <a data-id="{{$mode->id}}" data-color="#e95959"
                                                        class="modalite_frais"><i
                                                            class="icon-copy dw dw-delete-3"></i></a>
                                                </div>
                                            </td>
                                            </a>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class=" text-center mt-3 text-muted">
                                    <h6 class="card-title">
                                        <i
                                            class="icon-notification2 mr-2 icon-5x text-muted  p-0 mb-2 mt-1 mr-2"></i><br>Aucun
                                        frais fixé en {{$cicle}}
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
</div>
</div>
@include('layouts.footer1')
@stop
