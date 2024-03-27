<!-- Close Task start -->
<!-- add task popup start -->
<div class="modal fade customscroll" id="task-add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Effectuer une dépense
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip"
                    data-placement="bottom" title="" data-original-title="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-0">
                <div class="task-list-form">

                    <ul>
                        <li>
                            <form action="{{ route('store_depense') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="number" name="dollar"  class="form-control" placeholder="$" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="number" name="franc" class="form-control"
                                            placeholder="CDF">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea required="" name="description" class="selectpicker form-control" placeholder="Déscription"></textarea>
                                    </div>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                    Confirmer
                </button>

            </div>
            </form>
        </div>
    </div>
</div>
