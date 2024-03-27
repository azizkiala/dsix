<!-- Close Task start -->
<!-- add task popup start -->
<div class="modal fade customscroll" id="task-add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Paiement de frais scolaires
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip"
                    data-placement="bottom" title="" data-original-title="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-0">
                <div class="task-list-form">
                    @foreach($VoirElevePhoto as $eleve)
                    <ul>
                        <li>
                            @if(! $eleve->active == '1')
                            <form action="{{route('dola_frais', $eleve->id)}}" method="post">
                            @csrf
                                @foreach($FraisFixePourEleve as $modalite)
                                @if(! $modalite->montant_dollar == null)
                                <div class="form-group row">
                                    <label class="col-md-12 text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">L'élève paye ses frais scolaires en dollar</span></label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Montant</label>
                                    <div class="col-md-8">
                                        <input name="dollar" type="text" class="form-control" placeholder="$" />
                                    </div>
                                </div>
                                @else
                                <div class="form-group row">
                                    <label class="col-md-12 text-center"><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">L'élève paye ses frais scolaires en franc </span></label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Montant</label>
                                    <div class="col-md-8">
                                        <input type="number" name="franc" class="form-control" id="exampleInputEmail1"
                                            placeholder="CDF">
                                    </div>
                                </div>
                                @endif
                                @endforeach

                                <div class="form-group row">
                                    <label class="col-md-4">Trimestre</label>
                                    <div class="col-md-8">
                                        <select name="trimestre" class="selectpicker form-control"
                                            data-style="btn-outline-primary">
                                            <option value="1èr Trimestre">1<sub>èr</sub> Trimestre</option>
                                            <option value="2ème Trimestre">2<sub>ème</sub> Trimestre</option>
                                            <option value="3ème Trimestre">3<sub>ème</sub> Trimestre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-md-4">Année Scolaire</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{AnneeSco()}}" name="annee"
                                            class="form-control date-picker"/>
                                    </div>
                                </div>
                        </li>
                    </ul>
                    @else
                    <div class="modal-body pd-0">
                        <hr>
                        <h3 class="text-center text-muted mt-3">L'élève est désactivé</h3>
                        <p class="text-center mt-3"><i style="font-size: 95px; color: wheat;"
                                class="dw dw-exclamation"></i></p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                @if(! $eleve->active == '1')
                <button type="submit" class="btn btn-primary">
                    Confirmer le paiement
                </button>
                @endif
                @endforeach
            </div>
            </form>
        </div>
    </div>
</div>
