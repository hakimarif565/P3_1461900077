<form action="{{ url('transaksi/' . $check->$id) }}" method="post">
    @csrf
    <input type="hidden" nama="_method" value="patch">
    id: <input type="text" name="id" value="{{ $check->$nbi }}">
    id_pelanggan: <input type="text" name="id_pelanggan" value="{{ $check->$id_pelanggan }}">
    id_barang: <input type="text" name="id_barang" value="{{ $check->$id_barang }}">
    <button type="submit">simpan</button>

</form>