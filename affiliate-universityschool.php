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
                    <h2>Affiliate University / School</h2>
                    <p>University / Program Studi / Fakultas / Sekolah yang bekerjasama dengan kami dalam konsep win-win solution.</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
		<section class="blog-area ptb-70">
			<div class="container">
                <div class="row">
                    <div class="container mt-5">        
                        <!-- Start Partner Area -->
                        <div class="partner-area">
                            <div class="container">
                                <div class="partner-inner">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                                            <a href="#">
                                                <img src="assets/img/afiliate-edu-image/partner-1.png" alt="RPL Angkasa 1 Margahayu">
                                                <img src="assets/img/afiliate-edu-image/partner-hover1.png" alt="RPL Angkasa 1 Margahayu">
                                            </a>
                                        </div>

                                        <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                                            <a href="#">
                                                <img src="assets/img/afiliate-edu-image/partner-2.png" alt="Universitas Pendidikan Indonesia Kampus UPI Cibiru">
                                                <img src="assets/img/afiliate-edu-image/partner-hover2.png" alt="Universitas Pendidikan Indonesia Kampus UPI Cibiru">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Partner Area -->
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