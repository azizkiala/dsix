
<div class="col-lg-4 col-md-12">
    <div class="mt-3">
        <!-- Modal 1-->
        <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-muted" id="modalToggleLabel">Formulaire (Etape 1)</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form   action="{{route('store_eleve')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2 gy-4">
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text"  name="nom" placeholder="Nom"
                                            autofocus />
                                        <label for="nom">Nom</label>
                                    </div>
                                    @error('nom')
                                    <span class="text-left text-muted">
                                        <span style="color: darkred;">
                                            <m>{{ $message }}</m>
                                        </span>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" name="post" placeholder="Post-nom" />
                                        <label for="post">Post-nom</label>
                                    </div>
                                    @error('post')
                                    <span class="text-left text-muted">
                                        <span style="color: darkred;">
                                            <m>{{ $message }}</m>
                                        </span>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" name="prenom"
                                            placeholder="Prénom" />
                                        <label for="prenom">Prénom</label>
                                    </div>
                                    @error('prenom')
                                    <span class="text-left text-muted">
                                        <span style="color: darkred;">
                                            <m>{{ $message }}</m>
                                        </span>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="date" class="form-control"  name="dat"
                                            placeholder="Date de naissance" />
                                        <label for="dat">Date de naissance</label>
                                    </div>
                                    @error('dat')
                                    <span class="text-left text-muted">
                                        <span style="color: darkred;">
                                            <m>{{ $message }}</m>
                                        </span>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select  name="lieu" class="select2 form-select">
                                            <option value="">Select</option>
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
                                        <label for="lieu">Lieu de naissance</label>
                                    </div>
                                    @error('lieu')
                                    <span class="text-left text-muted">
                                        <span style="color: darkred;">
                                            <m>{{ $message }}</m>
                                        </span>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control"  name="adresse"
                                            placeholder="Ex: mayo n° 23, Q/Mbandaka, C/Kinshasa" />
                                        <label for="adresse">Adresse complète</label>
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
                                    <div class="form-floating form-floating-outline">
                                        <select  name="cycle" class="select2 form-select">
                                            <option value="">Selectionner</option>
                                            @foreach($cycles as $cycle)
                                            <option value="{{$cycle->cycle}}">{{$cycle->cycle}}</option>
                                            @endforeach
                                        </select>
                                        <label for="cycle">Cycle</label>
                                    </div>
                                    @error('cycle')
                                    <span class="text-left text-muted">
                                        <span style="color: darkred;">
                                            <m>{{ $message }}</m>
                                        </span>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select  name="classe" class="select2 form-select">
                                            <option value="">Selectionner</option>
                                            <option value="1èr">1èr</option>
                                            <option value="2ème">2ème</option>
                                            <option value="3ème">3ème</option>
                                            <option value="4ème">4ème</option>
                                            <option value="5ème">5ème</option>
                                            <option value="6ème">6ème</option>
                                            <option value="7ème">7ème</option>
                                            <option value="8ème">8ème</option>
                                        </select>
                                        <label for="classe">Niveau de classe</label>
                                    </div>
                                    @error('classe')
                                    <span class="text-left text-muted">
                                        <span style="color: darkred;">
                                            <m>{{ $message }}</m>
                                        </span>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select  name="option" class="select2 form-select">
                                            <option value="">Selectionner</option>
                                            <option value="Aucune">Aucune</option>
                                            @foreach($options as $option)
                                            <option value="{{$option->option}}">{{$option->option}}</option>
                                            @endforeach
                                        </select>
                                        <label for="option">Option</label>
                                    </div>
                                    @error('option')
                                    <span class="text-left text-muted">
                                        <span style="color: darkred;">
                                            <m>{{ $message }}</m>
                                        </span>
                                    </span>
                                    @enderror
                                </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <h5 class="btn btn-primary-outline" data-bs-target="#modalToggle2" data-bs-toggle="modal"
                            data-bs-dismiss="modal">
                            Suivant
                        </h5>
                      </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="modal fade" id="modalToggle2" aria-hidden="true" aria-labelledby="modalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-muted" id="modalToggleLabel">Formulaire (Etape 2)</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-2 gy-4">
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <select name="local" class="select2 form-select">
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
                                <label for="local">Local</label>
                            </div>
                            @error('local')
                            <span class="text-left text-muted">
                                <span style="color: darkred;">
                                    <m>{{ $message }}</m>
                                </span>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <input type="number" class="form-control"  name="tel" placeholder="Téléphone" />
                                <label for="tel">Téléphone</label>
                            </div>
                            @error('tel')
                            <span class="text-left text-muted">
                                <span style="color: darkred;">
                                    <m>{{ $message }}</m>
                                </span>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <small class="text-light fw-medium d-block">Sexe:</small>
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" name="sexe"
                                        value="M" />
                                    <label class="form-check-label" for="sexe">Garçon</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe"
                                        value="F" />
                                    <label class="form-check-label" for="sexe">Fille</label>
                                </div>
                            </div>
                            @error('sexe')
                            <span class="text-left text-muted">
                                <span style="color: darkred;">
                                    <m>{{ $message }}</m>
                                </span>
                            </span>
                            @enderror
                        </div>

                        <div class="form-floating form-floating-outline mb-4">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{asset('/img/user.png')}}" alt="user-avatar"
                                    class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-outline-primary me-2 mb-3" tabindex="0">
                                        <span class="d-none d-sm-block">importer photo</span>
                                        <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                        <input type="file" id="upload" name="photo_eleve" class="account-file-input"
                                            hidden accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
                                        <i class="mdi mdi-reload d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>
                                    <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>

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

                    <div class="modal-footer">
                    <h5 class="btn btn-primary-outline" data-bs-target="#modalToggle" data-bs-toggle="modal"
                            data-bs-dismiss="modal">
                            Retour sur Etape 1
                    </h5>
                    <button type="button" class="btn btn-primary">Confirmer</button>
                    </div>
                    <form>
                </div>
            </div>
        </div>
    </div>
</div>
