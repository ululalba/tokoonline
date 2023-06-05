@extends('layOuts.master')

@section('content')

    <div class="container">
        <h1>Create pegawai</h1>
        <form action="/pegawai/data_pegawai" method="POST">
        @csrf
            <div class="mb-6">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-6">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-6">
                <label for="exampleInputEmail1" class="form-label">Telpon</label>
                <input type="text" name="telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <select class="form-select" name="jenis_kelamin" >
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select><br>

            <div class="mb-6">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10"></textarea><br>
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="save">

        </form>
    </div>
 
@endsection  