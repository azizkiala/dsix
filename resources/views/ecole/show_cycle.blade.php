@extends('layouts.master1', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')
<!-- Content area -->
<div class="card mb-4">
    <h4 class="card-header">Cycle organisé</h4>
    <!-- Account -->
    <div class="card-body pt-2 mt-1">
        <div class="card-body">
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold"></legend>
                <!-- Basic checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-5 ">Nombre de cycle organisé
                        <strong>({{$cycles->count()}})</strong>
                        <span class="text-danger">*</span></label>
                    <div class="col-lg-7">
                        <div class="form-check">
                            <table class="table table-striped">

                                <tbody>
                                    @foreach($cycles as $cycle)
                                    <tr>
                                        <td>{{$cycle->cycle}}</td>
                                        <td><a data-id="{{$cycle->id}}" data-name="{{$cycle->cycle}}"
                                                class="cycle"><span class="btn btn-outline-secondary btn-icon"><i
                                                        class="icon-copy bi bi-trash3"></i></span></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- /basic checkbox group -->
            </fieldset>
            <div class="d-flex justify-content-end align-items-center">

                @if($cycles->count() == '4')
                @else
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{route('cycle_ecole')}}" class="btn btn-outline-primary" id="reset"> Ajouter <i
                            class="icon-plus3 ml-2"></i></a>
                </div>
                @endif
            </div>


        </div>
    </div>
    <!-- /form validation -->

</div>
</div>
<!-- /content area -->


<!-- /content area -->
@include('layouts.footer1')
@endsection
