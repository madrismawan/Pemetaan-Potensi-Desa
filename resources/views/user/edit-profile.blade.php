@extends('layouts.master')

@section('judul', 'Edit Profile')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Profile User</h3>
                    <p class="text-subtitle text-muted">Anda dapat melakukan ubah data secara langsung,data tidak boleh kosong!!</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                @if (Auth::user()->role == 0)
                    <div class="card-header">
                        <h4 class="card-title">Data User</h4>
                    </div>
                @endif
                <div class="card-header">
                    <h4 class="card-title">Data User Admin</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Data User</label>
                                <input type="text" class="form-control" id="basicInput"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Input text with help</label>
                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                <input type="text" class="form-control" id="helpInputTop">
                            </div>

                            <div class="form-group">
                                <label for="helperText">With Helper Text</label>
                                <input type="text" id="helperText" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Data User</label>
                                <input type="text" class="form-control" id="basicInput"
                                    placeholder="Enter email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
