<div>
    <form action="{{route('kategori.store')}}" method="post">
        @csrf
        <caption><h1>Data Kategori</h1></caption>
        <div>
            <label for="">Nama Kategori</label>
            <input type="text" name="nmkategori" id="">
        </div>
        <div>
            <label for="">Keterangan</label>
            <input type="text" name="ket" id="">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>