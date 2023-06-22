<h1>create peminjam</h1>

<from action="/peminjam/store" method="POST">
    <input type="text" name="nama" placeholder="Nama"><br> 
    <select name="text" name="jurusan">
        <option value="">Pilih Jurusan </option>
        <option value="teknik informatika">Teknik informatika</option>
        <option value="industri">Industri</option>
        <option value="teknik sipil">teknik Sipil</option></select> <br>
    <input type="text" name="kode buku" placeholder="Kode buku"><br> 
    <input type="text" name="judul buku" placeholder="Judul buku"><br> 
    <input type="text" name="tanggal terbit" placeholder="Tanggal terbit"><br> 
    <input type="text" name="tanggal pinjam" placeholder="Tanggal pinjam"><br> 
    <input type="submit" name="submit" value="Save">

</from>