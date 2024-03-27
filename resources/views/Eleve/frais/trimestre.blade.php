
<div class="row">

    <!-- /categories -->
    <div class="col-md-12">

        <div class="">
            <div class="card-header bg-slate header-elements-inline">
                <h4 class="text-center badge badge-pill " data-bgcolor="#e7ebf5" data-color="#265ed7">{{ $modas }}</h4>

            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        @include('Eleve.frais.fraisPTerminer')
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        @include('Eleve.frais.fraisDTerminer')
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        @include('Eleve.frais.fraisTTerminer')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
