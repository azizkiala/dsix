@extends('layouts.master1', ['title'=> "Tableau de rapports journalier ".' | '.AfficheMois(\Carbon\Carbon::now(fiso(Auth::user()->province))->format('m')).' | '.Auth::user()->ecole])
@section('section')
<div class="content-wrapper">
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
            <h4 class="text-center text-muted mb-30 weight-600">Tableau de rapports journalier</h4>
        </div>

    </div>
      <div class="col-md-12">
        <div class="card-body pt-2 mt-1">
            <div class="pb-20">
              @if(!$datePaye->isEmpty())
              <table class="table hover multiple-select-row data-table-export nowrap">
                <thead data-bgcolor="#e7ebf5" data-color="#265ed7">
                  <tr>
                    <th class="table-plus">Jour</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Montant en Franc</th>
                    <th class="text-center">Montant en Dollard</th>
                    <th class="text-center">Mois</th>
                    <th class="datatable-nosort"><i class="icon-copy bi bi-check-circle"></i></th>
                  </tr>
                </thead>
                <tbody>

                @foreach($datePaye as $journal)
                  <tr>

                    <td class="table-plus ">
                      <div class="name-avatar d-flex align-items-center">
                        <div
                          class="  mr-4 text-center  font-14">
                          {{AfficheJour(( new DateTime($journal->date_rapport))->format('D'))}}
                        </div>

                      </div>
                    </td>
                    <td class="text-center"> {{( new
                        DateTime($journal->date_rapport))->format('d/m/Y')}}</td>
                        <td class="text-center">CDF {{number_format($journal->franc)}}</td>
                    <td class="text-center">$ {{number_format($journal->dollar)}}</td>
                    <td class="text-center">{{AfficheMois(( new DateTime($journal->date_rapport))->format('m'))}}</td>
                    <td class="text-center">
                      <div class="table-actions">
                        <a data-color="#265ed7"><i class="icon-copy bi bi-check-circle-fill"></i></a>
                      </div>
                    </td>
                    </a>
                  </tr>

                  @endforeach
                  <tr>
                    <td><strong>Total</strong></td>
                    <td class="text-center"><strong>-</strong></td>
                    <td class="text-center"><strong>CDF {{ number_format($sommeF) }}</strong></td>
                    <td class="text-center"><strong>$ {{ number_format($sommeD) }}</strong></td>
                    <td class="text-center"><strong>-</strong></td>
                    <td class=""><strong><i class="icon-copy bi bi-check-circle-fill"></i></strong></td>
                  </tr>
                </tbody>
              </table>
              @else
              <div class=" text-center mt-3 text-muted">
                <h6 class="card-title">
                  <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun
                  rapport
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
