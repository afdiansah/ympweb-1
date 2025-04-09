<?php 
require 'database.php';

// Fungsi untuk mengambil konten berdasarkan jenis (lebih efisien)
function getContentByType($pdo, $type) {
    $stmt = $pdo->prepare("SELECT content FROM program_content WHERE content_type = ?");
    $stmt->execute([$type]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ? $result['content'] : 'Data tidak ditemukan';
}

// function fetchDokumentasiContent($pdo) {
//     $stmt = $pdo->query("SELECT * FROM dokumentasi ORDER BY id ASC");
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }

function fetchdokumentasiContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM dokumentasi ORDER BY id DESC"); 
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


// Mengambil data dari database
$headerTitle = getContentByType($pdo, 'Header Title');
$titleDescription = getContentByType($pdo, 'Title Description');
$breadcrumbDescription = getContentByType($pdo, 'Breadcumb Description');
$background = getContentByType($pdo, 'Background');
$linkTautan = getContentByType($pdo, 'Link Tautan');

$dokumentasiContent = fetchDokumentasiContent($pdo);

include 'templates/header.php'; 
?>


    <style type="text/css">
    .videowrapper { float: none; clear: both; width: 100%; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0; } .videowrapper iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style>

<?php include 'templates/nav.php'; ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                <h2><?php echo htmlspecialchars($headerTitle); ?></h2>
                    <p><?php echo htmlspecialchars($titleDescription); ?></p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Area -->
        <section class="about-area ptb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="about-content">
                            <span><?php echo htmlspecialchars($breadcrumbDescription); ?></span>
                            <h2>Latar Belakang</h2>
                            <p style="text-align: justify;"><?php echo htmlspecialchars($background); ?>
                            </p>
                            <p style="text-align: justify;">Berikut beberapa dokumentasi kegiatannya.
                            </p>
                            <br/><br/><br/><br/>
                            <div class="row">
                                <div class="container mt-5">        
                                    <!-- Start Partner Area -->
                                    <div class="partner-area">
                                        <div class="container">
                                            <div class="partner-inner">
                                                <div class="row align-items-center">
                                                    <?php foreach ($dokumentasiContent as $dokumentasi) : ?>
                                                        <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                                                            <a href="#">
                                                                <img src="<?php echo htmlspecialchars($dokumentasi['image']); ?>" alt="CyberMeetUp">
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Partner Area -->
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <a style="margin-top:30px" href="<?php echo htmlspecialchars($linkTautan); ?></span>" target="_blank" class="btn btn-primary">Lihat CyberMeetUp di Instagram Kami</a>
<!--
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <div class="videowrapper">  </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <!-- End About Area -->
        
<?php include 'templates/footer.php'; ?>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: { slidesPerView: 5 },
            768: { slidesPerView: 3 },
            480: { slidesPerView: 2 },
            320: { slidesPerView: 1 },
        }
    });
</script>


    </body>

</html>