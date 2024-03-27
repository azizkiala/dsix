@extends('layouts.master1', ['title' => Auth::user()->ecole])
@section('section')
<!-- Main content -->
@include('layouts.aside2')
<!-- Content area -->
<!-- Content area -->



<!-- Form validation -->
<div class="row">
    <div class="col-md-4">
        <div class="card-body">
            <div class="row">
                @foreach($photoAdmin as $photo)
                <div class="card">
                    <div class="card-img-actions mx-1 mt-1">
                        <img class="card-img img-fluid" src="/Dossier/images_admin/{{$photo->photo_user}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="/Dossier/images_admin/{{$photo->photo_user}}"
                                class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                                data-popup="lightbox" rel="group">
                                <i class="icon-plus3"></i>
                            </a>
                            <a href="{{route('edit_photo_admin', [$photo->id, Auth::user()->name])}}"
                                class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                            <div>
                                <div class="font-weight-semibold mr-2">{{Auth::user()->name}}</div>
                                <span class="font-size-sm text-muted">Administrateur</span>
                            </div>

                            <div class="list-icons list-icons-extended ml-auto">
                                <a href="{{route('edit_photo_admin', [$photo->id, Auth::user()->name])}}"
                                    class="list-icons-item"><i class="icon-copy bi bi-card-image"></i></a>
                                <a href="{{route('admin_destroy', [$photo->id, Auth::user()->name])}}"
                                    class="list-icons-item"><i class="icon-copy bi bi-trash3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="col-md-1">
    </div>
        <div class="col-md-7">
        <!-- Form validation -->
        @foreach($Admin as $ecole)
        <form action="{{route('update_admin', $ecole->id)}}" method="POST">
            @csrf
            <div class="card mb-4">
                <h4 class="card-header">Information d'administrateur</h4>
                <!-- Account -->
                <div class="card-body pt-2 mt-1">
                <div class="card-body">
                <!-- Basic text input -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-5">Nom <span class="text-danger">*</span></label>
                    <div class="col-lg-7">
                        <div class="form-group-feedback form-group-feedback-right">
                            <input style="border: none;" type="text" name="nom" class="form-control"
                                value="{{$ecole->nom}}">
                            <div class="form-control-feedback">
                                <i class="icon-pencil"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /basic text input -->
                <!-- Input with icons -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-5">Sexe <span class="text-danger">*</span></label>
                    <div class="col-lg-7">
                        <div class="form-group-feedback form-group-feedback-right">
                            <input style="border: none;" type="text" name="sexe" class="form-control"
                                value="{{$ecole->sexe}}">
                            <div class="form-control-feedback">
                                <i class="icon-pencil"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input with icons -->
                <!-- Basic text input -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-5">Date de naissance <span class="text-danger">*</span></label>
                    <div class="col-lg-7">
                        <div class="form-group-feedback form-group-feedback-right">
                            <input style="border: none;" type="text" name="date_ne" class="form-control"
                                value="{{$ecole->date_ne}}">
                            <div class="form-control-feedback">
                                <i class="icon-pencil"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /basic text input -->

                <!-- Input with icons -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-5">Etat civil <span class="text-danger">*</span></label>
                    <div class="col-lg-7">
                        <div class="form-group-feedback form-group-feedback-right">
                            <input style="border: none;" type="text" name="etat_civil" class="form-control"
                                value="{{$ecole->etat_civil}}">
                            <div class="form-control-feedback">
                                <i class="icon-pencil"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input with icons -->

                <!-- Input with icons -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-5">Niveau d'étude <span class="text-danger">*</span></label>
                    <div class="col-lg-7">
                        <div class="form-group-feedback form-group-feedback-right">
                            <select style="border: none;" class="form-control" name="qualification" id="exampleSelect1">
                                <option>{{$ecole->qualification}}</option>
                                <option value="SRF">SRF</option>
                                <option value="D6">D6</option>
                                <option value="Gradué">Gradué</option>
                                <option value="Licencié">Licencié</option>
                                <option value="Docteur">Docteur</option>
                                <option value="S.E">S.E</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /input with icons -->
                <!-- Input with icons -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-5">Téléphone <span class="text-danger">*</span></label>
                    <div class="col-lg-7">
                        <div class="form-group-feedback form-group-feedback-right">
                            <input style="border: none;" type="text" name="phone" class="form-control"
                                value="{{$ecole->phone}}">
                            <div class="form-control-feedback">
                                <i class="icon-pencil"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input with icons -->
            </div>
            <div class="mb-5">
                <div class="form-floating form-floating-outline mb-4">
                    <button class="btn btn-outline-primary d-grid w-10" type="submit">modifier</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
<!-- /form validation -->


</div>
</div>
<!-- /content area -->


@include('layouts.footer1')
@endsection
