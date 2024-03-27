@extends('layouts.master1', ['title'=> 'reçu de paiement de frais scolaires'])
@section('section')
@include('Eleve.head_eleve')
@include('Eleve.head1_eleve')

<!-- Timeline Tab start -->
<div class="tab-pane fade show active" id="timeline" role="tabpanel">
    <div class="pd-20">
        <div class="profile-timeline">
            @include('Eleve.frais.recu')
        </div>
    </div>
</div>
@include('Eleve.aside_eleve')
@include('layouts.footer1')
@stop
