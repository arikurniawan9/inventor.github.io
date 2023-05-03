@extends('layouts.main')
@extends('layouts.sidebar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Kategori</h1>
    </div>

    <a href="{{route('kategori.create')}}" class="btn btn-success"><i data-feather="plus"></i> Add</a>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nama Kategori</th>
                <th>Keterangan</th>
                <th>Tools</th>
            </tr>
        </thead>
            @foreach($kategori as $ktg)
            <tbody>
                <tr>
                <td>{{$ktg->nmkategori }}</td>
                <td>{{$ktg->ket }}</td>
                <td>
                    <a href="{{route('kategori.edit',$ktg->id)}}" class="btn btn-primary"><i data-feather="edit"></i> Ubah</a>
                    <form action="{{route('kategori.destroy',$ktg->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"><i data-feather="trash-2"></i> Hapus</button>
                    </form>
                </td>
                </tr>
            </tbody>
            @endforeach
        </table>

</main>
@endsection