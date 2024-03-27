<div class="col-xl-12 col-lg-8 col-md-8 col-sm-12 mb-30">
    <div class="card-box card-header height-100-p overflow-hidden">
        <div class="profile-tab height-100-p">
            <div class="tab height-100-p">
                <div class="dropdown text-right">
                    <a  class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133"
                        role="button" data-toggle="dropdown">
                        <i class="dw dw-more font-20"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{ route('journal_frais') }}"><i class="dw dw-upload1"></i> Tableau de paiement</a>
                        <a class="dropdown-item" href="{{ route('rapport_frais_scolaire') }}"><i class="dw dw-list"></i> Rapport de frais</a>

                        <a href="{{ route('frais_trimestre') }}" class="dropdown-item"><i class="icon-copy dw dw-shopping-basket"></i> Trimestre</a>
                        <a data-toggle="dropdown" class="dropdown-item"><i class="icon-copy dw dw-shopping-basket"></i> Modalité de frais par cycle</a>
                        <div class="dropdown-menu dropdown-menu-left">
                            @forelse($cycles as $cycle)
                            <a href="{{route('modalite_fixe', $cycle->slug)}}" class="dropdown-item"><i class="icon-stack-text"></i> {{$cycle->cycle}}</a>
                            @empty
                            <a class="dropdown-item"><i class="icon-notification2"></i> Aucun cycle</a>
                            @endforelse
                        </div>
                        <a class="dropdown-item" href="{{ route('modalité_frais') }}"><i class="dw dw-upload"></i>Fixé les frais scolaires</a>
                    </div>
                </div>


<div class="tab-content">

