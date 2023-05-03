@extends('layouts.main')
@extends('layouts.sidebar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <a href="{{route('petugas.create')}}"><button>Add</button></a>
    <table>
        <thead>
            <th>Nama Petugas</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No Telpon</th>
            <th>Nama User</th>
            <th>Tools</th>
        </thead>
        @foreach($petugas as $ptg)
        <tbody>
            <td>{{$ptg->nmpetugas}}</td>
            <td>{{$ptg->jenkel}}</td>
            <td>{{$ptg->tgllahir}}</td>
            <td>{{$ptg->alamat}}</td>
            <td>{{$ptg->notelp}}</td>
            <td>{{$ptg->User->name}}</td>
            <td>Edit||Hapus</td>
        </tbody>
        @endforeach
    </table>

</main>
@endsection