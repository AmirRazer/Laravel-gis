@extends('frontendnew.app')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('content')
    <br>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-3">

                {{-- Dropdown untuk Kategori --}}
                <label for="kategori" class="small mt-4">Silakan Pilih Kategori</label>
                <select id="kategori" class="form-select" name="kategori">
                    <option value="">Pilih Kategori</option>
                    @foreach ($kategori as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->name }}</option>
                    @endforeach
                </select>

                {{-- Dropdown untuk Detail Kategori, awalnya kosong --}}
                <label for="detailkategori" class="small mt-4">Silakan Pilih Detail Kategori</label>
                <select id="detailkategori" class="form-select" name="detailkategori">
                    <option value="">Pilih Detail Kategori</option>
                </select>
                <div class="mt-4 overflow-auto" style="max-height: 300px">
                    <h3>List UMKM</h3>
                    <ul class="list-group small " id="listSpots">
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Peta Umkm</div>
                    <div class="card-body p-0">
                        <div id="map" style="height: 450px"></div>
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
                    "title": '{!! $value->name !!}',
                    "kategori": {{ $value->kategori_id }},
                    "detailKategori": {{ $value->detail_kategori_id }},
                    "image": '{!! $value->image !!}',
                    "slug": '{!! $value->slug !!}',

                },
            @endforeach
        ];

        var markersLayer = new L.layerGroup();
        map.addLayer(markersLayer);

        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            zoom: 15,
            markerLocation: true
        });

        map.addControl(controlSearch);

        function updateKategoriMarkers(kategoriId) {
            $('#listSpots').html('');
            markersLayer.clearLayers();
            for (i in datas) {
                if (datas[i].kategori == kategoriId || !kategoriId) {
                    var title = datas[i].title,
                        loc = datas[i].loc,
                        marker = new L.Marker(new L.latLng(loc), {
                            title: title
                        });
                    $('#listSpots').append('<li class="list-group-item"><a href="detail-spot/' + datas[i].slug +
                        '"">' + title + '</a></li>');

                    markersLayer.addLayer(marker);
                    var destinationLatLng = datas[i].loc;
                    var popupContent =
                        "<div class='my-2'><img src='./upload/spots/" + datas[i].image +
                        "' class='img-fluid' width='700px'></div>" +
                        "<div class='my-2'><strong>Nama Spot : </strong> <br>" + datas[i].title + "</div>" +
                        "<div><a href='detail-spot/" + datas[i].slug +
                        "' class='btn btn-outline-info'>Detail Spot</a></div>";

                    // Bind the popup to the marker
                    marker.bindPopup(popupContent);

                    marker.addTo(map);

                }
            }
        }


        function updateDetailMarkers(detailKategoriId) {
            markersLayer.clearLayers();
            $('#listSpots').html('');
            for (i in datas) {
                if (datas[i].detailKategori == detailKategoriId || !detailKategoriId) {
                    var title = datas[i].title,
                        loc = datas[i].loc,
                        marker = new L.Marker(new L.latLng(loc), {
                            title: title
                        });
                    $('#listSpots').append('<li class="list-group-item"><a href="detail-spot/' + datas[i].slug +
                        '"">' + title + '</a></li>');
                    markersLayer.addLayer(marker);

                    markersLayer.addLayer(marker);
                    var destinationLatLng = datas[i].loc;
                    var popupContent =
                        "<div class='my-2'><img src='./upload/spots/" + datas[i].image +
                        "' class='img-fluid' width='700px'></div>" +
                        "<div class='my-2'><strong>Nama Spot : </strong> <br>" + datas[i].title + "</div>" +
                        "<div><a href='detail-spot/" + datas[i].slug +
                        "' class='btn btn-outline-info'>Detail Spot</a></div>";

                    // Bind the popup to the marker
                    marker.bindPopup(popupContent);

                    marker.addTo(map);

                }

            }
        }


        // $('#kategori').change(function() {
        //     var kategoriId = $(this).val();
        //     if (kategoriId) {
        //         $.ajax({
        //             url: '/getDetailKategori/' + kategoriId,

        //             type: 'GET',
        //             dataType: 'json',

        //             success: function(data) {
        //                 $('#detailkategori').empty().append('<option value="">Pilih Detail Kategori</option>');
        //                 $.each(data, function(key, value) {
        //                     $('#detailkategori').append('<option value="' + value.id + '">' + value.name + '</option>');
        //                 });
        //             }
        //         });
        //     } else {
        //         $('#detailkategori').empty().append('<option value="">Pilih Detail Kategori</option>');
        //     }
        // });
        $('#kategori').change(function() {
            var kategoriId = $(this).val();
            if (kategoriId) {
                $.ajax({
                    url: '/getDetailKategori/' + kategoriId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#detailkategori').empty().append(
                            '<option value="">Pilih Detail Kategori</option>');
                        $.each(data, function(key, value) {
                            $('#detailkategori').append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                        updateKategoriMarkers(kategoriId);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                        console.log("Response: ", xhr.responseText);
                    }
                });
            } else {
                $('#detailkategori').empty().append('<option value="">Pilih Detail Kategori</option>');
            }
        });

        $('#detailkategori').change(function() {
            var detailKategoriId = $(this).val();
            updateDetailMarkers(detailKategoriId);
        });

        updateKategoriMarkers();
    </script>
@endpush
