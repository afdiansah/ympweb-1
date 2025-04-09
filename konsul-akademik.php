<?php 
require 'database.php';

function fetchKonsultasiContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM konsultasi ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchTestimonialsContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM testimonials ORDER BY id ASC");
    return $stmt->fetchAll();
}

function getContentByType($contents, $type) {
    foreach ($contents as $content) {
        if ($content['content_type'] === $type) {
            return $content['content'];
        }
    }
    return '';
}

function formatVisionMission($content) {
    $content = preg_replace('/^\d+\.\s*/', '', $content);
    $points = preg_split('/\d+\.\s*/', $content, -1, PREG_SPLIT_NO_EMPTY);
    $formattedContent = "<ol>";
    foreach ($points as $point) {
        $formattedContent .= "<li style='text-align: justify; margin-bottom: 10px;'>" . trim($point) . "</li>";
    }
    $formattedContent .= "</ol>";
    return $formattedContent;
}

$konsultasiContent = fetchKonsultasiContent($pdo);
$testimonialsContent = fetchTestimonialsContent($pdo);

include 'templates/header.php'; 
?>

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
                    <h2><?php echo htmlspecialchars(getContentByType($konsultasiContent, 'Header1')); ?></h2>
                    <p><?php echo htmlspecialchars(getContentByType($konsultasiContent, 'Title Description')); ?></p>
                    <!--<p>Nikmati pelatihan / bimbel website gratis untuk pelajar ataupun mahasiswa/i. Program ini menerapkan prinsip <i>Training, Capacity Building,</i> dan <i>Awarness Program.</i></p>-->
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

                <!-- Start Feedback Area -->
		<section class="feedback-area ptb-70 bg-f7fafd">
			<div class="container">
				<div class="section-title">
					<h2><?php echo htmlspecialchars(getContentByType($konsultasiContent, 'Header Title 2')); ?></h2>
					<div class="bar"></div>
					<p><?php echo htmlspecialchars(getContentByType($konsultasiContent, 'Title Description 2')); ?></p>
				</div>

                <div class="feedback-slides">
                    <div class="client-feedback">
                        <div>
                            <?php foreach ($testimonialsContent as $testimonial) : ?>
                                <div class="item">
                                    <div class="single-feedback">
                                        <div class="client-img">
                                        <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" alt="image">
                                        </div>
                                        <h3><?php echo htmlspecialchars($testimonial['name']); ?></h3>
                                        <span><?php echo htmlspecialchars($testimonial['university']); ?></span>
                                        <p><?php echo htmlspecialchars($testimonial['testimonial']); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="client-thumbnails">
                        <div>
                            <?php foreach ($testimonialsContent as $testimonial) : ?>
                                <div class="item">
                                    <div class="img-fill">
                                    <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" alt="image">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <button class="prev-arrow slick-arrow">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        
                        <button class="next-arrow slick-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
			</div>
		</section>
        <!-- End Feedback Area -->

        <!-- Start App Download Area -->
        <section class="app-download-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="container mt-5">
                            <h2>Formulir Konsultasi Tugas Akademik</h2>
                            <p>Silahkan untuk mengisi formulir konsultasi dibawah ini secara lengkap agar kami dapat mengetahui kebutuhan tugas akademik kamu</p>
                            <form id="contactForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" placeholder="Contoh: Anisa Bahari" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input type="email" placeholder="Contoh: anisa@gmail.com" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="instansi" class="form-label">Nama Sekolah / Kampus</label>
                                    <input type="text" placeholder="Contoh: Universitas Pendidikan Indonesia" class="form-control" id="instansi" name="instansi" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" placeholder="Contoh: anisa@gmail.com" class="form-label">Jurusan</label>
                                    <input type="text" placeholder="Contoh: Seni Rupa" class="form-control" id="jurusan" name="jurusan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="no_whatsapp" class="form-label">Nomor Whatsapp Messenger</label>
                                    <input type="text" placeholder="Contoh: 081392003837" class="form-control" id="no_whatsapp" name="no_whatsapp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_tugas" class="form-label">Jenis Tugas</label>
                                    <select class="form-select" id="jenis_tugas" name="jenis_tugas" required>
                                        <option selected>Pilih</option>
                                        <option value="Tugas Harian / Mingguan">Tugas Harian / Mingguan</option>
                                        <option value="Tugas UTS / UAS">Tugas UTS / UAS</option>
                                        <option value="Tugas Skripsi">Tugas Skripsi</option>
                                        <option value="Konsultasi Ilmiah (Jurnal / Paper / Makalah)">Konsultasi Ilmiah (Jurnal / Paper / Makalah)</option>
                                        <option value="Aplikasi Dukungan Akademik">Aplikasi Dukungan Akademik</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Jelaskan Kebutuhan</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Tulis kebutuhan tugas akademik kamu disini" rows="3" required></textarea>
                                </div>
                                <button type="button" class="btn btn-primary mt-3" onclick="sendToWhatsApp()">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>

				<hr>
			
			<div class="row">
					<div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading"><?php echo htmlspecialchars(getContentByType($konsultasiContent, 'Title Footer')); ?></h4>
                                <hr>
                                <p style="text-align:justify"><?php echo htmlspecialchars(getContentByType($konsultasiContent, 'Sub Title Footer')); ?></p>
                                <hr>
                                <p class="mb-0">
                                    <a href="<?php echo htmlspecialchars(getContentByType($konsultasiContent, 'Number Whatsapp')); ?>" class="whatsapp-button" target="_blank">
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

            </div>
        </section>
        <!-- End App Download Area -->
        
        <?php include 'templates/footer.php'; ?>
        
        <script>
        function sendToWhatsApp() {
            const nama = document.getElementById("nama").value;
            const email = document.getElementById("email").value;
            const instansi = document.getElementById("instansi").value;
            const jurusan = document.getElementById("jurusan").value;
            const no_whatsapp = document.getElementById("no_whatsapp").value;
            const jenis_tugas = document.getElementById("jenis_tugas").value;
            const message = document.getElementById("message").value;

            const whatsappNumber = "+6282295603115";
            const text = `Data Formulir Konsultasi Tugas Akademik\n----------------------------------------------\n
            📛 *Nama Lengkap:* ${nama}
            ✉️ *Alamat Email:* ${email}
            🏫 *Sekolah/Kampus:* ${instansi}
            🎓 *Jurusan:* ${jurusan}
            📱 *No Whatsapp:* ${no_whatsapp}
            📚 *Jenis Tugas:* ${jenis_tugas}
            📝 *Data Kebutuhan Tugas Akademik:* ${message}`;

            const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(text)}`;

            window.open(url, '_blank');
        }
    </script>
    </body>

</html>