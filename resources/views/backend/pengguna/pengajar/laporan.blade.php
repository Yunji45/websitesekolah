<h4>Laporan User Pengajar</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Nama</th>
                <th>Mengajar</th>
                <th>NIP</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajar as $key => $pengajars)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$pengajars->name}}
                </td>
                <td>
                    {{$pengajars->userDetail->mengajar}}
                </td>
                <td>
                    {{$pengajars->userDetail->nip}}
                </td>
                <td>
                    {{$pengajars->email}}
                </td>
                <td>
                    {{$pengajars->status == 'Aktif' ? 'Aktif' : 'Tidak Aktif'}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>