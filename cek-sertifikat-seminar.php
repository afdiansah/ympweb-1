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

        <style>
        .captcha-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .refresh-btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        .refresh-btn:hover {
            color: #fdc609;
        }
        </style>
        
        <?php include 'templates/nav.php'; ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2>Cek Sertifikat</h2>
                    <p>Tempat pengecekan kode sertifikat seminar dan internship/magang yang diterbitkan oleh Yuk-Mari Project. Halaman ini digunakan untuk membantu kalian mengecek kevalidan / keaslian dari suatu sertifikat seminar untuk menghindari pemalsuan sertifikat seminar.</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
		<section class="blog-area ptb-70">
			<div class="container">
                <div class="row">
                    <div class="container mt-5">
                        <form id="form-cek-sertifikat-seminar">
                            <div class="mb-3">
                                <label for="certificateID" class="form-label">Cek Sertifikat Seminar/Webinar/Magang/Internship:</label>
                                <input type="text" class="form-control" id="certificateID" placeholder="Masukkan ID Sertifikat. Contoh: YMP-S-011711202406" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Cek Sertifikat</button>
                        </form>
                        <div id="result" class="mt-3"></div>
                    </div>
                </div>
			</div>
		</section>
        <!-- End Blog Area -->
        
        <?php include 'templates/footer.php'; ?>
        
        <script>
        function refreshCaptcha() {
            document.getElementById('captcha').src = 'lib/captcha/captcha.php?' + Math.random();
        }
        </script>

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