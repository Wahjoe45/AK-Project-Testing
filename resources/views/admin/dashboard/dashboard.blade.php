@extends('admin.mainAdmin')

@section('container-admin')

<div class="content-wrapper ">
    <div class="content-header ">
        <div class="container-fluid ">
            <h3 class="mb-2">Dashboard</h3>
            <div class="row mb-2 ">

                <div class="col-12 col-sm-6 col-md-3 ">
                    <div class="info-box ">
                        <span class="info-box-icon bg-info elevation-1 bg-dark"><i class="fa-regular fa-building"></i></span>
                        <div class="info-box-content ">
                            <span class="info-box-text ">Perusahaan</span>
                            <span class="info-box-number ">79</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 ">
                    <div class="info-box ">
                        <span class="info-box-icon bg-info elevation-1 bg-dark"><i class="fa-solid fa-user-lock"></i></span>
                        <div class="info-box-content ">
                            <span class="info-box-text ">Kandidat</span>
                            <span class="info-box-number ">6889</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 ">
                    <div class="info-box ">
                        <span class="info-box-icon bg-info elevation-1 bg-dark"><i class="fa-solid fa-user"></i></span>
                        <div class="info-box-content ">
                            <span class="info-box-text ">Non-Kandidat</span>
                            <span class="info-box-number "> 34556</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box ">
                        <span class="info-box-icon bg-info elevation-1 bg-dark"><i class="fa-solid fa-globe"></i></span>
                        <div class="info-box-content ">
                            <span class="info-box-text ">Lowongan</span>
                            <span class="info-box-number ">737</span>
                        </div>
                    </div>
                </div>
                <div style="width: 100%" class="mt-4">
                    <canvas id="myChart"></canvas>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                
                <script>
                    // Data dummy untuk contoh
                    const data = {
                        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                        datasets: [
                        {
                            label: 'Kandidat',
                            data: [120, 90, 110, 80, 100, 130, 120, 150, 140, 130, 110, 100],
                            backgroundColor: 'rgba(242, 100, 25, 0.5)', // Warna untuk bar pelamar
                            borderColor: 'rgba(242, 100, 25, 1)', // Warna untuk garis tepi bar pelamar
                            borderWidth: 1 // Lebar garis tepi bar pelamar
                        },
                        {
                            label: 'Non-Kandidat',
                            data: [80, 100, 90, 120, 110, 90, 100, 80, 70, 90, 100, 110],
                            backgroundColor: 'rgba(246, 174, 45, 0.5)', // Warna untuk bar perusahaan
                            borderColor: 'rgba(246, 174, 45, 1)', // Warna untuk garis tepi bar perusahaan
                            borderWidth: 1 // Lebar garis tepi bar perusahaan
                        },
                        {
                            label: 'Perusahaan',
                            data: [6, 30, 50, 60, 70, 50, 60, 40, 60, 50, 40, 30],
                            backgroundColor: 'rgba(134, 187, 216, 0.7)', // Warna untuk bar non-pelamar
                            borderColor: 'rgba(134, 187, 216, 1)', // Warna untuk garis tepi bar non-pelamar
                            borderWidth: 1 // Lebar garis tepi bar non-pelamar
                        },
                        {
                            label: 'Lowongan',
                            data: [70, 80, 60, 50, 40, 70, 60, 50, 40, 30, 60, 70],
                            backgroundColor: 'rgba(15, 10, 243, 0.6)', // Warna untuk bar lowongan
                            borderColor: 'rgba(15, 10, 243, 1)', // Warna untuk garis tepi bar lowongan
                            borderWidth: 1 // Lebar garis tepi bar lowongan
                        }
                    ]
                    };
                
                    // Konfigurasi chart
                    const config = {
                        type: 'bar',
                        data: data,
                        options: {
                            scales: {
                            y: {
                                beginAtZero: true // Mulai sumbu y dari nilai 0
                                }
                            }
                        }
                    };
                
                    // Membuat chart menggunakan Chart.js
                        const myChart = new Chart(document.getElementById('myChart'), config);
                </script>
            </div>
        </div>
    </div>
</div>

@endsection