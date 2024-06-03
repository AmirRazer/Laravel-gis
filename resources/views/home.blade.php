{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.dashboard-volt')

@section('content')
<div class="col-12 col-sm-6 col-xl-4">
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div class="d-sm-none">
                      <h2 class="h5">Spots</h2>
                        <h3 class="fw-extrabold mb-1">{{ $spotCount }}</h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h6 text-gray-400 mb-0">Jumlah Umkm</h2>
                        <h3 class="fw-extrabold mb-2">{{ $spotCount }}</h3>
                    </div>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-xl-4 mb-4">
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="d-sm-none">
                        <h2 class="h5">Kategori</h2>
                        <h3 class="fw-extrabold mb-1">{{ $kategoriCount }}</h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h6 text-gray-400 mb-0">Jumlah Kecamatan</h2>
                        <h3 class="fw-extrabold mb-2">{{ $kategoriCount }}</h3>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-xl-4">
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="d-sm-none">
                       <h2 class="h5">Akun</h2>
                        <h3 class="fw-extrabold mb-1">{{ $userCount }}</h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                       <h2 class="h6 text-gray-400 mb-0">Jumlah Akun</h2>
                        <h3 class="fw-extrabold mb-2">{{ $userCount }}</h3>
                    </div>
                   
            </div>
        </div>
        
    </div>
    
</div>
{{-- <div class="card">
    <div class="card-body d-flex justify-content-between align-items-center">
        <div class="d-block">
            <div class="h6 fw-normal text-gray mb-2">Total Kecamatan</div>
            <h2 class="h3 fw-extrabold" id="totalKecamatan">{{ count($kecamatans) }}</h2>
            <div class="small mt-2">                               
                <span class="fas fa-angle-up text-success"></span>                                   
                <span class="text-success fw-bold">18.2%</span>
            </div>
        </div>
        <div class="d-block ms-auto">
            @foreach($kecamatans as $kecamatan)
            <div class="d-flex align-items-center text-end mb-2">
                <span class="dot rounded-circle bg-gray-800 me-2"></span>
                <span class="fw-normal small">{{ $kecamatan->name }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}

</div>
<div class="card-body">
           <canvas id="myChart" style="align-content: "></canvas>
    </div>
</div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [@foreach($kecamatans as $kecamatan) '{{ $kecamatan->name }}', @endforeach],
        datasets: [{
            label: 'Jumlah Umkm',
            data: [@foreach($kecamatans as $kecamatan) {{ $kecamatan->spots_count }}, @endforeach],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
            scales: {
        y: {
            beginAtZero: true,
            ticks: {
                stepSize: 1,
                // Menggunakan callback untuk memformat label
                callback: function(value, index, values) {
                    return parseInt(value);
                }
            }
        }
    },
        hover: {
            animationDuration: 0  // durasi animasi hover diatur ke 0 untuk menonaktifkan efek hover
        },
        animation: {
            duration: 1,
            onComplete: function () {
                var chartInstance = this.chart,
                ctx = chartInstance.ctx;
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';

                this.data.datasets.forEach(function (dataset, i) {
                    var meta = chartInstance.controller.getDatasetMeta(i);
                    meta.data.forEach(function (bar, index) {
                        var data = dataset.data[index];                            
                        ctx.fillText(data, bar.x, bar.y - 5);
                    });
                });
            }
        }
    }
});
</script>

@endsection