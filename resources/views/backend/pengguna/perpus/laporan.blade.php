<h4>Laporan User Perpustakaan</h4>
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
            @foreach ($perpus as $key => $perpuss)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$perpuss->name}}
                </td>
                <td>
                    {{$perpuss->userDetail->nip}}
                </td>
                <td>
                    {{$perpuss->email}}
                </td>
                <td>
                    {{$perpuss->status == 'Aktif' ? 'Aktif' : 'Tidak Aktif'}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>