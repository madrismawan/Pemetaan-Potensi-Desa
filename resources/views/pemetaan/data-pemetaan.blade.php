@extends('layouts.master')

@section('judul', 'Edit Profile')

@section('content')
    <div class="page-heading">
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
                                {{-- <div>
                                    <p id="info">Koordinat :(..............,..............),</p>
                                </div> --}}
                                <div id="gmaps" style="height: 550px;"></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">


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
            $('#data-pemetaan').addClass('active');
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



        });

    </script>

@endsection
