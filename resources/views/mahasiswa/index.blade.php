@extends('template/main')

@section('title', 'Daftar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col">
			<h1>Daftar Mahasiswa</h1>
			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nrp</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($mahasiswa as $mhs)
    <tr>
     <!--  <th scope="row">1</th> -->
       <td>{{$loop->iteration}} </td>
      <td>{{$mhs->nama}} </td>
      <td>{{ $mhs->nrp}} </td>
      <td>{{ $mhs->email}} </td>
      <td>{{ $mhs->jurusan}} </td>
      <td>
      	<a href=" " class="badge badge-success">Edit</a>
      	<a href=" " class="badge badge-danger">Delete</a>
      </td>

    </tr>
    @endforeach
    
  </tbody>
</table>
		</div>
	</div>
</div>
@endsection