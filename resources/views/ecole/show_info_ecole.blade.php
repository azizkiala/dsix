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
                <div class="card">
                    @foreach($photos as $photo)
                    <div class="card-img-actions mx-1 mt-1">
                        <img class="card-img img-fluid" src="/Dossier/images_ecole/{{$photo->photo_ecole}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="/Dossier/images_ecole/{{$photo->photo_ecole}}"
                                class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                                data-popup="lightbox" rel="group">
                                <i class="icon-plus3"></i>
                            </a>

                            <a href="{{route('photo_ecole_show', $photo->id)}}"
                                class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                <i class="icon-pencil"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                            <div>
                                <div class="font-weight-semibold mr-2">{{Auth::user()->ecole}}</div>
                                <span class="font-size-sm text-muted">Image de l'école</span>
                            </div>
                            <div class="list-icons list-icons-extended ml-auto">
                                <a href="{{route('photo_ecole_show', $photo->id)}}" class="list-icons-item"><i
                                        class="icon-compose top-0"></i></a>
                                <a href="{{route('ecole_destroy', $photo->id)}}" class="list-icons-item"><i
                                        class="icon-bin top-0"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-7">
        <!-- Form validation -->
        <div class="">

            @foreach($infoEcole as $ecole)
            <div class="card-body">

                <form action="{{route('info_update', $ecole->id)}}" method="POST">
                    @csrf
                    <fieldset class="mb-3">
                        <h6 class="text-muted">Information de l'école</h6>
                        <!-- Basic text input -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Adresse <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input style="border: none;" type="text" name="adresse" class="form-control"
                                        value="{{$ecole->adresse}}">
                                    <div class="form-control-feedback">
                                        <i class="icon-pencil"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /basic text input -->

                        <!-- Input with icons -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Commune <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input style="border: none;" type="text" name="commune" class="form-control"
                                        value="{{$ecole->commune}}">
                                    <div class="form-control-feedback">
                                        <i class="icon-pencil"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /input with icons -->

                        <!-- Input with icons -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">District <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input style="border: none;" type="text" name="district" class="form-control"
                                        value="{{$ecole->district}}">
                                    <div class="form-control-feedback">
                                        <i class="icon-pencil"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /input with icons -->

                        <!-- Input with icons -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Regime <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                    <select style="border: none" class="form-control" name="regime" id="exampleSelect1">
                                        <option value="" style="background: black">{{$ecole->regime}}</option>
                                        <option value="Publique">Publique</option>
                                        <option value="Privée">Privée</option>
                                        <option value="Conventionée Protéstante">Conventionée Protéstante</option>
                                        <option value="Conventionée Chatolique">Conventionée Chatolique</option>
                                        <option value="Conventionée Kimbanguiste">Conventionée Kimbanguiste</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /input with icons -->
                        <!-- Input with icons -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Devise <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input style="border: none;" type="text" name="devise" class="form-control"
                                        value="{{$ecole->devise}}">
                                    <div class="form-control-feedback">
                                        <i class="icon-pencil"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /input with icons -->
                    </fieldset>
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
    <!-- /content area -->
</div>
</div>
</div>

@include('layouts.footer1')
@endsection
