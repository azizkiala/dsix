@extends('layouts.master1', ['title'=> 'autres frais'])
@section('section')
@include('Eleve.head_eleve')
@include('Eleve.head1_eleve')

<!-- Timeline Tab start -->
<br>

<!-- Orders history (datatable) -->
<div class="task-title row align-items-center">
    <div class="col-md-8 col-sm-12">
        <h5>Autres Frais </h5>
    </div>
    <div class="col-md-4 col-sm-12 text-right">
        <a href="task-add" data-toggle="modal" data-target="#invoice1" class="bg-light-blue btn text-blue weight-500"><i
                class="icon-copy bi bi-cart-plus"></i>
            Payer</a>
    </div>
</div>

<div class="card mb-4">
    <h4 class="card-header">Tableau</h4>
    <!-- Account -->
    <div class="card-body pt-2 mt-1">
        <div class="pb-20">
            @if(!$moyekolis->isEmpty())
            <table class="table hover multiple-select-row data-table-export nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Déscription</th>
                        <th>Montant</th>
                        <th>Trimestre</th>
                        <th>Date</th>
                        <th>Année scolaire</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($moyekolis as $moye)
                    <tr>
                        <a href="" data-color="#265ed7">
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">

                                    <div class="txt">
                                        <div class="weight-600">{{$moye->categorie}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{$moye->franc == ''? "$moye->dollar $":"$moye->franc FC"}}</td>
                            <td> {{$moye->trimestre}}</td>
                            <td>{{( new DateTime($moye->date_paye))->format('d/m/Y')}}</td>
                            <td>
                                <span class="badge badge-pill" data-bgcolor="#e7ebf5"
                                    data-color="#e95959">{{$moye->anneesco}}</span>
                            </td>
                            <td>
                                <div class="table-actions">
                                    <a href=""><i class="icon-copy dw dw-eye"></i></a>
                                    <a data-id="{{$moye->id}}" class="autrefrais text-danger"><i
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
                    <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Pas
                    encore payer
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
@include('layouts.footer1')
@include('Finance.AutreFrais.slide_autre_frais')
@stop
