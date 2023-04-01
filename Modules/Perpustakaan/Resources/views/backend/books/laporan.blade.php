<h4>Laporan Data Buku</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Penerbit</th>
                <th>Penulis</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $key => $books)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$books->book_code}}
                </td>
                <td>
                    {{$books->name}}
                </td>
                <td>
                    {{$books->publisher->name}}
                </td>
                <td>
                    {{$books->author->name}}
                </td>
                <td>
                    {{$books->category->name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>