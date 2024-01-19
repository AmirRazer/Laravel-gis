@extends("layouts.dashboard-volt")
@section('css')
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

    <style>
        #map { height: 500px; }
    </style>

@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">Leaflet layerGroup</div>
                <div class="card-body">
                    <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('javascript')
    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <script>

	const map = L.map('map').setView([-6.658693935480687, 110.90424904157845], 13);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
   
    const grayscale = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    });

    const streets = L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    });

    const satellite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    maxZoom: 19,
    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
});
      const openStreetMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    });

    const openStreetMapHot = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">HOT</a>',
    });

    const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        maxZoom: 17,
        attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.opentopomap.org/">OpenTopoMap</a>',
    });
    var iconMarker = L.icon({
            iconUrl:'{{ asset('iconMarkers/marker.png') }}',
            iconSize:[50,50],
            
        })


    var marker = L.marker([-6.658693935480687, 110.90424904157845],
    {
        icon: iconMarker,
        draggable: true,
        title: "Klik untuk menambahkan marker",
    })
    .bindPopup('Tampilan Pesan disini')
    .addTo(map);
       var marker2 = L.marker([-6.680686411017694, 110.90297152692682],
    {
        // icon: iconMarker,
        draggable: true,
        title: "Klik untuk menambahkan marker",
    })
    .bindPopup('Tampilan Pesan disini 1')
    .addTo(map);

    
    const overlayLayers = {
        "Marker": marker,
        "Marker2": marker2,
    };

    const baseLayers = {
        "OpenStreetMap": openStreetMap,
        "OpenStreetMap.HOT": openStreetMapHot,
        "OpenTopoMap": openTopoMap,
        "Grayscale": grayscale,
        "Streets": streets,
        "Satellite": satellite
    };

    L.control.layers(baseLayers,overlayLayers).addTo(map);

</script>
@endpush