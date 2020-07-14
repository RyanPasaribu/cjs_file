@extends('layouts.master')

@section('content')

		<h1>Edit Data Mata Pelajaran</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
				<form action="/mapel/{{$mapel->id}}/update" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Mata Pelajaran</label>
			    <input name="nama_mapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mata Pelajaran" value="{{$mapel->nama_mapel}}">  
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">SKS</label>
			    <input name="sks" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SKS" value="{{$mapel->sks}}">  
			  </div>
			  <button type="submit" class="btn btn-warning">Update</button>
	    	</form>
    	</div>

@endsection