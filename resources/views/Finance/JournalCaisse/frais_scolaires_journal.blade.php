<!-- Customers -->
<div class="">

  <!-- Dashboard content -->
  <div class="row">
    <div class="col-xl-12">

      <!-- Marketing campaigns -->
      <div class="">
        <div class="card-header header-elements-sm-inline">
          <h6 class="card-title text-muted font-weight-bold"> Frais Scolaires</h6>
          <div class="header-elements">
            <span class="badge bg-slate badge-pill">{{AfficheMois(\Carbon\Carbon::today(fiso(Auth::user()->province))->format('m'))}} {{\Carbon\Carbon::today(fiso(Auth::user()->province))->format('Y')}}</span>
            <div class="list-icons ml-3">
            </div>
          </div>
        </div>
        <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
          <div class="d-flex align-items-center mb-3 mb-sm-0">
            <div><i class="icon-cash3 icon-2x text-success"></i></div>
            <div class="ml-3">
              <h4 class="font-weight-semibold mb-0"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">$ {{number_format($fraispayerAujourdhuiEnDollar)}} </span><span
                  class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i></span></h4>
              <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted badge badge-pill">Aujourd'hui, le
                {{\Carbon\Carbon::today(fiso(Auth::user()->province))->format('d/m/Y')}}</span>
            </div>
          </div>
          <div class="d-flex align-items-center mb-3 mb-sm-0">
            <div> <i class="icon-cash4 icon-2x text-pink"></i></div>
            <div class="ml-3">
              <h4 class="font-weight-semibold mb-0"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">CDF {{number_format($fraispayerAujourdhuiEnFranc)}} </span><span
                  class="text-pink font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i></span></h4>
              <span class="badge badge-mark border-pink mr-1"></span> <span class="text-muted badge badge-pill">Aujourd'hui, le
                {{\Carbon\Carbon::today(fiso(Auth::user()->province))->format('d/m/Y')}}</span>
            </div>
          </div>

          <div>
            <a href="{{route('journal_frais')}}" class="btn btn-outline-primary"><i class="icon-statistics mr-2"></i>
              Journal de paiement</a>
          </div>
        </div>

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
              @include('Finance.JournalCaisse.aujour')
              @include('Finance.JournalCaisse.hier')
            </tbody>
          </table>
        </div>
      </div>
      <!-- /marketing campaigns -->
    </div>
    <!-- /customers -->
  </div>

