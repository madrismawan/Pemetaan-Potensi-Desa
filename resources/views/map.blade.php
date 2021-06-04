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

        mymap.on('click', function(e){
            $('#lat').val(e.latlng.lat);
            $('#lng').val(e.latlng.lng);
        });


     });

</script>
