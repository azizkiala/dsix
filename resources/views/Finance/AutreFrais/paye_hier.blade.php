<tr class="table-active ">
    <td>Hier</td>


    <td class="text-center">
        <div class="d-flex align-items-center">
            <div class="mr-3">
                <a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-sm">
                    <span class="letter-icon"></span>
                </a>
            </div>
            <div>
                <a href="#" class="text-default font-weight-semibold">Montant perçu en Franc</a>
                <div class="text-muted font-size-sm">
                    <span class="badge badge-mark border-pink mr-1"></span>
                </div>
            </div>
        </div>
    </td>
    <td class="text-center"><span class="text-muted">{{ $nombreElevePayerHierAutreFranc }}</span></td>
    <td class="text-center"><span
            class="text-pink-600">{{ \Carbon\Carbon::yesterday(fiso(Auth::user()->province))->format('d/m/Y') }}</span>
    </td>
    <td class="text-center">
        <h4 class="font-weight-semibold mb-0">{{ $AutrefraispayerHierEnFranc }} CDF</h4>
    </td>
</tr>
<tr>
    <td class="text-white">Hier</td>
    <td class="text-center">
        <div class="d-flex align-items-center">
            <div class="mr-3">
                <a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
                    <span class="letter-icon"></span>
                </a>
            </div>
            <div>
                <a href="#" class="text-default font-weight-semibold">Montant perçu en Dollar</a>
                <div class="text-muted font-size-sm">
                    <span class="badge badge-mark border-success mr-1"></span>
                </div>
            </div>
        </div>
    </td>
    <td class="text-center"><span class="text-muted"> {{ $nombreElevePayerHierAutreDollar }}</span></td>
    <td class="text-center"><span
            class="text-success-600">{{ \Carbon\Carbon::yesterday(fiso(Auth::user()->province))->format('d/m/Y') }}</span>
    </td>
    <td class="text-center">
        <h4 class="font-weight-semibold mb-0">{{ $AutrefraispayerHierEnDollar }} $</h4>
    </td>

</tr>
