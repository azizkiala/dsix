<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ isset($title) ? $title . ' | ' : '' }} 2-SIX</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/ds.png" />


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('base/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('base/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('base/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <div class="lockscreen-name"><img width="100" src="{{ asset('img/ds.png') }}" alt="User Image"></div>

  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Se connecter avec numéro de compte</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="telephone" class="form-control" placeholder="Téléphone mobile ou E-mail">
          @error('telephone')
            <h6 class="text-dnager text-left">{{$message}}</h6>
           @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control pt-2" placeholder="Mot de passe">
          @error('password')
            <h6 class="text-dnager text-left">{{$message}}</h6>
           @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
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
    <div class="row">
        <div class="col-6">
            <p class="mb-1">
                <a href="">Mot de passe oublié ?</a>
              </p>
        </div>
        <div class="col-6">
            <p class="mb-1 text-right">
                <a href="{{ route('register') }}" class="text-center">Créer un compte</a>
              </p>
        </div>
    </div>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@include('auth.mutu')
<!-- jQuery -->
<script src="{{ asset('base/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('base/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('base/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
