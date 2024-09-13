<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

    error_reporting(0);
    ini_set('display_errors', 0);
    
    // Pastikan library JWT di-load
    require_once 'lib/PHP-JWT/src/JWT.php'; // Path ke JWT library
    require_once 'lib/PHP-JWT/src/ExpiredException.php'; // Path ke JWT library
    require_once 'lib/PHP-JWT/src/Key.php'; // Path ke Key library
    
    use \Firebase\JWT\JWT;
    use \Firebase\JWT\Key;

    // Atur batasan waktu (dalam detik) dan jumlah permintaan yang diizinkan
    $rateLimitTimeFrame = 60; // 60 detik
    $maxRequests = 0; // Maksimal 5 permintaan dalam 60 detik
    
    // Dapatkan waktu saat ini
    $currentTimestamp = time();
    
    // Cek apakah ada riwayat permintaan sebelumnya
    if (!isset($_SESSION['rate_limit'])) {
        $_SESSION['rate_limit'] = [
            'timestamp' => $currentTimestamp,
            'count' => 1
        ];
    } else {
        // Hitung selisih waktu antara permintaan saat ini dan permintaan pertama yang disimpan
        $timeDifference = $currentTimestamp - $_SESSION['rate_limit']['timestamp'];
    
        if ($timeDifference < $rateLimitTimeFrame) {
            // Jika masih dalam periode waktu yang diizinkan, tambahkan hitungan permintaan
            if ($_SESSION['rate_limit']['count'] < $maxRequests) {
                $_SESSION['rate_limit']['count']++;
            } else {
                // Jika permintaan melebihi batas, blokir permintaan selanjutnya
                header('Location: http://yuk-mari.com/virtual-classroom');
                exit;
            }
        } else {
            // Jika periode waktu sudah berlalu, reset hitungan permintaan dan timestamp
            $_SESSION['rate_limit'] = [
                'timestamp' => $currentTimestamp,
                'count' => 1
            ];
        }
    }

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil token dari query string
    $token = isset($_GET['token']) ? $_GET['token'] : null;

    // Ambil jawaban dari form yang dikirim
    $jawaban = isset($_POST['jawaban']) ? $_POST['jawaban'] : [];
    
    // Inisialisasi array untuk menyimpan pesan kesalahan
    $errors = [];
    
    // Kunci rahasia yang sama dengan yang digunakan untuk menghasilkan JWT
    $secretKey = 'C0fnR!23C9W*ox';

    $jwtToken = $_GET['token'];
    
    // Decode dan verifikasi token
    $decoded = JWT::decode($jwtToken, new Key($secretKey, 'HS256'));
    $decoded_array = (array) $decoded;
    
    $judul_kursuzzz = htmlspecialchars($decoded_array['judul_kursus'], ENT_QUOTES, 'UTF-8');
                
    switch ($judul_kursuzzz) {
        case "Keamanan Siber untuk Pemula: Hacking hingga Forensik":
            $filename = 'jawaban-kursus-online/Keamanan Siber untuk Pemula: Hacking hingga Forensik.txt';
        break;
                
        case "Fondasi dalam Keamanan Website Sebelum Memulai Penetrasi Sistem":
            $filename = 'jawaban-kursus-online/Fondasi dalam Keamanan Website Sebelum Memulai Penetrasi Sistem.txt';
        break;
        
        case "Memulai Perjalanan dalam Keamanan Website Membangun Pengalaman Praktis":
            $filename = 'jawaban-kursus-online/Memulai Perjalanan dalam Keamanan Website Membangun Pengalaman Praktis.txt';
        break;
                
        default:
        // Opsional: Tambahkan kode di sini untuk menangani kasus jika tidak ada kecocokan.
        break;
    }
    
    $jawabanValid = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $jawabanValid = array_map('trim', $jawabanValid); // Trim whitespace

    // Verifikasi bahwa token belum kedaluwarsa
    if ($decoded->exp < time()) {
        die('Token sudah kedaluwarsa.');
    }
    
    
    $nilaiPerSoal = 4;
    $skor = 0;

    foreach ($jawaban as $soal => $jawabanUser) {
        // Perbaiki indeks array
        $soalIndex = $soal - 1; // Karena array $jawabanValid dimulai dari indeks 0
                    
        if (isset($jawabanValid[$soalIndex]) && $jawabanUser === $jawabanValid[$soalIndex]) {
            $skor += $nilaiPerSoal;
                    }
    }
    
    // Logika if tanpa bisa di bypass
    $transaksiId = $decoded_array['transaction_id'] ?? '';
    $namaLengkaps = $decoded_array['nama_lengkap'] ?? '';
    
    // Teks yang ingin ditambahkan
    $textToAdds = $transaksiId . '-' . $namaLengkaps . '-LULUS' . PHP_EOL;
        
    // Baca seluruh isi file
    $fileContents = '';
    if (file_exists($filename)) {
        $fileContents = file_get_contents($filename);
    }
        
    // Cek jika data sudah ada
    if (strpos($fileContents, $textToAdds) === false) {
    
    // Hitung nilai
    // Keterangan lulus
    $keterangan = ($skor >= 72) ? 'Lulus' : 'Tidak Lulus';
    
    if($keterangan == "Lulus"){
        // Menampilkan error jika terjadi
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        
        // Nama file yang akan dicek
        $filename = 'cek-lulus.txt';
        
        // Data dari permintaan POST
        $transactionId = $decoded_array['transaction_id'] ?? '';
        $namaLengkap = $decoded_array['nama_lengkap'] ?? '';
        
        // Teks yang ingin ditambahkan
        $textToAdd = $transactionId . '-' . $namaLengkap . '-LULUS' . PHP_EOL;
        
        // Baca seluruh isi file
        $fileContents = '';
        if (file_exists($filename)) {
            $fileContents = file_get_contents($filename);
        }
        
        // Cek jika data sudah ada
        if (strpos($fileContents, $textToAdd) === false) {
            // Data tidak ada dalam file, jadi tambahkan
            $file = fopen($filename, 'a');
            if ($file) {
                fwrite($file, $textToAdd);
                fclose($file);
            } else {
                echo "Tidak dapat membuka file.";
            }
        } else {
            echo null;
        }
    }else if($keterangan == "Tidak Lulus"){
        // Menampilkan error jika terjadi
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        
        // Nama file yang akan dicek
        $filename = 'cek-tidak-lulus.txt';
        
        // Data dari permintaan POST
        $transactionId = $decoded_array['transaction_id'] ?? '';
        $namaLengkap = $decoded_array['nama_lengkap'] ?? '';
        
        // Teks yang ingin ditambahkan
        $textToAdd = $transactionId . '-' . $namaLengkap . '-TIDAKLULUS' . PHP_EOL;
        
        // Baca seluruh isi file
        $fileContents = '';
        if (file_exists($filename)) {
            $fileContents = file_get_contents($filename);
        }
        
        // Cek jika data sudah ada
        if (strpos($fileContents, $textToAdd) === false) {
            // Data tidak ada dalam file, jadi tambahkan
            $file = fopen($filename, 'a');
            if ($file) {
                fwrite($file, $textToAdd);
                fclose($file);
            } else {
                echo "Tidak dapat membuka file.";
            }
        } else {
            echo null;
        }
    }
    
    // Tampilkan hasil jika tidak ada kesalahan
    if (empty($errors)) {

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

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2>Pengumuman Kelulusan</h2>
                    <p>Selamat <?php echo $decoded_array["nama_lengkap"]; ?>, kamu telah menyelesaikan Ujian Sertifikasi <?php echo $decoded_array["judul_kursus"]; ?>. Berikut pengumuman hasil kelulusan ujian sertifikasi yang telah <?php echo $decoded_array["nama_lengkap"]; ?> lakukan.</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
		<section class="blog-area ptb-70" style="padding-top:0px;">
			<div class="container">
                <div class="section-title" style="margin-top:50px">
                    <h2>Hasil Ujian Sertifikasi</h2>
                    <div class="bar"></div>
            <div class="section-title" style="margin-top:50px">
                    <h5>Nilai Akhir : <?php echo $skor." (".$keterangan.")"; ?></h5>
                </div>
                    <?php
                    if($keterangan == "Lulus"){
                    ?>
                        <h7>Selamat <?php echo $decoded_array["nama_lengkap"]; ?>, akhirnya kamu dinyatakan <b><u><font color="green">Lulus</font></u></b> dalam Ujian Sertifikasi <b><?php echo $decoded_array["judul_kursus"]; ?></b> yang diadakan oleh Yuk-Mari Project. Sebagai bentuk kesungguhannya, silahkan Download sertifikat kelulusan dengan klik tombol Download Sertifikat di bawah ini. Berikut kami lampirkan juga hasil jawaban beserta soalnya yang dapat <?php echo $decoded_array["nama_lengkap"]; ?> lihat. Sebagai informasi tambahannya, setelah halaman ini di tutup/close, maka halaman ini tidak dapat dibuka kembali demi keamanan.</h7>
                    <?php
                    }else if($keterangan == "Tidak Lulus"){
                    ?>
                </div>
                <div class="section-title" style="margin-top:50px">
                    <h7>Mohon maaf <?php echo $decoded_array["nama_lengkap"]; ?>, kamu dinyatakan <b><u><font color="red">Tidak Lulus</font></u></b> dalam Ujian Sertifikasi <b><?php echo $decoded_array["judul_kursus"]; ?></b> yang diadakan oleh Yuk-Mari Project. Sebagai bahan evaluasinya, berikut kami lampirkan hasil jawaban beserta soalnya yang dapat <?php echo $decoded_array["nama_lengkap"]; ?> lihat. Ketahui lebih lanjut terkait jawaban yang benar dengan bergabung di Grup Whatsapp Yuk-Mari Project. Sebagai informasi tambahannya, setelah halaman ini di tutup/close, maka halaman ini tidak dapat dibuka kembali demi keamanan.</h7>
                    <div class="bar"></div>
                    <?php
                    }
                    ?>
                </div>
                
                <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="single-blog-post" style="max-height: 600px; overflow-y: auto;">
                        <div class="blog-image">
                            <!-- Video akan ditampilkan di sini -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <div id="video-placeholder" class="embed-responsive-item"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <div class="container"><div class="form-container">
    <div class="row">
        <?php 
        for ($i = 1; $i <= 25; $i++): 
            // Ambil jawaban yang benar dari file
            $value = isset($jawabanValid[$i - 1]) ? $jawabanValid[$i - 1] : 'Kosong';
            
            // Ambil jawaban yang dipilih dari form
            $selectedValue = isset($jawaban[$i]) ? $jawaban[$i] : '';
            
            // Tentukan warna border berdasarkan perbandingan
            $borderColor = ($selectedValue === $value || $selectedValue === '') ? 'green' : 'red';
        ?>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 form-group"
            style="border: 1px solid <?php echo $borderColor; ?>; border-radius: 5px; padding: 10px; background: linear-gradient(135deg, #f7f7f7, #dcdcdc);">
            <label for="select<?= $i ?>" class="form-label" style="font-weight: bold; color: #333;">Soal <?= $i ?></label><br/>
            <label for="select<?= $i ?>" class="form-label" style="color: #333;"><i>Jawaban Kamu</i></label>
            <select id="select<?= $i ?>" name="jawaban[<?= $i ?>]" class="form-select">
                <!-- Hanya menampilkan satu nilai yang diambil dari jawaban valid -->
                <option value="<?php echo $value; ?>" <?php echo ($value === $selectedValue) ? 'selected' : ''; ?>>
                    <?php echo $selectedValue; ?>
                </option>
            </select>
            <label for="select<?= $i ?>" class="form-label" style="color: #333;"><i>Jawaban Benar</i></label>
            <select id="select<?= $i ?>" name="jawaban[<?= $i ?>]" class="form-select">
                <!-- Hanya menampilkan satu nilai yang diambil dari jawaban valid -->
                <option value="<?php echo $value; ?>" <?php echo ($value === $selectedValue) ? 'selected' : ''; ?>>
                    <?php echo $value; ?>
                </option>
            </select>
            
        </div>
        <?php endfor; ?>
    </div>
</div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php
            if($keterangan == "Lulus"){
            ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Download Sertifikat Kelulusan</h4>
                                <hr>
                                <p>Silahkan klik tombol dibawah ini untuk Download Sertifikat Digital dalam format PDF (Porable Document Format). Miliki lebih banyak sertifikat lagi dengan hanya mengikuti <a target="_blank" href="https://yuk-mari.com/virtual-classroom">Virtual Classroom</a> Yuk-Mari Project</p>
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
                <div class="row">
					<div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Bergabung ke grup WhatsApp</h4>
                                <hr>
                                <p>Kami mempersilahkan kepada kalian untuk bergabung ke grup WhatsApp jikalau ingin berdiskusi atau melakukan Tanya Jawab Seputar Materi Video. Kami menerima juga saran / feedback bagi para peserta terdaftar mengenai fitur di kursus online ini.</p>
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
			<?php
            }else if($keterangan == "Tidak Lulus"){
			?>
			    <div class="row">
					<div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Bergabung ke grup WhatsApp</h4>
                                <hr>
                                <p>Kami mempersilahkan kepada kalian untuk bergabung ke grup WhatsApp jikalau ingin berdiskusi atau melakukan Tanya Jawab Seputar Materi Video. Kami menerima juga saran / feedback bagi para peserta terdaftar mengenai fitur di kursus online ini.</p>
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
				<div class="row">
                    <div class="col-lg-12 col-md-12">
					    <div class="container mt-5" style="margin-top:0rem !important;">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Ujian Sertifikasi Ulang</h4>
                                <hr>
                                <p>Masih yakin pada diri sendiri untuk Ikut Ujian Sertifikasi Ulang? Silahkan kunjungi halaman Virtual Classroom dan Pilih kelas yang sama, kesempatan masih ada menunggumu!</p>
                                <hr>
                                    <p class="mb-0">
            						<a href="https://yuk-mari.com/virtual-classroom"><button type="button" style="width:100%" class="btn btn-primary me-2"><i class="fas fa-arrow-left"></i> Kembali ke Virtual Classroom</button></a></p>
                            </div>
                        </div>
					</div>
                </div>
            <?php
            }
            ?>
			
		</section>
        <!-- End Blog Area -->
        
        <?php include 'templates/footer.php'; ?>
        
        <script>
        $(document).ready(function() {
            $('.popup-trigger').magnificPopup({
                items: {
                    src: '#popup-content',
                    type: 'inline'
                },
                closeBtnInside: true,
                fixedContentPos: true,
                removalDelay: 300, 
                mainClass: 'mfp-fade'
            });
            
            $('.popup-trigger-beli').magnificPopup({
                items: {
                    src: '#popup-content-beli',
                    type: 'inline'
                },
                closeBtnInside: true,
                fixedContentPos: true,
                removalDelay: 300, 
                mainClass: 'mfp-fade'
            });
        });
        </script>

    <script src="https://www.youtube.com/iframe_api"></script>
    
    <?php
    switch ($judul_kursuzzz) {
        case "Keamanan Siber untuk Pemula: Hacking hingga Forensik":
            ?>
            <!-- VIDEO BIMBEL 1 -->
            <script>
              // Fungsi dipanggil ketika API YouTube siap
              function onYouTubeIframeAPIReady() {
                var player = new YT.Player('video-placeholder', {
                  // Hapus pengaturan height dan width agar video responsif
                  videoId: '4x-KQ9DLIvE',
                  playerVars: {
                    'autoplay': 1,
                    'controls': 0,
                    'modestbranding': 1,
                    'rel': 0,
                    'showinfo': 0,
                    'iv_load_policy': 3
                  },
                  events: {
                    'onReady': onPlayerReady
                  }
                });
              }
            
              // Fungsi dipanggil ketika video siap diputar
              function onPlayerReady(event) {
                event.target.playVideo();
              }
            </script>
            <?php
        break;
                
        case "Fondasi dalam Keamanan Website Sebelum Memulai Penetrasi Sistem":
            ?>
            <!-- VIDEO BIMBEL 2 -->
            <script>
              // Fungsi dipanggil ketika API YouTube siap
              function onYouTubeIframeAPIReady() {
                var player = new YT.Player('video-placeholder', {
                  // Hapus pengaturan height dan width agar video responsif
                  videoId: 'FiWN6BF40VQ',
                  playerVars: {
                    'autoplay': 1,
                    'controls': 0,
                    'modestbranding': 1,
                    'rel': 0,
                    'showinfo': 0,
                    'iv_load_policy': 3
                  },
                  events: {
                    'onReady': onPlayerReady
                  }
                });
              }
            
              // Fungsi dipanggil ketika video siap diputar
              function onPlayerReady(event) {
                event.target.playVideo();
              }
            </script>
            <?php
        break;
        
        case "Memulai Perjalanan dalam Keamanan Website Membangun Pengalaman Praktis":
            ?>
            <!-- VIDEO BIMBEL 3 -->
            <script>
              // Fungsi dipanggil ketika API YouTube siap
              function onYouTubeIframeAPIReady() {
                var player = new YT.Player('video-placeholder', {
                  // Hapus pengaturan height dan width agar video responsif
                  videoId: 'OoD-GgGX9xU',
                  playerVars: {
                    'autoplay': 1,
                    'controls': 0,
                    'modestbranding': 1,
                    'rel': 0,
                    'showinfo': 0,
                    'iv_load_policy': 3
                  },
                  events: {
                    'onReady': onPlayerReady
                  }
                });
              }
            
              // Fungsi dipanggil ketika video siap diputar
              function onPlayerReady(event) {
                event.target.playVideo();
              }
            </script>
            <?php
        break;
                
        default:
        // Opsional: Tambahkan kode di sini untuk menangani kasus jika tidak ada kecocokan.
        break;
    }
    ?>
    </body>
</html>
<?php
} else {
        // Jika ada kesalahan, tampilkan pesan kesalahan
        echo "<h3>Terjadi kesalahan:</h3>";
        foreach ($errors as $error) {
            echo "<p style='color: red;'>" . htmlspecialchars($error) . "</p>";
        }
        echo "<a href='javascript:history.back()' style='color: blue;'>Kembali untuk memperbaiki jawaban</a>";
    }
} else {
    // Jika form tidak di-submit dengan benar, kembalikan ke halaman sebelumnya
    header('Location: javascript://history.go(-1)');
    exit;
}

} else {
        echo null;
    }
?>