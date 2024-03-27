@extends('layouts.master1', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')
<!-- Content area -->
<!-- Form validation -->
<div class="card mb-4">
    <h4 class="card-header">Option</h4>
    <!-- Account -->
    <div class="card-body pt-2 mt-1">
    <div class="card-body">
        <p class="mb-4"> Séléctionner les options dont votre école organise, si votre école n'organise pas des options
            séléctionner <strong>Aucune option</strong></p>
        <form action="{{route('option_store')}}" method="POST">
            @csrf
            <fieldset>
                <!-- Switchery group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">
                        @if(! $options->isEmpty())
                        <a href="{{route('option_show')}}" class="btn btn-success" id="reset"> Voir liste des options <i
                                class="icon-list3 ml-2"></i></a>
                        @endif
                    </label>
                    <div class="col-lg-6">
                        <div class="form-check">
                            <select class="form-control" name="option" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected>Cliquer ici</option>
                                <option value="Aucune">Aucune option</option>
                                <option value="Biologie-Chimie">Biologie-Chimie</option>
                                <option value="Commerciale">Commerciale</option>
                                <option value="Coupe-Couture">Coupe-Couture</option>
                                <option value="Eléctricité">Eléctricité</option>
                                <option value="Eléctronique">Eléctronique</option>
                                <option value="Hôtéllerie">Hôtellerie</option>
                                <option value="Hôtesse">Hôtesse</option>
                                <option value="Latin-Philo">Latin - Philo</option>
                                <option value="Math-Physique">Math - Physique</option>
                                <option value="Mécanique">Mecanique générale</option>
                                <option value="Maçonnerie">Maçonnerie</option>
                                <option value="Pédagogie">Pédagogie</option>
                                <option value="Sociale">Sociale</option>
                            </select>
                        </div>
                    </div>
                    <hr>
            </fieldset>
            <div class="mb-5">
                <div class="form-floating form-floating-outline mb-4">
                    <button class="btn btn-outline-primary d-grid w-10" type="submit">Confirmer</button>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- /form validation -->

</div>
</div>
</div>
<!-- /content area -->
<!-- /content area -->
@include('layouts.footer1')
@endsection
