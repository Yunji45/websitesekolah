<h4>History Pembayaran</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Tanggal Pembayaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payment as $key => $payments)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$payments->payment->year}}
                </td>
                <td>
                    {{$payments->month}}
                </td>
                <td>Rp
                    {{number_format($payments->amount)}}
                </td>
                <td>
                    <span class="badge badge-{{$payments->status == 'paid' ? 'info' : 'warning'}}">{{$payments->status}}</span>
                </td>
                <td>
                    {{$payments->date_file}}
                </td>
                <td>
                    @if ($payments->status == 'paid')
                    <span class="badge badge-info">Pembayaran Diterima</span>
                    @else
                    <a
                        href="{{route('pembayaran.edit', $payments->id)}}"
                        class="btn btn-success btn-sm">{{$payments->file != null ? 'Pembayaran Diproses' : 'Bayar'}}</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>