<div>
    <caption><h1>Data Petugas</h1></caption>
</div>
<div>
    <form action="{{route('petugas.store')}}" method="post">
        @csrf
        <div>
            <label for="">Nama Petugas</label>
            <input type="text" name="nmpetugas" id="">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <select name="jenkel" id="">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="tgllahir" id="">
        </div>
        <div>
            <label for="">Alamat</label>
            <textarea name="alamat" id=""></textarea>
        </div>
        <div>
            <label for="">No Telpon</label>
            <input type="text" name="notelp" id="">
        </div>
        <div>
            <label for="">Nama User</label>
            <select name="iduser" id="">
            @foreach($user as $user)
            <option value="{{$user->id}}">
                {{$user->name}}
            </option>
            @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>