@extends('master')
@section('konten')

<table class="table table-bordered">
    
    <thead class="">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>no telepon</th>
        <th style="width: 150px">Opsi</th>

    </tr>
</thead>
<tbody>
    @foreach ($guestbooks as $guest)
    <tr>
        <th class="">{{$guest->nama}}</th>
        <td>{{$guest->email}}</td>
        <td>{{$guest->alamat}}</td>
        <td>{{$guest->no_telepon}}</td>
        <td>
            <a href="{{ url('/edit/'.$guest->id) }}"><button class="btn btn-outline-warning">Edit</button></a>
            <a href="{{ url('/destroy/'.$guest->id) }}"><button class="btn btn-outline-danger">Delete</button></a>
        </td>
    </tr>
    @endforeach



</tbody>
</table>
<div class="">
{{ $guestbooks->links() }}
</div>
@endsection