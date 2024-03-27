@extends('layouts.master1', ['title'=> 'Rapport journalier autres frais'])
@section('section')
@include('Finance.tete_finance')
@include('Finance.AutreFrais.head_autre_frais')


<div class="content">
    <br>
    <!-- Orders history (datatable) -->
    <div class="row">

      <!-- /categories -->
      <div class="col-md-12 col-sm-12">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="task-title row align-items-center">
                    <div class="col-md-6 col-sm-12 media pd-10 text-muted">
                        <div class="pull-left">
                            <h4 class="text-blue h4"> Rapports Journalier autres frais </h4>
                            <p class="mb-30">Afficher par mois</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12 text-right ">
                        <a href="{{route('invoice_rapport_frais_scolaire', Auth::user()->ecole)}}"
                            class="bg-light-blue btn text-blue weight-400 font-20"><i
                                class="icon-copy dw dw-print"></i> Afficher pour tous le mois</a>
                    </div>
                </div>

            </div>

            @foreach($VoirElevePhoto as $eleve)
            <form method="get" action="{{route('luka_recu',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
            @csrf
            @endforeach
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <select class="custom-select2 form-control" name="mois"
                                style="width: 100%; height: 38px">
                                <optgroup label="Mois">
                                    <option value="01">Janvier</option>
                                    <option value="02">Février</option>
                                    <option value="03">Mars</option>
                                    <option value="04">Avril</option>
                                    <option value="05">Mai</option>
                                    <option value="06">Juin</option>
                                    <option value="07">Juillet</option>
                                    <option value="08">Août</option>
                                    <option value="09">Septembre</option>
                                    <option value="10">Octobre</option>
                                    <option value="11">Novembre</option>
                                    <option value="12">Décembre</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">

                            <input type="text" name="annee" class="form-control" placeholder="préciser l'année scolaire : 2001 - 2002">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="submit" class="form-control btn-primary text-white">Afficher</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
      <div class="col-md-12">
        <!-- Basic tables title -->

        <div class="card mb-4">
            <h4 class="card-header badge badge-pill " data-bgcolor="#e7ebf5" data-color="#265ed7">Tableau de rapports</h4>
            <div class="card-body pt-2 mt-1">
            <div class="pb-20">
              @if(!$datePayes->isEmpty())
              <table class="table hover multiple-select-row data-table-export nowrap">
                <thead data-bgcolor="#e7ebf5" data-color="#265ed7">
                  <tr>
                    <th class="table-plus">Jour</th>
                    <th class="text-center">Mois</th>
                    <th class="text-center">Montant en Franc</th>
                    <th class="text-center">Montant en Dollard</th>
                    <th class="text-center">Date</th>
                    <th class="datatable-nosort"><i class="icon-copy bi bi-check-circle"></i></th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($datePayes as $journal)
                    <tr>
                        <td class="table-plus ">
                          <div class="name-avatar d-flex align-items-center">
                            <div
                              class="  mr-4 text-center text-white font-14">
                              <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">
                              {{AfficheJour(( new DateTime($journal->date_rapport))->format('D'))}}</span>
                            </div>

                          </div>
                        </td>
                        <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{AfficheMois(( new DateTime($journal->date_rapport))->format('m'))}}</span></td>
                        <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">CDF {{number_format($journal->franc)}}</span></td>
                        <td class="text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">$ {{number_format($journal->dollar)}}</span></td>
                        <td class="text-center"> <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">{{( new
                          DateTime($journal->date_rapport))->format('d/m/Y')}}</span></td>
                        <td class="text-center">
                          <div class="table-actions">
                            <a data-color="#265ed7"><i class="icon-copy bi bi-check-circle-fill"></i></a>
                          </div>
                        </td>
                        </a>
                      </tr>
                  @endforeach
                </tbody>
              </table>
              @else
              <div class=" text-center mt-3 text-muted">
                <h6 class="card-title">
                  <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun
                  rapport
                </h6>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

@include('layouts.footer1')
@stop
