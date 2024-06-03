@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <style>
        #map {
            height: 400px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Add new spot</div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Add new data spot</div>
                    <div class="card-body">
                        <form action="{{ route('spot.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group ">
                            <label for="">Koordinat</label>
                            <input type="text" class="form-control @error('coordinate')
                                    is-invalid
                                @enderror" name="coordinate" id="coordinate">
                                @error('coordinate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                           
                        </div>
                        <div class="form-group my-1">
                            <label for="">Nama Spot</label>
                            <input type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" name="name" >
                                
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                  <div class="form-group my-1">
                        <label for="">Nama Kecamatan</label>
                            <select name="kecamatan_id" class="form-control @error('kecamatan_id')
                                    is-invalid
                                @enderror">
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($kecamatan as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('kabupaten_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select id="kategori" name="kategori_id" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group my-1">
                            <label for="">Upload Gambar</label>
                            <input type="file" class="form-control @error('image')
                                    is-invalid
                                @enderror" name="image">
                                
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="form-group my-1">
                            <label for="">Deskripsi</label>
                            <textarea name="description" class="form-control @error('description')
                                    is-invalid
                                @enderror" id="" cols="30" rows="10"></textarea>
                                
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm my-2">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
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
            var satellite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3'],
    attribution: 'Map data &copy; Google'
});
     
        var map = L.map('map', {
            center: [{{$centerPoint->coordinate}}],
            zoom: 10,
            layers: [osm,satellite]
        })
        var marker = L.marker([{{$centerPoint->coordinate}}], {
            draggable: true
        }).addTo(map);
        

        var baseMaps = {
            'Open Street Map': osm,
            'Esri World': Esri_WorldStreetMap,
            'Stadia Dark': Stadia_Dark,
            'Satellite': satellite
        }
        L.control.layers(baseMaps).addTo(map)
        // CARA PERTAMA
        function onMapClick(e) {
            var coords  = document.querySelector("[name=coordinate]")
            var latitude  = document.querySelector("[name=latitude]")
            var longitude  = document.querySelector("[name=longitude]")
            var lat = e.latlng.lat
            var lng = e.latlng.lng
            if (!marker) {
                marker = L.marker(e.latlng).addTo(map)
            } else {
                marker.setLatLng(e.latlng)
            }
            coords.value = lat + "," + lng
            latitude.value = lat,
            longitude.value = lng
        }
        map.on('click',onMapClick)
        // CARA PERTAMA
        // CARA KEDUA
        marker.on('dragend',function(){
            var coordinate = marker.getLatLng();
            marker.setLatLng(coordinate,{
                draggable:true
            })
            $('#coordinate').val(coordinate.lat + "," + coordinate.lng).keyup()
            $('#latitude').val(coordinate.lat).keyup()
            $('#longitude').val(coordinate.lng).keyup()
        })
        // CARA KEDUA
    </script>
@endpush