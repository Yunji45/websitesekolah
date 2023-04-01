<h4>Laporan Member Perpustakaan</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Name</th>
                <th>Status</th>
                <th>Member Sejak</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($member as $key => $members)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$members->name}}
                </td>
                <td>
                    {{$members->is_active == 0 ? 'Aktif' : 'Tidak Aktif'}}
                </td>
                <td>
                    {{$members->created_at}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>