    <?php include 'db/cek_absen.php'; ?>
    <?php include 'db/get_manifest.php'; ?>
    <?php include 'db/get_user.php'; ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand page-scroll" href="#beranda"><img src="assets/images/logo_jamkrindo_putih.png" alt="logo_jamkrindo" width="50px" height="50px"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#beranda">BERANDA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#absensi">CHECKPOINT</a>
                    </li>
                    <!-- Dropdown Menu -->          
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#manifest" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">MANIFEST</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#manifest" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false"><span class="item-text">PESERTA</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="#manifest" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><span class="item-text">BUS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="#manifest" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><span class="item-text">KAMAR</span></a>
                        </div>
                    </li> -->
                    <!-- end of dropdown menu -->
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#manifest">MANIFEST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#rundown">RUNDOWN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#dokumentasi">DOKUMENTASI KEGIATAN</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) : ?>
                        <a class="btn-outline-sm popup-with-move-anim" href="#details-login">MASUK</a>
                   <?php  else :  ?> 
                        <a class="btn-outline-sm" href="db/logout.php">KELUAR</a>
                   <?php  endif;  ?> 
                </span>
            </div>
        </div>
    </nav> 
    <!-- end of navigation -->


    <!-- Header -->
    <header id="beranda" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Jamkrindo 2025 Manifest Data</h1>
                            <p class="p-large">Data keseluruhan manifest mengenai CCB KCK JAKARTA 2025</p>
                            <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) : ?>
                                <a class="btn-solid-lg popup-with-move-anim" href="#details-login">MASUK</a>
                            <?php  else :  ?> 
                                <a class="btn-solid-lg" href="db/logout.php">KELUAR</a>
                            <?php  endif;  ?> 
                        </div> 
                    </div>
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="assets/images/header-software-app.png" alt="alternative">
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> 
        </div> 
    </header> 
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#1A72CC;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>
    <!-- end of header -->


    <!-- Sliders -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="assets/images/logo_jamkrindo_warna_teks.png" alt="logo_jamkrindo_warna_teks">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="assets/images/logo_jamkrindo_warna_full_teks.png" alt="logo_jamkrindo_full_teks">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="assets/images/logo_bumn.png" alt="logo_bumn">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- end of image slider -->

                </div> 
            </div> 
        </div> 
    </div> 
    <!-- end of sliders -->


    <!-- Absensi -->
    <div  id="absensi" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">CHECKPOINT</div>
                    <?php if ($num_rows > 0) : ?>
                        <h2 class="h2-heading">Anda Siap Mengikuti Acara Ini, Terimakasih!</h2>
                    <?php else : ?>
                        <h2 class="h2-heading">Silahkan Menekan Tombol Dibawah Ini, Jika Anda Sudah Siap Mengikuti Acara!</h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($num_rows > 0) : ?>
                        <button class="btn btn-success" style="min-width: 100%;" disabled>SELAMAT MENIKMATI ACARA</button>
                    <?php else : ?>
                        <a class="btn-solid-reg" href="db/insert_absen.php?user_nama_lengkap=<?= $_SESSION['user_nama_lengkap_raw'] ?>" style="min-width: 100%;">I’M READY</a>
                    <?php endif; ?>
                </div> 
            </div>
        </div>
    </div>
    <!-- end of absensi -->


    <!-- Manifest -->
    <div id="manifest" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">MANIFEST</div>
                    <h2 class="h2-heading">Manifest Data</h2>
                    <p class="p-heading">Keseluruhan Manifest Mengenai CCB KCK JAKARTA 2025</p>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-user"></i>Pribadi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-users"></i>Semua</a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-container">
                                        <div id="content-peserta">
                                            <h3>Manifest Pribadi (<?= $_SESSION['user_nama_lengkap_raw'] ?>)</h3>
                                            <p>Data manifest pribadi.</p>
                                            <?php if ($row): ?>
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-6 mt-4 mb-2">
                                                                <h5 class="card-title">Data Peserta</h5>
                                                                <p class="card-text"><strong>Nama:</strong> <?= htmlspecialchars($row['user_nama_lengkap']); ?></p>
                                                                <p class="card-text"><strong>Jenis Kelamin:</strong> <?= $row['user_jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan'; ?></p>
                                                                <p class="card-text"><strong>Venue:</strong> 
                                                                <?php 
                                                                    $venue = htmlspecialchars($row['user_venue']);
                                                                    if ($venue === 'Sentul') {
                                                                        echo 'De Boekit Villa, Bogor';
                                                                    } elseif ($venue === 'Jogja') {
                                                                        echo 'Jogja';
                                                                    } else {
                                                                        echo $venue;
                                                                    }
                                                                ?>
                                                                </p>
                                                                <p class="card-text"><strong>Jabatan:</strong> <?= htmlspecialchars($row['user_jabatan'] ?? '-'); ?></p>
                                                            </div>
                                                            <div class="col-lg-6 mt-4 mb-2">
                                                                <h5 class="card-title">Data Kendaraan & Kamar</h5>
                                                                <p class="card-text"><strong>Nama Kendaraan:</strong> <?= htmlspecialchars($row['user_nama_kendaraan'] ?? '-'); ?></p>
                                                                <p class="card-text"><strong>Nama Villa:</strong> <?= htmlspecialchars($row['user_nama_villa'] ?? '-'); ?></p>
                                                                <p class="card-text"><strong>Kapasitas Kamar:</strong> <?= htmlspecialchars($row['user_kapasitas']); ?> orang</p>
                                                                <p class="card-text"><strong>Tipe Kasur:</strong> <?= htmlspecialchars($row['user_tipe_bed'] ?? '-'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="alert alert-warning">Data pengguna tidak ditemukan.</div>
                                            <?php endif; ?>
                                        </div>
                                        <a class="btn-solid-reg text-center" style="min-width: 100%;" onclick="downloadManifestPeserta()" href="#manifest">DOWNLOAD MANIFEST PRIBADI</a>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-container">
                                        <div id="content-bus">
                                            <h3>Manifest Semua Peserta</h3>
                                            <p>Data manifest semua peserta (SENTUL)..</p>
                                            <table class="table table-responsive  table-bordered table-hover">
                                                <thead class="bg-primary text-white">
                                                    <tr>
                                                        <th class="text-center" colspan="7">Manifest Peserta</th>
                                                        <th class="text-center" colspan="2">Manifest Kendaraan</th>
                                                        <th class="text-center" colspan="4">Manifest Kamar</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Karyawan</th>
                                                        <th>Panggilan</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Team</th>
                                                        <th>Venue</th>
                                                        <th>Jabatan</th>
                                                        <th>Unit Kerja</th>
                                                        <th>Jenis Kendaraan</th>
                                                        <th>Nama Kendaraan</th>
                                                        <th>Capacity</th>
                                                        <th>Type Bed</th>
                                                        <th>Nama Vila</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($resultUserSentul->num_rows > 0): ?>
                                                        <?php while ($row = $resultUserSentul->fetch_assoc()): ?>
                                                            <?php if ($row['user_nama_lengkap'] !== 'Admin Jamkrindo 2025') : ?>
                                                                <tr>
                                                                    <td><?= htmlspecialchars($row['user_nama_lengkap']) ?></td>
                                                                    <td><?= !empty($row['user_nama_panggilan']) ? htmlspecialchars($row['user_nama_panggilan']) : '-'; ?></td>
                                                                    <td><?= $row['user_jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
                                                                    <td><?= !empty($row['user_team']) ? htmlspecialchars($row['user_team']) : '-'; ?></td>
                                                                    <td><?= htmlspecialchars($row['user_venue']) ?></td>
                                                                    <td><?= !empty($row['user_jabatan']) ? htmlspecialchars($row['user_jabatan']) : '-'; ?></td>
                                                                    <td><?= !empty($row['user_unit_kerja']) ? htmlspecialchars($row['user_unit_kerja']) : '-'; ?></td>
                                                                    <td><?= !empty($row['user_jenis_kendaraan']) ? htmlspecialchars($row['user_jenis_kendaraan']) : '-'; ?></td>
                                                                    <td><?= !empty($row['user_nama_kendaraan']) ? htmlspecialchars($row['user_nama_kendaraan']) : '-'; ?></td>
                                                                    <td><?= !empty($row['user_kapasitas']) ? htmlspecialchars($row['user_kapasitas']) : '-'; ?></td>
                                                                    <td><?= !empty($row['user_tipe_bed']) ? htmlspecialchars($row['user_tipe_bed']) : '-'; ?></td>
                                                                    <td><?= !empty($row['user_nama_villa']) ? htmlspecialchars($row['user_nama_villa']) : '-'; ?></td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    <?php else: ?>
                                                        <tr><td colspan="7" class="text-center">Belum ada data peserta.</td></tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a class="btn-solid-reg text-center" style="min-width: 100%;" onclick="downloadManifestBus()" href="#manifest">DOWNLOAD MANIFEST SEMUA PESERTA</a>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                        <!-- end of tab -->
                        
                    </div>
                    <!-- end of tabs content -->

                </div>
            </div> 
        </div> 
    </div>
    <!-- end of manifest -->

    <!-- Rundown -->
    <div id="rundown" class="cards-2">
        <div class="container">
            <div id="content-rundown">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="above-heading">RUNDOWN</div>
                        <h2 class="h2-heading">Rundown Acara (SENTUL)</h2>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-responsive table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Hari/Tanggal</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Durasi</th>
                                    <th>Kegiatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="5">Hari Pertama<br>Jumat, 21 Februari 2025</td>
                                    <td>12:00</td>
                                    <td>13:30</td>
                                    <td>1:30</td>
                                    <td>Sholat Jum'at & Makan Siang Bersama</td>
                                </tr>
                                <tr>
                                    <td>13:30</td>
                                    <td>15:00</td>
                                    <td>1:30</td>
                                    <td>Perjalanan Menuju De Boekit Villas</td>
                                </tr>
                                <tr>
                                    <td>15:00</td>
                                    <td>16:00</td>
                                    <td>1:00</td>
                                    <td>Proses Check In</td>
                                </tr>
                                <tr>
                                    <td>16:00</td>
                                    <td>18:00</td>
                                    <td>2:00</td>
                                    <td>Hotel Explore (Bebas)</td>
                                </tr>
                                <tr>
                                    <td>18:00</td>
                                    <td>21:00</td>
                                    <td>3:00</td>
                                    <td>Dinner + Rapat Monev CCB 2024</td>
                                </tr>
                                <tr>
                                    <td rowspan="7">Hari Kedua<br>Sabtu, 22 Februari 2025</td>
                                    <td>07:00</td>
                                    <td>08:00</td>
                                    <td>1:00</td>
                                    <td>Breakfast</td>
                                </tr>
                                <tr>
                                    <td>08:00</td>
                                    <td>12:00</td>
                                    <td>4:00</td>
                                    <td>Aktivitas Treasure Hunt</td>
                                </tr>
                                <tr>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td>1:00</td>
                                    <td>Istirahat (Lunch / Solat)</td>
                                </tr>
                                <tr>
                                    <td>13:00</td>
                                    <td>15:00</td>
                                    <td>2:00</td>
                                    <td>Final Project</td>
                                </tr>
                                <tr>
                                    <td>15:00</td>
                                    <td>18:00</td>
                                    <td>3:00</td>
                                    <td>Istirahat</td>
                                </tr>
                                <tr>
                                    <td>18:00</td>
                                    <td>19:00</td>
                                    <td>1:00</td>
                                    <td>Dinner</td>
                                </tr>
                                <tr>
                                    <td>19:00</td>
                                    <td>22:00</td>
                                    <td>3:00</td>
                                    <td>Malam Puncak CCB 2024</td>
                                </tr>
                                <tr>
                                    <td rowspan="4">Hari Ketiga<br>Minggu, 23 Februari 2025</td>
                                    <td>06:00</td>
                                    <td>08:00</td>
                                    <td>2:00</td>
                                    <td>Breakfast</td>
                                </tr>
                                <tr>
                                    <td>08:00</td>
                                    <td>09:00</td>
                                    <td>1:00</td>
                                    <td>Persiapan Checkout</td>
                                </tr>
                                <tr>
                                    <td>09:00</td>
                                    <td>10:00</td>
                                    <td>1:00</td>
                                    <td>Menuju Tempat Oleh - Oleh</td>
                                </tr>
                                <tr>
                                    <td>10:00</td>
                                    <td>17:00</td>
                                    <td>7:00</td>
                                    <td>Menuju Jakarta</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn-solid-reg text-center" style="min-width: 100%;" onclick="downloadRundown()" href="#rundown">DOWNLOAD RUNDOWN ACARA</a>
                </div>
            </div> 
        </div> 
    </div> 
    <!-- end of rundown -->


    <!-- Dokumentasi -->
    <div id="dokumentasi" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">DOKUMENTASI</div>
                    <h2 class="h2-heading">Dokumentasi Kegiatan</h2>
                    <p class="p-heading">Kumpulan dokumentasi kegiatan pada CCB KCK JAKARTA 2025</p>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">
                    <iframe 
                        src="https://drive.google.com/file/d/1oYU2_GYv9GHa1rxUCxGdiKpg_ViiqfpP/preview" 
                        width="100%" 
                        height="480"
                        allow="autoplay"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn-solid-reg text-center" href="#" style="min-width: 100%;" disabled> DOKUMENTASI (COMING SOON)</button>
                </div>
            </div> 
        </div> 
    </div>
    <!-- end of dokumentasi -->

    <!-- Modal Image -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img id="modalImage" class="w-100 rounded" src="" alt="Zoomed Image">
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal img -->