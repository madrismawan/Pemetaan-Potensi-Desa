@extends('layouts.master')

@section('judul', 'Penambahan Potensi')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="col-12 col-md-12">
                <h3>Form Penambahan Potensi</h3>
                <p class="text-subtitle text-muted"></p>
                <div class="col-md-12">
                    <div class="alert alert-light-primary">
                        Hanya Admin yang dapat Menambahakan Potensi Secara Langsung || Gunakan Form dibawah
                        <a href="#penambahan">Click
                            here</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="section" id="map">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-5">
                                    <h5 class="card-title">Maps yang menampilkan Peta Desa Dalung </h5>
                                </div>
                                <div class="col-7">
                                    <h6 style="margin: 10px;font-size: 10px;float: right;" class="card-title">(**Klik 2 Kali Untuk Menyematkan Lokasi**)</h6>
                                </div>

                            </div>
                            {{-- <div>
                                <p id="info">Koordinat :(..............,..............),</p>
                            </div> --}}
                            <div id="gmaps" style="height: 450px;"></div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="penambahan">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Pilihlah Potensi yang Akan ditambahkan</h5>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#umkm"
                                        role="tab" aria-controls="home" aria-selected="true">UMKM</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#sekolah"
                                        role="tab" aria-controls="profile1" aria-selected="false">Sekolah</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#ibadah"
                                        role="tab" aria-controls="contact" aria-selected="false">Ibadah</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="umkm" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <!-- Basic Horizontal form layout section start -->
                                    <section id="basic-horizontal-layouts">
                                        <div class="row match-height">
                                            <div class="col-md-12 col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 style="margin-top: 15px" class="card-title">UMKM Form Penambahan</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <form action="{{route('umkm.store')}}"  method="POST" class="form form-horizontal">
                                                                @csrf
                                                                <div class="form-body">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <label>Nama UMKM</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input type="text" id="first-name" class="form-control"
                                                                                name="namaUmkm" placeholder="Nama UMKM">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Jenis UMKM</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <select class="form-select" id="basicSelect">
                                                                                <option>Kuliner</option>
                                                                                <option>Furnitur</option>
                                                                                <option>Toko Buku</option>
                                                                                <option>MUA</option>
                                                                                <option>Perlengkapan Bayi</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Deskripsi</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Gambar UMKM</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input class="form-control" type="file" id="formFile">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Alamat Detail</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input type="text" id="first-name" class="form-control"
                                                                                name="fname" placeholder="Alamat Detail">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Pemetaan Lokasi</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <div class="input-group">
                                                                                <a href="#map" class="btn btn-outline-secondary">Pilih Titik Lokasi Potensi</a>
                                                                                <input id="lat" style="margin-left: 5px" type="text" aria-label="First name" class="form-control" placeholder="Lat" readonly="readonly">
                                                                                <input id="lng" style="margin-left: 5px" type="text" aria-label="Last name" class="form-control" placeholder="Lang" readonly="readonly">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 d-flex justify-content-end">
                                                                            <button type="submit"
                                                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                                                            <button type="reset"
                                                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- // Basic Horizontal form layout section end -->
                                </div>
                                <div class="tab-pane fade" id="sekolah" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <!-- Basic Horizontal form layout section start -->
                                    <section id="basic-horizontal-layouts">
                                        <div class="row match-height">
                                            <div class="col-md-12 col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 style="margin-top: 15px" class="card-title">Sekolah Form Penambahan Detail</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <form class="form form-horizontal">
                                                                <div class="form-body">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <label>Nama Sekolah</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input type="text" id="first-name" class="form-control"
                                                                                name="fname" placeholder="Nama UMKM">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Tingkat Sekolah</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input type="text" id="first-name" class="form-control"
                                                                                name="fname" placeholder="Jenis UMKM">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Jenis Sekolah</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input type="text" id="first-name" class="form-control"
                                                                                name="fname" placeholder="Deskripsi">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Gambar Sekolah</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input class="form-control" type="file" id="formFile">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Alamat Detail</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input type="text" id="first-name" class="form-control"
                                                                                name="fname" placeholder="Alamat Detail">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Pemetaan Lokasi</label>
                                                                        </div>
                                                                        <div class="col-md-10 form-group">
                                                                            <input type="text" id="first-name" class="form-control"
                                                                                name="fname" placeholder="Pemetaan Lokasi">
                                                                        </div>

                                                                        <div class="col-sm-12 d-flex justify-content-end">
                                                                            <button type="submit"
                                                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                                                            <button type="reset"
                                                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- // Basic Horizontal form layout section end -->
                                </div>
                                <div class="tab-pane fade" id="ibadah" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    <!-- Basic Horizontal form layout section start -->
                                    <section id="basic-horizontal-layouts">
                                    <div class="row match-height">
                                        <div class="col-md-12 col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 style="margin-top: 15px" class="card-title">Ibadah Form Penambahan Detail</h4>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <form class="form form-horizontal">
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <label>Nama UMKM</label>
                                                                    </div>
                                                                    <div class="col-md-10 form-group">
                                                                        <input type="text" id="first-name" class="form-control"
                                                                            name="fname" placeholder="Nama UMKM">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Jenis UMKM</label>
                                                                    </div>
                                                                    <div class="col-md-10 form-group">
                                                                        <fieldset class="form-group">
                                                                            <select class="form-select" id="basicSelect">
                                                                                <option>IT</option>
                                                                                <option>Blade Runner</option>
                                                                                <option>Thor Ragnarok</option>
                                                                            </select>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Deskripsi</label>
                                                                    </div>
                                                                    <div class="col-md-10 form-group">
                                                                        <input type="text" id="first-name" class="form-control"
                                                                            name="fname" placeholder="Deskripsi">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Gambar UMKM</label>
                                                                    </div>
                                                                    <div class="col-md-10 form-group">
                                                                        <input class="form-control" type="file" id="formFile">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Alamat Detail</label>
                                                                    </div>
                                                                    <div class="col-md-10 form-group">
                                                                        <input type="text" id="first-name" class="form-control"
                                                                            name="fname" placeholder="Alamat Detail">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Pemetaan Lokasi</label>
                                                                    </div>
                                                                    <div class="col-md-10 form-group">
                                                                        <input type="text" id="first-name" class="form-control"
                                                                            name="fname" placeholder="Pemetaan Lokasi">
                                                                    </div>

                                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                                        <button type="submit"
                                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                                        <button type="reset"
                                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- // Basic Horizontal form layout section end -->
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
            $('#add-potensi').addClass('active');
        });
    </script>

    <script type="text/javascript">

        $(document).ready(function(){
           var mymap = L.map('gmaps').setView([-8.617683234549416, 115.16708493639123], 15);

           L.geoJSON(<?= $desa->batasdesa ?>, {
               style: {
                   color: 'white',
                   fillColor: 'white',
                   fillOpacity: 0.7
               },
           }).addTo(mymap);

           L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
               attribution: 'Adalah API Favoritku',
               maxZoom: 18,
               id: 'mapbox/streets-v11',
               tileSize: 512,
               zoomOffset: -1,
               accessToken: 'pk.eyJ1IjoibWFkZXJpc21hd2FuIiwiYSI6ImNrbGNqMzZ0dDBteHIyb21ydTRqNWQ4MXAifQ.YyTGDJLfKwwufNRVYUdvig'
           }).addTo(mymap);


           mymap.on('mousemove',function(e){
               document.getElementById("info").innerHTML="Koordinat :("+e.latlng.lat+","+e.latlng.lng+")";
           });


            // Penyematan marker pada peta Add
            mymap.on("dblclick", function(event) {
                $('#lat').val(event.latlng.lat);
                $('#lng').val(event.latlng.lng);

                var konfirmasi = confirm("Apakah anda ingin menambahkan marker?");
                if(konfirmasi!=true){
                    alert('Anda Mengcancle Penyematan');
                }else{
                    if(!marker){
                        marker = L.marker(event.latlng).addTo(mymap);
                    } else {
                        marker.setLatLng(event.latlng);
                    }
                }

            });

            // deklarasikan marker kosong
            var marker = new L.marker(curKoordinat,{
                draggable: 'true',
            });

        });

   </script>


@endsection


