<div>
    <form action="{{route('kategori.update',$kategori->id)}}" method="post">
        @csrf
        @method('PUT')
        <caption><h1>Ubah Data Kategori</h1></caption>
        <div>
            <label for="">Nama Kategori</label>
            <input type="text" name="nmkategori" value="{{$kategori->nmkategori}}">
        </div>
        <div>
            <label for="">Keterangan</label>
            <input type="text" name="ket" value="{{$kategori->ket}}">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>