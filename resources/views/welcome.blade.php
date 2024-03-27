<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . ' | ' : '' }} 2-SIX</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/ds.png" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('base/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('base/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->

    @include('auth.nav1')

        <!-- Main content -->
        <section class="content">

           <div class="row">

                <div class="col-md-4 text-center">
                    <div class="error-page">
                    <img width="450" src="{{ asset('img/hosting.png') }}" alt="User Image">
                </div>
            </div>
                <div class="col-md-8">
                    <div class="error-page">
                    <div class="error-content">
                        <h1 class="text-danger"><b>Gérer votre Ecole Autrement</b></h1>
                        <h3>Avec 2-Six vous avez la possibilité de gérer votre école avec sécurité et fiabilité</h3>

                        <p>
                          Votre compte de gestion vous donne la possibilité de gérer votre école.
                          si vous n'avez pas encore créer le compte, cliquer sur Créer un compte de gestion</a>
                        </p>

                        <form class="search-form">
                          <div class="input-group">
                          <div class="input-group-append">
                                <a href="{{ route('register') }}">
                              <p  class="btn btn-success">Créer un compte de gestion
                              </p></a>
                            </div>
                          </div>
                          <!-- /.input-group -->
                        </form>
                      </div>
                    </div>
                </div>
            </div>



          </div>
          <!-- /.error-page -->

        </section>
        <!-- /.content -->
      </div>
    </div>
    @include('auth.mutu')
      <!-- /.content-wrapper -->



    <!-- jQuery -->


    <script src="../../plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('base/plugins/bootstrap/js/bootstrap.bundle.min.js"')}}></script>
<!-- AdminLTE App -->
<script src="{{ asset('base/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('base/dist/js/demo.js')}}"></script>
</body>

</html>
