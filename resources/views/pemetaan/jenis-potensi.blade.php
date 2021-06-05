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
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$data->namapotensi}}</td>
                                    <td>{{$data->tablelink}}</td>
                                    <td>{{$data->icon}}</td>
                                    <td>
                                        <span class="badge bg-success">
                                            <a class="btn-success" data-bs-toggle="modal"
                                            onclick="edit({{ $data->id }})">Edit</a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-group">
                                <!--login form Modal -->
                                <div class="modal fade text-left" id="inlineForm" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Login Form </h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="" id="modal-edit" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <p>Pilihlah Icon yang akan diganti</p>
                                                    <label>Icon: </label>
                                                    <div class="form-group">
                                                        <input name="icon" class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                </div>
                                            </form>
                                        </div>
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
            $('#jenis-potensi').addClass('active');

        });

        function edit(id) {
            let link = '/edit/icon/'+id;
            $('#modal-edit').prop('action', link);
            $('#inlineForm').modal('show');


        }




    </script>

@endsection
