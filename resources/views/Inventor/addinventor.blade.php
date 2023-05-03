<div>
    <caption><h1>Data Inventor</h1></caption>
</div>
<div>
    <form action="{{route('inventor.store')}}" method="post">
        @csrf
        <div>
            <label for="">Id Inventor</label>
            <input type="text" name="noinventor" id="">
        </div>
        <div>
            <label for="">Tanggal Inventor</label>
            <input type="date" name="tglinventor" id="">
        </div>
        <div>
            <label for="">Nama Barang</label>
            <select name="idbarang" id="">
                @foreach($barang as $brg)
                <option value="{{$brg->id}}">
                    {{$brg->namabarang}}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Jumlah Barang</label>
            <input type="text" name="jmlbarang" id="">
        </div>
        <div>
            <label for="">Sumber Barang</label>
            <input type="text" name="sumberbarang" id="">
        </div>
        <div>
            <label for="">Kondisi Barang</label>
            <select name="status" id="">
                <option>Pilih</option>
                <option value="Bagus">Bagus</option>
                <option value="Rusak">Rusak</option>
            </select>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>