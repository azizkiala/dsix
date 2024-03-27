@extends('layouts.master1', ['title'=> 'Elève'])
@section('section')
@include('Eleve.head_eleve')
@include('Eleve.head1_eleve')

<!-- Timeline Tab start -->
<div class="tab-pane fade show active" id="timeline" role="tabpanel">
    <div class="pd-20">
        <div class="profile-timeline">
            <div class="task-title row align-items-center">
                <div class="col-md-8 col-sm-12">
                    <h5>Photo de profil </h5>
                </div>

            </div>
            <div class="">
                <div class="">
                    <span class="  media bg-light "></span>
                </div>
                <div class="card-header">
                </div>
                <div class="card-body text-center">
                    @foreach($VoirElevePhoto as $eleve)
                    <div class="card-img-actions mx-1 mt-1">
                        @if(!$eleve->photo_eleve == '')
                        <img style="width: 200px; height: 200px; border-radius: 50%"
                            src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="card-img img-fluid" alt="">
                        @else
                        <img src="/img/user.png" class="card-img img-fluid" alt="">
                        @endif
                        <div class="card-img-actions-overlay card-img">
                            <a href="/uploads/image_eleves/{{$eleve->photo_eleve}}"
                                class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                                data-popup="lightbox" rel="group">
                                <i class="icon-plus3"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="">
                <div class="">
                    <span class="  media bg-light">Changer photo</span>
                </div>
                <div class="card-body">
                    @foreach($VoirElevePhoto as $photo)
                    <form action="{{route('update_photo_eleve', $photo->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Photo de l'élève :</label>
                                    <div class="d-flex align-items-start align-items-sm-center ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img width="150" height="150" src="{{asset('/img/user.png')}}"
                                                    alt="user-avatar" class="d-block w-px-120 h-px-120 rounded"
                                                    id="uploadedAvatar" />
                                                <br>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="button-wrapper">
                                                    <label for="upload" class="btn btn-outline-primary mb-3 me-3"
                                                        tabindex="0">
                                                        <span class="d-none d-sm-block">Importer photo</span>
                                                        <i class="fa fa-download d-block d-sm-none"></i>
                                                        <input type="file" id="upload" name="photo_eleve"
                                                            class="account-file-input" hidden
                                                            accept="image/png, image/jpeg" />
                                                    </label>
                                                    <button type="button"
                                                        class="btn btn-outline-danger account-image-reset mb-3">
                                                        <i class="dw dw-reload d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Effacer</span>
                                                    </button>
                                                    <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of
                                                        800K</div>

                                                    @error('photo_eleve')
                                                    <span class="text-left text-muted">
                                                        <span style="color: darkred;">
                                                            <m>{{ $message }}</m>
                                                        </span>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mt-5">
                                <button type="submit" class="btn btn-outline-primary">Confirmer <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                    </form>
                    @endforeach
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
<!-- Form validation -->
