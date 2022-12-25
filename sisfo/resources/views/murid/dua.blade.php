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
                <div>
                    <!-- <a data-toggle="modal" data-target="#tambahModal" style="background-color:#36b9cc; width: 150px;" class="dropdown-item btn btn-primary font-weight-bold text-white">Tambah Data</a> -->
                    <a href="/murid/create" class="btn btn-primary">Tambah Data</a>
                </div>
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
                                @foreach($murids as $murid)
                                <tr>
                                    <td style="text-align:center">{{$loop->iteration}}</td>
                                    <td>{{$murid->name}}</td>
                                    <td style="text-align:center">{{$murid->Kelas->name}}</td>
                                    <td style="text-align:center">
                                        <a href="" class="btn btn-warning"><i class="fas fa-pen fa-sm" style="text-size:12px; text-align:center; width:15px"></i></a>
                                        <form action="/murid/{{ $murid->id}}" method="post" class="d-inline">
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