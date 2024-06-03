@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

 
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
     
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Tambah kabupaten</div>
                    <div class="card-body">
                        <form action="{{ route('kabupaten.store') }}" method="post">
                            @csrf
                        
                            
                           
                        </div>
                        <div class="form-group my-1">
                            <label for="">Nama Spot</label>
                            <input type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" name="name" >
                                
                                @error('name')
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
