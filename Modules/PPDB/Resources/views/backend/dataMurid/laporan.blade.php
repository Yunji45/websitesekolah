<h4>Laporan Data Calon Murid</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Hak Akses</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($murid as $key => $murids)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$murids->name}}
                </td>
                <td>
                    {{$murids->email}}
                </td>
                <td>
                    {{$murids->muridDetail->proses}}
                </td>
                <td>
                    {{$murids->role}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>