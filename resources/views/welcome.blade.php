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
    <section class="content mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <h1><img width="90" src="{{ asset('img/ds.png') }}" alt="User Image"></h1>
                <img width="290" src="{{asset(zongela()) }}" alt="User Image">
            </div>
            <div class="col-md-4">
                <div class="">
                    <div class="error-content">
                        <h3>Avec 2-Six vous avez la possibilité de gérer votre école autrement en toute sécurité</h3>
                        <p>
                            Se connecter avec numéro mobile de votre compte en cliquant sur <b>Se connecter</b> pour commencer votre session de gérence.
                            Si vous n'avez pas un compte, cliquer sur <b>Créer un compte</b></a>
                        </p>
                        <form class="search-form">
                            <div class="">
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <div class="">
                                            <a href="{{ route('register') }}">
                                                <p
                                                    class="btn btn-success btn-block p-3">Créer un compte
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="">
                                            <a href="{{ route('login') }}">
                                                <p
                                                    class="btn btn-primary btn-block p-3">Connectez-vous
                                                </p>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.input-group -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
   @include('auth.footer_login')
