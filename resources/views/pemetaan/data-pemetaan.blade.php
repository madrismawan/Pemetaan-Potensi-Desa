@extends('layouts.master')

@section('judul', 'Edit Profile')

@section('content')
    <div class="page-heading">
        <div class="page-heading">
            <div class="page-title">
                <div class="col-12 col-md-12">
                    <h3>Page Manajement Potensi</h3>
                    <p class="text-subtitle text-muted"></p>
                    <div class="col-md-12">
                        <div class="alert alert-light-primary">
                            Hanya Admin yang dapat Mengedit Potensi Secara Langsung
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
                                    <div  class="col-7">
                                        <a style="float: right;margin-bottom: 15px" href="{{route('view-add-pemetaan')}}" class="btn btn-success">Tambahkan Potensi</a>
                                    </div>

                                </div>
                                {{-- <div>
                                    <p id="info">Koordinat :(..............,..............),</p>
                                </div> --}}
                                <div id="gmaps" style="height: 550px;"></div>

                            </div>
                        </div>
                    </div>

                    {{-- Modal Informasi dari SIG --}}
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
                                                <h4 class="modal-title" id="myModalLabel33">Informasi Potensi </h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="" id="modal-edit" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <label>Jenis Potensi </label>
                                                    <div class="form-group">
                                                        <input type="text" id="jenisPotensi" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah">
                                                    </div>
                                                    <label>Nama Tempat </label>
                                                    <div class="form-group">
                                                        <input type="text" id="nama" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah">
                                                    </div>
                                                    <label>Gambar </label>
                                                    <div class="form-group container">
                                                        <img style="width: 350px; height: 250px;" src="" id="gambar">
                                                    </div>
                                                    <label>Deskripsi</label>
                                                    <div class="form-group">
                                                        <input type="text" id="moddeskirpsi" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah">
                                                    </div>
                                                    <label>Alamat Detail </label>
                                                    <div class="form-group">
                                                        <input type="text" id="modalalamat" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit
                                                    </button>
                                                </div>
                                            </form>
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
            $('#data-pemetaan').addClass('active');
            getAllPotensi();
        });
    </script>
    <script type="text/javascript">

        //------ section deklarasikan MAPS---------//
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


        //------- section clustering------/
        var sekolah = L.markerClusterGroup({
            maxClusterRadius:50,
            zoomToBoundsOnClick:true,

            iconCreateFunction: function(cluster) {
                return L.divIcon({
                    iconSize: [30.30],
                    iconAnchor: [15 , 30],
                    className: 'sekolah',
                    html: '<b>' + cluster.getChildCount() + '</b>'
                });
            }

        });

        var umkm = L.markerClusterGroup({
            maxClusterRadius:250,
            zoomToBoundsOnClick:true,

            iconCreateFunction: function(cluster) {
                return L.divIcon({
                    iconSize: [30.30],
                    iconAnchor: [15 , 30],
                    className: 'umkm',
                    html: '<p>Sekolah Dasar</p>',
                    html: '<b>' + cluster.getChildCount() + '</b>'
                });
            }

        });

        var ibadah = L.markerClusterGroup({
            maxClusterRadius:50,
            zoomToBoundsOnClick:true,

            iconCreateFunction: function(cluster) {
                return L.divIcon({
                    iconSize: [30.30],
                    iconAnchor: [15 , 30],
                    className: 'ibadah',
                    html: '<b>' + cluster.getChildCount() + '</b>'
                });
            }

        })

        mymap.addLayer(sekolah);
        mymap.addLayer(ibadah);
        mymap.addLayer(umkm);


        // ----------------- SECTION MEMBUAT MARKER -----------------//
        function createMarkerSekolah(potensi) {
            var icMarker = L.icon({
                iconUrl: potensi['icon'],
                iconSize: [36, 40],
                iconAnchor: [8 , 40],
                popupAnchor: [12, -28],

            });
            var namaPotensi = 'Jenis Potensi:  ' + potensi['namapotensi'];
            var btn_edit = '<button class="btn btn-warning btn-sm" style="margin-right: 5px;">edit</button>';
            var btn_delete = '<button class="btn btn-danger btn-sm">delete</button>';
            var pop_up =  namaPotensi + '<br>'  + btn_edit + btn_delete;
            // var marker = L.marker(potensi['lat'], potensi['lng']]).addTo(mymap);
            var marker = L.marker([potensi['lat'], potensi['lng']], {
                icon: icMarker,
                id : potensi['id']
            }).bindPopup(pop_up);

            marker.on('dblclick',function(e){
                $('#inlineForm').modal('show');
                $('#jenisPotensi').val(potensi['namapotensi']);
                $('#nama').val(potensi['namasekolah']);
                document.getElementById("gambar").src = potensi['image'];
                $('#moddeskirpsi').val(potensi['desc']);
                $('#modalalamat').val(potensi['alamat']);

            });

            sekolah.addLayer(marker);
        }

        function createMarkerUmkm(potensi) {
            var icMarker = L.icon({
                iconUrl: potensi['icon'],
                iconSize: [36, 40],
                iconAnchor: [8 , 40],
                popupAnchor: [12, -28],

            });
            // var marker = L.marker(potensi['lat'], potensi['lng']]).addTo(mymap);
            var marker = L.marker([potensi['lat'], potensi['lng']], {
                icon: icMarker,
                id : potensi['id']
            });

            marker.on('click',function(e){
                $('#inlineForm').modal('show');
                $('#jenisPotensi').val(potensi['namapotensi']);
                $('#nama').val(potensi['nama']);
                document.getElementById("gambar").src = potensi['image'];
                $('#moddeskirpsi').val(potensi['desc']);
                $('#modalalamat').val(potensi['alamat']);

            });

            umkm.addLayer(marker);
        }

        function createMarkerTempatIbadah(potensi) {
            var icMarker = L.icon({
                iconUrl: potensi['icon'],
                iconSize: [36, 40],
                iconAnchor: [8 , 40],
                popupAnchor: [12, -28],

            });
            // var marker = L.marker(potensi['lat'], potensi['lng']]).addTo(mymap);
            var marker = L.marker([potensi['lat'], potensi['lng']], {
                icon: icMarker,
                id : potensi['id']
            });

            marker.on('click',function(e){
                $('#inlineForm').modal('show');
                $('#jenisPotensi').val(potensi['namapotensi']);
                $('#nama').val(potensi['nama_tempatibadah']);
                document.getElementById("gambar").src = potensi['image'];
                $('#moddeskirpsi').val(potensi['desc']);
                $('#modalalamat').val(potensi['alamat']);

            });

            ibadah.addLayer(marker);
        }




        // ----------------- SECTION MEMANGGIL SEMUA DATA MARKER -----------------//
        function getAllPotensi() {
            let url = '{{ route("data-marker") }}';

            $.ajax({
                url : url,
                dataType : "json",
                method : 'GET',
                success : function(response) {
                    for(let i = 0; i< response.sekolah.length; i++) {
                        createMarkerSekolah(response.sekolah[i]);
                    }
                    for(let i = 0; i< response.umkm.length; i++) {
                        createMarkerUmkm(response.umkm[i]);
                    }
                    for(let i = 0; i< response.ibadah.length; i++) {
                        createMarkerTempatIbadah(response.ibadah[i]);
                    }
                }
            });
        }



    </script>


@endsection
