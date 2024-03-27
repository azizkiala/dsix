      <!-- Customers -->
        <div class="">

          <!-- Dashboard content -->
        <div class="row">
          <div class="col-xl-12">

            <!-- Marketing campaigns -->
            <div class="">
              <div class="card-header header-elements-sm-inline">
                <h6 class="card-title text-muted font-weight-bold">Autres Frais</h6>
                <div class="header-elements">
                  <span class="badge bg-slate badge-pill">{{AfficheMois(\Carbon\Carbon::today(fiso(Auth::user()->province))->format('m'))}} {{\Carbon\Carbon::today(fiso(Auth::user()->province))->format('Y')}}</span>
                  <div class="list-icons ml-3">

                          </div>
                        </div>
              </div>

              <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                <div class="d-flex align-items-center mb-3 mb-sm-0 pd-5">
                  <div ><i class="icon-cash4 icon-2x text-success"></i></div>
                  <div class="ml-3">
                    <h4 class="font-weight-semibold mb-0 text-success">{{$AutrefraispayerAujourdhuiEnDollar}} $<span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i></span></h4>
                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Aujourd'hui, le {{\Carbon\Carbon::today(fiso(Auth::user()->province))->format('d/m/Y')}}</span>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-sm-0 pd-5">
                  <div > <i class="icon-cash4 icon-2x text-danger"></i></div>
                  <div class="ml-3">
                    <h4 class="font-weight-semibold mb-0 text-warning">{{$AutrefraispayerAujourdhuiEnFranc}} CDF<span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i></span></h4>
                    <span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Aujourd'hui, le {{\Carbon\Carbon::today(fiso(Auth::user()->province))->format('d/m/Y')}}</span>
                  </div>
                </div>

                <div>
                  <a href="{{route('autre_frais')}}" class="btn btn-outline-primary"><i class="icon-statistics mr-2"></i> Journal de paiement</a>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table hover multiple-select-row data-table-export nowrap">
                    <thead data-bgcolor="#e7ebf5"
                    data-color="#265ed7">
                    <tr>
                        <th>Période</th>
                        <th class="text-center">Modalité</th>
                        <th class="text-center">Nombre d'élèves payer</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Montant du jour</th>
                    </tr>
                  </thead>
                  <tbody>
                    @include('Finance.AutreFrais.paye_aujour')
                    @include('Finance.AutreFrais.paye_hier')
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /marketing campaigns -->

         </div>
        <!-- /customers -->
     </div>
  </div>
