@extends('layout.main')
@section('container')

<h1 style="text-align: center;">Insert Nilai</h1>
<div class="row">
	<div class="col-lg-6">
		<form action="/murid/{{$murids->id}}" method="post">
        @method('PUT')
		@csrf
		<div class="mb-3">
		  <label class="form-label">Nama</label>
		  <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $murids->name) }}">
		</div>
		<div class="mb-3">
		  <label class="form-label">Email</label>
		  <input type="email" class="form-control" name="email" id="email" vvalue="{{ old('email', $murids->email) }}">
		</div>
		<div class="mb-2">
		<label class="form-label">Kelas</label>
		<select class="form-select" name="kelas_id">
			@foreach($kelases as $kelas)
                @if(old('kelas_id',$murids->kelas_id)==$kelas->id)
				    <option value="{{ $kelas->id }}" selected>{{ $kelas->name }}</option>
				@else
				    <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
				@endif

		  		<option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
		  	@endforeach
		</select>
		</div> 
        <div class="mb-2">
		<label class="form-label">Guru</label>
		<select class="form-select" name="kelas_id">
			@foreach($teachers as $teacher)
                @if(old('guru_id',$murids->guru_id)==$teacher->id)
				    <option value="{{ $teacher->id }}" selected>{{ $teacher->name }}</option>
				@else
				    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
				@endif

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