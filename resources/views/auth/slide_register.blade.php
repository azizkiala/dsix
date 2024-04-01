

<div class="modal fade bs-example-modal-lg" id="invoice1" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-ms modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">
                Créer compte de gestion
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×
            </button>
        </div>
        <div class="modal-body">

            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="row">
                <div class="col-6">
                <div class="input-group mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Nom d'administrateur">
                  @error('name')<h6 class="text-left text-danger">
                    {{ $message }}
                  </h6>
                @enderror
                </div>
               </div>
               <div class="col-6">
                <div class="input-group mb-3">
                  <input type="text" name="telephone" class="form-control" placeholder="Téléphone ">
                </div>
                @if($errors->has('telephone'))<h6 class="alert alert-danger text-sm">
                    {{ $errors->first('telephone') }}
                  </h6>
                @enderror
            </div>
        </div>
                <div class="input-group mb-3">
                  <input type="text" name="ecole" class="form-control" placeholder="Nom de l'école"><br>
                  @if($errors->has('ecole'))<h6 class="alert alert-danger text-sm">
                    {{ $errors->first('ecole') }}
                  </h6>
                @enderror
                </div>
                <div class="row">
                    <div class="col-6">
                <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Mot de passe"><br>
                </div>
                @if($errors->has('password'))<h6 class="alert alert-danger text-sm">
                    {{ $errors->first('password') }}
                  </h6>
                @enderror
            </div>
                <div class="col-6">
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passe">
                  </div>
                  @if($errors->has('password_confirmation'))<h6 class="alert alert-danger text-sm">
                    {{ $errors->first('password_confirmation') }}
                  </h6>
                @enderror
                </div>
                </div>

                  <div class="input-group mb-3">
                    <select name="province" class="form-control "
                    title="Select Card Type">
                    <option value="Kinshasa">Kinshasa</option>
                    <option value="Kenge">Kinshasa</option>
                    <option value="Matadi">Matadi</option>
                    <option value="Lubumbashi">Lubumbashi</option>
                    <option value="Mbandaka">Maniema</option>
                    <option value="Kisantu">Kisantu</option>
                    <option value="Luwozi">Luwozi</option>
                    <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                    <option value="Kolwezi">Kolwezi</option>
                    <option value="Goma">Goma</option>
                    <option value="Mbuji-mayi">Mbuji-mayi</option>
                    <option value="Inongo">Kenge</option>
                    <option value="Kikwit">Kikwiti</option>
                    <option value="Nord-Kivu">Nord-Kivu</option>
                    <option value="Sud-Kivu">Sud-Kivu</option>
                    <option value="Boma">Boma</option>
                    <option value="Popo">Popo</option>
                    <option value="Muanda">Muanda</option>
                </select>
                  </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Confirmer</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>

    </div>
</div>
</div>
</div>



