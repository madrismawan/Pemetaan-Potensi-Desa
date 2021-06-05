@extends('layouts.master')

@section('judul', 'Edit Profile')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Google Map</h3>
                    <p class="text-subtitle text-muted">An application for user </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Google Map</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Sistem Informais Geografi dan Mobile</h5>
                            <div>
                                <p id="info"></p>
                            </div>
                            <div id="gmaps" style="height: 450px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- @include('map') --}}
@endsection

