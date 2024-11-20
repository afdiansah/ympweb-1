document.getElementById('cekVoucher').addEventListener('click', function () {
    const kodeVoucher = document.getElementById('kode_voucher').value.trim();
    const level = document.getElementById('level').value;
    const hargaField = document.getElementById('harga');
    const inputVoucher = document.getElementById('kode_voucher');

    if (!kodeVoucher) {
        inputVoucher.style.borderColor = 'red';
        alert('Masukkan kode voucher terlebih dahulu.');
        return;
    }

    // AJAX request untuk memeriksa kode voucher
    fetch('cek_kode_voucher.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `kode_voucher=${kodeVoucher}&level=${level}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.valid) {
            // Jika kode valid, perbarui harga dan beri border hijau
            hargaField.value = data.harga_baru;
            inputVoucher.style.borderColor = 'green';
            alert('Kode voucher valid! Harga telah diperbarui ke Rp' + new Intl.NumberFormat('id-ID').format(data.harga_baru));
        } else {
            // Jika kode tidak valid, beri border merah dan harga tetap
            hargaField.value = data.harga_awal;
            inputVoucher.style.borderColor = 'red';
            alert('Kode voucher tidak valid.');
        }
    })
    .catch(error => {
        console.error('Terjadi kesalahan:', error);
        alert('Gagal memeriksa kode voucher.');
    });
});

document.getElementById('cekVoucher2').addEventListener('click', function () {
    const kodeVoucher = document.getElementById('kode_voucher').value.trim();
    const level = document.getElementById('level').value;
    const hargaField = document.getElementById('harga');
    const inputVoucher = document.getElementById('kode_voucher');

    if (!kodeVoucher) {
        inputVoucher.style.borderColor = 'red';
        alert('Masukkan kode voucher terlebih dahulu.');
        return;
    }

    // AJAX request untuk memeriksa kode voucher
    fetch('cek_kode_voucher.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `kode_voucher=${kodeVoucher}&level=${level}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.valid) {
            // Jika kode valid, perbarui harga dan beri border hijau
            hargaField.value = data.harga_baru;
            inputVoucher.style.borderColor = 'green';
            alert('Kode voucher valid! Harga telah diperbarui ke Rp' + new Intl.NumberFormat('id-ID').format(data.harga_baru));
        } else {
            // Jika kode tidak valid, beri border merah dan harga tetap
            hargaField.value = data.harga_awal;
            inputVoucher.style.borderColor = 'red';
            alert('Kode voucher tidak valid.');
        }
    })
    .catch(error => {
        console.error('Terjadi kesalahan:', error);
        alert('Gagal memeriksa kode voucher.');
    });
});

document.getElementById('cekVoucher3').addEventListener('click', function () {
    const kodeVoucher = document.getElementById('kode_voucher').value.trim();
    const level = document.getElementById('level').value;
    const hargaField = document.getElementById('harga');
    const inputVoucher = document.getElementById('kode_voucher');

    if (!kodeVoucher) {
        inputVoucher.style.borderColor = 'red';
        alert('Masukkan kode voucher terlebih dahulu.');
        return;
    }

    // AJAX request untuk memeriksa kode voucher
    fetch('cek_kode_voucher.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `kode_voucher=${kodeVoucher}&level=${level}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.valid) {
            // Jika kode valid, perbarui harga dan beri border hijau
            hargaField.value = data.harga_baru;
            inputVoucher.style.borderColor = 'green';
            alert('Kode voucher valid! Harga telah diperbarui ke Rp' + new Intl.NumberFormat('id-ID').format(data.harga_baru));
        } else {
            // Jika kode tidak valid, beri border merah dan harga tetap
            hargaField.value = data.harga_awal;
            inputVoucher.style.borderColor = 'red';
            alert('Kode voucher tidak valid.');
        }
    })
    .catch(error => {
        console.error('Terjadi kesalahan:', error);
        alert('Gagal memeriksa kode voucher.');
    });
});

document.getElementById('cekVoucher4').addEventListener('click', function () {
    const kodeVoucher = document.getElementById('kode_voucher').value.trim();
    const level = document.getElementById('level').value;
    const hargaField = document.getElementById('harga');
    const inputVoucher = document.getElementById('kode_voucher');

    if (!kodeVoucher) {
        inputVoucher.style.borderColor = 'red';
        alert('Masukkan kode voucher terlebih dahulu.');
        return;
    }

    // AJAX request untuk memeriksa kode voucher
    fetch('cek_kode_voucher.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `kode_voucher=${kodeVoucher}&level=${level}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.valid) {
            // Jika kode valid, perbarui harga dan beri border hijau
            hargaField.value = data.harga_baru;
            inputVoucher.style.borderColor = 'green';
            alert('Kode voucher valid! Harga telah diperbarui ke Rp' + new Intl.NumberFormat('id-ID').format(data.harga_baru));
        } else {
            // Jika kode tidak valid, beri border merah dan harga tetap
            hargaField.value = data.harga_awal;
            inputVoucher.style.borderColor = 'red';
            alert('Kode voucher tidak valid.');
        }
    })
    .catch(error => {
        console.error('Terjadi kesalahan:', error);
        alert('Gagal memeriksa kode voucher.');
    });
});