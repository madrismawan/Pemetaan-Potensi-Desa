@extends('layouts.master')

@section('judul', 'Edit Profile')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Jenis Data Potensi</h3>
                    <p class="text-subtitle text-muted">Hanya Admin yang dapat Melihat & Mengganti Data Jenis Potensi</p>
                </div>
                {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div> --}}
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Jenis Data Potensi
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Potensi</th>
                                <th>Tabel Link</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenispotensi as $data)
                                <tr>
                                    <td>1</td>
                                    <td>{{$data->namapotensi}}</td>
                                    <td>{{$data->tablelink}}</td>
                                    <td>{{$data->icon}}</td>
                                    <td>
                                        <span class="badge bg-success">Edit</span>
                                        <span class="badge bg-danger">Delete</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
