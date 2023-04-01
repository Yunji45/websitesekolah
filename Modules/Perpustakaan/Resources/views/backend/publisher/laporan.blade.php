<h4>Daftar Penerbit</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publisher as $key => $publishers)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$publishers->name}}
                </td>
                <td>
                    {{$publishers->address}}
                </td>
                <td>
                    {{$publishers->phone}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>