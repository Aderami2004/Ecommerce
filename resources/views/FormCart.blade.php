@if(count($errors)>0)
@foreach($errors->all() as $errors)
{{ $errors }}
@endforeach
@endif
<form action="{{ $action }}" method="get">
    @csrf
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama" value="{{ $cart->nama }}"></td>
        </tr>
        <tr>
            <td>Tipe Motor</td>
            <td><input type="text" name="tipe" id="tipe" value="{{ $cart->tipe }}"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" id="harga" value="{{ $cart->harga }}"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" id="alamat" value="{{ $cart->alamat }}"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" id="foto" value="{{ $cart->nama }}"></td>
        </tr>
    </table>
</form>