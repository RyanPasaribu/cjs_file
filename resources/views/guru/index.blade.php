@extends('layouts.master')

@section('content')

		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Data Guru</h1>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Guru
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="/guru/create" method="POST">
				        	{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Guru</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Guru">  
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Inisial</label>
						    <input name="inisial" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inisial">  
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Mata Pelajaran</label>
						    <input name="mapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mata Pelajaran">  
						  </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			
			<table class="table table-hover">
				<tr>
					<th>NAMA GURU</th>
					<th>INISIAL</th>
					<th>MATA PELAJARAN</th>
					<th>AKSI</th>
				</tr>
				@foreach($data_guru as $guru)
				<tr>
					<td>{{$guru->nama}}</td>
					<td>{{$guru->inisial}}</td>
					<td>{{$guru->mapel}}</td>
					
					<td>
						<a href="/guru/{{$guru->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
						<a href="/guru/{{$guru->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Hapus</a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>

@endsection