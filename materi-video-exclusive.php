<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Pastikan library JWT di-load
require_once 'lib/PHP-JWT/src/JWT.php'; // Path ke JWT library
require_once 'lib/PHP-JWT/src/ExpiredException.php'; // Path ke JWT library
require_once 'lib/PHP-JWT/src/Key.php'; // Path ke Key library

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

// Kunci rahasia yang sama dengan yang digunakan untuk menghasilkan JWT
$secretKey = 'C0fnR!23C9W*ox';

// Ambil token dari URL
if (!isset($_GET['token'])) {
    die('You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ;');
}

$jwtToken = $_GET['token'];

try {
    // Decode dan verifikasi token
    $decoded = JWT::decode($jwtToken, new Key($secretKey, 'HS256'));
    $decoded_array = (array) $decoded;

    // Verifikasi bahwa token belum kedaluwarsa
    if ($decoded->exp < time()) {
        die('Token sudah kedaluwarsa.');
    }

    // Token valid, tampilkan konten video eksklusif

    include 'templates/header.php'; 
?>

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
          /* Modal Background */
          .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1050; /* High z-index to ensure it stays on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Scroll if needed */
            background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
          }
        
          /* Modal Content */
          .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            max-width: 600px; /* Maximum width of modal */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
          }
        
          /* Modal Header */
          .modal-header {
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
            border-radius: 8px 8px 0 0; /* Rounded top corners */
          }
        
          /* Modal Body */
          .modal-body {
            padding: 20px;
          }
        
          /* Modal Footer */
          .modal-footer {
            padding: 10px 20px;
            border-top: 1px solid #ddd;
            border-radius: 0 0 8px 8px; /* Rounded bottom corners */
            text-align: right; /* Align buttons to the right */
          }
        
          /* Close Button */
          .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
          }
        
          .close:hover,
          .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
          }
        
          /* Button Styles */
          .btn {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px; /* Rounded corners */
          }
        
          .btn-secondary {
            background-color: #6c757d;
          }
        
          .btn-primary {
            background-color: #007bff;
          }
        </style>
        <style>
        .form-container {
            max-height: 300px; /* Mengatur tinggi maksimum untuk container */
            overflow-y: auto; /* Menambahkan scroll vertikal jika konten melebihi tinggi maksimum */
            border: 1px solid #e0e0e0; /* Border untuk container disesuaikan dengan gradasi */
            padding: 15px; /* Padding di dalam container */
            background: linear-gradient(135deg, #ffffff, #e0e0e0); /* Gradasi warna untuk container */
            border-radius: 10px; /* Membuat sudut container lebih lembut */
            scrollbar-width: thin; /* Mengatur lebar scrollbar di Firefox */
            scrollbar-color: #d3d3d3 #ffffff; /* Warna thumb dan track untuk Firefox disesuaikan dengan gradasi */
        }
        
        /* Kustomisasi scrollbar untuk Webkit browsers seperti Chrome, Safari, Edge */
        .form-container::-webkit-scrollbar {
            width: 8px; /* Lebar scrollbar */
        }
        
        .form-container::-webkit-scrollbar-track {
            background: #ffffff; /* Warna background track disesuaikan dengan gradasi */
            border-radius: 10px; /* Membuat sudut track melengkung */
        }
        
        .form-container::-webkit-scrollbar-thumb {
            background-color: #d3d3d3; /* Warna scrollbar thumb disesuaikan dengan gradasi */
            border-radius: 10px; /* Membuat sudut thumb melengkung */
            border: 2px solid #e0e0e0; /* Border di sekitar thumb untuk efek visual disesuaikan */
        }
        
        .form-container::-webkit-scrollbar-thumb:hover {
            background-color: #bfbfbf; /* Warna thumb saat dihover */
        }


        </style>
        
        <?php include 'templates/nav.php'; ?>
        
        <?php
        if (isset($_GET['token']) && $_GET['token'] == $jwtToken && isset($_GET['ujian_sertifikasi']) && $_GET['ujian_sertifikasi'] == 1) {
    
            // Nama file yang akan dicek
            $filePath = 'cek-lulus.txt';
            $filePath2 = 'cek-tidak-lulus.txt';
            $filePath3 = 'habis-waktu.txt';
                                        
            // Periksa apakah kedua file ada
            if (file_exists($filePath) && file_exists($filePath2) && file_exists($filePath3)) {
                // Baca isi kedua file
                $fileContent = file_get_contents($filePath);
                $fileContent2 = file_get_contents($filePath2);
                $fileContent3 = file_get_contents($filePath3);
                                        
                // Lakukan pengecekan kondisi pada isi file
                if (
                    strpos($fileContent, $decoded_array['transaction_id'] . '-' . $decoded_array['nama_lengkap'] . '-LULUS') !== false || 
                    strpos($fileContent2, $decoded_array['transaction_id'] . '-' . $decoded_array['nama_lengkap'] . '-TIDAKLULUS') !== false
                        ||
                    strpos($fileContent3, $decoded_array['transaction_id'] . '-' . $decoded_array['nama_lengkap'] . '-HABISWAKTU') !== false
                ) {
                    echo '<script>window.location.href = "https://yuk-mari.com/materi-video-exclusive?token='.$jwtToken.'"</script>';
                } else {
        
            /* ================ START UJIAN SERTIFIKASI ================ */
        ?>
        
            <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2>Ujian Sertifikasi</h2>
                    <p>Selamat datang <?php echo $decoded_array['nama_lengkap']; ?> di Ujian Sertifikasi. Atas kesiapanmu mengerjakan ujian, silahkan lihat setiap soal dibawah ini dan jawab setiap soalnya di kolom yang telah disediakan.</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
		<section class="blog-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Persiapan Memulai Ujian </h4><h7>(25 Menit / 25 Soal)</h7>
                                <hr>
                                <p>Halo <?php echo $decoded_array['nama_lengkap']; ?>, berikut persiapan untuk memulai ujian:<br/>
                                1. Kami mengharapkan agar kamu mengerjakan soal ujian di laptop / komputer / sejenisnya layar lebar, tidak disarankan di handphone karena tidak efektif<br/>
                                2. Soal berjumlah 25 soal. Dan soal terdapat di dalam Video.<br/>
                                3. Silahkan jawab setiap soalnya secara acak. Kami merekomendasikan untuk menjawab soalnya yang mudah terlebih dahulu.<br/>
                                4. Ketika dirasa sudah yakin dengan semua jawaban, silahkan klik tombol <u>Kirim Jawaban</u><br/>
                                5. Setiap Jawaban Benar dan Salah akan ditampilkan setelah kamu melakukan klik tombol Kirim Jawaban</p>
                                <br/>
                            </div>
                        </div>
					</div>
				</div>
                <hr>
                <div class="section-title" style="margin-top:50px">
                    <h2>Soal Ujian & Formulir Jawaban</h2>
                    <br/>
                    <h7>Silahkan lihat soal dengan penuh konsentrasi, fokus, dan teliti. Tidak usah terburu - buru, lihat ke bagian soal yang dirasa mudah terlebih dahulu. Dan ketika menjawab soal, tidak usah terburu - buru, cek kembali setiap jawaban yang sudah dijawab sebelum siap dikirim jawabannya.</h7>
                    <div class="bar"></div>
                    <br/>
                    <p>
                        Waktu Pengerjaan: <div id="countdown">25:00</div>
                    </p>
                </div>
                
                <?php
                $judul_kursuzz = htmlspecialchars($decoded_array['judul_kursus'], ENT_QUOTES, 'UTF-8');
                
                switch ($judul_kursuzz) {
                    case "Keamanan Siber untuk Pemula: Hacking hingga Forensik":
                        include 'post/list_kelas/keamanan_siber/pilihan-jawaban/01.php';
                        break;
                
                    case "Fondasi dalam Keamanan Website Sebelum Memulai Penetrasi Sistem":
                        include 'post/list_kelas/keamanan_siber/pilihan-jawaban/02.php';
                        break;
                        
                    case "Memulai Perjalanan dalam Keamanan Website Membangun Pengalaman Praktis":
                        include 'post/list_kelas/keamanan_siber/pilihan-jawaban/03.php';
                        break;
                
                    default:
                        // Opsional: Tambahkan kode di sini untuk menangani kasus jika tidak ada kecocokan.
                        break;
                }
                ?>
                
		</section>
        <!-- End Blog Area -->
        
        <script>
    document.addEventListener("DOMContentLoaded", function() {
    // Total waktu dalam detik (misalnya 25 menit)
    const totalTime = 25 * 60; // Isi dengan waktu yang sesuai

    let startTime = localStorage.getItem('startTime');
    
    if (!startTime) {
        startTime = new Date().getTime();
        localStorage.setItem('startTime', startTime);
    }

    function updateCountdown() {
    // Mengambil data dari PHP
    var transactionId = '<?php echo $decoded_array['transaction_id']; ?>';
    var namaLengkap = '<?php echo $decoded_array['nama_lengkap']; ?>';
    var jwtToken = '<?php echo $jwtToken; ?>';

    const now = new Date().getTime();
    const elapsed = Math.floor((now - startTime) / 1000); // Waktu yang telah berlalu dalam detik
    const remaining = totalTime - elapsed; // Waktu yang tersisa

    if (remaining <= 0) {
        document.getElementById("countdown").innerHTML = "00:00";
        localStorage.removeItem('startTime'); // Hapus waktu mulai dari localStorage
        alert("Maaf, waktu kamu habis untuk mengerjakan semua soalnya. Klik Ok untuk melanjutkan!");

        // Membuat objek FormData untuk mengirim data
        const formData = new FormData();
        formData.append('transaction_id', transactionId);
        formData.append('nama_lengkap', namaLengkap);

        // Membuat objek XMLHttpRequest untuk melakukan permintaan POST
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'habis-waktu.php', true);

        // Menangani respon dari server
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                console.log('Data berhasil dikirim');

                // Ambil form dan set action-nya secara dinamis setelah data berhasil dikirim
                const form = document.getElementById('kirimJawabanForm');
                form.action = 'kelulusan?token=' + encodeURIComponent(jwtToken); // Set action form dengan token

                // Kirim form
                form.submit(); // Kirim form dan arahkan ke action yang telah ditentukan dalam JavaScript
            } else {
                console.error('Terjadi kesalahan: ' + xhr.status);
            }
        };

        // Mengirim data ke server
        xhr.send(formData);
                
        } else {
            const minutes = Math.floor(remaining / 60);
            const seconds = remaining % 60;
            document.getElementById("countdown").innerHTML =
                `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
});

</script>

        <?php
            }
                } else {
                    echo "Salah satu file tidak ditemukan.";
                } 
        } else {
            /* ================ START MATERI VIDEO ================ */
        ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2>Materi Video Exclusive</h2>
                    <p>Materi Video Eksklusif ini menawarkan akses mendalam dan praktis yang mencakup berbagai teknik, studi kasus, atau strategi terbaru dalam topik tertentu. Kami menawarkan suatu konten yang kadangkala tidak tersedia secara publik, dirancang khusus untuk memberikan wawasan dan keterampilan tambahan dalam topik yang relevan.</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
		<section class="blog-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Persiapan Memulai Materi</h4>
                                <hr>
                                <p>
                                    <b>ID Transaksi :</b> <?php echo "#YMP-".$decoded_array['transaction_id']."</br>"; ?>
                                    <?php
                                    $timestamp = $decoded_array['exp'];
                                    
                                    // Mengubah timestamp menjadi hari dalam bahasa Inggris dan tanggal
                                    $englishDate = date('l, d F Y H:i:s', $timestamp);
                                    
                                    // Array mapping dari hari bahasa Inggris ke bahasa Indonesia
                                    $days = [
                                        'Sunday' => 'Minggu',
                                        'Monday' => 'Senin',
                                        'Tuesday' => 'Selasa',
                                        'Wednesday' => 'Rabu',
                                        'Thursday' => 'Kamis',
                                        'Friday' => 'Jumat',
                                        'Saturday' => 'Sabtu'
                                    ];
                                    
                                    // Mengganti nama hari dalam bahasa Inggris menjadi bahasa Indonesia
                                    $indonesianDate = str_replace(array_keys($days), array_values($days), $englishDate);
                                
                                    echo "<b>Batas Ketersediaan Materi:</b> " . $indonesianDate." (3 Minggu)"; 
                                    ?>
                                </p>
                                <p>Halo <?php echo $decoded_array['nama_lengkap']; ?>, berikut persiapan untuk memulai materi:<br/>
                                1. Pastikan koneksi internet kamu lancar / cepat / tidak ada kendala<br/>
                                2. Double-Click video untuk Fullscreen / Full Layar<br/>
                                3. Memilih kualitas video 1080p agar jelas dapat dibaca setiap teksnya<br/>
                                4. Persiapkan catatan untuk mencatat setiap yang tidak dimengerti<br/>
                                5. Pastikan video selalu fullscreen / tampilan layar penuh<br/>
                                6. Direkomendasikan belajar menggunakan laptop bukan handphone (mengingat keterbatasan ukuran layar handphone)<br/>
                                7. Lihat di deskripsi untuk file / link dukungan yang ada di video</p>
                            </div>
                        </div>
					</div>
				</div>
                <hr>
                <div class="section-title" style="margin-top:50px">
                    <h2>List Materi</h2>
                    <div class="bar"></div>
                </div>
                
                <?php
                $judul_kursuz = htmlspecialchars($decoded_array['judul_kursus'], ENT_QUOTES, 'UTF-8');
                
                switch ($judul_kursuz) {
                    case "Keamanan Siber untuk Pemula: Hacking hingga Forensik":
                        include 'post/list_kelas/keamanan_siber/materi/01.php';
                        break;
                
                    case "Fondasi dalam Keamanan Website Sebelum Memulai Penetrasi Sistem":
                        include 'post/list_kelas/keamanan_siber/materi/02.php';
                        break;
                        
                    case "Memulai Perjalanan dalam Keamanan Website Membangun Pengalaman Praktis":
                        include 'post/list_kelas/keamanan_siber/materi/03.php';
                        break;
                
                    default:
                        // Opsional: Tambahkan kode di sini untuk menangani kasus jika tidak ada kecocokan.
                        break;
                }
                
                echo "<hr>";
                
                // Nama file yang akan dicek
                $filePath = 'cek-lulus.txt';
                $filePath2 = 'cek-tidak-lulus.txt';
                $filePath3 = 'habis-waktu.txt';
                                            
                // Periksa apakah kedua file ada
                if (file_exists($filePath) && file_exists($filePath2) && file_exists($filePath3)) {
                    // Baca isi kedua file
                    $fileContent = file_get_contents($filePath);
                    $fileContent2 = file_get_contents($filePath2);
                    $fileContent3 = file_get_contents($filePath3);
                                            
                    // Lakukan pengecekan kondisi pada isi file
                    if (
                        strpos($fileContent, $decoded_array['transaction_id'] . '-' . $decoded_array['nama_lengkap'] . '-LULUS') !== false || 
                        strpos($fileContent2, $decoded_array['transaction_id'] . '-' . $decoded_array['nama_lengkap'] . '-TIDAKLULUS') !== false
                            ||
                        strpos($fileContent3, $decoded_array['transaction_id'] . '-' . $decoded_array['nama_lengkap'] . '-HABISWAKTU') !== false
                    ) {
                                            //NULL
                                        } else {
                                    ?>
                <div class="row">
					<div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Ujian Sertifikasi (Opsional)</h4>
                                <hr>
                                <p style="text-align:justify">Kami mempersilahkan kepada kalian jika ingin mendapatkan sertifikat dari Yuk-Mari Project untuk materi ini, kalian bisa memulai untuk Ujian Sertifikasi. Silahkan pelajari materi secara acak, walaupun kami menyarankan untuk memahami materinya mulai dari materi pembelajaran ke-1 dan seterusnya. Berikut Aturan Penilaian dalam Ujian Sertifikasi ini:<br/><br/>
                                1. Setiap Soal berjumlah 25 soal yang memiliki nilai 4 poin/soalnya<br/>
                                2. <?php echo $decoded_array['nama_lengkap']; ?> Dinyatakan 'Lulus' jika poin lebih sama dengan 72 poin (benar 18 soal)<br/>
                                3. <?php echo $decoded_array['nama_lengkap']; ?> Dinyatakan 'Tidak Lulus' jika poin kurang dari 72 poin (contoh: 68 poin (benar 17))<br/><br/>
                                Bagi kalian yang sudah siap untuk menjawab setiap soal untuk memperoleh <b><u>sertifikat kelulusan</u></b>, silahkan klik tombol dibawah ini. Selamat Mengerjakan!</p>
                                <hr>
                                    <p class="mb-0">
            						<button type="button" style="width:100%" class="btn btn-primary me-2" id="myBtn"><i class="fas fa-info-circle"></i> Mulai / Lanjut Ujian Sertifikasi</button></p>
            						<!-- Modal Structure 1 -->
                                    <div id="myModal" class="modal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2>Konfirmasi Kembali</h2>
                                                <span class="close" id="close1">&times;</span>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah <?php echo $decoded_array['nama_lengkap']; ?> yakin ingin melanjutkan untuk Ujian Sertifikasi? Sudah Siap Mulai? Atau sudah siap lagi untuk melanjutkan jika sudah memulai?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="confirmBtn1" class="btn btn-primary">Siap</button>
                                                <button id="cancelBtn1" class="btn btn-secondary">Belum Siap</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
					</div>
				</div>
                                    <?php
                                    }
                                } else {
                                    echo "File Lulus atau Tidak Lulus tidak ditemukan.";
                                }
                                ?>
                                                    <?php
            // Nama file yang akan dicek
            $filePath = 'cek-lulus.txt';
                                        
            // Periksa apakah kedua file ada
                // Baca isi kedua file
                $fileContent = file_get_contents($filePath);
                                        
                // Lakukan pengecekan kondisi pada isi file
                if (
                    strpos($fileContent, $decoded_array['transaction_id'] . '-' . $decoded_array['nama_lengkap'] . '-LULUS') !== false
                ) {
                ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Download Sertifikat Kelulusan</h4>
                                <hr>
                                <p>Karena <?php echo $decoded_array['nama_lengkap']; ?> telah berhasil menyelesaikan Ujian Sertifikasi dan dinyatakan Lulus, silahkan download file sertifikat berikut jika belum sempat untuk melakukan download sertifikat</p>
                                <hr>
                                    <form method="POST" action="sertifikat?token=<?php echo $jwtToken; ?>">
                                        <p class="mb-0">
                                            <input type="hidden" name="nama_lengkap" value="<?php echo htmlspecialchars($decoded_array['nama_lengkap'], ENT_QUOTES, 'UTF-8'); ?>" />
                                            <input type="hidden" name="judul_kursus" value="<?php echo htmlspecialchars($decoded_array['judul_kursus'], ENT_QUOTES, 'UTF-8'); ?>" />
                                            <input type="hidden" name="id_sertifikat" value="<?php echo htmlspecialchars($decoded_array['transaction_id'], ENT_QUOTES, 'UTF-8'); ?>" />
                                            <button type="submit" style="width:100%" class="btn btn-primary me-2" id="myBtn"><i class="fas fa-arrow-down"></i> Download Sertifikat</button>
                                        </p>
                                    </form>
                            </div>
                        </div>
					</div>
                </div>
                <?php
                    } else {
        }
        ?>
        <div class="row">
					<div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Bergabung ke grup WhatsApp</h4>
                                <hr>
                                <p style="text-align:justify">Kami mempersilahkan kepada kalian untuk bergabung ke grup WhatsApp jikalau ingin berdiskusi atau melakukan Tanya Jawab Seputar Materi Video. Kami menerima juga saran / feedback bagi para peserta terdaftar mengenai fitur di kursus online ini.</p>
                                <hr>
                                <p class="mb-0">
                                    <a href="https://chat.whatsapp.com/G0zHxxzo73hJAjctcGNcNL" class="whatsapp-button" target="_blank">
                                        <i class="fab fa-whatsapp"></i>&nbsp; Bergabung dengan WhatsApp
                                    </a>
                                </p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</section>
        <!-- End Blog Area -->
        <?php
        }
        
        include 'templates/footer.php'; 
        ?>
        
        <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <!-- Bootstrap JS (Bundle dengan Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
        <!-- VIDEO BIMBEL 1 -->
        <script src="https://www.youtube.com/iframe_api"></script>
        
        <?php
                $judul_kursuzzz = htmlspecialchars($decoded_array['judul_kursus'], ENT_QUOTES, 'UTF-8');
                
                switch ($judul_kursuzzz) {
                    case "Keamanan Siber untuk Pemula: Hacking hingga Forensik":
                        echo '<script src="assets/js/materi-video-exclusive/link-video01.js"></script>';
                        break;
                
                    case "Fondasi dalam Keamanan Website Sebelum Memulai Penetrasi Sistem":
                        echo '<script src="assets/js/materi-video-exclusive/link-video02.js"></script>';
                        break;
                        
                    case "Memulai Perjalanan dalam Keamanan Website Membangun Pengalaman Praktis":
                        echo '<script src="assets/js/materi-video-exclusive/link-video03.js"></script>';
                        break;
                
                    default:
                        // Opsional: Tambahkan kode di sini untuk menangani kasus jika tidak ada kecocokan.
                        break;
                }
        ?>
        
        <script>
        // Function to handle opening and closing modals
        function setupModal(modalId, btnId, closeId, cancelBtnId, confirmBtnId, formId, redirectUrl) {
            var modal = document.getElementById(modalId);
            var btn = document.getElementById(btnId);
            var close = document.getElementById(closeId);
            var cancelBtn = document.getElementById(cancelBtnId);
            var confirmBtn = document.getElementById(confirmBtnId);
    
            if (btn) {
                btn.onclick = function() {
                    modal.style.display = 'block';
                }
            }
    
            if (close) {
                close.onclick = function() {
                    modal.style.display = 'none';
                }
            }
    
            if (cancelBtn) {
                cancelBtn.onclick = function() {
                    modal.style.display = 'none';
                }
            }
    
            if (confirmBtn) {
                confirmBtn.onclick = function() {
                    if (modalId === 'myModal-kirim-jawaban') {
                        var form = document.getElementById(formId);
                        if (form) {
                            // Set action form dengan token
                            form.action = 'kelulusan?token=' + encodeURIComponent(jwtToken);
                            form.submit(); // Kirim form
                        } else {
                            console.error('Form not found for modal ID: ' + modalId);
                        }
                    } else {
                        window.location.href = redirectUrl;
                    }
                }
            }
    
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }
        }

    var jwtToken = '<?php echo $jwtToken; ?>';
    
       // Inisialisasi modals dengan URL yang benar
    setupModal('myModal', 'myBtn', 'close1', 'cancelBtn1', 'confirmBtn1', null, 'https://yuk-mari.com/materi-video-exclusive?token=' + encodeURIComponent(jwtToken) + '&ujian_sertifikasi=1');
    setupModal('myModal-kirim-jawaban', 'myBtn2', 'close2', 'cancelBtn2', 'confirmBtn2', 'kirimJawabanForm', 'null');
    setupModal('myModal-cekmateri', 'myBtn3', 'close3', 'cancelBtn3', 'confirmBtn3', null, 'https://yuk-mari.com/materi-video-exclusive?token=' + encodeURIComponent(jwtToken));
        </script>
    </body>
</html>

<?php
    // Tambahkan konten video atau materi eksklusif di sini

} catch (Exception $e) {
    // Token tidak valid atau tidak dapat didecode
    echo 'You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' . $e->getMessage();
}
?>