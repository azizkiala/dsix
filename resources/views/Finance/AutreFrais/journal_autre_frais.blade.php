@extends('layouts.master1', ['title'=> 'Journal de paiement autres frais'])
@section('section')
<div class="content-wrapper">
    @include('Finance.tete_finance')
    @include('Finance.AutreFrais.head_autre_frais')
    <!-- Content area -->
    <div class="content">
        <!-- Orders history (datatable) -->
        <div class="row">
            <!-- /categories -->
            <div class="col-md-12">
                <div class="card-body">
                    <!-- Basic tables title -->
                    <div class="mb-3">
                        <h6 class="mb-0 font-weight-semibold">
                            Journal de paiement autres frais
                        </h6>

                    </div>
                    <!-- Table with togglable columns -->


                    <div class="card mb-4 mt-4">
                        <h4 class="card-header">Année scolaire: <code>{{Anneesco()}}</code></h4>
                        <div class="card-body pt-2 mt-1">
                            <div class="pb-20">
                                @if(!$autres->isEmpty())
                                <table class="table hover multiple-select-row data-table-export nowrap">
                                    <thead>
                                        <tr>
                                            <th class="table-plus">Noms</th>
                                            <th>Sexe</th>
                                            <th>Déscription</th>
                                            <th>Montant</th>
                                            <th>Date</th>
                                            <th class="datatable-nosort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($autres as $journal)
                                        <tr>
                                            <td class="table-plus">
                                                <div class="name-avatar d-flex align-items-center">
                                                    <div style="border-radius: 50%; width:40px;height:40px"
                                                        class="  mr-4  badge badge-info  text-white font-14">
                                                        {{$journal->nom[0]}}
                                                    </div>
                                                    <div class="txt">
                                                        <div class="">
                                                            <a class="font-weight-semibold">{{$journal->nom}}
                                                                {{$journal->post_nom}}
                                                                {{$journal->prenom}}</a>
                                                            <div class="text-muted font-size-sm">
                                                                <span
                                                                    class="{{$journal->date_paye == date('d/m/Y')?'badge badge-mark bg-success border-success':'badge badge-mark bg-secondary border-secondary'}} mr-1"></span>
                                                                A payé {{$journal->date_paye ==
                                                                date('d/m/Y')?"aujourd'hui":\Carbon\Carbon::parse($journal->created_at)->diffforhumans()}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$journal->sexe}}</td>
                                            <td>{{$journal->categorie}}</td>

                                            <td><span class="badge badge-warningb font-14">{{$journal->franc == ''?
                                                    "$journal->dollar
                                                    $":"$journal->franc FC"}}</td>
                                            <td>{{( new DateTime($journal->date_paye))->format('d/m/Y')}}</td>
                                            <td>
                                                <div class="table-actions">
                                                    <a data-color="#265ed7"><i class="icon-copy dw dw-eye"></i></a>

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
                                            class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br>
                                        Pas encore payer
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
@include('layouts.footer1')
@stop
