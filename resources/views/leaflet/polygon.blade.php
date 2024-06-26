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
                <div class="card-header">Polygon</div>
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
  
    const polygon = L.polygon([
		[-6.691468852224405, 110.91277409670205],
		[-6.72309729124293, 110.89496170245421],
		[-6.681417012115073, 110.88173734914902],
		[-6.678334406410355, 110.8955014719769]
	]).addTo(map).bindPopup('I am a polygon.');

     const polygon2 = L.polygon([
		[-6.68871585432364, 110.8345104128682],
		[-6.690178178252337, 110.86821081059472],
		[-6.717474086998566, 110.87099191137797],
		[-6.700576799880244, 110.82927539962913]
	]).addTo(map).bindPopup('I am a polygon.');
</script>
@endpush