
      <div class="left-side-bar">
        <div class="brand-logo">
            <a href="{{route('home')}}">
                <img  width="70" src="{{asset('/img/ds.png')}}" alt="" class="dark-logo" />
                <img width="70"
                    src="{{asset('/img/ds.png')}}"
                    alt=""
                    class="light-logo"
                />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="{{route('home')}}" class="dropdown-toggle">
                            <span class="micon bi bi-house"></span
                            ><span class="mtext">Accueil</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-hdd-stack"></span
                            ><span class="mtext">Cycles</span>
                        </a>
                        <ul class="submenu">
                            @forelse($cycles as $cycle)
                            <li><a href="{{ route('cycle', $cycle->slug) }}">{{ $cycle->cycle }}</a></li>
                            @empty
                            <li ><a> Aucun cycle</a></li>
                            @endforelse

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-receipt-cutoff"></span
                            ><span class="mtext">Option</span>
                        </a>
                        <ul class="submenu">
                            @forelse($options as $option)
                            <li><a href="{{ route('options', $option->option) }}">{{ $option->option }}</a></li>
                            @empty
                    <li><a> Aucune option</a></li>
                    @endforelse
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{route('eleve')}}" class="dropdown-toggle">
                            <span class="micon bi bi-people"></span
                            ><span class="mtext"> Elèves </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{route('personnel_principal')}}" class="dropdown-toggle">
                            <span class="micon bi bi-person"></span
                            ><span class="mtext">Personnel</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{route('modalite_frais')}}" class="dropdown-toggle">
                            <span class="micon bi bi-pie-chart"></span
                            ><span class="mtext">Finance</span>
                        </a>

                    </li>


                    <li>
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-folder2-open "></span
                            ><span class="mtext">Mes documents</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="">Ajouter</a></li>
                            <li><a href="">Document</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
