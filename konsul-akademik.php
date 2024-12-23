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
                    <h2>Konsultasi Tugas - Tugas Akademik</h2>
                    <p>Silahkan hubungi kami untuk mendapatkan perbantuan / solusi dalam menangani tugas - tugas akademik seperti tugas harian / mingguan, Tugas UTS / UAS, Tugas Skripsi, Konsultasi Ilmiah (Jurnal / Paper), dan Pembuatan Aplikasi Dukungan Akademik</p>
                    <!--<p>Nikmati pelatihan / bimbel website gratis untuk pelajar ataupun mahasiswa/i. Program ini menerapkan prinsip <i>Training, Capacity Building,</i> dan <i>Awarness Program.</i></p>-->
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

                <!-- Start Feedback Area -->
		<section class="feedback-area ptb-70 bg-f7fafd">
			<div class="container">
				<div class="section-title">
					<h2>Apa kata mereka terhadap layanan Konsultasi Akademik Yuk-Mari Project?</h2>
					<div class="bar"></div>
					<p>Berikut adalah mahasiswa /mahasiswi yang telah bekerjasama dengan kami.</p>
				</div>

				<div class="feedback-slides">
					<div class="client-feedback">
						<div>
                            <div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/client-image/8.jpg" alt="image">
									</div>

									<h3>Kang Erwin Guna Setiawan</h3>
									<span>Tugas Skripsi S1 Teknik Komputer - UNIKOM</span>
									<p>Terimakasih atas bantuannya untuk melengkapi projek saya di laboratorium, sekaligus menambahkan kekurangan dalam skripsi saya. </p>
								</div>
							</div>

                            <div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/client-image/4.jpg" alt="image">
									</div>

									<h3>Fali Falyaoma</h3>
									<span>Tugas Skripsi S1 Teknik Informatika - UNIKOM</span>
									<p> Melalui konsep data mining, website saya bisa mudah digunakan berkat YM Project. Terimakasih YMP.</p>
								</div>
							</div>

                            <div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/client-image/5.jpg" alt="image">
									</div>

									<h3>Teh Shofi</h3>
									<span>Tugas Skripsi S1 Sistem Informasi - UNIKOM</span>
									<p>Tetap semangat YMP, maju terus dengan karya - karyanya. Terimakasih sudah bantu SMAN 5 Cimahi untuk web quis nya.</p>
								</div>
							</div>

							<div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/konsul-image/1.jpg" alt="image">
									</div>

									<h3>Ali</h3>
									<span>Tugas Skripsi S1 Teknik Informatika - UNIKOM</span>
									<p>Syukur bisa lulus di tahun 2019, terimakasih Yuk Mari Project sudah mendampingi sampai bisa lulus</p>
								</div>
							</div>
							
                            <div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/konsul-image/2.jpg" alt="image">
									</div>

									<h3>Kang Aswil</h3>
									<span>Tugas Skripsi S1 Teknik Informatika - UNIKOM</span>
									<p>Awalnya ga nyangka dan mau nyerah buat skripsi Machine Learning, tapi dengan bantuan Yuk Mari Project, semua lancar</p>
								</div>
							</div>

                            <div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/konsul-image/3.jpg" alt="image">
									</div>

									<h3>Rharaaa</h3>
									<span>Tugas Kuliah S1 Manajemen - UNIKOM</span>
									<p>Tugas mata kuliah Kewirausahaan bikin bete, soalnya buat website, tapi bisa nemu Yuk Mari Project. Makasih Ya.</p>
								</div>
							</div>

                            <div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/konsul-image/4.jpg" alt="image">
									</div>

									<h3>Elisa</h3>
									<span>Tugas Skripsi S1 PGSD - UPI Bumi Siliwangi</span>
									<p>Ga nyangka banget bisa lulus dan wisuda juga sesuai harapan. Padahal gak ngerti banget tentang Aplikasi Web dan Android. Btw makasih ya YMP.</p>
								</div>
							</div>

                            <div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/konsul-image/5.jpg" alt="image">
									</div>

									<h3>Aca</h3>
									<span>Tugas Akhir D3 Kebidanan - Poltekes TNI AU Cimbuleuit</span>
									<p>Makasih YMP udah bantuin Aca buat tugas bimbingan sama dosen nya (jurnal). Huft.. lumayan juga hehe</p>
								</div>
							</div>

                            <div class="item">
								<div class="single-feedback">
									<div class="client-img">
										<img src="assets/img/konsul-image/6.jpg" alt="image">
									</div>

									<h3>Alfa</h3>
									<span>Tugas UAS S1 Ilmu Komputer - UBP Karawang Ilmu Komputer</span>
									<p>Sumnpah ga ngerti banget n**r ngoding android. Tapi dengan arahan dan bantuan Yuk Mari Project, beres juga.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="client-thumbnails">
						<div>
							<div class="item">
								<div class="img-fill"><img src="assets/img/client-image/8.jpg" alt="client"></div>
							</div>
							
							<div class="item">
								<div class="img-fill"><img src="assets/img/client-image/4.jpg" alt="client"></div>
							</div>
							
							<div class="item">
								<div class="img-fill"><img src="assets/img/client-image/5.jpg" alt="client"></div>
							</div>
							
							<div class="item">
								<div class="img-fill"><img src="assets/img/konsul-image/1.jpg" alt="client"></div>
							</div>
							
							<div class="item">
								<div class="img-fill"><img src="assets/img/konsul-image/2.jpg" alt="client"></div>
							</div>

                            <div class="item">
								<div class="img-fill"><img src="assets/img/konsul-image/3.jpg" alt="client"></div>
							</div>

                            <div class="item">
								<div class="img-fill"><img src="assets/img/konsul-image/4.jpg" alt="client"></div>
							</div>

                            <div class="item">
								<div class="img-fill"><img src="assets/img/konsul-image/5.jpg" alt="client"></div>
							</div>

                            <div class="item">
								<div class="img-fill"><img src="assets/img/konsul-image/6.jpg" alt="client"></div>
							</div>

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
                                <h4 class="alert-heading">Kerjasama Menjadi Fasilitator Tugas Akademik</h4>
                                <hr>
                                <p style="text-align:justify">Kami sangat antusias jika kami dapat bekerjasama dengan kamu untuk menjadi fasilitator tugas akademik di konsultasi tugas akademik Yuk-Mari Project ini. Kami yakin pengalaman dan pengetahuan kamu akan sangat bermanfaat bagi yang membutuhkan jasa konsultasi akademik. Yuk, gabung dan bantu mereka di konsultasi tugas - tugas Yuk-Mari Project!</p>
                                <hr>
                                <p class="mb-0">
                                    <a href="https://api.whatsapp.com/send/?phone=6282295603115&text=Saya%20ingin%20menjadi%20Fasilitator%20tugas-tugas%20akademik%20di%20Yuk-Mari%20Project%20ini&type=phone_number&app_absent=0" class="whatsapp-button" target="_blank">
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