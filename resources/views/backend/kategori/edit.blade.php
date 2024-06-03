@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

   
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
         
            
                <div class="card">
                    <div class="card-header">Update Kategori - {{$kategori->name}} </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.update',$kategori->id) }}" method="post" >
                            @csrf
                            @method('PUT')
                      
                        <div class="form-group my-3">
                            <label for="">Nama kategori</label>
                            <input type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" name="name" value="{{$kategori->name}}">
                                
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary btn-sm my-2">Update</button>
                    </div>
                    </form>
                </div>
        
        </div>
    </div>
@endsection
