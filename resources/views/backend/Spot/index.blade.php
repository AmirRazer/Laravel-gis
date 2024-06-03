{{-- @extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col md-10">
                <div class="card">
                    <div class="card-header">
                        Set Center Point
                        <a href="{{ route('center-point.create')}}" class="btn btn-info btn-sm float-end">Create Data</a>
                    </div>
                    <div class="card-body">
                        
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{session('success')}}
                            </div>
                            
                        @endif
                         @if (session('success'))
                            <div class="alert alert-danger" role="alert">
                                {{session('error')}}
                            </div>
                            
                        @endif
                        <table class="table" id="dataCenterPoint">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Titik Koordinasi</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('javascript')
     <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function(){
            $('#dataCenterPoint').DataTable({
                processing: true,
                serverSide:true,
                responsive:true,
                lengthChange:true,
                autoWidth:false,
                ajax: "{{ route('center-point-data') }}",
                columns:[{
                    data:'DT_RowIndex',
                    orderable:false,
                    searchable:false,
                },{
                    data:'coordinate',
                },{
                    data:'action'
                }
            ]
            })
        })
    </script>
@endpush --}}
@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        List Spot
                        <a href="{{ route('spot.create') }}" class="btn btn-info btn-sm float-end">Add a new spot</a>
                    </div>
                    <div class="card-body">
                        
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <table class="table" id="dataSpot">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Kecamatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <form action="" method="POST" id="deleteForm">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus" style="display: none" >

                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(function() {
            $('#dataSpot').DataTable({
                processing: true,
                serverSide: true,
                responisve: true,
                lengthChange: true,
                autoWidth: false,
                ajax: '{{ route('spot.data') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    }, {
                        data: 'name', name: 'name'
                    },      
                    {data: 'nama_kategori', name: 'nama_kategori'},
                    {data: 'nama_kecamatan', name: 'nama_kecamatan'},
                    {
                        data: 'action'
                    }
                ]
            })
        })
    </script>
@endpush 