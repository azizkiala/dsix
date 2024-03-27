@extends('layouts.master1', ['title' => 'Elève'])
@section('section')
    @include('Eleve.head_eleve')
    @include('Eleve.head1_eleve')
    <!-- Timeline Tab start -->
    <div class="tab-pane fade show active" id="timeline" role="tabpanel">
        <div class="">
            <div class="profile-timeline">
                <div class="col-md-12">
                    <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                            <div class="task-title row align-items-center">
                                <div class="col-md-6 col-sm-12 media pd-10 text-muted">
                                    <div class="pull-left">
                                        <h4 class="text-blue h4">Frais scolaires</h4>
                                        <p class="mb-30">Afficher par année scolaire</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right ">
                                    <a href="task-add" data-toggle="modal" data-target="#task-add"
                                        class="bg-light-blue btn text-blue weight-400 font-20"><i
                                            class="icon-copy bi bi-cart-plus font-20"></i> Payer </a>
                                </div>
                            </div>
                        </div>
                        <form action="" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select class="custom-select2 form-control" name="moda"
                                            style="width: 100%; height: 38px">
                                            <optgroup label="Catégories">
                                                <option value="">Année scolaire
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn-primary text-white">Afficher</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="">
                    @forelse($FraisFixePourEleve as $modalite)
                        @if (!$modalite->montant_franc == null)
                            @if ($modalite->montant_franc == $FraisPremierTPayeParEleveEnFranc)
                                @if ($modalite->montant_franc == $FraisDeuxiemeTPayeParEleveEnFranc)
                                    @if ($modalite->montant_franc == $FraisTroisiemeTPayeParEleveEnFranc)
                                        <div class="card-body border-top-primary">
                                            <div class="text-center">
                                                <p class="mb-3 text-muted font-weight-semibold h1">Félicitation

                                                </p>
                                                <P><code>l'élève a soldé tous les trimestres</code></P>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                    style="width: 100%">
                                                    <span>100% totalité de paiement</span>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        @include('Finance.FraisScolaires.TTrimestre')
                                    @endif
                                @else
                                    @include('Finance.FraisScolaires.DTrimestre')
                                @endif
                            @else
                                @include('Finance.FraisScolaires.PTrimestre')
                            @endif
                        @else
                            @if ($modalite->montant_dollar == $FraisPremierTPayeParEleveEnDollar)
                                @if ($modalite->montant_dollar == $FraisDeuxiemeTPayeParEleveEnDollar)
                                    @if ($modalite->montant_dollar == $FraisTroisiemeTPayeParEleveEnDollar)
                                        <div class="card-body border-top-primary">
                                            <div class="text-center">
                                                <p class="mb-3 text-muted font-weight-semibold h2">Félicitation<br>
                                                    <code>l'élève a soldé tous les trimestres</code>
                                                </p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                    style="width: 100%">
                                                    <span>100% totalité de paiement</span>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        @include('Finance.FraisScolaires.TTrimestre')
                                    @endif
                                @else
                                    @include('Finance.FraisScolaires.DTrimestre')
                                @endif
                            @else
                                @include('Finance.FraisScolaires.PTrimestre')
                            @endif
                        @endif
                    @empty
                        <div class="card-body border-top-primary">
                            <div class="text-center">
                                <a class="weight-700 font-24 text-muted"><i
                                        class="icon-copy bi bi-exclamation-triangle "></i></a>
                                <h6 class="mb-3 text-muted ">Les frais scolaires ne sont pas encore fixés pour la classe de
                                    cet élève</h6>
                                <h6 class="mb-3 text-muted btn btn-light"><a href="{{ route('modalité_frais') }}"> Cliquer ici pour
                                        fixé</a></h6>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Timeline Tab End -->
    <!-- Tasks Tab start -->
    </div>
    <!-- Tasks Tab End -->
    <!-- Setting Tab start -->
    <!-- Setting Tab End -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- /dashboard content -->
    @include('Finance.FraisScolaires.slide_paye')
    @include('layouts.footer1')
@stop
