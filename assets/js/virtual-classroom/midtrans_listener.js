document.getElementById('buy-button').addEventListener('click', function() {
            var formData = new FormData(document.getElementById('myForm'));

            fetch('lib/Midtrans/json_data.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.snapToken) {
                    snap.pay(data.snapToken, {
                        onSuccess: function(result) {
                            alert('Klik Ok dan Mohon tunggu beberapa detik, jangan close browser, kami sedang mengalihkan kamu ke halaman materi video exclusive...');
                            
                            // Tampilkan preloader
                            document.querySelector('.preloader').style.display = 'block';
                            
                            // Proses JWT di server dengan order_id
                            fetch('lib/Midtrans/process_jwt.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    order_id: result.order_id,
                                    email: data.email,
                                    first_name: data.first_name,
                                    email: data.email,
                                    phone: data.phone,
                                    judul_kursus: data.judul_kursus,
                                    email_pemateri: data.email_pemateri
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'ok' && data.jwtToken) {
                                    // Redirect ke halaman materi video dengan JWT token
                                    window.location.href = 'https://yuk-mari.com/materi-video-exclusive?token=' + data.jwtToken;
                                } else {
                                    alert('Terjadi kesalahan dalam memproses JWT: ' + data.error);
                                }
                            })
                            .catch(error => {
                                console.error('Error processing JWT:', error);
                                alert('Terjadi kesalahan dalam memproses JWT.');
                            });
                        },
                        onPending: function(result) {
                            alert('Cek Email untuk status Pembayaran yang belum di proses!');
                            window.location.href = '/virtual-classroom';
                        },
                        onError: function(result) {
                            alert('Terjadi kesalahan dalam pembayaran');
                        }
                    });
                } else if (data.error) {
                    alert('Error: ' + data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan dalam komunikasi dengan server. Silahkan coba kembali.');
            });
        });
        
document.getElementById('buy-button2').addEventListener('click', function() {
            var formData2 = new FormData(document.getElementById('myForm2'));
            
            fetch('lib/Midtrans/json_data.php', {
                method: 'POST',
                body: formData2
            })
            .then(response => response.json())
            .then(data => {
                if (data.snapToken) {
                    snap.pay(data.snapToken, {
                        onSuccess: function(result) {
                            alert('Klik Ok dan Mohon tunggu beberapa detik, jangan close browser, kami sedang mengalihkan kamu ke halaman materi video exclusive...');
                            
                            // Tampilkan preloader
                            document.querySelector('.preloader').style.display = 'block';
                            
                            // Proses JWT di server dengan order_id
                            fetch('lib/Midtrans/process_jwt.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    order_id: result.order_id,
                                    email: data.email,
                                    first_name: data.first_name,
                                    email: data.email,
                                    phone: data.phone,
                                    judul_kursus: data.judul_kursus,
                                    email_pemateri: data.email_pemateri
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'ok' && data.jwtToken) {
                                    // Redirect ke halaman materi video dengan JWT token
                                    window.location.href = 'https://yuk-mari.com/materi-video-exclusive?token=' + data.jwtToken;
                                } else {
                                    alert('Terjadi kesalahan dalam memproses JWT: ' + data.error);
                                }
                            })
                            .catch(error => {
                                console.error('Error processing JWT:', error);
                                alert('Terjadi kesalahan dalam memproses JWT.');
                            });
                        },
                        onPending: function(result) {
                            alert('Cek Email untuk status Pembayaran yang belum di proses!');
                            window.location.href = '/virtual-classroom';
                        },
                        onError: function(result) {
                            alert('Terjadi kesalahan dalam pembayaran');
                        }
                    });
                } else if (data.error) {
                    alert('Error: ' + data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan dalam komunikasi dengan server.');
            });
        });
        
        document.getElementById('buy-button3').addEventListener('click', function() {
            var formData3 = new FormData(document.getElementById('myForm3'));
            
            fetch('lib/Midtrans/json_data.php', {
                method: 'POST',
                body: formData3
            })
            .then(response => response.json())
            .then(data => {
                if (data.snapToken) {
                    snap.pay(data.snapToken, {
                        onSuccess: function(result) {
                            alert('Klik Ok dan Mohon tunggu beberapa detik, jangan close browser, kami sedang mengalihkan kamu ke halaman materi video exclusive...');
                            
                            // Tampilkan preloader
                            document.querySelector('.preloader').style.display = 'block';
                            
                            // Proses JWT di server dengan order_id
                            fetch('lib/Midtrans/process_jwt.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    order_id: result.order_id,
                                    email: data.email,
                                    first_name: data.first_name,
                                    email: data.email,
                                    phone: data.phone,
                                    judul_kursus: data.judul_kursus,
                                    email_pemateri: data.email_pemateri
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'ok' && data.jwtToken) {
                                    // Redirect ke halaman materi video dengan JWT token
                                    window.location.href = 'https://yuk-mari.com/materi-video-exclusive?token=' + data.jwtToken;
                                } else {
                                    alert('Terjadi kesalahan dalam memproses JWT: ' + data.error);
                                }
                            })
                            .catch(error => {
                                console.error('Error processing JWT:', error);
                                alert('Terjadi kesalahan dalam memproses JWT.');
                            });
                        },
                        onPending: function(result) {
                            alert('Cek Email untuk status Pembayaran yang belum di proses!');
                            window.location.href = '/virtual-classroom';
                        },
                        onError: function(result) {
                            alert('Terjadi kesalahan dalam pembayaran');
                        }
                    });
                } else if (data.error) {
                    alert('Error: ' + data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan dalam komunikasi dengan server.');
            });
        });