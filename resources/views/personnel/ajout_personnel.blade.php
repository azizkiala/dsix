@extends('layouts.master1', ['title'=> 'Ajouter personnel'])
@section('section')
@include('personnel.tete_personnel')
 <div class="content">
                @include('ecole.message_ecole')
                <!-- Form action components -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Left aligned buttons -->
                        <div class="">
                           <div class="card bg-slate">
                            <div class="card-header bg-slate-700 header-elements-inline">
                            <span class="text-uppercase  font-size-sm font-weight-semibold"><i class="icon-user-plus mr-2"></i>Formulaire</span>
                              </div>
                            <div class="card-body">
                            <form action="{{route('personnel_store')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="nom" class="form-control " placeholder="Nom">
                                        @error('nom')
                                         <span class="text-left ">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="post" class="form-control " placeholder="Post-nom">
                                        @error('post')
                                         <span class="text-left text-white">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="prenom" class="form-control " placeholder="Prénom">
                                        @error('prenom')
                                         <span class="text-left ">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="telephone" class="form-control " placeholder="Téléphone">
                                        @error('telephone')
                                         <span class="text-left text-white">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Adresse:</label>
                                      <input type="text" name="adresse" class="form-control" placeholder="exemple: Kinshasa n°243, Q/Kinshasa, C/Kinshasa">
                                        @error('adresse')
                                         <span class="text-left ">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    </div>


                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date de naissance:</label>
                                        <input type="date" name="date_ne" class="form-control" placeholder="Date de naissance">
                                        @error('nom')
                                         <span class="text-left ">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Qualification:</label>
                                    <select class="form-control" name="qualification" id="exampleSelect1">
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
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Etat civil:</label>
                                        <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="etat" value="Marié">
                                                    Marié
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled text-white" name="etat" value="Célibataire">
                                                    Célibataire
                                                </label>
                                            </div>
                                            @error('sexe')
                                            <span class="text-left text-white">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sexe:</label>
                                        <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="sexe" value="M">
                                                    Homme
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="sexe" value="F">
                                                    Femme
                                                </label>
                                            </div>
                                            @error('sexe')
                                            <span class="text-left text-white">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Fonction:</label>
                                    <select name="fonction" class="form-control @error('fonction') is-invalid @enderror"
                                     name="fonction" value="{{ old('fonction') }}" required autocomplete="fonction">

                                    <option value="Promoteur">Promoteur</option>
                                    <option value="Promotrice">Promotrice</option>
                                    <option value="Coordonnateur">Coordonnateur</option>
                                    <option value="Coordonnatrice">Coordonnatrice</option>
                                    <option value="Coordinnateur">Coordinnateur</option>
                                    <option value="Coordinnatrice">Coordinnatrice</option>
                                    <option value="Caissier">Caissier</option>
                                    <option value="Caissière">Caissière</option>
                                    <option value="Directeur">Directeur</option>
                                    <option value="Directrice">Directrice</option>
                                    <option value="Directeur AD">Directeur Adjt</option>
                                    <option value="Directrice AD">Directrice Adjt</option>
                                    <option value="D.E">Directeur des Etudes</option>
                                    <option value="D.D">Directeur de discipline</option>
                                     <option value="Enseignant">Enseignant(e)</option>
                                    <option value="Informaticien">Informaticien(e)</option>
                                    <option value="Préfet">Préfet</option>
                                    <option value="Professeur">Professeur</option>
                                    <option value="Ouvrier">Ouvrier</option>
                                    <option value="Sentinelle">Sentinelle</option>
                                  </select>
                                    </div>
                                </div>
                                </div>

                                    <div class="form-group">
                                        <label>Photo du personnel :</label>
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
                                                            <input type="file" id="upload" name="photo_personnel"
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

                                                        @error('photo_personnel')
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
                                <div class="form-group">
                                    <div class="pd-10">
                                        <button type="submit" class="btn btn-primary">Confirmer </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
@include('layouts.footer1')
@stop
