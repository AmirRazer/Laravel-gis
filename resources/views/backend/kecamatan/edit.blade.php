@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

   
@endsection
{{-- edit kolom kecamatan dan kabupaten --}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
         
            
                <div class="card">
                    <div class="card-header">Update Kecamatan - {{$kecamatan->name}} </div>
                    <div class="card-body">
                        <form action="{{ route('kecamatan.update',$kecamatan->id) }}" method="post" >
                            @csrf
                            @method('PUT')
                      
                        <div class="form-group my-3">
                            <label for="">Nama Kecamatan</label>
                            <input type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" name="name" value="{{$kecamatan->name}}">
                                
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group  my-3">
                            <label for="">Nama Kabupaten</label>
                            <select name="kabupaten_id" class="form-control @error('kabupaten_id')
                                    is-invalid
                                @enderror">
                                <option value="">Pilih Kabupaten</option>
                                @foreach ($kabupaten as $item)
                                    <option value="{{$item->id}}" {{$item->id == $kecamatan->kabupaten_id ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('kabupaten_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Update</buton>
                    </div>
                    </form>
                </div>
        </div>   
            </div>
            @endsection

