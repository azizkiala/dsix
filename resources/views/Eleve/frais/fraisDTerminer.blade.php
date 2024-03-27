<div class="container px-0">
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card-box pricing-card mt-30 mb-30">
                <div class="pricing-icon">
                    <img src="{{asset('d/vendors/images/icon-Cash.png')}}" alt="" />
                </div>
                <div class=""><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"> 2<sup>ème</sup> Trimestre</span></div>
                @foreach($FraisFixePourEleve as $fixe)
                @if(!$fixe->montant_franc == '')
                <div class="pricing-price"><sup>CDF</sup>{{number_format($FraisDeuxiemeTPayeParEleveEnFranc)}}<sub>/payé</sub></div>
                @else
                <div class="pricing-price"><sup>$</sup>{{number_format($FraisDeuxiemeTPayeParEleveEnDollar)}}<sub>/payé</sub></div>
                @endif
                @endforeach
                <div class="text">
                    @forelse($FraisFixePourEleve as $fixe)
                    <p class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$fixe->montant_franc == ''? "$":"CDF"}} {{$fixe->montant_franc == ''? number_format($fixe->montant_dollar): number_format($fixe->montant_franc)}} Montant fixé</p><br />
                    @empty
                    Aucun Montant fixé
                    @endforelse
                    @foreach($FraisFixePourEleve as $fixe)
                    @if(!$fixe->montant_franc == '')
                    <p class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">CDF {{number_format($fixe->montant_franc - $FraisDeuxiemeTPayeParEleveEnFranc)}} reste à
                    payer</p><br />
                    @else
                    <p class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">$ {{number_format($fixe->montant_dollar - $FraisDeuxiemeTPayeParEleveEnDollar)}} reste à payer </p>
                    @endif
                    @endforeach
                    <div class="card-body border-top-primary">
                        @foreach($FraisFixePourEleve as $fixe)
                        @if(!$fixe->montant_franc == '')
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated {{(pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc)) == 100 ? 'bg-success':'bg-danger'}}"
                                style="width: {{pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc)}}%">
                                <span>{{sprintf('%.0f', pourcentage($FraisDeuxiemeTPayeParEleveEnFranc,
                                    $fixe->montant_franc))}}% du paiement</span>
                            </div>
                        </div>
                        @else
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated {{(pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar)) == 100 ? 'bg-success':'bg-danger'}}"
                                style="width: {{pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar)}}%">
                                <span>{{sprintf('%.0f', pourcentage($FraisDeuxiemeTPayeParEleveEnDollar,
                                    $fixe->montant_dollar))}}% du paiement</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="cta">
                    <a href="#" class="btn btn-lg" data-bgcolor="#e7ebf5" data-color="#265ed7">
                        @foreach($FraisFixePourEleve as $fixe)
                        @if(!$fixe->montant_franc == '')
                        @if($FraisDeuxiemeTPayeParEleveEnFranc == $fixe->montant_franc)
                        <i class="icon-copy bi bi-check-all"></i>  Trimestre soldé
                        @else
                        Encours de paiement
                        @endif
                        @else
                        @if($FraisDeuxiemeTPayeParEleveEnDollar == $fixe->montant_dollar)
                        <i class="icon-copy bi bi-check"></i> Trimestre soldé
                        @else
                        Encours de paiement
                        @endif
                        @endif
                        @endforeach

                    </a>

                </div>
            </div>
        </div>
    </div>



</div>
