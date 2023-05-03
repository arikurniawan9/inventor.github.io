<div>
    <caption><h1>Daftar Inventor</h1></caption>
    <a href="{{route('inventor.create')}}"><button>Add</button></a>
</div>
<div>
    <table>
        <thead>
            <th>Id Inventor</th>
            <th>Tanggal Inventor</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Sumber Barang</th>
            <th>Kondisi Barang</th>
            <th>Tools</th>
        </thead>
        @foreach($inventor as $invent)
        <tbody>
            <td>{{$invent->noinventor}}</td>
            <td>{{$invent->tglinventor}}</td>
            <td>{{$invent->Barang->namabarang}}</td>
            <td>{{$invent->jmlbarang}}</td>
            <td>{{$invent->sumberbarang}}</td>
            <td>{{$invent->status}}</td>
            <td><a href="{{route('inventor.edit',$invent->id)}}"><button>Ubah</button></a>||<form action="{{route('inventor.destroy',$invent->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin dihapus?')">Hapus</button>
            </form></td>
        </tbody>
        @endforeach
    </table>
</div>