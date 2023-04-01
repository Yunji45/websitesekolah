<h4>Laporan User Staf</h4>
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
            @foreach ($staf as $key => $stafs)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$stafs->name}}
                </td>
                <td>
                    {{$stafs->userDetail->nip}}
                </td>
                <td>
                    {{$stafs->email}}
                </td>
                <td>
                    {{$stafs->status == 'Aktif' ? 'Aktif' : 'Tidak Aktif'}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>