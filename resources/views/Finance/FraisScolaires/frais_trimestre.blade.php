@extends('layouts.master1', ['title' => 'frais scolaires de premier trimestre'.' | '.Auth::user()->ecole])
@section('section')
    @include('Finance.tete_finance')
    @include('Finance.FraisScolaires.head_frais')
    <div class="">
        <div class="invoice-header">
            <div class="logo text-left">
                <img width="100" src="/img/terms-2.png" alt="" />
            </div>
        </div>
        <h4 class="text-center text-muted mb-30 weight-600">Trimestres</h4>
    </div>
    <!-- Basic tables title -->
    @include('Finance.FraisScolaires.head_trimestre')
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home5" role="tabpanel">
                        <div class="pd-20">
                            @include('Finance.FraisScolaires.frais_premier_trimestre')
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
