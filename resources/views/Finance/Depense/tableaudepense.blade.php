@extends('layouts.master1', ['title'=> 'Tableau de dépenses'.' | '.Auth::user()->ecole])
@section('section')
@include('Finance.tete_finance')
<div class="invoice-wrap">
    <div class="card-box card-header">
        @include('Finance.Depense.head_depense')
        <div class="mt-3">
            <div class="invoice-header">
                <div class="logo text-left">
                    <img width="100" src="/img/timeline.png" alt="" />
                </div>
            </div>
            <h4 class="text-center text-muted mb-30 weight-600">Tableau de dépenses</h4>
        </div>
        <div class="invoice-desc pb-30">


            <div class="invoice-desc-head clearfix">
                <div class="invoice-sub">Tableau de dépenses</div>
            </div>
            <div class="invoice-desc-body">
                <ul>
                    @if( !$depenses->isEmpty())
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead data-bgcolor="#e7ebf5" data-color="#265ed7">
                            <tr>
                                <th class="">Dépenseur</th>
                                <th class="table-plus">Date</th>
                                <th class="">Libellés</th>
                                <th class="">Montant</th>
                                <th class="datatable-nosort "><i class="icon-copy bi bi-clock-history"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($depenses as $depense)
                            <tr>
                                    <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">
                                        <div class="txt">
                                            <div class="weight-600">{{$depense->nom}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">{{ (new DateTime($depense->dat_depense))->format('d/m/Y') }}</td>
                                <td class="">{{$depense->description}}</td>
                                @if(!$depense->franc == '')
                                <td class="">CDF {{number_format($depense->franc)}}</td>
                                @else
                                <td class="">$ {{number_format($depense->dollar)}}</td>
                                @endif
                                <td class=""><a>{{(new DateTime($depense->dat_depense))->format('H:i:s')}}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <p class="text-center">Aucune dépense éffectuée</p>
                    @endif


                </ul>
            </div>


        </div>

    </div>
</div>
@include('Finance.Depense.slide_depense')
@include('layouts.footer1')
@stop
