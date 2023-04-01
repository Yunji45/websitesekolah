<h4>Laporan History Peminjaman Buku</h4>
<div class="card-datatable">
    <table class="dt-responsive table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Kode Pinjam</th>
                <th>Peminjam</th>
                <th>Judul Buku</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Akhir</th>
                <th>Pengambilian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($HistoryPeminjam as $key => $HistoryPeminjams)
            <tr>
                <td></td>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$HistoryPeminjams->borrow_code}}
                </td>
                <td>
                    {{$HistoryPeminjams->members->name}}
                </td>
                <td>
                    {{$HistoryPeminjams->books->name}}
                </td>
                <td>
                    {{$HistoryPeminjams->borrow_date}}
                </td>
                <td>
                    {{$HistoryPeminjams->return_date}}
                </td>
                <td>
                    {{$HistoryPeminjams->lateness}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>