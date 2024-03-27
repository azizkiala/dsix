<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ isset($title) ? $title . ' | ' : '' }} 2-SIX</title>
  <link rel="shortcut icon" type="image/x-icon" href="/img/ds.png" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('base/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('base/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('base/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">

    @include('auth.nav1')

  <div class="card">
    <div class="card-body register-card-body ">
      <p class="login-box-msg text-center">Créer compte de gestion</p>

      <form action="../../index.html" method="post">
        <div class="row">

        <div class="col-6">
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Votre nom">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
       </div>
       <div class="col-6">
        <div class="input-group mb-3">
          <input type="text" name="telephone" class="form-control" placeholder="Téléphone ">
          @error('telephone')<span class="text-left text-danger">
            {{ $message }}
        </span>
        @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
    </div>
</div>
        <div class="input-group mb-3">
          <input type="text" name="ecole" class="form-control" placeholder="Nom de l'école"><br>
          @error('ecole')<span class="text-left text-danger">
            {{ $message }}
        </span>
        @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-6">
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Mot de passe"><br>
          @error('password')<p class="text-left text-danger">
            {{ $message }}
          </p>
        @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
    </div>
        <div class="col-6">
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passe">
            @error('password_confirmation')<p class="text-left text-danger">
                {{ $message }}
              </p>
            @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
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
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <label for="agreeTerms">
                <a href="{{ route('login') }}" class="text-center">J'ai un compte</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Confirmer</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@include('auth.mutu')
<!-- jQuery -->
<script src="{{ asset('base/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('base/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('base/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
