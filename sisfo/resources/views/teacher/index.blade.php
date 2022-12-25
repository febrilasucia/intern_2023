@extends('layout.main')
@section('container')
@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">{{ session('pesan')}}</div>
@endif
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4"></p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/teacher/create/" class="btn btn-primary font-weight-bold text-white">Tambah Data</a>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align:center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $teacher)
                                <tr>
                                    <td style="text-align:center">{{$loop->iteration}}</td>
                                    <td>{{$teacher->name}}</td>
                                    <td style="text-align:center">{{$teacher->Kelas->name}}</td>
                                    <td style="text-align:center">
                                        <a href="" class="btn btn-warning"><i class="fas fa-pen fa-sm" style="text-size:12px; text-align:center; width:15px"></i></a>
                                        <form action="/teacher/{{ $teacher->id}}" method="post" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin akan menghapus data?')"><i class="fas fa-trash fa-sm" style="text-size:12px; text-align:center; width:15px"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
</div>
                    
@endsection