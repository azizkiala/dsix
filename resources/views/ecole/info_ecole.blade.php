@extends('layouts.master1', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')
<!-- Content area -->
<!-- Form action components -->
<div class="card mb-4">
    <h4 class="card-header">Ajouter information</h4>
    <!-- Account -->
    <div class="card-body pt-2 mt-1">

        <div class="row">
            <div class="col-md-12">
                @if($infoEcole->isEmpty())
                @endif
                <!-- Left aligned buttons -->
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <form action="{{route('info_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Address/rue</label>
                                    <input type="text" name="adresse" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Address/rue" />

                                </div>
                                @error('adresse')
                                <span class="text-left text-muted">
                                    <span style="color: darkred;">
                                        <m>{{ $message }}</m>
                                    </span>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Commune</label>
                                    <input type="text" name="commune" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Commune" />

                                </div>
                                @error('commune')
                                <span class="text-left text-muted">
                                    <span style="color: darkred;">
                                        <m>{{ $message }}</m>
                                    </span>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">District</label>
                                    <input type="text" name="district" class="form-control"
                                        id="exampleFormControlInput1" placeholder="District" />

                                </div>
                                @error('district')
                                <span class="text-left text-muted">
                                    <span style="color: darkred;">
                                        <m>{{ $message }}</m>
                                    </span>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Regime de l'école</label>
                                    <select class="form-control" name="regime" id="exampleFormControlSelect1"
                                        aria-label="Default select example">
                                        <option selected>Cliquer ici</option>
                                        <option value="Privée">Privée</option>
                                        <option value="Salitiste">Salitiste</option>
                                        <option value="Conventionée Protéstante">Conventionée Protéstante</option>
                                        <option value="Conventionée Chatholique">Conventionée Chatholique</option>
                                        <option value="Conventionée Kimbanguiste">Conventionée Kimbanguiste</option>
                                        <option value="Islamique">Islamique</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Dévise de l'école</label>
                            <textarea name="devise" class="form-control h-px-100" id="exampleFormControlTextarea1"
                                placeholder="Ecrit..."></textarea>
                            @error('devise')
                            <span class="text-left text-muted">
                                <span style="color: darkred;">
                                    <m>{{ $message }}</m>
                                </span>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Photo de l'école :</label>
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
                                                <input type="file" id="upload" name="photo_ecole"
                                                    class="account-file-input" hidden accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button"
                                                class="btn btn-outline-danger account-image-reset mb-3">
                                                <i class="dw dw-reload d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Reset</span>
                                            </button>
                                            <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of
                                                800K</div>

                                            @error('photo_ecole')
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
                        <div class="mb-5">
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
</div>
<!-- /content area -->
@include('layouts.footer1')
@endsection
