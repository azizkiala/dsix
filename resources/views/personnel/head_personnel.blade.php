<div class="row clearfix progress-box">
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
                <i class="fa fa-line-chart text-blue"></i
                    >
                <h5 class="text-blue padding-top-10 h5">Effectif / Pesonnel</h5>
                <span class="d-block"
                    >{{$Personnels->count()}} </span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
                <i class="fa text-light-green fa-line-chart"></i
                    >
                <h5 class="text-light-green padding-top-10 h5">
                    Femme
                </h5>
                <span class="d-block"
                    >{{$PersonnelFemme->count()}} {{count_number('femme', $PersonnelFemme->count())}} </span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
                <i class="fa text-light-orange fa-line-chart"></i
                    >
                <h5 class="text-light-orange padding-top-10 h5">
                    Homme
                </h5>
                <span class="d-block"
                    >{{$PersonnelHomme->count()}} {{count_number('homme', $PersonnelHomme->count())}} </span>
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
                    >{{$Personnel_quitte->count()}} </span>
            </div>
        </div>
    </div>
    </div>


