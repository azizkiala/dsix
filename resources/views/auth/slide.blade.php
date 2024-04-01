<div class="modal fade bs-example-modal-lg" id="invoice2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-ms modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Se connecter
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body text-center">
                <img width="180" src="{{ asset('img/terms-2.png') }}" alt="User Image">
                <form class="mt-2" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="telephone" class="form-control" placeholder="Numéro mobile de votre compte"><br>
                        @if($errors->has('telephone'))<div class="alert alert-danger text-sm">
                            {{ $errors->first('telephone') }}
                          </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control pt-2" placeholder="Mot de passe"><br>
                        @if($errors->has('password'))<div class="alert alert-danger text-sm">
                            {{ $errors->first('password') }}
                          </div>
                        @enderror
                    </div>
                    <div class="row">
                        <!-- /.col -->
                    </div>
                    <div class="social-auth-links text-center mb-3">
                        <button type="submit" class="btn btn-block btn-primary">
                            Connexion
                        </button>
                    </div>
                    <!-- /.social-auth-links -->
                </form>
            </div>
        </div>
    </div>
</div>
