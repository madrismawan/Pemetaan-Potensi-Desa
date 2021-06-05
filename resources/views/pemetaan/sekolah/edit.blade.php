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
                <div class="col-8">
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
                            <div id="gmaps" style="height: 600px;"></div>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <section class="section">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Detail Data Sekolah</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="/update{{$sekolah->id}}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="basicInput">Nama Sekolah</label>
                                                    <input name="nama" type="text" class="form-control" id="basicInput" placeholder="Enter email" value="{{$sekolah->namasekolah}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="helpInputTop">Tingkat Sekolah</label>
                                                    <input type="text" class="form-control" id="helpInputTop" value="{{$sekolah->tingkatsekolah->tingkatsekolah}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="helperText">Jenis Sekolah</label>
                                                    <input type="text" id="helperText" class="form-control" placeholder="Name" value="{{$sekolah->jenissekolah->jenissekolah}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="basicInput">Gambar</label>
                                                    <img style="width: 20%" src=" {{$sekolah->image}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="helperText">Deskripsi</label>
                                                    <input name="deskripsi" type="text" id="helperText" class="form-control" placeholder="Name" value="{{$sekolah->desc}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="basicInput">Alamat</label>
                                                    <input name="alamat" type="text" class="form-control" id="basicInput" placeholder="Enter email"value="{{$sekolah->alamat}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pemetaan Lokasi</label>
                                                    <input name="lat" id="lat_sekolah" style="margin-left: 5px" type="text" aria-label="First name" class="form-control" placeholder="Lat" readonly="readonly">
                                                    <input name="lng" id="lng_sekolah" style="margin-left: 5px" type="text" aria-label="Last name" class="form-control" placeholder="Lang" readonly="readonly">
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
                $('#lat_sekolah').val(e.latlng.lat);
                $('#lng_sekolah').val(e.latlng.lng);

           });

           var icMarker = L.icon({
                iconUrl: 'icon/sekolah.png',
                iconSize: [36, 40],
                iconAnchor: [8 , 40],
                popupAnchor: [12, -28],
            });
            // Penyematan marker pada peta Add

            var cordinate = [<?= $sekolah->lat ?>, <?= $sekolah->lng ?>]
            // deklarasikan marker kosong
            var marker = L.marker(cordinate, {
                icon : icMarker,
                draggable: 'true',

            }).addTo(mymap);

            mymap.on("dblclick", function(event) {
                $('#lat').val(event.latlng.lat);
                $('#lng').val(event.latlng.lng);

                $('#lat_sekolah').val(event.latlng.lat);
                $('#lng_sekolah').val(event.latlng.lng);

                $('#lat_ibadah').val(event.latlng.lat);
                $('#lng_ibadah').val(event.latlng.lng);

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

        });

    </script>


@endsection


