<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>{{ $cicles }}</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Cycle</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                organisé
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a
                            class="btn btn-primary dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            Autres Cycles
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @forelse($cycles as $cycle)
                            <a href="{{route('cycle', $cycle->slug)}}" class="dropdown-item"> {{$cycle->cycle}}</a>
                            @empty
                            <a  class="dropdown-item"><i class="icon-cash3"></i> Aucun cycle</a>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
