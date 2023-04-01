<h4>Laporan User Bendahara</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bendahara as $key => $bendaharas)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$bendaharas->name}}
                </td>
                <td>
                    {{$bendaharas->userDetail->nip}}
                </td>
                <td>
                    {{$bendaharas->email}}
                </td>
                <td>
                    {{$bendaharas->status == 'Aktif' ? 'Aktif' : 'Tidak Aktif'}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>