@extends('master')
@section('konten')

<div class="form-group">
    <form method="POST" action="{{ url('/update/'.$guests->id) }}">

        {{ csrf_field() }}
        @method('put')
        <label for="nama">Name</label>
        <input type="text" name="nama" value="{{$guests->nama}}" id="name" class ="form-control"> </br>


        <label for="email">Email</label>
        <input type="email" name="email" value="{{$guests->email}}" id="email" class ="form-control"> </br>

        <label for="Alamat">Alamat</label>
        <input type="alamat" name="alamat" value="{{$guests->alamat}}" id="alamat" class ="form-control"> </br>

        <label for="no_telepon">No Telepon</label>
        <input type="no_telepon" name="no_telepon" value="{{$guests->no_telepon}}" id="no_telepon" class ="form-control"> </br>

        <input type="submit" value="Save" class="btn btn-success">
    </form>
    </div>
@stop