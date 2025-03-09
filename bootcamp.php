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
            <h2>Bootcamp Cyber Security</h2>
            <p>PT. YUKMARI PROJECT INDONESIA menghadirkan Bootcamp Red Team & Blue Team, Program intensif untuk membekali kamu dengan keterampilan dunia keamanan siber melalui pelatihan langsung bersama para ahli</p>
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

                    <a href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi..%20Izin%20daftar%20bootcamp%20IT&type=phone_number&app_absent=0" target="_blank" 
                        class="btn btn-warning fw-bold mt-3 px-4 py-2 shadow-lg">🚀 Daftar Sekarang</a>
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
var countDownDate = new Date("March 10, 2025 18:00:00").getTime();

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
