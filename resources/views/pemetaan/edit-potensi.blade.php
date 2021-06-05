@extends('layouts.master')

@section('judul', 'Edit Potensi')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-12 order-md-1 order-last" style="text-align: center">
                    <h3>Edit Potensi</h3>
                    <p class="text-subtitle text-muted">Manajemen Edit Pemetaan Data Potensi</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Horizontal Navs</h5>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#umkm"
                                        role="tab" aria-controls="home" aria-selected="true">UMKM</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#sekolah"
                                        role="tab" aria-controls="profile" aria-selected="false">Sekolah</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#ibadah"
                                        role="tab" aria-controls="contact" aria-selected="false">Ibadah</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="umkm" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jenis</th>
                                                    <th>Deskripsi</th>
                                                    <th>Gambar</th>
                                                    <th>Alamat</th>
                                                    {{-- <th>Jenis Potensi</th> --}}
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($potensiumkm as $data )
                                                    <tr>
                                                        <td>{{$data->nama}}</td>
                                                        <td>{{$data->jenis}}</td>
                                                        <td>{{$data->desc}}</td>
                                                        <td>
                                                            <img style="width: 20%" src="{{$data->image}}">
                                                        </td>
                                                        <td>{{$data->alamat}}</td>
                                                        {{-- <td>{{$data->jenispotensi->namapotensi}}</td> --}}
                                                        <td>
                                                            <span class="badge bg-success">
                                                                <a class="btn-success" href="{{$data->id}}">Edit</a>
                                                            </span>
                                                            <span class="badge bg-danger">
                                                                <a class="btn-danger" href="{{$data->id}}">Delete</a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sekolah" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Tingkat</th>
                                                    <th>Jenis Sekolah</th>
                                                    <th>Gambar</th>
                                                    <th>Deskripsi</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($potensisekolah as $data)
                                                    <tr>
                                                        <td>{{$data->namasekolah}}</td>
                                                        <td>{{$data->tingkatsekolah->tingkatsekolah}}</td>
                                                        <td>{{$data->jenissekolah->jenissekolah}}</td>
                                                        <td>{{$data->image}}</td>
                                                        <td>{{$data->desc}}</td>
                                                        <td>{{$data->alamat}}</td>
                                                        <td>
                                                            <span class="badge bg-success">
                                                                <a class="btn-success" href="#">Edit</a>
                                                            </span>
                                                            <span class="badge bg-danger">
                                                                <a class="btn-danger" href="#">Inactive</a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ibadah" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>City</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nathaniel</td>
                                                    <td>mi.Duis@diam.edu</td>
                                                    <td>(012165) 76278</td>
                                                    <td>Grumo Appula</td>
                                                    <td>
                                                        <span class="badge bg-success">
                                                            <a class="btn-success" href="#">Edit</a>
                                                        </span>
                                                        <span class="badge bg-danger">
                                                            <a class="btn-danger" href="#">Delete</a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function(){
            $('#manajement-sub').addClass('active');
            $('#manajement').addClass('active');
            $('#edit-potensi').addClass('active');
        });
    </script>
@endsection

