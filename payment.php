<?php
session_start();

if (isset($_GET['token'])) {
    $snapToken = $_GET['token'];

    include 'templates/header.php';
    
    echo "
    <!-- Preloader -->
        <div class='preloader'>
            <div class='loader'>
                <div class='shadow'></div>
                <div class='box'></div>
                <div class='percentage'>0%</div> <!-- Elemen untuk persentase -->
            </div>
        </div>
        <!-- End Preloader -->
        
        <div class='go-top'><i class='fas fa-arrow-up'></i></div>

        <!-- jQuery Min JS -->
        <script src='assets/js/jquery.min.js'></script>
        <!-- Popper Min JS -->
        <script src='assets/js/popper.min.js'></script>
        <!-- Bootstrap Min JS -->
        <script src='assets/js/bootstrap.min.js'></script>
        <!-- Mean Menu JS -->
        <script src='assets/js/jquery.meanmenu.js'></script>
        <!-- NiceSelect Min JS -->
        <script src='assets/js/jquery.nice-select.min.js'></script>
        <!-- Slick Min JS -->
        <script src='assets/js/slick.min.js'></script>
        <!-- Magnific Popup Min JS -->
        <script src='assets/js/jquery.magnific-popup.min.js'></script>
        <!-- Appear Min JS -->
		<script src='assets/js/jquery.appear.min.js'></script>
        <!-- Odometer Min JS -->
        <script src='assets/js/odometer.min.js'></script>
        <!-- Parallax Min JS -->
        <script src='assets/js/parallax.min.js'></script>
        <!-- WOW Min JS -->
        <script src='assets/js/wow.min.js'></script>
        <!-- Form Validator Min JS -->
        <script src='assets/js/form-validator.min.js'></script>
        <!-- Contact Form Min JS -->
        <script src='assets/js/contact-form-script.js'></script>
        <!-- Main JS -->
        <script src='assets/js/main.js'></script>
        <!-- Main JS -->
        <script src='assets/js/preloader-percent.js'></script>
        
        <!-- Magnific Popup Trigger Script -->
    <script src='https://app.midtrans.com/snap/snap.js' data-client-key='Mid-client-a0Qdc090d4Z1OSXw'></script>
    
    <script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', function() {
        snap.pay('$snapToken', {
            onSuccess: function(result) {
                // Ambil order_id
                var order_id = result.order_id;
                
                alert('Klik Ok dan Mohon tunggu beberapa detik, jangan close browser, kami sedang mengalihkan kamu ke halaman materi video exclusive...');
                            
                // Tampilkan preloader
                document.querySelector('.preloader').style.display = 'block';
                            
                // Ambil data customer dari SESSION berdasarkan order_id
                console.log('Mulai fetch customer data');
                fetch('lib/Midtrans/get_session_data?order_id=' + order_id)
                .then(response => response.json())
                .then(customerData => {
                    if (customerData) {
                        fetch('lib/Midtrans/process_jwt.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                order_id: order_id,
                                email: customerData.email,
                                first_name: customerData.first_name,
                                phone: customerData.phone,
                                judul_kursus: customerData.judul_kursus,
                                email_pemateri: customerData.email_pemateri,
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'ok' && data.jwtToken) {
                                // Redirect ke halaman materi video dengan JWT token
                                window.location.href = 'https://yuk-mari.com/materi-video-exclusive?token=' + data.jwtToken;
                            } else {
                                alert('Terjadi kesalahan dalam memproses JWT: ' + (data.error || 'Unknown error'));
                            }
                        })
                        .catch(error => {
                            console.error('Error processing JWT:', error);
                            alert('Terjadi kesalahan dalam memproses JWT.');
                        });
                    } else {
                        alert('Terjadi kesalahan dalam mendapatkan data customer.');
                    }
                })
                .catch(error => {
                    console.error('Error fetching customer data:', error);
                    alert('Terjadi kesalahan dalam mengambil data customer.');
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
    });
    </script>
        </body>
</html>";
} else {
    echo 'Token tidak ditemukan.';
}
?>