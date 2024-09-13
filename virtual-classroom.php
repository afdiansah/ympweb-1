<?php
// Debugging: Menampilkan input yang diterima
error_log(print_r($_POST, true));
?>

<?php include 'templates/header.php'; ?>

        <!-- CSS Styling -->
        <style>
        .mfp-content {
            border-radius: 10px;
            padding: 20px;
        }
        .mfp-bg {
            background: rgba(0, 0, 0, 0.8);
        }
        .mfp-wrap {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            background: #ffffff;
        }
        .white-popup {
            position: relative;
            background: #FFF;
            padding: 20px;
            width: auto;
            max-width: 500px;
            margin: 20px auto;
            text-align: center;
            border-radius: 10px;
        }
        </style>
        
        <style>
            .embed-responsive {
                position: relative;
                padding-bottom: 56.25%; /* Aspect ratio 16:9 */
                height: 0;
                overflow: hidden;
                background: #000;
            }
            .embed-responsive iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        
        <style>
        .social-icon {
            font-size: 24px;
            color: #333;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .social-icon:hover {
            color: #fec809;
        }
        </style>
        <style>
        .whatsapp-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-color: #25D366; /* Warna hijau WhatsApp */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: background-color 0.3s;
        }
        .whatsapp-button:hover {
            background-color: #128C7E; /* Warna hijau WhatsApp gelap */
            color:#fff;
        }
        .whatsapp-button i {
            margin-right: 10px;
        }
        </style>
        
        <?php include 'templates/nav.php'; ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2>Virtual Classroom</h2>
                    <p>Salah satu media bantu Kelas Maya / Kelas Virtual yang diperuntukan untuk Pelajar (kalangan siswa maupun mahasiswa) maupun Umum dalam meningkatkan kapasitas keilmuan dan keterampilannya hanya melalui device, device apapun dan kapanpun waktunya</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
		<section class="blog-area ptb-70">
			<div class="container">
                <div class="row">
                    <div class="container mt-5">
                        <form id="form-cek-sertifikat">
                            <div class="mb-3">
                                <label for="certificateID" class="form-label">Cek Sertifikat Kelulusan:</label>
                                <input type="text" class="form-control" id="certificateID" placeholder="Masukkan ID Sertifikat" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Cek Sertifikat</button>
                        </form>
                        <div id="result" class="mt-3"></div>
                    </div>
                </div>
                <hr>
                <!--<div class="container mt-5">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Sekilas Informasi</h4>
                    <p>Berikut adalah beberapa portofolio website yang telah kami bangun. Adapun beberapa portofolio lainnya tidak dapat kami cantumkan disini karena berkaitan dengan resource yang berkaitan dengan kenyamanan pengunjung</p>
                    <hr>
                    <p class="mb-0"><a target="_blank" href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi..%20Izin%20Bertanya%20tentang%20portofolio%20website%20atau%20aplikasi%20lainnya&type=phone_number&app_absent=0" class="btn btn-info" role="button">Tanyakan Kami Portofolio Lainnya</a></p>
                </div>
            </div><br/>-->
            <br/><br/>
            <div class="section-title">
                    <h2>List Kelas</h2>
                    <div class="bar"></div>
                    <a href="https://drive.google.com/file/d/1Fu_imNOBts_xmBiDqZy5obou08Mf9UDn/view?usp=sharing" target="_blank"><button type="button" class="btn btn-primary me-2" id="myBtn"><i class="fas fa-arrow-down"></i> Download Buku Panduan Virtual Classroom</button></a><br/>
                    <a href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi,%20saya%20Ingin%20Dapat%20Diskon%20Kursus%20Kelas,%20apakah%20bisa?&type=phone_number&app_absent=0" target="_blank"><button type="button" style="margin-top:10px" class="btn btn-primary me-2" id="myBtn"><i class="fas fa-info-circle"></i> Dapatkan diskon hingga 75%</button></a>
                </div>
				<div class="row">
				    <!-- LIST KELAS -->
				    <?php 
				        include 'post/list_kelas/keamanan_siber/01.php';
				        include 'post/list_kelas/keamanan_siber/02.php'; 
				        include 'post/list_kelas/keamanan_siber/03.php'; 
				    ?>
				</div>
			<hr>
			
			<div class="row">
					<div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Kerjasama Menjadi Pemateri</h4>
                                <hr>
                                <p style="text-align:justify">Kami sangat antusias jika kami dapat bekerjasama dengan kamu untuk menjadi pemateri di kursus online Yuk-Mari Project ini. Kami yakin pengalaman dan pengetahuan kamu akan sangat bermanfaat bagi para peserta. Yuk, gabung dan bagikan ilmu kamu di kursus online Yuk-Mari Project!</p>
                                <hr>
                                <p class="mb-0">
            						<a href="undangan_pemateri.pdf" target="_blank"><button type="button" style="width:100%;margin-bottom:10px;" class="btn btn-primary me-2" id="myBtn"><i class="fas fa-arrow-down"></i> Download Undangan</button></a></p>
                                <p class="mb-0">
            						<button type="button" style="width:100%;margin-bottom:10px;" class="btn btn-primary me-2 popup-trigger-persyaratan" id="myBtn"><i class="fas fa-info-circle"></i> Lihat Persyaratan</button></p>
                                <p class="mb-0">
                                    <a href="https://api.whatsapp.com/send/?phone=6282295603115&text=Izin%20Kirim%20berkas%20untuk%20melakukan%20kerjasama%20menjadi%20pemateri&type=phone_number&app_absent=0" class="whatsapp-button" target="_blank">
                                        <i class="fab fa-whatsapp"></i>&nbsp; Hubungi Kami 
                                    </a>
                                </p>
                            </div>
                        </div>
					</div>
				</div>
						</div>
					</div>
					
			</div>
		</section>
        <!-- End Blog Area -->
        
        <?php include 'templates/footer.php'; ?>

        <!-- Magnific Popup Trigger Script -->
        <script src="assets/js/virtual-classroom/popup_trigger.js"></script>

        <!-- Include JavaScript -->
        <script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-a0Qdc090d4Z1OSXw"></script>
        <script src="assets/js/virtual-classroom/midtrans_listener.js"></script>

        <script src="https://www.youtube.com/iframe_api"></script>
    
        <!-- VIDEO BIMBEL -->
        <script src="assets/js/virtual-classroom/video_bimbel.js"></script>
        <script src="assets/js/virtual-classroom/sertifikat_cek.js"></script>
    </body>
</html>