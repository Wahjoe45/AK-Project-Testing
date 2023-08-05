@extends('superAdmin.mainSuperAdmin')

@section('container-superAdmin')
    <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h3 class="text-black"><strong>Dashboard</strong></h3>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 ">
                <div class="info-box ">
                    <span class="info-box-icon elevation-1 bg-lg-orange"><i class='bx bx-lg bxs-user-circle text-white'></i></span>
                    <div class="info-box-content ">
                        <span class="info-box-text text-black"><strong>Pelamar</strong></span>
                        <span class="info-box-number ">3549</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 ">
                <div class="info-box ">
                    <span class="info-box-icon elevation-1 bg-lg-orange"><i class='bx bx-lg bxs-building-house text-white' ></i></span>
                    <div class="info-box-content ">
                        <span class="info-box-text text-black"><strong>Perusahaan</strong></span>
                        <span class="info-box-number">79</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 ">
                <div class="info-box ">
                    <span class="info-box-icon elevation-1 bg-lg-orange"><i class='bx bx-lg bxs-user-badge text-white' ></i></span>
                    <div class="info-box-content ">
                        <span class="info-box-text text-black"><strong>Admin</strong></span>
                        <span class="info-box-number ">12</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 ">
                <div class="info-box ">
                    <span class="info-box-icon elevation-1 bg-lg-orange"><i class='bx bx-lg bxs-user-voice text-white' ></i></span>
                    <div class="info-box-content ">
                        <span class="info-box-text text-black"><strong>Super Admin</strong></span>
                        <span class="info-box-number ">3</span>
                    </div>
                </div>
            </div>

            <div class="container bg-white" style="border-radius: 10px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                <div class="row mt-3">
                    <div class="col-8">
                        <h3>Pengunjung Website Area Kerja</h3>
                    </div>
                    <div class="col-2">
                        <select class="form-select" aria-placeholder="Bulan" id="monthSelect" onchange="changeData()">
                            <option value="" disabled selected>Bulan...</option>
                            <option value="0">Januari</option>
                            <option value="1">Februari</option>
                            <option value="2">Maret</option>
                            <option value="3">April</option>
                            <option value="4">Mei</option>
                            <option value="5">Juni</option>
                            <option value="6">Juli</option>
                            <option value="7">Agustus</option>
                            <option value="8">September</option>
                            <option value="9">Oktober</option>
                            <option value="10">November</option>
                            <option value="11">Desember</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <select class="form-select" id="yearSelect" onchange="changeData()">
                            <option value="" disabled selected>Tahun...</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                        </select>
                    </div>
                </div>
                
                
                <canvas id="chart"></canvas>
                <!-- Tambahkan tombol untuk memilih periode waktu -->

    <script>
        // Data pengunjung website perbulan dan pertahun untuk user dan non-user
        const data = {
            bulan: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            user: [
                [100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650],
                [200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750]
            ],
            non_user: [
                [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160],
                [100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200, 210]
            ]
        };

        // Ambil elemen canvas
        const canvas = document.getElementById('chart');
        let currentData = data.user[0]; // Data bulan ini

        // Fungsi untuk membuat chart bar
        function createBarChart(data) {
            new Chart(canvas, {
                type: 'bar',
                data: {
                    labels: data.bulan,
                    datasets: [{
                        label: 'User',
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        data: data.user,
                    }, {
                        label: 'Non-User',
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                        data: data.non_user,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top'
                        },
                    }
                }
            });
        }

        // Fungsi untuk menampilkan data bulan ini
        function showCurrentMonthData() {
            currentData = data.user[0];
            createBarChart({
                bulan: data.bulan,
                user: data.user[0],
                non_user: data.non_user[0],
            });
        }

        // Fungsi untuk menampilkan data bulan sebelumnya
        function showPreviousMonthData() {
            currentData = data.user[1];
            createBarChart({
                bulan: data.bulan,
                user: data.user[1],
                non_user: data.non_user[1],
            });
        }

        // Panggil fungsi untuk membuat chart awal saat halaman dimuat
        createBarChart({
            bulan: data.bulan,
            user: data.user[0],
            non_user: data.non_user[0],
        });
    </script>
            </div>
        </div>
    </div>
</div>
@endsection
