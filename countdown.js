// countdown.js
document.addEventListener("DOMContentLoaded", function () {
    // Total waktu dalam detik (misalnya 45 menit)
    const totalTime = 01 * 60; // Set waktu 45 menit

    // Cek apakah ada waktu mulai yang tersimpan di localStorage
    let startTime = localStorage.getItem('startTime');
    
    // Jika tidak ada, set waktu mulai sekarang dan simpan di localStorage
    if (!startTime) {
        startTime = new Date().getTime();
        localStorage.setItem('startTime', startTime);
    } else {
        startTime = parseInt(startTime, 10); // Pastikan startTime adalah integer
    }

    // Fungsi untuk update countdown setiap detik
    window.updateCountdown = function() {
        const now = new Date().getTime();
        const elapsed = Math.floor((now - startTime) / 1000); // Waktu yang telah berlalu dalam detik
        const remaining = totalTime - elapsed; // Waktu yang tersisa

        if (remaining <= 0) {
            document.getElementById("countdown").innerHTML = "00:00";
            localStorage.removeItem('startTime'); // Hapus waktu mulai dari localStorage
            alert("Maaf, waktu kamu habis untuk mengerjakan semua soalnya. Klik Ok untuk melanjutkan!");
            window.location.href = "halaman-redirect.php"; // Ganti dengan halaman redirect tujuan
            return "00:00"; // Mengembalikan string untuk waktu 00:00
        } else {
            const minutes = Math.floor(remaining / 60);
            const seconds = remaining % 60;
            const timeString = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            document.getElementById("countdown").innerHTML = timeString;
            return timeString; // Mengembalikan string untuk waktu yang tersisa
        }
    };

    // Update countdown setiap detik
    updateCountdown();
    setInterval(updateCountdown, 1000);
});
