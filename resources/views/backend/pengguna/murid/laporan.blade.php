<h4>Laporan Data User Murid</h4>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>status</th>
            <th>role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($murid as $key => $murids)
        <tr>
            <td>{{ $key+1 }}.</td>
            <td>{{$murids->name}}</td>
            <td>{{$murids->email}}</td>
            <td>{{$murids->status}}</td>
            <td>{{$murids->role}}</td>
        </tr>
        @endforeach
    </tbody>
</table>