<div class="card-body pb-0">
    <a class="btn btn-light btn-block mb-2"><b>2<sup>ème</sup> Trimestre / {{$moda}}</b></a>
</div>
@foreach($FraisFixePourEleve as $modalite)
@if(! $modalite->montant_franc == null or ! $modalite->montant_dollar == null )
@if($FraisDeuxiemeTPayeParEleveEnFranc > $modalite->montant_franc or $FraisDeuxiemeTPayeParEleveEnDollar >
$modalite->montant_dollar)
 <h4 class="text-center text-muted"><strong>Procédure de paiement est bloqué !</strong><br/><br><i class="icon-copy bi bi-exclamation-circle font-30 text-muted"></i></h4>

 <p class="text-center"><i>Vous venez de payer pour le deuxième trimestre qui est déjà soldé !</i></p>

 @else
<div class="row text-center mt-2 p-2">





    <div class="col-md-4 mb-20">
        <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#265ed7">
            <div class="d-flex justify-content-between pb-20 text-white">
                <div class="icon h1 text-white">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                </div>
                <div class="font-14 text-right">
                    <div><i class="icon-copy ion-arrow-up-c"></i></div>
                    <div class="font-12">2<sup>ème</sup> Trimestre / {{$moda}}</div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <div class="text-white">

                    @forelse($FraisFixePourEleve as $fixe)
                    <div class="font-14">Montant fixé</div>
                    <div class="font-30 weight-500">{{$fixe->montant_franc == ''? "$":"CDF"}} {{$fixe->montant_franc == ''? number_format($fixe->montant_dollar): number_format($fixe->montant_franc)}}</div>
                    @empty
                    <div class="font-14">Aucun Montant fixé</div>
                    @endforelse
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4 mb-20">
        <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#00b489">
            <div class="d-flex justify-content-between pb-20 text-white">
                <div class="icon h1 text-white">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                </div>
                <div class="font-14 text-right">
                    @foreach($FraisFixePourEleve as $fixe)
                    @if(!$fixe->montant_franc == '')
                    <div><i class="icon-copy ion-arrow-up-c"></i> {{sprintf('%.0f',
                        pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc))}}%</div>
                    @else
                    <div><i class="icon-copy ion-arrow-up-c"></i> {{sprintf('%.0f',
                        pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar))}}%</div>
                    @endif
                    @endforeach
                    <div class="font-12">Frais scolaire</div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <div class="text-white">
                    <div class="font-14">Montant payé</div>
                    @foreach($FraisFixePourEleve as $fixe)
                    @if(!$fixe->montant_franc == '')
                    <div class="font-30 weight-500">CDF {{number_format($FraisDeuxiemeTPayeParEleveEnFranc)}}</div>
                    @else
                    <div class="font-30 weight-500">$ {{number_format($FraisDeuxiemeTPayeParEleveEnDollar)}}</div>
                    @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4 mb-20">
        <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
            <div class="d-flex justify-content-between pb-20 text-white">
                <div class="icon h1 text-white">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                </div>
                <div class="font-14 text-right">
                    <div><i class="icon-copy ion-arrow-up-c"></i></div>
                    <div class="font-12">2<sup>ème</sup> Trimestre / {{$moda}}</div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <div class="text-white">
                    <div class="font-14">Reste à payer</div>
                    @foreach($FraisFixePourEleve as $fixe)
                    @if(!$fixe->montant_franc == '')
                    <div class="font-30 weight-500">CDF {{number_format($fixe->montant_franc - $FraisDeuxiemeTPayeParEleveEnFranc)}}
                    </div>
                    @else
                    <div class="font-30 weight-500">$ {{number_format($fixe->montant_dollar - $FraisDeuxiemeTPayeParEleveEnDollar)}}
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    @endif
    @endif
    @endforeach
</div>
@include('Finance.FraisScolaires.slide_paye')
