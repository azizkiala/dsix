<div class="footer-wrap pd-20 mb-20 text-muted font-12">
    {{ Auth::user()->ecole }}
    <a class=" text-right" href=""> {{ Auth::user()->province }}</a>
</div>
</div>
</div>

<!-- welcome modal start -->
<!-- welcome modal start -->

<button data-toggle="modal" data-target="#bd-example-modal-lg" class="welcome-modal-btn">
    <i class="micon bi bi-people font-30"></i>
</button>
<!-- welcome modal end -->

<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Tableau des élèves
                </h4>
                <button type="button" class="close welcome-modal-close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                @if (!$Eleves->isEmpty())
                    <div class="contact-directory-list">
                        <ul class="row">
                            @foreach ($Eleves as $eleve)
                                <li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-directory-box">
                                        <div class="contact-dire-info text-center">
                                            <div class="contact-avatar">
                                                <span>
                                                    @if (!$eleve->photo_eleve == '')
                                                    <img src="/uploads/image_eleves/{{ $eleve->photo_eleve }}"
                                                            alt="">
                                                    @else
                                                    <img src="/img/user.png" alt="">
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="contact-name">
                                                <h4>{{ $eleve->nom }} {{ $eleve->post_nom }} {{ $eleve->prenom }}</h4>
                                                <p>{{ $eleve->classe }} {{ $eleve->cycle }}</p>
                                            </div>
                                        </div>
                                        <div class="view-contact">
                                            <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">Voir Profile</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <div class=" text-center mt-3 text-muted">
                        <h6 class="card-title">
                            <i class="dw dw-user-1 font-30 text-muted  pd-10"></i><br> Aucun élève
                        </h6>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>
<!-- welcome modal end -->
<!-- js -->
<script src="{{ asset('d/vendors/scripts/core.js') }}"></script>
<script src="{{ asset('d/vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('d/vendors/scripts/process.js') }}"></script>
<script src="{{ asset('d/vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('d/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('d/vendors/scripts/dashboard3.js') }}"></script>

<script src="{{ asset('d/src/plugins/jquery-steps/jquery.steps.js') }}"></script>
<script src="{{ asset('d/vendors/scripts/steps-setting.js') }}"></script>
<script src="{{ asset('r/assets/js/pages-account-settings-account.js') }}"></script>

<script src="{{ asset('d/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<!-- buttons for Export datatable -->
<script src="{{ asset('d/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/datatables/js/vfs_fonts.js') }}"></script>
<!-- Datatable Setting js -->
<script src="{{ asset('d/vendors/scripts/datatable-setting.js') }}"></script>
<script src="{{ asset('d/src/plugins/sweetalert2/sweetalert2.all.js') }}"></script>
<script src="{{ asset('d/src/plugins/sweetalert2/sweet-alert.init.js') }}"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
        style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script src="{{ asset('d/src/plugins/jQuery-Knob-master/jquery.knob.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
<script src="{{ asset('d/src/plugins/highcharts-6.0.7/code/highcharts-more.js') }}"></script>
<script src="{{ asset('d/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('d/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('d/vendors/scripts/dashboard2.js') }}"></script>
</body>

</html>
