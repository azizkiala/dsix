


@if($cycles->isEmpty() OR $options->isEmpty() OR $photoAdmin->isEmpty() OR $infoEcole->isEmpty())
<div class="alert alert-danger alert-dismissible" role="alert">
    Veuillez remplir toutes ces quatre étapes pour la bonne fonctionnement de votre compte de gestion.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


