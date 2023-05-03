<div>
    <caption><h1>Data Barang</h1></caption>
</div>
<div>
    <form action="{{route('barang.store')}}" method="post">
        @csrf
        <div>
            <label for="">Id Barang</label>
            <input type="text" name="nobarang" id="">
        </div>
        <div>
            <label for="">Nama Barang</label>
            <input type="text" name="namabarang" id="">
        </div>
        <div>
            <label for="">Jenis Barang</label>
            <select name="idkategori" id="">
                @foreach($kategori as $ktg)
                <option value="{{$ktg->id}}">
                    {{$ktg->nmkategori}}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Stok Barang</label>
            <input type="text" name="stok" id="">
        </div>
        <div>
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" id="">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>