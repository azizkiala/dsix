<div class="card mb-4">
    <h4 class="card-header">Formulaire</h4>
    <!-- Account -->
    <div class="card-body pt-2 mt-1">
        <div class="pd-20  mb-30">
            <div class="wizard-content">
                <form class="tab-wizard2 wizard-circle wizard vertical" action="{{route('store_eleve')}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <h5></h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input type="text" name="nom" class="form-control" />
                                    @error('nom')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Post - nom :</label>
                                    <input type="text" name="post" class="form-control" />
                                    @error('post')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prénom :</label>
                                    <input type="text" name="prenom" class="form-control" />
                                    @error('prenom')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Adresse complete :</label>
                                    <input type="text" name="adresse" class="form-control" />
                                    @error('adresse')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Lieu de naissance :</label>
                                    <select name="lieu" class="custom-select form-control">
                                        <option value="">Selectioner le lieu</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                        <option value="Matadi">Matadi</option>
                                        <option value="Lubumbashi">Lubumbashi</option>
                                        <option value="Maniema">Maniema</option>
                                        <option value="Kisantu">Kisantu</option>
                                        <option value="Luwozi">Luwozi</option>
                                        <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                                        <option value="Kolwezi">Kolwezi</option>
                                        <option value="Goma">Goma</option>
                                        <option value="Mbuji-mayi">Mbuji-mayi</option>
                                        <option value="Kenge">Kenge</option>
                                        <option value="Kikwiti">Kikwiti</option>
                                        <option value="Nord-Kivu">Nord-Kivu</option>
                                        <option value="Sud-Kivu">Sud-Kivu</option>
                                        <option value="Boma">Boma</option>
                                        <option value="Popo">Popo</option>
                                        <option value="Muanda">Muanda</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date de naissance :</label>
                                    <input type="date" name="dat" class="form-control " placeholder="Select Date" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5></h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Téléphone :</label>
                                    <input type="text" name="tel" class="form-control" />
                                    @error('tel')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sexe :</label>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio4" value="M" name="sexe"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4">Garçon</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio5" value="F" name="sexe"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio5">Fille</label>
                                    </div>
                                </div>
                            </div>
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
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h5></h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Niveau :</label>
                                    <select name="classe" class="form-control">
                                        <option value="1èr">1èr</option>
                                        <option value="2ème">2ème</option>
                                        <option value="3ème">3ème</option>
                                        <option value="4ème">4ème</option>
                                        <option value="5ème">5ème</option>
                                        <option value="6ème">6ème</option>
                                        <option value="7ème">7ème</option>
                                        <option value="8ème">8ème</option>
                                    </select>
                                    @error('classe')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Cycle :</label>
                                    <select name="cycle" class="form-control">
                                        <option value="">Selectionner</option>
                                        @foreach($cycles as $cycle)
                                        <option value="{{$cycle->cycle}}">{{$cycle->cycle}}</option>
                                        @endforeach
                                    </select>
                                    @error('cycle')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option :</label>
                                    <select name="option" class="form-control">
                                        <option value="">Selectionner</option>
                                        <option value="Aucune">Aucune</option>
                                        @foreach($options as $option)
                                        <option value="{{$option->option}}">{{$option->option}}</option>
                                        @endforeach
                                    </select>
                                    @error('option')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Local :</label>
                                    <select name="local" class="form-control">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                    </select>
                                    @error('local')<span class="text-left text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h5></h5>
                    <section>
                        <div class="form-wrap max-width-600 mx-auto">
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" required="" class="custom-control-input" id="customCheck1" />
                                <label class="custom-control-label" for="customCheck1">I have read and agreed to
                                    the terms of services and
                                    privacy policy</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-wrap max-width-600 mx-auto">

                            <div class="col-sm-12 mb-0">
                                <button type="submit" class="btn btn-primary mb-5">Confirmer</button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
