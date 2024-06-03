
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
                        List Akun
                        {{-- <a href="{{ route('kecamatan.create') }}" class="btn btn-info btn-sm float-end">Tambah Kecamatan</a> --}}
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
                                    <th>UserName</th>
                                    <th>Nama Depan</th>
                                    <th>Gender</th>
                                    <th>No Telephon</th>
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
        ajax: '{{ route('manageakun.data') }}',
        columns: [
             { data: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name' },
            { data: 'first_name' },
            { data: 'gender' },
            { data: 'phone' },
            { data: 'action' }
        ]
    });
});
</script>
@endpush 