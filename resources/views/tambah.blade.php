<form action="{{ url('tambah/cari') }}"method="get">
    <input type="search" name="cari" id="cari">
    <input type="submit" value="cari">
</form>
<a href="{{ url('tambah/add') }}"><button>Tambah Data</button></a>
<table border=1>
    <tr>
        <th>NAMA</th>
        <th>Tipe Motor</th>
        <th>Harga</th>
        <th>Alamat</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach ($tambah as $Key => $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->tipe }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->alamat }}</td>
        <td><img src="/storage/{{ $item->foto }}" alt="" widht="100" height=100></td>
        <td>{{ $item->alamat }}</td>
        <td><a href="tambah/hapus/{{ $item -> nama}}">Hapus</a></td>
        <td><a href="tambah/edit/{{ $item -> nama}}">Edit</a></td>
    </tr>
    @endforeach
</table>

<a href="/logout">Keluar</a>