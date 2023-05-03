<div>
    <caption><h1>Edit Data Barang</h1></caption>
</div>
<div>
    <form action="{{route('barang.update',$barang->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="">Id Barang</label>
            <input type="text" name="nobarang" value="{{$barang->nobarang}}">
        </div>
        <div>
            <label for="">Nama Barang</label>
            <input type="text" name="namabarang" value="{{$barang->namabarang}}">
        </div>
        <div>
            <label for="">Jenis Barang</label>
            <select name="idkategori" id="">
                <option value="{{$barang->id}}">
                    {{$barang->Kategori->nmkategori}}
                </option>
                <option>
                    ----------------------
                </option>
                @foreach($kategori as $ktg)
                <option value="{{$ktg->id}}">
                    {{$ktg->nmkategori}}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Stok Barang</label>
            <input type="text" name="stok" value="{{$barang->stok}}">
        </div>
        <div>
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" value="{{$barang->keterangan}}">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>