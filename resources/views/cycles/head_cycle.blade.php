<div class="row clearfix progress-box">
<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
    <div class="card-box pd-30 height-100-p">
        <div class="progress-box text-center">
            <i class="fa fa-line-chart text-blue"></i
                >
            <h5 class="text-blue padding-top-10 h5">Effectif {{ucfirst($cicles)}}</h5>
            <span class="d-block"
                >{{$EffectifParCycle->count()}} {{count_number('élève', $EffectifParCycle->count())}} </span>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
    <div class="card-box pd-30 height-100-p">
        <div class="progress-box text-center">
            <i class="fa text-light-green fa-line-chart"></i
                >
            <h5 class="text-light-green padding-top-10 h5">
                Fille
            </h5>
            <span class="d-block"
                >{{$SexeFeminin->count()}} {{count_number('élève', $SexeFeminin->count())}} </span>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
    <div class="card-box pd-30 height-100-p">
        <div class="progress-box text-center">
            <i class="fa text-light-orange fa-line-chart"></i
                >
            <h5 class="text-light-orange padding-top-10 h5">
                Garçon
            </h5>
            <span class="d-block"
                >{{$SexeMasculin->count()}} {{count_number('élève', $SexeMasculin->count())}} </span>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
    <div class="card-box pd-30 height-100-p">
        <div class="progress-box text-center">
            <i class="fa text-light-purple fa-line-chart"></i
                >
            <h5 class="text-light-purple padding-top-10 h5">
                Abandon
            </h5>
            <span class="d-block"
                >{{$EleveAbandon->count()}} {{count_number('élève', $EleveAbandon->count())}} </span>
        </div>
    </div>
</div>
</div>


