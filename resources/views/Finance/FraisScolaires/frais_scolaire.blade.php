@extends('layouts.master1', ['title'=> 'Modalité de frais scolaires'])
@section('section')
@include('Finance.tete_finance')
@include('Finance.FraisScolaires.head_frais')
<!-- Tabs widget -->
<div class="">
    <div class="invoice-header">
        <div class="logo text-left">
            <img width="100" src="/img/terms-2.png" alt="" />
        </div>
    </div>
    <h4 class="text-center text-muted mb-30 weight-600">Fixé modalités de frais scolaires</h4>
</div>
        @if(!$cycles->isEmpty())
        @include('Finance.FraisScolaires.modalite')
        @else
<div class="">
<div class="text-center text-muted p-5">
<h4>Aucun cycle.</h4>
 <p class="nav-item "><a  class="nav-link">Nous vous signalons que votre compte n'est pas configuré.</a>
<p class="nav-item bg-light btn text-muted"><a href="{{route('cycle_ecole')}}"  class="nav-link">Cliquer ici</a></p>
</div>
</div>
@endif
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
@include('layouts.footer1')
@stop
