@extends('layouts.master1', ['title' => Auth::user()->ecole])
@section('section')
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="row pb-10">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">{{ $Eleves->count() }}</div>
                                <div class="font-14 text-secondary weight-500">
                                    {{ count_number('Elève', $Eleves->count()) }}
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#00eccf">
                                    <i class="icon-copy dw dw-user1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">
                                    0
                                </div>
                                <div class="font-14 text-secondary weight-500">
                                    Personnel
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#ff5b5b">
                                    <span class="icon-copy ti-user"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">400+</div>
                                <div class="font-14 text-secondary weight-500">
                                    Total Doctor
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon">
                                    <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">$
                                    {{ number_format($fraispayerAujourdhuiEnDollar) }}</div>
                                <hr class="text-muted">
                                <div class="weight-700 font-24 text-dark">CDF
                                    {{ number_format($fraispayerAujourdhuiEnFranc) }}</div>
                                <hr>
                                <div class="font-14 text-secondary weight-500">Frais scolaire pour ce
                                    {{\Carbon\Carbon::now(fiso(Auth::user()->province))->format('d/m/Y')}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="icon h1 text-muted">
                                    <i class="icon-copy bi bi-cash-coin" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">$
                                    {{ number_format($AutrefraispayerAujourdhuiEnDollar) }}</div>
                                <hr class="text-muted">
                                <div class="weight-700 font-24 text-dark">CDF
                                    {{ number_format($AutrefraispayerAujourdhuiEnFranc) }}</div>
                                <hr>
                                <div class="font-14 text-secondary weight-500">Autres Frais pour ce
                                    {{\Carbon\Carbon::now(fiso(Auth::user()->province))->format('d/m/Y')}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="icon h1 text-muted">
                                    <i class="icon-copy bi bi-cash" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-20">
                    <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
                        <div class="d-flex justify-content-between pb-20 text-white">
                            <div class="icon h1 text-white">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                            </div>
                            <div class="font-14 text-right">
                                <div><i class="icon-copy bi bi-clock-history"></i>
                                    {{\Carbon\Carbon::now(fiso(Auth::user()->province))->format('H:i') }}</div>
                                <div class="font-12">{{ Auth::user()->ecole }}</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="text-white">
                                <div class="font-14">{{ Auth::user()->province }}</div>
                                <div class="font-24 weight-500">{{\Carbon\Carbon::now(fiso(Auth::user()->province))->format('d/m/Y')}}</div>
                            </div>
                            <div class="max-width-150">
                                <div id="appointment-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">CDF {{ $AutrefraispayerAujourdhuiEnFranc }}</div>
                                <div class="font-14 text-secondary weight-500">Autres frais</div>
                            </div>
                            <div class="mt-4">
                                <div class="icon h1 text-muted">
                                    <i class="icon-copy bi bi-cash" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">$50,000</div>
                                <div class="font-14 text-secondary weight-500">Earning</div>
                            </div>
                            <div class="mt-4">
                                <div class="icon" data-color="#09cc06">
                                    <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">$50,000</div>
                                <div class="font-14 text-secondary weight-500">Earning</div>
                            </div>
                            <div class="mt-4">
                                <div class="icon" data-color="#09cc06">
                                    <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
        <!-- / Layout wrapper -->
        <!-- /content area -->
        @include('layouts.footer1')
    @stop
