@extends('layout.main')
@section('container')
@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">{{ session('pesan')}}</div>
@endif
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <nav aria-label="breadcrumb" class="main-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
      </ol>
    </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align:center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($murids as $murid)
                                <tr>
                                    <td style="text-align:center">{{$loop->iteration}}</td>
                                    <td><a href="/murid/{{$murid->id}}/profile">{{$murid->name}}</a></td>
                                    <td style="text-align:center">{{$murid->Kelas->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>

</div>
                    
@endsection