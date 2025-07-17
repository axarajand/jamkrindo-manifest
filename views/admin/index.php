    <?php
        include 'db/get_user.php';
        include 'db/get_absen.php'; 
    ?>

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
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#peserta">PESERTA</a>
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
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>Jamkrindo 2025 Manifest Data - ADMIN</h1>
                            <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) : ?>
                                <a class="btn-solid-lg popup-with-move-anim" href="#details-login">MASUK</a>
                            <?php  else :  ?> 
                                <a class="btn-solid-lg" href="db/logout.php">KELUAR</a>
                            <?php  endif;  ?> 
                        </div> 
                    </div>
                </div>
            </div> 
        </div> 
    </header> 
    <!-- end of header -->

    <!-- Absensi -->
    <div id="absensi" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">CHECKPOINT</div>
                    <?php
                        $hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 
                                  'Agustus', 'September', 'Oktober', 'November', 'Desember'];

                        $tanggal = getdate();
                        $hari_ini = $hari[$tanggal['wday']];
                        $bulan_ini = $bulan[$tanggal['mon'] - 1];
                    ?>
                    <h2 class="h2-heading">List Absensi Peserta 
                        <div>(<?= "$hari_ini, {$tanggal['mday']} $bulan_ini {$tanggal['year']}" ?>)</div>
                    </h2>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1-absensi" data-toggle="tab" href="#tab-1-absensi" role="tab" aria-controls="tab-1-absensi" aria-selected="true"><i class="fas fa-building"></i>Sentul</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2-absensi" data-toggle="tab" href="#tab-2-absensi" role="tab" aria-controls="tab-2-absensi" aria-selected="false"><i class="fas fa-bus"></i>Jogja</a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1-absensi" role="tabpanel" aria-labelledby="tab-1-absensi">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" id="search-absensi-sentul" class="form-control mb-2" placeholder="Cari Data..." onkeyup="searchTable('search-absensi-sentul', 'table-absensi-sentul')">
                                    <table id="table-absensi-sentul" class="table table-bordered table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Checkpoint</th>
                                                <th>Jam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($absen_dataSentul)) : ?>
                                                <?php foreach ($absen_dataSentul as $absen) : ?>
                                                    <?php if ($absen['user_nama_lengkap'] !== 'Admin Jamkrindo 2025') : ?>
                                                        <tr>
                                                            <td><?= htmlspecialchars($absen['user_nama_lengkap']); ?></td>
                                                            <td>
                                                                <?php if ($absen['absen_masuk']) : ?>
                                                                    <button class="btn btn-success" disabled>Sudah</button>
                                                                <?php else : ?>
                                                                    <button class="btn btn-danger" disabled>Belum</button>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?= $absen['absen_masuk'] ? date('H:i:s', strtotime($absen['absen_masuk'])) : '-'; ?>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="3" class="text-center">Belum ada data absensi peserta.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2-absensi" role="tabpanel" aria-labelledby="tab-2-absensi">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" id="search-absensi-jogja" class="form-control mb-2" placeholder="Cari Data..." onkeyup="searchTable('search-absensi-jogja', 'table-absensi-jogja')">
                                    <table id="table-absensi-jogja" class="table table-bordered table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Checkpoint</th>
                                                <th>Jam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($absen_dataJogja)) : ?>
                                                <?php foreach ($absen_dataJogja as $absen) : ?>
                                                    <?php if ($absen['user_nama_lengkap'] !== 'Admin Jamkrindo 2025') : ?>
                                                        <tr>
                                                            <td><?= htmlspecialchars($absen['user_nama_lengkap']); ?></td>
                                                            <td>
                                                                <?php if ($absen['absen_masuk']) : ?>
                                                                    <button class="btn btn-success" disabled>Sudah</button>
                                                                <?php else : ?>
                                                                    <button class="btn btn-danger" disabled>Belum</button>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?= $absen['absen_masuk'] ? date('H:i:s', strtotime($absen['absen_masuk'])) : '-'; ?>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="3" class="text-center">Belum ada data absensi peserta.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
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
    <!-- end of absensi -->

    <!-- Peserta -->
    <div id="peserta" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">PESERTA</div>
                    <h2 class="h2-heading">List Peserta</h2>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1-peserta" data-toggle="tab" href="#tab-1-peserta" role="tab" aria-controls="tab-1-peserta" aria-selected="true"><i class="fas fa-building"></i>Sentul</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2-peserta" data-toggle="tab" href="#tab-2-peserta" role="tab" aria-controls="tab-2-peserta" aria-selected="false"><i class="fas fa-bus"></i>Jogja</a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1-peserta" role="tabpanel" aria-labelledby="tab-1-peserta">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a class="btn-solid-reg popup-with-move-anim float-right mb-2" href="#details-tambah">TAMBAH</a>
                                    <input type="text" id="search-peserta-sentul" class="form-control mb-2" placeholder="Cari Data..." onkeyup="searchTable('search-peserta-sentul', 'table-peserta-sentul')">
                                    <table id="table-peserta-sentul" class="table table-responsive table-bordered table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jabatan</th>
                                                <th>Unit Kerja</th>
                                                <th>Venue</th>
                                                <th>Nama Kendaraan</th>
                                                <th>Nama Villa</th>
                                                <th>Tipe Kasur</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($resultUserSentul->num_rows > 0): ?>
                                                <?php while ($row = $resultUserSentul->fetch_assoc()): ?>
                                                    <?php if ($row['user_nama_lengkap'] !== 'Admin Jamkrindo 2025') : ?>
                                                        <tr>
                                                            <td><?= htmlspecialchars($row['user_nama_lengkap']) ?></td>
                                                            <td><?= $row['user_jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
                                                            <td><?= htmlspecialchars($row['user_jabatan']) ?></td>
                                                            <td><?= htmlspecialchars($row['user_unit_kerja']) ?></td>
                                                            <td><?= htmlspecialchars($row['user_venue']) ?></td>
                                                            <td><?= htmlspecialchars($row['user_nama_kendaraan']) ?></td>
                                                            <td><?= !empty($row['user_nama_villa']) ? htmlspecialchars($row['user_nama_villa']) : '-'; ?></td>
                                                            <td><?= !empty($row['user_tipe_bed']) ? htmlspecialchars($row['user_tipe_bed']) : '-'; ?></td>
                                                            <td>
                                                                <a class="btn btn-danger mr-2" href="db/delete_user.php?user_nama_lengkap=<?= $row['user_nama_lengkap'] ?>"><i class="fas fa-trash"></i></a>
                                                                <a class="btn btn-warning popup-with-move-anim edit-btn" data-nama="<?= $row['user_nama_lengkap'] ?>" href="#details-edit"><i class="fas fa-pen"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            <?php else: ?>
                                                <tr><td colspan="7" class="text-center">Belum ada data peserta.</td></tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2-peserta" role="tabpanel" aria-labelledby="tab-2-peserta">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a class="btn-solid-reg popup-with-move-anim float-right mb-2" href="#details-tambah">TAMBAH</a>
                                    <input type="text" id="search-peserta-jogja" class="form-control mb-2" placeholder="Cari Data..." onkeyup="searchTable('search-peserta-jogja', 'table-peserta-jogja')">
                                    <table  id="table-peserta-jogja"class="table table-responsive table-bordered table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jabatan</th>
                                                <th>Unit Kerja</th>
                                                <th>Venue</th>
                                                <th>Nama Kendaraan</th>
                                                <th>Nama Villa</th>
                                                <th>Tipe Kasur</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($resultUserJogja->num_rows > 0): ?>
                                                <?php while ($row = $resultUserJogja->fetch_assoc()): ?>
                                                    <?php if ($row['user_nama_lengkap'] !== 'Admin Jamkrindo 2025') : ?>
                                                        <tr>
                                                            <td><?= htmlspecialchars($row['user_nama_lengkap']) ?></td>
                                                            <td><?= $row['user_jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
                                                            <td><?= htmlspecialchars($row['user_jabatan']) ?></td>
                                                            <td><?= htmlspecialchars($row['user_unit_kerja']) ?></td>
                                                            <td><?= htmlspecialchars($row['user_venue']) ?></td>
                                                            <td><?= htmlspecialchars($row['user_nama_kendaraan']) ?></td>
                                                            <td><?= !empty($row['user_nama_villa']) ? htmlspecialchars($row['user_nama_villa']) : '-'; ?></td>
                                                            <td><?= !empty($row['user_tipe_bed']) ? htmlspecialchars($row['user_tipe_bed']) : '-'; ?></td>
                                                            <td>
                                                                <a class="btn btn-danger mr-2" href="db/delete_user.php?user_nama_lengkap=<?= $row['user_nama_lengkap'] ?>"><i class="fas fa-trash"></i></a>
                                                                <a class="btn btn-warning popup-with-move-anim edit-btn" data-nama="<?= $row['user_nama_lengkap'] ?>" href="#details-edit"><i class="fas fa-pen"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            <?php else: ?>
                                                <tr><td colspan="7" class="text-center">Belum ada data peserta.</td></tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
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
    <!-- end of peserta -->

    <!-- Details Tambah -->
    <div id="details-tambah" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Tambah Peserta</h1>
                    <div class="form-container">
                        <form data-toggle="validator" data-focus="false" method="POST" action="db/insert_user.php">
                            <hr style="min-width: 100%;">
                            <h3 class="text-center">Data Peserta</h3>
                            <div class="form-group">
                                <label for="name">Nama Lengkap Peserta</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="name" placeholder="Masukan Nama Peserta (Nama Lengkap)" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="user_nama_panggilan">Nama Panggilan</label>
                                <input type="text" class="form-control" name="user_nama_panggilan" id="user_nama_panggilan" placeholder="Masukan Nama Panggilan">
                            </div>
                            <div class="form-group">    
                                <label for="user_jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="user_jenis_kelamin" id="user_jenis_kelamin" required>
                                    <option>-- Pilih Jenis Kelamin --</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user_team">Team</label>
                                <input type="number" class="form-control" name="user_team" placeholder="Masukan No Team" id="user_team">
                            </div>
                            <div class="form-group">    
                                <label for="user_venue">Venue</label>
                                <select class="form-control" name="user_venue" id="user_venue" required>
                                    <option>-- Pilih Venue --</option>
                                    <option value="Sentul">Sentul</option>
                                    <option value="Jogja">Jogja</option>
                                </select>
                                </div>
                            <div class="form-group">
                                <label for="user_jabatan">Jabatan</label>
                                <input type="text" class="form-control" name="user_jabatan" placeholder="Masukan Jabatan" id="user_jabatan">
                                
                            </div>
                            <div class="form-group">
                                <label for="user_unit_kerja">Unit Kerja</label>
                                <input type="text" class="form-control" name="user_unit_kerja" placeholder="Masukan Unit Kerja" id="user_unit_kerja">
                                
                            </div>
                            <hr style="min-width: 100%;">
                            <h3 class="text-center">Data Kendaraan</h3>
                            <div class="form-group">    
                                <label for="user_jenis_kendaraan">Jenis Kendaraan</label>
                                <select class="form-control" name="user_jenis_kendaraan" id="user_jenis_kendaraan">
                                    <option value="BELUM TERVERIFIKASI">-- Pilih Jenis Kendaraan --</option>
                                    
                    <option value="BELUM TERVERIFIKASI">Belum Terverifikasi</option>
                                    <option value="ELF">ELF</option>
                                    <option value="BUS">BUS</option>
                                </select>
                                
                            </div>
                            <div class="form-group">    
                                <label for="user_nama_kendaraan">Nama Kendaraan</label>
                                <select class="form-control" name="user_nama_kendaraan" id="user_nama_kendaraan">
                                    <option value="BELUM TERVERIFIKASI">-- Pilih Nama Kendaraan --</option>
                    
                    <option value="BELUM TERVERIFIKASI">Belum Terverifikasi</option>
                    
                    <option value="ELF 1">ELF 1</option>
                                    <option value="ELF 2">ELF 2</option>
                                    <option value="ELF 3">ELF 3</option>
                                    <option value="BUS 1 Melody">BUS 1 Melody</option>
                                    <option value="BUS 2 BigBird">BUS 2 BigBird</option>
                                    <option value="BUS 3 BigBird">BUS 3 BigBird</option>
                                </select>
                                
                            </div>
                            <hr style="min-width: 100%;">
                            <h3 class="text-center">Data Kamar</h3>
                            <div class="form-group">
                                <label for="user_nama_villa">Nama Villa</label>
                                <input type="text" class="form-control" name="user_nama_villa" id="user_nama_villa" placeholder="Nama Villa">
                                
                            </div>
                            <div class="form-group">
                                <label for="user_kapasitas">Kapasitas Kamar</label>
                                <input type="number" class="form-control" name="user_kapasitas" id="user_kapasitas" placeholder="Masukan Kapasitas Kamar" >
                                
                            </div>
                            <div class="form-group">    
                                <label for="user_tipe_bed">Tipe Kasur</label>
                                <select class="form-control" name="user_tipe_bed" id="user_tipe_bed" >
                    
                    <option value="BELUM TERVERIFIKASI">-- Pilih Tipe Kasur --</option>
                    
                    <option value="BELUM TERVERIFIKASI">Belum Terverifikasi</option>
                                   
                                    <option value="VIP">VIP</option>
                                    <option value="KING">KING</option>
                                    <option value="QUEEN">QUEEN</option>
                                    <option value="TWIN">TWIN</option>
                                    <option value="SINGLE">SINGLE</option>
                                    <option value="EXTRA BED">EXTRA BED</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">SIMPAN DATA</button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div> 
        </div>
    </div> 
    <!-- end of details tambah -->

    <!-- Modal Edit -->
    <div id="details-edit" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Edit Peserta</h1>
                    <div class="form-container">
                        <form data-toggle="validator" data-focus="false" method="POST" action="db/update_user.php">
                            <input type="hidden" name="old_nama_lengkap" id="old_nama_lengkap">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap Peserta</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="user_nama_panggilan">Nama Panggilan</label>
                                <input type="text" class="form-control" name="user_nama_panggilan" id="user_nama_panggilan" required>
                            </div>
                            <div class="form-group">
                                <label for="user_jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="user_jenis_kelamin" id="user_jenis_kelamin" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user_team">Team</label>
                                <input type="number" class="form-control" name="user_team" id="user_team" required>
                            </div>
                            <div class="form-group">
                                <label for="user_venue">Venue</label>
                                <select class="form-control" name="user_venue" id="user_venue" required>
                                    <option value="Sentul">Sentul</option>
                                    <option value="Jogja">Jogja</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user_jabatan">Jabatan</label>
                                <input type="text" class="form-control" name="user_jabatan" id="user_jabatan" required>
                            </div>
                            <div class="form-group">
                                <label for="user_unit_kerja">Unit Kerja</label>
                                <input type="text" class="form-control" name="user_unit_kerja" id="user_unit_kerja" required>
                            </div>
                            <div class="form-group">
                                <label for="user_jenis_kendaraan">Jenis Kendaraan</label>
                                <select class="form-control" name="user_jenis_kendaraan" id="user_jenis_kendaraan">
                                    <option value="">-- Pilih Jenis Kendaraan --</option>
                                    <option value="ELF">ELF</option>
                                    <option value="BUS">BUS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user_nama_kendaraan">Nama Kendaraan</label>
                                <select class="form-control" name="user_nama_kendaraan" id="user_nama_kendaraan">
                                    <option>-- Pilih Nama Kendaraan --</option>
                                    <option value="ELF 1">ELF 1</option>
                                    <option value="ELF 2">ELF 2</option>
                                    <option value="ELF 3">ELF 3</option>
                                    <option value="BUS 1 Melody">BUS 1 Melody</option>
                                    <option value="BUS 2 BigBird">BUS 2 BigBird</option>
                                    <option value="BUS 3 BigBird">BUS 3 BigBird</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user_nama_villa">Nama Villa</label>
                                <input type="text" class="form-control" name="user_nama_villa" id="user_nama_villa">
                            </div>
                            <div class="form-group">
                                <label for="user_kapasitas">Kapasitas Kamar</label>
                                <input type="number" class="form-control" name="user_kapasitas" id="user_kapasitas">
                            </div>
                            <div class="form-group">
                                <label for="user_tipe_bed">Tipe Kasur</label>
                                <select class="form-control" name="user_tipe_bed" id="user_tipe_bed">
                                    <option>-- Pilih Tipe Kasur --</option>
                                    <option value="VIP">VIP</option>
                                    <option value="KING">KING</option>
                                    <option value="QUEEN">QUEEN</option>
                                    <option value="TWIN">TWIN</option>
                                    <option value="SINGLE">SINGLE</option>
                                    <option value="EXTRA BED">EXTRA BED</option>
                                </select>
                            </div>
                                <button type="submit" class="form-control-submit-button">SIMPAN PERUBAHAN</button>
                        </form>
                    </div> 
                </div>
            </div> 
        </div>
    </div>
    <!-- end of details edit -->

    <script src="assets/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script>
        $(document).ready(function() {
            $(".edit-btn").click(function() {
                var nama = $(this).data("nama");

                $.ajax({
                    url: "db/edit_user.php",
                    type: "GET",
                    data: { user_nama_lengkap: nama },
                    dataType: "json",
                    success: function(response) {
                        if (!response.error) {
                            $("#old_nama_lengkap").val(response.user_nama_lengkap);
                            $("#nama_lengkap").val(response.user_nama_lengkap);
                            $("#user_nama_panggilan").val(response.user_nama_panggilan);
                            $("#user_jenis_kelamin").val(response.user_jenis_kelamin);
                            $("#user_team").val(response.user_team);
                            $("#user_venue").val(response.user_venue);
                            $("#user_jabatan").val(response.user_jabatan);
                            $("#user_unit_kerja").val(response.user_unit_kerja);
                            $("#user_jenis_kendaraan").val(response.user_jenis_kendaraan);
                            $("#user_nama_kendaraan").val(response.user_nama_kendaraan);
                            $("#user_nama_villa").val(response.user_nama_villa);
                            $("#user_kapasitas").val(response.user_kapasitas);
                            $("#user_tipe_bed").val(response.user_tipe_bed);
                            $("#editModal").modal("show"); // Pastikan modal ditampilkan jika menggunakan modal
                        } else {
                            alert("User tidak ditemukan!");
                        }
                    },
                    error: function() {
                        alert("Terjadi kesalahan saat mengambil data.");
                    }
                });
            });
        });

        function searchTable(inputId, tableId) {
            let input = document.getElementById(inputId);
            let filter = input.value.toLowerCase();
            let table = document.getElementById(tableId);
            let rows = table.getElementsByTagName("tr");
            let noMatch = true;

            for (let i = 1; i < rows.length; i++) { 
                let tds = rows[i].getElementsByTagName("td");
                let rowMatch = false;
                
                for (let j = 0; j < tds.length; j++) {
                    let textValue = tds[j].textContent || tds[j].innerText;
                    if (textValue.toLowerCase().includes(filter)) {
                        rowMatch = true;
                        break;
                    }
                }

                rows[i].style.display = rowMatch ? "" : "none";
                if (rowMatch) noMatch = false;
            }

            let noDataRow = document.getElementById(tableId + "-no-data");
            if (noMatch) {
                if (!noDataRow) {
                    noDataRow = document.createElement("tr");
                    noDataRow.id = tableId + "-no-data";
                    noDataRow.innerHTML = `<td colspan="${rows[0].cells.length}" class="text-center">Data tidak ditemukan.</td>`;
                    table.getElementsByTagName("tbody")[0].appendChild(noDataRow);
                }
            } else {
                if (noDataRow) noDataRow.remove();
            }
        }
    </script>
