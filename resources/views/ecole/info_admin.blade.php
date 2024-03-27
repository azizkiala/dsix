@extends('layouts.master1', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')
<!-- Content area -->
<div class="card mb-4">
    <h4 class="card-header">Ajouter information</h4>
    <!-- Account -->
    <div class="card-body pt-2 mt-1">
                <div class="row">
                    <div class="col-md-12">
                            <form action="{{route('store_admin')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Date de naissance</label>
                                            <input type="date" name="date_ne" class="form-control" id="exampleFormControlInput1"
                                                placeholder="Date de naissance" />

                                        </div>
                                         @error('date_ne')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Qualification</label>
                                            <select class="form-control" name="qualification" id="exampleFormControlSelect1"
                                                aria-label="Default select example">
                                                <option selected>Cliquer ici</option>
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
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <small class="fw-medium d-block">Etat civil :</small>
                                            <div class="form-check form-check-inline mt-3">
                                              <input
                                                class="form-check-input"
                                                type="radio"
                                                name="etat_civil"
                                                id="inlineRadio1"
                                                value="Marié" />
                                              <label class="form-check-label" for="inlineRadio1">Marié</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input
                                                class="form-check-input"
                                                type="radio"
                                                name="etat_civil"
                                                id="inlineRadio2"
                                                value="Célibataire" />
                                              <label class="form-check-label" for="inlineRadio2">Célibataire</label>
                                            </div>
                                          </div>
                                            @error('etat_civil')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <small class=" fw-medium d-block">Sexe :</small>
                                            <div class="form-check form-check-inline mt-3">
                                              <input
                                                class="form-check-input"
                                                type="radio"
                                                name="sexe"
                                                id="inlineRadio1"
                                                value="M" />
                                              <label class="form-check-label" for="inlineRadio1">Homme</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input
                                                class="form-check-input"
                                                type="radio"
                                                name="sexe"
                                                id="inlineRadio2"
                                                value="F" />
                                              <label class="form-check-label" for="inlineRadio2">Femme</label>
                                            </div>
                                          </div>
                                            @error('sexe')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Photo :</label>
                            <div class="d-flex align-items-start align-items-sm-center ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img width="200" height="200" src="{{asset('/img/user.png')}}" alt="user-avatar"
                                            class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-outline-primary mb-3 me-3" tabindex="0">
                                                <span class="d-none d-sm-block">importer photo</span>
                                                <i class="fa fa-download d-block d-sm-none"></i>
                                                <input type="file" id="upload" name="photo_admin"
                                                    class="account-file-input" hidden accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button"
                                                class="btn btn-outline-danger account-image-reset mb-3">
                                                <i class="dw dw-reload d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Reset</span>
                                            </button>
                                            <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of
                                                800K</div>

                                            @error('photo_admin')
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


                                    <div class="mb-0">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <button class="btn btn-primary d-grid w-10" type="submit">Confirmer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
<!-- /content area -->
@include('layouts.footer1')
@endsection
