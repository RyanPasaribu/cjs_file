@extends('layouts.master')

@section('content')

		<h1>Edit Data Guru</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
				<form action="/guru/{{$guru->id}}/update" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Guru</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Guru" value="{{$guru->nama}}">  
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Inisial</label>
			    <input name="inisial" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inisial" value="{{$guru->inisial}}">  
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Mata Pelajaran</label>
			    <input name="mapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mata Pelajaran" value="{{$guru->mapel}}">  
			  </div>
			  <button type="submit" class="btn btn-warning">Update</button>
	    	</form>
    	</div>

@endsection