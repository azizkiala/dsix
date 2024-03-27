@include('Eleve.tete')
<div class="row">
    @foreach($VoirElevePhoto as $eleve)
    <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box card-header height-100-p">
            <div class="profile-photo">
                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i
                        class="fa fa-pencil"></i></a>
                @if(!$eleve->photo_eleve == '')
                <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" style="width: 160px; height: 160px"
                    class="avatar-photo img-fluid" alt="">
                @else
                <img src="/img/user.png" class="avatar-photo" alt="">
                @endif
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-5">
                                <div class="img-container">
                                    @if(!$eleve->photo_eleve == '')
                                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" id="image" alt="">
                                    @else
                                    <img src="/img/user.png" id="image" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a><p class="btn btn-primary">Modifier</p></a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Fermer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center h2 mb-0">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h5>
            <p class="text-center text-muted font-14">
                {{$eleve->code_eleve}}
            </p>
            </div>
            @endforeach
        </div>
    </div>
