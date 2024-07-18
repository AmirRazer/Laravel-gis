@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

      <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">General information</h2>
                        <form ction="{{ route('setting.update') }}" method="POST"enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="row">
                                <div class="col-md- mb-3">
                                    <div>
                                        <label for="first_name">First Name</label>
                                      <input class="form-control" id="first_name" name="first_name" type="text" value="{{ $setting ? $setting->first_name : '' }}" placeholder="Enter your first name" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div>
                                        <label for="last_name">Last Name</label>
                                        <input class="form-control" id="last_name"  name="last_name" type="text" value="{{$setting ? $setting->last_name :''}}"placeholder="Also your last name" required>
                                    </div>
                                </div>
                            </div>
                            
                               <div class="mb-3">
                                    <label for="gender">Gender</label>
                                    <select class="form-select mb-0" id="gender" aria-label="Gender select example" name="gender" value="{{$setting ? $setting->gender:''}}">
                                        <option selected>{{$setting ? $setting->gender:''}}</option>
                                        <option value="Laki-Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                   <div class="mb-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control"  name="phone" id="phone" type="number" placeholder="08123456789" required value="{{$setting ? $setting->phone:''}}">
                                    </div>
                                </div>
                                {{-- tambah alamat --}}
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="alamat">Address</label>
                                        <input class="form-control"  name="alamat"id="alamat" type="text" placeholder="Jl. Jendral Sudirman No. 1" required value="{{$setting ? $setting->alamat:''}}">
                                    </div>
                                </div>
                                {{-- tambah gambar --}}
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input class="form-control"  name="image" id="image" type="file" required value="{{$setting ? $setting->image:''}}">
                                    </div>
                                </div>
                                {{-- button update --}}
                                {{-- <div class="mt-3">
                                    <button class="btn btn-gray-800" type="submit">Perbarui</button>
                                </div> --}}
                                {{-- buttton hapus dan ada route destroy
                                <div class="mt-3">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </div> --}}

                            
                            
                        </form>
                    </div>
                    
                </div>
                <div class="col-12 col-xl-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card shadow border-0 text-center p-0">
                                @if($setting)
                                <div class="profile-cover rounded-top" data-background="{{ $setting->getImageAsset() }}"></div>
                                <div class="card-body pb-5">
                                <img class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" src="{{ $setting->getImageAsset() }}" alt="none">
@endif
                                   <h4 class="h3">{{ $user->name }}</h4>
                                 
                                </div>
                             </div>
                        </div>
                       
                    </div>
                </div>
            </div>
@endsection