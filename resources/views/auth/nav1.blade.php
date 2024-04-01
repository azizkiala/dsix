<div class="">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    @if(!Route::is('ebandeli'))
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('ebandeli') }}">
                        <li class="breadcrumb-item "><i class="fas fa-home"></i></li></a>
                    </ol>
                    @else
                    <ol class="breadcrumb float-sm-right">
                        <a href="">
                        <li class="breadcrumb-item "></li></a>
                    </ol>
                    @endif
                </div>
            </div>
        </div><!-- /.container-fluid -->

