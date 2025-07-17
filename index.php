<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Jamkrindo - Manifest 2025</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/fontawesome-all.css" rel="stylesheet">
    <link href="assets/css/swiper.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
  
    <!-- Favicon  -->
    <link rel="icon" href="assets/images/logo_jamkrindo_warna.png">

    <style>
        .zoomable {
            cursor: pointer;
        }
        body.modal-open {
            overflow: hidden;
            height: 100%;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
<!--     <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->
    <!-- end of preloader -->

    <!-- Login -->
    <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) : ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.body.classList.add("modal-open");
            });
        </script>
        <div class="mfp-bg my-mfp-slide-bottom mfp-ready"></div>
        <div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor my-mfp-slide-bottom mfp-ready" tabindex="-1" style="top: 0px; position: absolute; height: 125px;">
            <div class="mfp-container mfp-inline-holder">
                <div class="mfp-content">
                    <div id="details-login" class="lightbox-basic zoom-anim-dialog mfp-show">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>Masuk Terlebih Dahulu!</h1>
                                    <p>Hubungi admin jika belum mempunyai akun.</p> 
                                    <div class="form-container">
                                        <form data-toggle="validator" data-focus="false" method="POST" action="db/login.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control-input" name="user_nama_lengkap" id="name" required>
                                                <label class="label-control" for="name">Masukan Nama yang Terdaftar</label>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="form-control-submit-button">MASUK</button>
                                            </div>
                                        </form>
                                    </div> 
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- end of login -->

    <?php
        if (isset($_SESSION['user_nama_lengkap']) && str_replace(' ', '', strtolower($_SESSION['user_nama_lengkap'])) === 'adminjamkrindo2025') {
            include 'views/admin/index.php';
        } else {
            include 'views/user/index.php';
        }
    ?>

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2025 <br>
                        By <a href="https://www.jamkrindo.co.id" target="_blank">Jamkrindo</a>
                    </p>
                </div> 
            </div> 
        </div> 
    </div>
    <!-- end of copyright -->
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="assets/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="assets/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="assets/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="assets/js/scripts.js"></script> <!-- Custom scripts --><!-- Tambahkan html2canvas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- MDB -->
    <script src="assets/js/mdb.umd.min.js"></script>
    <script>
        document.querySelectorAll('.zoomable').forEach(img => {
            img.addEventListener('click', function() {
                document.getElementById('modalImage').src = this.src;
                var modal = new bootstrap.Modal(document.getElementById('imageModal'));
                modal.show();
            });
        });
        function downloadRundown() {
            const rundownElement = document.getElementById('content-rundown');
            html2canvas(rundownElement, { scale: 2 }).then(canvas => {
                let link = document.createElement('a');
                link.download = 'rundown_acara.jpeg';
                link.href = canvas.toDataURL('image/jpeg');
                link.click();
            });
        }
        function downloadManifestPeserta() {
            const pesertaElement = document.getElementById('content-peserta');
            html2canvas(pesertaElement, { scale: 2 }).then(canvas => {
                let link = document.createElement('a');
                link.download = 'manifest_pribadi.jpeg';
                link.href = canvas.toDataURL('image/jpeg');
                link.click();
            });
        }
        function downloadManifestBus() {
            const busElement = document.getElementById('content-bus');
            html2canvas(busElement, { scale: 2 }).then(canvas => {
                let link = document.createElement('a');
                link.download = 'manifest_semua_peserta.jpeg';
                link.href = canvas.toDataURL('image/jpeg');
                link.click();
            });
        }
        <?php if (isset($_SESSION['swal_message'])): ?>
            $(document).ready(function() {
                Swal.fire({
                    position: 'top-end', 
                    icon: "<?= $_SESSION['swal_icon']; ?>",
                    title: "<?= $_SESSION['swal_message']; ?>",
                    showConfirmButton: false,  
                    timer: 3000,  
                    toast: true  
                });
            });
        <?php unset($_SESSION['swal_message'], $_SESSION['swal_icon']); ?>
        <?php endif; ?> 
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".mfp-wrap").addEventListener("click", function(event) {
                if (event.target.classList.contains("mfp-wrap")) {
                    document.body.classList.remove("modal-open");
                }
            });
        });
    </script>
</body>
</html>