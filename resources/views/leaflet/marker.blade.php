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
                <div class="card-header">Markers</div>
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
    // var iconMarker = L.icon({
    //     iconUrl: '{{ asset('iconMarkers/marker.png') }}',
    //     // iconSize: [25, 41],
    //     // iconAnchor: [12, 41],
    //     // popupAnchor: [1, -34],
    // })
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


</script>
@endpush