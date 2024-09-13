<?php include 'templates/header.php'; ?>
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