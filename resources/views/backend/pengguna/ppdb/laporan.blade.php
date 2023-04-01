<h4>Laporan User PPDB</h4>
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
            @foreach ($user as $key => $users)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$users->name}}
                </td>
                <td>
                    {{$users->userDetail->nip}}
                </td>
                <td>
                    {{$users->email}}
                </td>
                <td>
                    {{$users->status}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>