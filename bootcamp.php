<?php include 'templates/header.php'; ?>
<?php include 'templates/nav.php'; ?>

<style>
    .btn-gradient {
        background: linear-gradient(45deg, #222, #555);
        color: #fff;
        border: none;
        transition: 0.3s;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .btn-gradient:hover {
        background: linear-gradient(45deg, #555, #222);
        color: #fff;
        transform: scale(1.05);
        box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);
    }
</style>

<!-- Start Page Title Area -->
<div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Bootcamp Keamanan Siber #1</h2>
            <p>PT. YUKMARI PROJECT INDONESIA menghadirkan Bootcamp Red Team & Blue Team, Program intensif untuk membekali kamu dengan keterampilan dunia keamanan siber melalui pelatihan langsung bersama para ahli.</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Button Group -->
<div class="container mt-4 text-center">
    <div class="d-flex flex-wrap justify-content-center gap-2">
        <a href="#tentang" class="btn btn-gradient flex-grow-1">Tentang Bootcamp</a>
        <a href="#kurikulum" class="btn btn-gradient flex-grow-1">Kurikulum</a>
        <a href="#harga" class="btn btn-gradient flex-grow-1">Harga</a>
        <a href="#materi" class="btn btn-gradient flex-grow-1">Materi</a>
        <a href="#mentor" class="btn btn-gradient flex-grow-1">Mentor</a>
        <a href="#testimoni" class="btn btn-gradient flex-grow-1">Testimoni</a>
    </div>
</div>
<!-- End Button Group -->

<!-- Start Bootcamp Sections -->
<!-- Start Bootcamp Sections -->
<section id="tentang" class="bootcamp-section services-area ptb-70">
    <div class="container-fluid p-0">
        <div class="overview-box d-flex flex-wrap align-items-center">
            <!-- Bagian Konten -->
            <div class="overview-content p-4">
                <div class="content left-content">
                    <span class="sub-title text-warning">Sekilas tentang Bootcamp</span>
                    <h2 class="fw-bold">Red Team & Blue Team</h2>
                    <div class="bar bg-warning mb-3" style="height: 4px; width: 80px;"></div>
                    <p>
                        PT. YUKMARI PROJECT INDONESIA menghadirkan Bootcamp Red Team & Blue Team, sebuah program intensif yang dirancang untuk membekali kamu dengan keterampilan dalam dunia keamanan siber.
                    </p>
                    <p>
                    🔴 Red Team & 🔵 Blue Team Bootcamp<br/>
💻 <b>Jadwal: 9x Live Session (20.30 - 22.30 WIB)</b>
                    </p>
                    <ul class="list-unstyled">
                        <li>✅ 9 sesi live interaktif</li>
                        <li>✅ Materi mencakup Red Team & Blue Team</li>
                        <li>✅ Pembelajaran dari dasar hingga mahir</li>
                        <li>✅ Mini project untuk memperkuat portofolio</li>
                        <li>✅ Cocok untuk mahasiswa, fresh graduate & profesional</li>
                    </ul>

                    <!-- Countdown Timer -->
                    <div class="countdown-box text-center mt-4">
                        <h5 class="fw-bold">Pendaftaran Berakhir Dalam:</h5>
                        <div id="countdown" class="d-flex justify-content-center gap-3">
                            <div class="time-box">
                                <span id="days" class="fw-bold fs-4">00</span>
                                <p>Hari</p>
                            </div>
                            <div class="time-box">
                                <span id="hours" class="fw-bold fs-4">00</span>
                                <p>Jam</p>
                            </div>
                            <div class="time-box">
                                <span id="minutes" class="fw-bold fs-4">00</span>
                                <p>Menit</p>
                            </div>
                            <div class="time-box">
                                <span id="seconds" class="fw-bold fs-4">00</span>
                                <p>Detik</p>
                            </div>
                        </div>
                    </div>

                    <!--<a href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi..%20Izin%20daftar%20bootcamp%20IT&type=phone_number&app_absent=0" target="_blank" 
                        class="btn btn-warning fw-bold mt-3 px-4 py-2 shadow-lg">🚀 Daftar Sekarang</a>-->
                </div>
            </div>

            <!-- Bagian Gambar -->
            <div class="overview-image position-relative">
                <div class="image">
                    <img src="assets/img/bootcamp.png" alt="image" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Kurikulum -->
<section id="kurikulum" class="bootcamp-section services-area ptb-70">
    <div class="container">
        <h2 class="text-center fw-bold">Kurikulum & Harga Bootcamp</h2>
        <p class="text-center">Pelajari kurikulum yang telah dirancang untuk memberikan pemahaman mendalam tentang Red Team & Blue Team.</p>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Fasilitas</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Live Session</td>
                        <td>9x Live Session Bersama Expert Mentor Secara Online</td>
                    </tr>
                    <tr>
                        <td>Rekaman Video</td>
                        <td>Akses Selamanya Video Recording Live Session</td>
                    </tr>
                    <tr>
                        <td>Materi</td>
                        <td>Slide Presentation Yang Dapat Diakses Kapan Saja</td>
                    </tr>
                    <tr>
                        <td>Mini Project</td>
                        <td>Mini Project Untuk Menambah Portfolio Kamu</td>
                    </tr>
                    <tr>
                        <td>Coding Session</td>
                        <td>Live Technical Coding Session Setiap Pertemuan</td>
                    </tr>
                    <tr>
                        <td>Sertifikat</td>
                        <td>Sertifikat Digital Setelah Selesai Bootcamp</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-4">
    <div class="p-4 text-center rounded-3 shadow-lg" 
        style="background: linear-gradient(135deg, #232526, #414345); color: #ffffff;">
        <h2 class="fw-bold text-uppercase mb-3" style="color: #f8b400;">Harga</h2>
        <h3 class="fw-bold" style="color: #d32f2f;">
            💰 <span style="text-decoration: line-through; opacity: 0.7;">Rp 2.500.000</span>
        </h3>
        <h2 class="fw-bold">
            🔥 Hemat <span style="color: #ffcc00;">88,4%</span> → <span style="color:rgb(72, 255, 59);">Rp 290.000</span>
        </h2>
        <p class="fw-bold mt-2" style="color: #ff5252;">⚠️ Buruan sebelum kehabisan kesempatan!</p>
    </div>
</div>

    </div>
</section>

<!-- Section Harga -->
<section id="harga" class="bootcamp-section services-area ptb-70">
    <div class="container">
        <h2 class="text-center fw-bold">Harga Bootcamp</h2>
        <p class="text-center">Dapatkan akses ke pelatihan berkualitas dengan harga terbaik.</p>
        <div class="p-4 text-center rounded-3 shadow-lg" 
        style="background: linear-gradient(135deg, #232526, #414345); color: #ffffff;">
        <h3 class="fw-bold" style="color: #d32f2f;">
            💰 <span style="text-decoration: line-through; opacity: 0.7;">Rp 2.500.000</span>
        </h3>
        <h2 class="fw-bold">
            🔥 Hemat <span style="color: #ffcc00;">88,4%</span> → <span style="color:rgb(72, 255, 59);">Rp 290.000</span>
        </h2>
        <p class="fw-bold mt-2" style="color: #ff5252;">⚠️ Buruan sebelum kehabisan kesempatan!</p>
    </div>
    </div>
</section>

<!-- Section Materi -->
<section id="materi" class="bootcamp-section services-area ptb-70">
    <div class="container">
        <h2 class="text-center fw-bold">Materi yang Akan Dipelajari</h2>
        <p class="text-center">Materi bootcamp ini dirancang untuk pemula hingga tingkat lanjut.</p>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>#</th>
                        <th class="text-start">Topik</th>
                        <th>Tanggal</th>
                        <th>Mentor</th>
                        <th class="text-start">Pokok Bahasan</th>
                        <th class="text-start">Status Terselenggara</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-start">Introduction to Cybersecurity & Ethical Hacking</td>
                        <td class="text-center">Senin, 10 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 Red Team vs Blue Team <br>
                            🔹 Etika Keamanan Siber <br>
                            🔹 Framework Keamanan (NIST, MITRE ATT&CK) <br>
                            🔹 Tools Dasar yang Digunakan
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="text-start">Reconnaissance & Information Gathering (Red Team)</td>
                        <td class="text-center">Kamis, 13 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 OSINT & Passive Recon <br>
                            🔹 WHOIS, DNS Enum, Google Dorking <br>
                            🔹 Recon-ng & Maltego
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td class="text-start">Vulnerability Scanning & Exploitation (Red Team)</td>
                        <td class="text-center">Sabtu, 15 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 CVE & Kerentanan Umum <br>
                            🔹 Metasploit & Exploitation <br>
                            🔹 Privilege Escalation
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td class="text-start">Network Security & Defense Strategies (Blue Team)</td>
                        <td class="text-center">Senin, 17 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 Firewall & IDS/IPS <br>
                            🔹 Network Segmentation <br>
                            🔹 Log Monitoring & SIEM
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td class="text-start">Malware Analysis & Incident Response (Blue Team)</td>
                        <td class="text-center">Kamis, 20 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 Jenis Malware & Penyebaran <br>
                            🔹 Malware Reverse Engineering <br>
                            🔹 Incident Response
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td class="text-start">Web Application Penetration Testing (Red Team)</td>
                        <td class="text-center">Sabtu, 22 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 OWASP Top 10 <br>
                            🔹 Burp Suite & Manual Testing <br>
                            🔹 Exploiting Authentication & Web Shell
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td class="text-start">Digital Forensics & Log Analysis (Blue Team)</td>
                        <td class="text-center">Senin, 24 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 Pengantar Digital Forensik <br>
                            🔹 Analisis Log & Memory Dump <br>
                            🔹 Investigasi Jejak Hacker
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td class="text-start">Red Team vs Blue Team Simulation</td>
                        <td class="text-center">Kamis, 27 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 Simulasi Serangan & Pertahanan <br>
                            🔹 Teknik Evasion & Bypass Security <br>
                            🔹 Real-time Incident Handling
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td class="text-start">Mini Project & QnA</td>
                        <td class="text-center">Sabtu, 29 Maret 2025</td>
                        <td class="text-center">Adam Sasmita</td>
                        <td class="text-start">
                            🔹 Penyelesaian Mini Project <br>
                            🔹 Live Q&A <br>
                            🔹 Tips & Tricks Karir Cybersecurity
                        </td>
                        <td class="text-start">
                            <font color="green">Selesai. Silahkan mendaftar untuk mendapatkan materi dan live recording.</font>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Section Mentor -->
<!-- Section Mentor -->
<section id="mentor" class="bootcamp-section services-area ptb-70">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Mentor Bootcamp</h2>
        <p class="text-center mb-5">Dibimbing oleh para profesional di bidang keamanan siber.</p>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 d-flex flex-column flex-md-row align-items-center gap-4 p-4 border rounded-4 shadow-lg bg-light">
                <div class="flex-shrink-0 text-center">
                    <img src="assets/img/mentor1.jpg" class="rounded-circle border border-3 border-primary" 
                        style="width: 180px; height: 180px; object-fit: cover; margin:30px; " alt="Mentor 1">
                        <div class="mt-3">
                        <a href="https://www.linkedin.com/in/firdamdam-sasmita/" target="_blank" class="me-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" style="width: 24px; height: 24px;">
                        </a>
                    </div>
                </div>
                <div class="flex-grow-1 text-center text-md-start" style="max-width: 600px;">
                    <h5 class="fw-bold">Firdamdam Sasmita, S.Kom., M.Pd. (Adam)</h5>
                    <p class="text-muted" style="font-size: 14px; line-height: 1.6; text-align: justify;">
                        Dengan pengalaman lebih dari 11 tahun di dunia cybersecurity, Adam Sasmita telah menempuh perjalanan dari Black Hat Hacker
                        (<a href="http://zone-h.org/archive/notifier=Syndrom2211" target="_blank">zone-h.org</a>) hingga White Hat Hacker. Saat ini, ia berperan sebagai 
                        Penetration Tester, CEO, dan Security Advisor di PT. YUKMARI PROJECT INDONESIA.
                        Keahliannya mencakup pengujian penetrasi tingkat lanjut, analisis keamanan, serta strategi pertahanan siber.
                        Dalam bootcamp ini, ia akan membimbing peserta dengan pendekatan praktis dan berbasis pengalaman nyata di industri. 🔥🚀
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Testimonial -->
<section id="testimoni" class="bootcamp-section services-area ptb-70">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Testimoni Bootcamp</h2>
        <p class="text-center mb-5">Apa menurut mereka yang sudah mengikuti tentang Bootcamp ini?</p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Testimoni 1 -->
            <div class="col">
                <div class="card border-0 shadow-lg text-center p-4">
                    <img src="https://lh3.googleusercontent.com/d/1DzqUpOqEOaG253Nk3MOLz4jnQGf5M0Jz=s1020?authuser=0" class="border border-3 mx-auto img-fluid" 
                        style="width: 180px; height: 180px; object-fit: cover;" alt="Mbak Febi Anwar">
                    <div class="mt-3">
                    <button class="btn btn-primary" style="margin:5px" data-bs-toggle="modal" data-bs-target="#testimoniModal1">
                        <i class="fas fa-comment-alt"></i> Show Testimoni
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i> Download Sertifikat
                    </button>
                    </div>
                </div>
            </div>
            
            <!-- Testimoni 2 -->
            <div class="col">
                <div class="card border-0 shadow-lg text-center p-4">
                    <img src="https://lh3.googleusercontent.com/d/1xMPgTK-CUZ1h-nHFL8vIzhDG7TXZboEy=s1020?authuser=0" class="border border-3 mx-auto img-fluid" 
                        style="width: 180px; height: 180px; object-fit: cover;" alt="Mas Ryan Prayoga">
                        <div class="mt-3">
                    <button class="btn btn-primary" style="margin:5px" data-bs-toggle="modal" data-bs-target="#testimoniModal2">
                        <i class="fas fa-comment-alt"></i> Show Testimoni
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i> Download Sertifikat
                    </button>
                    </div>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="col">
                <div class="card border-0 shadow-lg text-center p-4">
                    <img src="https://lh3.googleusercontent.com/d/1J4x50qQpP_UrNiz_ZtRysBA1eGO71xKO=s1020?authuser=0" class="border border-3 mx-auto img-fluid" 
                        style="width: 180px; height: 180px; object-fit: cover;" alt="Mas Abdul Muiz">
                        <div class="mt-3">
                    <button class="btn btn-primary" style="margin:5px" data-bs-toggle="modal" data-bs-target="#testimoniModal3">
                        <i class="fas fa-comment-alt"></i> Show Testimoni
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i> Download Sertifikat
                    </button>
                    </div>
                </div>
            </div>

            <!-- Testimoni 4 -->
            <div class="col">
                <div class="card border-0 shadow-lg text-center p-4">
                    <img src="https://lh3.googleusercontent.com/d/1lT2nsHc_mHnnjjhuavTcVtrKCUCaOBBA=s1020?authuser=0" class="border border-3 mx-auto img-fluid" 
                        style="width: 180px; height: 180px; object-fit: cover;" alt="Tuan Zulkifli bin Ahmad">
                        <div class="mt-3">
                    <button class="btn btn-primary" style="margin:5px" data-bs-toggle="modal" data-bs-target="#testimoniModal4">
                        <i class="fas fa-comment-alt"></i> Show Testimoni
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i> Download Sertifikat
                    </button>
                    </div>
                </div>
            </div>
        </div>

        <br/>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Testimoni 5 -->
            <div class="col">
                <div class="card border-0 shadow-lg text-center p-4">
                    <img src="https://lh3.googleusercontent.com/d/18M-9rWOocoS6VhG3TLM2WpLPv7qgEfb0=s1020?authuser=0" class="border border-3 mx-auto img-fluid" 
                        style="width: 180px; height: 180px; object-fit: cover;" alt="Mas Zaki Fadilah">
                    <div class="mt-3">
                    <button class="btn btn-primary" style="margin:5px" data-bs-toggle="modal" data-bs-target="#testimoniModal5">
                        <i class="fas fa-comment-alt"></i> Show Testimoni
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i> Download Sertifikat
                    </button>
                    </div>
                </div>
            </div>

            <!-- Testimoni 6 -->
            <div class="col">
                <div class="card border-0 shadow-lg text-center p-4">
                    <img src="https://lh3.googleusercontent.com/d/1JepJ8edEjFfQnxwNWwtI8JtMk-5zvSUh=s1020?authuser=0" class="border border-3 mx-auto img-fluid" 
                        style="width: 180px; height: 180px; object-fit: cover;" alt="Mas Rifqi">
                    <div class="mt-3">
                    <button class="btn btn-primary" style="margin:5px" data-bs-toggle="modal" data-bs-target="#testimoniModal6">
                        <i class="fas fa-comment-alt"></i> Show Testimoni
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i> Download Sertifikat
                    </button>
                    </div>
                </div>
            </div>

            <!-- Testimoni 7 -->
            <div class="col">
                <div class="card border-0 shadow-lg text-center p-4">
                    <img src="https://lh3.googleusercontent.com/d/16D6PLA5qrJaH1Ns-hZGNbGBz5oM71sl2=s1020?authuser=0" class="border border-3 mx-auto img-fluid" 
                        style="width: 180px; height: 180px; object-fit: cover;" alt="Mbak Zihan">
                    <div class="mt-3">
                    <button class="btn btn-primary" style="margin:5px" data-bs-toggle="modal" data-bs-target="#testimoniModal7">
                        <i class="fas fa-comment-alt"></i> Show Testimoni
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i> Download Sertifikat
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Testimoni 1 -->
<div class="modal fade" id="testimoniModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mbak Febi Anwar - Mahasiswi Teknik Informatika</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align:justify">
                Saya seorang mahasiswa informatika dan hanya mendapat sedikit ilmu tentang Cyber Security untuk mempraktekkannya saja sangat terbatas , tetapi semenjak mengetahui Yuk-Mari Project melalui Instagram akhirnya saya mendapatkan banyak ilmu yang bisa dikatakan sangat banyak terlebih juga saya bisa ber eksperimen tools dengan baik . Yuk-mari Project sangat rekomen buat pemula seperti saya bisa explore banyak hal tentang Cyber Security serta ada Mentor yang bisa membimbing saya untuk mempelajari ilmu ini.
                Terima Kasih Yuk-Mari Project.
            </div>
        </div>
    </div>
</div>

<!-- Modal Testimoni 2 -->
<div class="modal fade" id="testimoniModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mas Ryan Prayoga - Freelancer Personal Assistant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center><iframe src="https://drive.google.com/file/d/1ZVp3bCunM33z-dsdjLkfj1Xy3yRC5j67/preview" width="400" height="360" allow="autoplay"></iframe></center>
            </div>
        </div>
    </div>
</div>

<!-- Modal Testimoni 3 -->
<div class="modal fade" id="testimoniModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mas Abdul Muiz - Mahasiswa Universitas Pamulang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align:justify">
            Saya Zulkifli bin Ahmad dari Malaysia, Saya ingin mengucapkan ribuan terima kasih kepada pihak  Yuk-Mari Project atau singkatan nya YMP kerana mengizinkan saya menghadiri kursus Cyber security bersama pihak tuan, Di Malaysia tiada banyak kursus/pelatihan seperti ini  berbanding  dengan Indonesia.<br/><br/>
            Perlatihan/kursus yang diikuti agak menarik dan bagus untuk diri saya. Dengan Tamatnya kursus/pelatihan ini dapat memberikan banyak  input tentang dunia keselamatan cyber terutamanya di negara Malaysia.<br/><br/>
            Terima kasih pihak YMP.
            </div>
        </div>
    </div>
</div>

<!-- Modal Testimoni 4 -->
<div class="modal fade" id="testimoniModal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tuan Zulkifli bin Ahmad - IT Support (Malaysia)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align:justify">
            Saya Zulkifli bin Ahmad dari Malaysia, Saya ingin mengucapkan ribuan terima kasih kepada pihak  Yuk-Mari Project atau singkatan nya YMP kerana mengizinkan saya menghadiri kursus Cyber security bersama pihak tuan, Di Malaysia tiada banyak kuursus/pelatihan seperti ini dan yuran nya agak mahal berbanding di Indonesia.<br/><br/>
            Perlatihan/kursus yang diikuti agak menarik dan bagus untuk diri saya. Dengan Tamatnya kursus/pelatihan ini dapat memberikan banyak input tentang dunia keselamatan cyber terutamanya di negara Malaysia.<br/><br/>
            Terima kasih pihak YMP.
            </div>
        </div>
    </div>
</div>

<!-- Modal Testimoni 5 -->
<div class="modal fade" id="testimoniModal5" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mas Zaki Fadilah - Mahasiswa UPI Cibiru (Teknik Komputer)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center><iframe src="https://drive.google.com/file/d/1eYVJajQ-kzPZBpcypmeEnKLVRPFyH7pn/preview" width="400" height="360" allow="autoplay"></iframe></center>
            </div>
        </div>
    </div>
</div>

<!-- Modal Testimoni 6 -->>
<div class="modal fade" id="testimoniModal6" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mas Rifqi - IT Support</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align:justify">
            Nama saya Muhammad Rifqi Syah, seorang freshgraduate dari jurusan Ilmu Komunikasi. Jujur, sebelum mengikuti bootcamp cyber security di Yuk-Mari Project, dunia teknologi informasi, apalagi keamanan siber, terasa sangat asing dan menakutkan. Saya pikir latar belakang ilmu sosial saya akan menjadi penghalang besar.<br/>
            <br/>
Namun, bootcamp ini benar-benar mengubah perspektif saya. Materi yang disampaikan sangat terstruktur, dimulai dari dasar-dasar jaringan, sistem operasi, hingga konsep-konsep cyber security yang lebih mendalam. Instruktur tidak hanya ahli di bidangnya, tetapi juga sangat sabar dan efektif dalam menyampaikan materi kepada kami yang notabene berasal dari berbagai latar belakang. Mereka berhasil memecah konsep-konsep kompleks menjadi lebih mudah dipahami, bahkan bagi seseorang seperti saya yang tidak memiliki background IT.<br/>
<br/>
Yang paling saya rasakan manfaatnya adalah pendekatan hands-on yang intensif. Kami tidak hanya mendengarkan teori, tetapi juga langsung praktik melalui berbagai studi kasus dan simulasi serangan. Ini membantu saya untuk tidak hanya memahami konsep, tetapi juga memiliki keterampilan praktis yang relevan dengan dunia kerja cyber security.<br/>
<br/>
Awalnya, saya merasa sedikit minder dengan teman-teman yang memiliki latar belakang IT. Namun, seiring berjalannya waktu, saya menyadari bahwa skill komunikasi dan analisis yang saya pelajari di Ilmu Komunikasi justru menjadi aset yang berharga di dunia cyber security. Kemampuan untuk memahami motivasi pelaku kejahatan siber, menganalisis pola komunikasi dalam serangan social engineering, dan menyampaikan informasi teknis secara jelas kepada pihak non-teknis ternyata sangat dibutuhkan.<br/>
<br/>
Bagi teman-teman freshgraduate dari jurusan non-IT yang tertarik dengan dunia cyber security tetapi merasa ragu dengan latar belakangnya, saya sangat merekomendasikan untuk mengikuti bootcamp seperti yang saya ikuti. Jangan biarkan latar belakang Anda menjadi batasan. Bootcamp cyber security yang tepat dapat memberikan Anda fondasi pengetahuan dan keterampilan yang dibutuhkan untuk memulai karir yang menjanjikan di bidang ini. Pengalaman saya membuktikan bahwa skill dari berbagai disiplin ilmu bisa saling melengkapi dan menjadi kekuatan unik di dunia cyber security.<br/>
<br/>
Terima kasih kepada Yuk-Mari Project dan instruktur yang luar biasa!
            </div>
        </div>
    </div>
</div>

<!-- Modal Testimoni 7 -->
<div class="modal fade" id="testimoniModal7" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mbak Zihan - Mahasiswi UPI Cibiru (Teknik Komputer)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center><iframe src="https://drive.google.com/file/d/1sHscEPQCv4iDZlCjJbRpgc5Sg9Zgvc3o/preview" width="400" height="360" allow="autoplay"></iframe></center>
            </div>
        </div>
    </div>
</div>

<style>
/* Styling Countdown */
.countdown-box {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 10px;
    display: inline-block;
    border: 1px solid #ddd;
}
.time-box {
    background: #ffffff;
    padding: 10px 15px;
    border-radius: 8px;
    text-align: center;
    border: 1px solid #ddd;
    min-width: 60px;
}
.time-box p {
    margin: 0;
    font-size: 14px;
    color: #666;
}
.btn-warning {
    transition: 0.3s ease-in-out;
}
.btn-warning:hover {
    background: #ffcc00;
    transform: scale(1.05);
}
</style>

<script>
// Set waktu berakhir (ganti dengan tanggal akhir pendaftaran)
var countDownDate = new Date("March 22, 2025 18:00:00").getTime();

var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "<span class='text-danger fw-bold'>Pendaftaran Ditutup!</span>";
    }
}, 1000);
</script>

<!-- Bootstrap JS (Popper.js + Bootstrap.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'templates/footer.php'; ?>

<!-- jQuery untuk Efek Fade -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    // Sembunyikan semua section kecuali #tentang
    $("section").hide();
    $("#tentang").show();

    // Tambahkan event click ke tombol navigasi
    $(".container .btn").click(function (e) {
        e.preventDefault();

        var target = $(this).attr("href"); // Ambil ID tujuan
        $(".container .btn").removeClass("active"); // Hapus class active dari semua tombol
        $(this).addClass("active"); // Tambahkan class active ke tombol yang diklik

        // Efek fade untuk pindah section
        $(target).fadeIn(500).siblings("section").fadeOut(300);
    });
});
</script>
