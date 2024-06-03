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
     
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Tambah Kecamatan</div>
                    <div class="card-body">
                        <form action="{{ route('kecamatan.store') }}" method="post">
                            @csrf
                        
                            
                           
                        </div>
                        <div class="form-group my-1">
                            <label for="">Nama Kecamatan</label>
                            <input type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" name="name" >
                                
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        {{-- buatkan nama kabupaten yang di ambil dari database kabupaten --}}
                        <div class="form-group my-1">
                            <label for="">Nama Kabupaten</label>
                            <select name="kabupaten_id" class="form-control @error('kabupaten_id')
                                    is-invalid
                                @enderror">
                                <option value="">Pilih Kabupaten</option>
                                @foreach ($kabupaten as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('kabupaten_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                       

                        <button type="submit" class="btn btn-primary btn-sm my-2">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
