@extends('layOuts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/pegawai/create">Add pegawai</a>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>TELPON</th>
                <th>JENIS_KELAMIN</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach($pegawai as $w)
                <tr>
                    <td>{{$w->id}}</td>
                    <td>{{$w->nama}}</td>
                    <td>{{$w->telpon}}</td>
                    <td>{{$w->jenis_kelamin}}</td>
                    <td>{{$w->alamat}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/pegawai/{{$w->id}}/Edit">Edit</a>
                                <form action="/pegawai/{{$w->id}}" method="POST">
                                @csrf 
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="confirm('Sure ?')" >
                                </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection   

