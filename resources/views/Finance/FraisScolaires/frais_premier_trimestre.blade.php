@extends('layouts.master1', ['title' => 'Tableau des élèves ayant totalisé les frais scolaires du premier trimestre'.' | '.Auth::user()->ecole])
@section('section')
    @include('Finance.tete_finance')
    @include('Finance.FraisScolaires.head_frais')
    <!-- Basic tables title -->
    @include('Finance.FraisScolaires.head_trimestre')
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home5" role="tabpanel">
                        <div class="pd-20">
                            @if(!$fraisPremier->isEmpty())
                <table class="table hover multiple-select-row data-table-export nowrap">
                    <thead data-bgcolor="#e7ebf5"
                    data-color="#265ed7">
                        <tr>
                            <th class="table-plus">Noms</th>
                            <th>Sexe</th>
                            <th>Classe</th>
                            <th>Montant payé PT</th>
                            <th>Date</th>
                            <th>Année</th>
                            <th class="datatable-nosort"><i class="icon-copy bi bi-clock-history"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fraisPremier as $journal)
                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">
                                    <div style="border-radius: 50%; width:40px;height:40px"
                                        class="mr-4  badge badge-success  text-white font-14">
                                        <i class="icon-copy dw dw-check"></i>
                                    </div>
                                    <div class="txt">
                                        <div class="">
                                            <a class="font-weight-semibold">{{$journal->nom}} {{$journal->post_nom}}
                                                {{$journal->prenom}}</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{$journal->sexe}}</td>
                            <td>{{$journal->classe}} {{$journal->cycle}}</td>
                            <td>{{$journal->franc == 0? "
                                $":"CDF"}} {{$journal->franc == 0? $journal->dollar
                                    :number_format($journal->franc)}}</td>

                            <td>
                                <a data-color="#265ed7">{{(new DateTime($journal->dat_trimestre))->format('d/m/Y')}}</span>
                            </td>
                            <td>{{$journal->annee_frais}}</td>
                            <td>
                                <a data-color="#265ed7">{{(new DateTime($journal->dat_trimestre))->format('H:i')}}</span>
                            </td>
                            </a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class=" text-center mt-3">
                    <p class="text-muted">
                 Aucun élève n'a terminé le frais scolaire pour le premier trimestre
                    </p>
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
    </div>
    </div>
    </div>
    @include('layouts.footer1')
@stop

