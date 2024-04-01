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
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ route('ebandeli') }}" class="h1"><img width="60" src="{{ asset('/img/ds.png') }}" alt=""></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Se connecter avec numéro mobile</p>
      <form class="mt-2" action="{{ route('login') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <input type="text" name="telephone" class="form-control" placeholder="Numéro mobile de votre compte"><br>
                </div>
                    @if($errors->has('telephone'))<p class="alert alert-danger text-sm">
                        <i class="fas fa-exclamation mr-2"></i> {{ $errors->first('telephone') }}
                    </p>
                    @enderror
            </div>
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control pt-2" placeholder="Mot de passe"><br>
                </div>
                    @if($errors->has('password'))<p class="alert alert-danger text-sm">
                        <i class="fas fa-exclamation mr-2"></i> {{ $errors->first('password') }}
                    </p>
                @enderror
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
      <p class="mt-3 mb-1">
        <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
      </p>
      <p class="mt-3 mb-1">
        <a href="{{ route('register') }}">Créer compte</a>
      </p>
    </div>
    <!-- /.login-card-body -->

  </div>
  <hr>
<div class="lockscreen-footer text-center ">
    Copyright &copy; 2021-{{ date('Y') }} <br>
    <a href="" class="text-black">by Aziz-Kiala</a>
</div>
</div>
<!-- /.login-box -->

<!-- /.content -->
</div>
</div>

<!-- jQuery -->
<script src="{{ asset('base/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('base/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('base/dist/js/adminlte.min.js')}}"></script>
</body>
</html>


