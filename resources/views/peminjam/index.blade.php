<a href="/peminjam/create">Add Pinjam<a>
<table border="1">
    <th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>KODE BUKU</th>
        <th>TANGGAL TERBIT</th>
        <th>TANGGAL PINJAM</th>
    </th>
    @foreach($peminjam as $p)
    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->nama}}</td>
        <td>{{$p->jurusan}}</td>
        <td>{{$p->kode_buku}}</td>
        <td>{{$p->tanggal_terbit}}</td>
        <td>{{$p->tanggal_pinjam}}</td>
    </tr>
   @endforeach
</table>