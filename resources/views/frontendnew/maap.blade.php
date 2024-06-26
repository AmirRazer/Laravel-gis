@extends('frontendnew.app')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">
@endsection

@section('content')

    <div class="container">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Card title</div>
                    <div class="card-body">
                        <div id="map" style="height: 500px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


    <script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <script>
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        var Stadia_Dark = L.tileLayer(
            'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
                maxZoom: 20,
                attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
            });

        var Esri_WorldStreetMap = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012'
            });

        var map = L.map('map', {
            center: [{{ $centerPoint->coordinate }}],
            zoom: 10,
            layers: [osm],
            fullscreenControl: {
                pseudoFullscreen: false
            }
        });

        const baseLayers = {
            'Openstreetmap': osm,
            'StadiaDark': Stadia_Dark,
            'Esri': Esri_WorldStreetMap
        };

        var datas = [
            @foreach ($spot as $key => $value)
                {
                    "loc": [{{ $value->coordinates }}],
                    "title": '{!! $value->name !!}'
                },
            @endforeach
        ];

        var markersLayer = new L.layerGroup()
        map.addLayer(markersLayer)

        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            zoom: 15,
            markerLocation: true
        })

        map.addControl(controlSearch)

        // Dapatkan posisi Anda saat ini
        var currentLatLng;
        navigator.geolocation.getCurrentPosition(function(position) {
            currentLatLng = L.latLng(position.coords.latitude, position.coords.longitude);
        });

        for (i in datas) {
            var title = datas[i].title,
                loc = datas[i].loc,
                marker = new L.Marker(new L.latLng(loc), {
                    title: title
                })
            markersLayer.addLayer(marker)


            @foreach ($spot as $item)
                @if ($item->coordinates)
                    var destinationLatLng = [{{ $item->coordinates }}];
                    var marker = L.marker(destinationLatLng)
                        .bindPopup(
                            "<div class='my-2'><img src='{{ $item->getImageAsset() }}' class='img-fluid' width='700px'></div>" +
                            "<div class='my-2'><strong>Nama Spot : </strong> <br>{{ $item->name }}</div>" +
                            "<div><a href='{{ route('detail-spot', $item->slug) }}' class='btn btn-outline-info'>Detail Spot</a></div>" +
                            "<div> <button class='btn btn-outline-success show-route'>Petunjuk Arah</button></div>"
                        )
                        .addTo(map);

                    // Tambahkan event listener ke tombol Petunjuk Arah
                    marker.on('popupopen', function() {
                        document.querySelector('.show-route').addEventListener('click', function() {
                            // Buat rute dari posisi saat ini ke tujuan
                            L.Routing.control({
                                waypoints: [
                                    currentLatLng, // titik awal (posisi Anda saat ini)
                                    L.latLng(destinationLatLng) // titik akhir
                                ],
                                routeWhileDragging: true
                            }).addTo(map);
                        });
                    });
                @endif
            @endforeach
        }

        const layerControl = L.control.layers(baseLayers).addTo(map)
    </script>
@endpush
