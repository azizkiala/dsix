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
      <p class="login-box-msg">Créer votre compte de gestion.</p>
      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-6">
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Nom d'administrateur">
          @error('name')<h6 class="alert alert-danger text-sm">
            <i class="fas fa-exclamation mr-2"></i> {{ $message }}
          </h6>
        @enderror
        </div>
       </div>
       <div class="col-6">
        <div class="input-group mb-3">
          <input type="text" name="telephone" class="form-control" placeholder="Téléphone ">
        </div>
        @if($errors->has('telephone'))<h6 class="alert alert-danger text-sm">
            <i class="fas fa-exclamation mr-2"></i> {{ $errors->first('telephone') }}
          </h6>
        @enderror
    </div>
</div>
        <div class="input-group mb-3">
          <input type="text" name="ecole" class="form-control" placeholder="Nom de l'école"><br>
          @if($errors->has('ecole'))<h6 class="alert alert-danger text-sm">
            <i class="fas fa-exclamation mr-2"></i> {{ $errors->first('ecole') }}
          </h6>
        @enderror
        </div>
        <div class="row">
            <div class="col-6">
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Mot de passe"><br>
        </div>
        @if($errors->has('password'))<h6 class="alert alert-danger text-sm">
            <i class="fas fa-exclamation mr-2"></i> {{ $errors->first('password') }}
          </h6>
        @enderror
    </div>
        <div class="col-6">
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passe">
          </div>
          @if($errors->has('password_confirmation'))<h6 class="alert alert-danger text-sm">
            <i class="fas fa-exclamation mr-2"></i> {{ $errors->first('password_confirmation') }}
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

      <p class="mt-3 mb-1">
        <a href="{{ route('login') }}">Connectez-vous</a>
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

<!-- jQuery -->
<script src="{{ asset('base/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('base/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('base/dist/js/adminlte.min.js')}}"></script>
</body>
</html>

