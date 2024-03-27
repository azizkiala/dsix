@extends('layouts.master1', ['title'=> 'Elève quitté'])
@section('section')
    @include('Eleve.tete')
    <!-- Content area -->
    <!-- Orders history (datatable) -->
    <div class="card-box height-100-p pd-20 min-height-200px">
        <div class="">
            <div class="invoice-header">
                <div class="logo text-left">
                    <img width="100" src="/img/terms-2.png" alt="" />
                </div>
            </div>
            <h3 class="text-center text-muted mb-30 weight-600">Tableau des élèves qui ont quittés
            </h3>
        </div>
        <div class="user-list">
            @if(!$EleveQuitter->isEmpty())
            <ul>
                @forelse($EleveQuitter as $eleve)
                <li class="d-flex align-items-center justify-content-between">
                    <div class="name-avatar d-flex align-items-center pr-2">
                        <div class="avatar mr-2 flex-shrink-0">
                            @if(!$eleve->photo_eleve == '')
                            <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="border-radius-100 shadow"
                                style="width: 50px; height: 50px" alt="">
                            @else
                            <img src="/img/user.png" class="border-radius-100 shadow" width="40" height="40" alt="">
                            @endif
                        </div>
                        <div class="txt">
                            <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                data-color="#265ed7">4.9</span>
                            <div class="font-14 weight-600">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}
                            </div>
                            <div class="font-12 weight-500" data-color="#b2b1b6">
                                {{$eleve->classe}} {{$eleve->cycle}}
                            </div>
                        </div>
                    </div>
                    <div class="cta flex-shrink-0">
                        <a href="#" class="btn btn-sm btn-outline-primary">Restorer</a>
                    </div>
                </li>
                @endforeach
            </ul>
            @else
            <div class=" text-center mt-3 text-muted">
                <h6 class="card-title">
                    <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun élève
                </h6>
            </div>
            @endif
        </div>
    </div>
</div>
@include('layouts.footer1')
@stop
