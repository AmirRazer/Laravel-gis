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

	const map = L.map('map').setView([-6.658693935480687, 110.90424904157845], 12);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
  
    const circle = L.circle([-6.719799167890155, 110.8970519317842], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(map).bindPopup('circle 1');
    const circle2 = L.circle([-6.7518362262670095, 110.91525075708216], {
		color: 'blue',
		fillColor: '#blue',
		fillOpacity: 0.5,
		radius: 1500
	}).addTo(map).bindPopup('circle 2');


</script>
@endpush