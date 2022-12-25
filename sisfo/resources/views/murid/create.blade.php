@extends('layout.main')
@section('container')
<h1 style="text-align: center;">Tambah Data</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/murid" method="post">
		@csrf
		<div class="mb-3">
		  <label class="form-label">Nama</label>
		  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
		</div>
		<div class="mb-3">
		  <label class="form-label">Email</label>
		  <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
		</div>
		<div class="mb-2">
		<label class="form-label">Kelas</label>
		<select class="form-select" name="kelas_id">
			@foreach($kelases as $kelas)
		  		<option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
		  	@endforeach
		</select>
		</div> 
		<div class="mb-2">
		<label class="form-label">Guru</label>
		<select class="form-select" name="guru_id">
			@foreach($teachers as $teacher)
		  		<option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
		  	@endforeach
		</select>
		</div> 
		<div class="mb-3">
		  <button type="submit" class="btn btn-primary">Create</button>
		</div>
	</form>
	</div>
</div>
@endsection