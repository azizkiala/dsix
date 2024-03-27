<div class="col-xl-12 col-lg-8 col-md-8 col-sm-12 mb-30">
    <div class="card-box card-header height-100-p overflow-hidden">
        @foreach($VoirElevePhoto as $eleve)
        <div class="profile-tab height-130-p">
            <div class="tab height-100-p">
                <ul class="nav nav-tabs customtab" data-bgcolor="#e7ebf5" data-color="#265ed7" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{col_active('eleve_show')}} width-100 font-20"
                            href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"
                            role="tab" data-bgcolor="#e7ebf5" data-color="#265ed7">{{$eleve->nom}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{col_active('eleve_info')}} width-100 font-20"
                            href="{{route('eleve_info',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"
                            role="tab"><i class="icon-copy bi bi-display" data-bgcolor="#e7ebf5" data-color="#265ed7"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{col_active('eleve_recu')}} width-100 font-20"
                            href="{{route('eleve_recu',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"
                            role="tab" data-bgcolor="#e7ebf5" data-color="#265ed7"><i class="icon-copy bi bi-bookmarks"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{col_active('autreFrais')}} width-100 font-20"
                            href="{{route('autreFrais',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"
                            role="tab" data-bgcolor="#e7ebf5" data-color="#265ed7"><i class="icon-copy bi bi-cash-stack"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{col_active('frais_eleve')}} width-100 font-20"
                            href="{{route('frais_eleve', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"
                            role="tab" data-bgcolor="#e7ebf5" data-color="#265ed7"><i class="icon-copy bi bi-exclude"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{col_active('eleve_photo')}} width-100 font-20"
                            href="{{route('eleve_photo',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"
                            role="tab" data-bgcolor="#e7ebf5" data-color="#265ed7"><i class="icon-copy bi bi-image"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link width-100 font-20" href="" role="tab" data-bgcolor="#e7ebf5" data-color="#265ed7"><i
                                class="icon-copy bi bi-folder-plus"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link width-100 font-20" href="" role="tab" data-bgcolor="#e7ebf5" data-color="#265ed7"><i
                                class="icon-copy bi bi-arrows-angle-contract"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link width-100 font-20" data-toggle="dropdown" data-bgcolor="#e7ebf5" data-color="#265ed7">
                            <i class="icon-copy bi bi-gear"></i>
                            <span class="d-lg-none ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route($eleve->active ==  0 ?'desactive':'active',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"
                                class="dropdown-item"><i
                                    class="{{$eleve->active == 0 ?'icon-lock':'icon-unlocked2'}}"></i> {{$eleve->active
                                == 0 ?'Bloqué élève':'Débloqué élève'}}</a>
                            <a style="cursor: pointer" data-id="{{$eleve->id}}" data-name="{{$eleve->nom}}"
                                data-image="{{$eleve->photo_eleve}}" class="dropdown-item eleve"> Supprimer élève</a>
                            <a href="" class="dropdown-item ">Dossier de l'élève</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{route('deplace_eleve',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"
                                class="dropdown-item"> Transférer à une école</a>
                        </div>
                    </li>
                </ul>
                @endforeach
                <div class="tab-content">
