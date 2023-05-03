<div>
    <caption><h1>Daftar Barang</h1></caption>
    <a href="{{route('barang.create')}}"><button>Add</button></a>
</div>
<div>
    <table>
        <thead>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stok Barang</th>
            <th>Keterangan</th>
            <th>Tools</th>
        </thead>
        @foreach($barang as $brg)
        <tbody>
            <td>{{$brg->nobarang}}</td>
            <td>{{$brg->namabarang}}</td>
            <td>{{$brg->kategori->nmkategori}}</td>
            <td>{{$brg->stok}}</td>
            <td>{{$brg->keterangan}}</td>
            <td><a href="{{route('barang.edit',$brg->id)}}"><button>Ubah</button></a>||<form action="{{route('barang.destroy',$brg->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin dihapus?')">Hapus</button>
            </form></td>
        </tbody>
        @endforeach
    </table>
</div>