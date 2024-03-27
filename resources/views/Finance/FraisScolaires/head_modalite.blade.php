
<div class="">
    <div class="invoice-header">
        <div class="logo text-left">
            <img width="100" src="/img/terms-2.png" alt="" />
        </div>
    </div>
    <div class="invoice-desc-footer">
    @if(Route::is('frais_premier_trimestre'))
    <h4 class="invoice-sub  text-center text-muted mb-30 weight-600">Tableau du premier trimestre</h4>
        @elseif(Route::is('frais_deuxieme_trimestre'))
        <h4 class="text-center text-muted mb-30 weight-600">Tableau du deuxième trimestre</h4>
        @elseif(Route::is('frais_troisieme_trimestre'))
        <h4 class="text-center text-muted mb-30 weight-600">Tableau du troisième trimestre</h4>

        @else
        <h4 class="invoice-sub text-center text-muted mb-30 weight-600">Tableau du premier trimestre</h4>

        @endif

</div>

<div class="">
    <div class="pd-20 ">
        <div class="invoice-desc pb-30">
            <div class="invoice-desc-footer">
                <div class="invoice-desc-head clearfix">
                    @if(Route::is('frais_premier_trimestre'))
                    <div class="invoice-sub weight-600">1<sup class="mr-1">ère</sup> Trimestre</div>
                    @elseif(Route::is('frais_deuxieme_trimestre'))
                    <div class="invoice-sub weight-600">2<sup class="mr-1">ème</sup> Trimestre</div>
                    @elseif(Route::is('frais_troisieme_trimestre'))
                    <div class="invoice-sub weight-600">3<sup class="mr-1">ème</sup> Trimestre</div>
                    @else
                    <div class="invoice-sub weight-600">1<sup class="mr-1">ère</sup> Trimestre</div>
                    @endif

                </div>

            </div>

        <div class="tab mt-2">
            <ul class="nav nav-pills justify-content-end" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ col_active('frais_premier_trimestre') }} {{ col_active('frais_trimestre') }} text-blue" href="{{ route('frais_premier_trimestre') }}" role="tab"
                        aria-selected="true">1<sup class="mr-2">ère</sup> Trim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ col_active('frais_deuxieme_trimestre') }} text-blue" href="{{ route('frais_deuxieme_trimestre') }}" role="tab"
                        aria-selected="false">2<sup class="mr-2">ème</sup> Trim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ col_active('frais_troisieme_trimestre') }} text-blue" href="{{ route('frais_troisieme_trimestre') }}" role="tab"
                        aria-selected="false">3<sup class="mr-2">ème</sup> Trim</a>
                </li>
            </ul>

