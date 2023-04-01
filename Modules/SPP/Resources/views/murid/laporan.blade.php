<h4>Laporan Data SPP Murid</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pembayaran Bulan
                    {{Date('F')}}
                </th>
                <th>Status</th>
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
                    {{$payments->muridDetail->nisn}}
                </td>
                <td>
                    {{$payments->name}}
                </td>
                <td>
                    {{$payments->email}}
                </td>
                <td>
                    @if (Date('m') == 1)
                    <span
                        class="badge badge-{{$payments->payment->January == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->January)}}</span>
                    @elseif(Date('m') == 2)
                    <span
                        class="badge badge-{{$payments->payment->Febuary == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->Febuary)}}</span>
                    @elseif(Date('m') == 3)
                    <span
                        class="badge badge-{{$payments->payment->March == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->March)}}</span>
                    @elseif(Date('m') == 4)
                    <span
                        class="badge badge-{{$payments->payment->April == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->April)}}</span>
                    @elseif(Date('m') == 5)
                    <span
                        class="badge badge-{{$payments->payment->Mey == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->Mey)}}</span>
                    @elseif(Date('m') == 6)
                    <span
                        class="badge badge-{{$payments->payment->Juny == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->Juny)}}</span>
                    @elseif(Date('m') == 7)
                    <span
                        class="badge badge-{{$payments->payment->July == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->July)}}</span>
                    @elseif(Date('m') == 8)
                    <span
                        class="badge badge-{{$payments->payment->August == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->August)}}</span>
                    @elseif(Date('m') == 9)
                    <span
                        class="badge badge-{{$payments->payment->September == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->September)}}</span>
                    @elseif(Date('m') == 10)
                    <span
                        class="badge badge-{{$payments->payment->October == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->October)}}</span>
                    @elseif(Date('m') == 11)
                    <span
                        class="badge badge-{{$payments->payment->November == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->November)}}</span>
                    @elseif(Date('m') == 12)
                    <span
                        class="badge badge-{{$payments->payment->December == 'paid' ? 'info' : 'warning'}}">{{strtoupper($payments->payment->December)}}</span>
                    @endif
                </td>
                <td>
                    <span class="badge badge-info">{{$payments->payment->is_active == 1 ? 'ACTIVE' : 'SUSPEND'}}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>