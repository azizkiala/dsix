<div class="col-xl-12 col-lg-8 col-md-8 col-sm-12 mb-30">
    <div class="card-box card-header height-100-p overflow-hidden">
        <div class="profile-tab height-100-p">
            <div class="tab height-100-p">
                <ul class="nav nav-tabs customtab" data-bgcolor="#e7ebf5" data-color="#265ed7" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{col_active('autre_frais')}} weight-600 font-16"
                            href="{{route('autre_frais')}}" role="tab">Journal de paiement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{col_active('rapport_autre_frais')}} weight-600 font-16"
                            href="{{route('rapport_autre_frais')}}" role="tab">Rapport Journalier</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link weight-600 font-16" data-toggle="dropdown">
                            Trimestre
                            <span class="d-lg-none ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu">
                            <a href="" class="dropdown-item"><i class="icon-stack"></i> 1<sup class="mr-2">ère</sup>
                                Trimestre</a>
                            <a href="" class="dropdown-item"><i class="icon-stack"></i> 2<sup class="mr-2">ème</sup>
                                Trimestre</a>
                            <a href="" class="dropdown-item"><i class="icon-stack"></i> 3<sup class="mr-2">ème</sup>
                                Trimestre</a>
                        </div>
                    </li>

                </ul>

                <div class="tab-content">
