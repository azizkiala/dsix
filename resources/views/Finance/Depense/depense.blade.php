@extends('layouts.master1', ['title' => 'Dépenses'])
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
                <h4 class="text-center text-muted mb-30 weight-600">Dépense Journalière</h4>
            </div>
            <div class="invoice-desc pb-30">
                <div class="invoice-desc-footer">
                    <div class="invoice-desc-head clearfix">
                        <div class="invoice-sub weight-600">Total dépense du jour</div>
                        <div class="invoice-rate weight-600">CDF</div>
                        <div class="invoice-subtotal weight-600">$</div>
                    </div>
                    <div class="invoice-desc-body">
                        <ul>
                            <li class="clearfix">
                                <div class="invoice-sub">
                                    <p class="font-14 mb-5">
                                        {{ AfficheJour(\Carbon\Carbon::today(fiso(Auth::user()->province))->format('D')) }}
                                        <strong
                                            class="weight-600">{{ \Carbon\Carbon::today(fiso(Auth::user()->province))->format('d/m/Y') }}</strong>
                                    </p>
                                </div>
                                <div class="invoice-rate font-20 weight-600">
                                    CDF {{ number_format($depensesJournaliereEnFranc) }}
                                </div>
                                <div class="invoice-subtotal">
                                    <span class="weight-600 font-24 text-danger">$
                                        {{ number_format($depensesJournaliereEnDollar) }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h4 class="text-center pb-20"></h4>
                </div>
                <div class="invoice-desc-body">
                    <ul>
                        <div class="invoice-desc pb-30">
                            <div class="invoice-desc-head clearfix">
                                <div class="invoice-sub weight-600">Libellés</div>
                                <div class="invoice-rate weight-600">Date</div>
                                <div class="invoice-hours weight-600">Heure</div>
                                <div class="invoice-subtotal weight-600">Montant</div>
                            </div>
                            <div class="invoice-desc-body">
                                <ul>
                                    @forelse ($depenses as $depense)
                                        <li class="clearfix">
                                            <div class="invoice-sub">{{ $depense->description }}</div>
                                            <div class="invoice-rate">
                                                {{ (new DateTime($depense->dat_depense))->format('d/m/Y') }}</div>
                                            <div class="invoice-hours">
                                                {{ (new DateTime($depense->dat_depense))->format('H:i') }}</div>
                                            <div class="invoice-subtotal">
                                                @if (!$depense->franc == '')
                                                    <span class="weight-600">CDF {{ number_format($depense->franc) }}</span>
                                                @else
                                                    <span class="weight-600">$ {{ number_format($depense->dollar) }}</span>
                                                @endif
                                            </div>
                                        </li>
                                    @empty
                                        <p class="text-center">Aucune dépense éffectuée</p>
                                    @endforelse

                                </ul>

                            </div>
                        </div>
                </div>
            </div>
        </div>
            @include('Finance.Depense.slide_depense')
            @include('layouts.footer1')
        @stop
