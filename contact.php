<?php 
require 'database.php';

function fetchKontak_KamiContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM kontak_kami ORDER BY id ASC");
    return $stmt->fetchAll();
}

function getContentByType($contents, $type) {
    foreach ($contents as $content) {
        if ($content['content_type'] === $type) {
            return $content['content'];
        }
    }
    return '';
}

// Function to format Vision & Mission content
function formatVisionMission($content) {
    $content = preg_replace('/^\d+\.\s*/', '', $content);
    $points = preg_split('/\d+\.\s*/', $content, -1, PREG_SPLIT_NO_EMPTY);
    $formattedContent = "<ol>";
    foreach ($points as $point) {
        $formattedContent .= "<li style='text-align: justify; margin-bottom: 10px;'>" . trim($point) . "</li>";
    }
    $formattedContent .= "</ol>";
    return $formattedContent;
}

// Get about us content
$KontakKamiContent = fetchKontak_KamiContent($pdo);
?>

<?php include 'templates/header.php'; ?>
<?php include 'templates/nav.php'; ?>
        
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2><?php echo htmlspecialchars(getContentByType($KontakKamiContent, 'Header Title')); ?></h2>
                    <p><?php echo htmlspecialchars(getContentByType($KontakKamiContent, 'Title Description')); ?></p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Area -->
        <section class="contact-area" style="padding-top: 70px; padding-bottom: 70px; position: relative;">
    <div class="container">
        <div class="row">
            <!-- Address -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-info" style="display: flex; align-items: center; margin-bottom: 20px;">
                    <div class="icon" style="flex-shrink: 0; margin-right: 15px; font-size: 24px; color: #333;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info" style="flex: 1;">
                        <span style="font-weight: bold; display: block; margin-bottom: 5px;">Alamat</span>
                        <p style="margin: 0; color: #555;">
                            <?php echo htmlspecialchars(getContentByType($KontakKamiContent, 'Alamat')); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-info" style="display: flex; align-items: center; margin-bottom: 20px;">
                    <div class="icon" style="flex-shrink: 0; margin-right: 15px; font-size: 24px; color: #333;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info" style="flex: 1;">
                        <span style="font-weight: bold; display: block; margin-bottom: 5px;">Email</span>
                        <a href="mailto:<?php echo htmlspecialchars(getContentByType($KontakKamiContent, 'Email')); ?>" style="margin: 0; color: #555; text-decoration: none;">
                            <?php echo htmlspecialchars(getContentByType($KontakKamiContent, 'Email')); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-info" style="display: flex; align-items: center; margin-bottom: 20px;">
                    <div class="icon" style="flex-shrink: 0; margin-right: 15px; font-size: 24px; color: #333;">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="info" style="flex: 1;">
                        <span style="font-weight: bold; display: block; margin-bottom: 5px;">Nomor Telepon</span>
                        <a href="tel:<?php echo htmlspecialchars(getContentByType($KontakKamiContent, 'Nomer Telepon')); ?>" style="margin: 0; color: #555; text-decoration: none;">
                            <?php echo htmlspecialchars(getContentByType($KontakKamiContent, 'Nomer Telepon')); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-map" style="position: absolute; bottom: 0; right: 0; width: 100%; height: 200px; overflow: hidden;">
        <img src="assets/img/bg-map.png" alt="Map Background" style="width: 100%; height: auto; display: block;">
    </div>
</section>

        <!-- End Contact Area -->
<?php include 'templates/footer.php'; ?>


    </body>

</html>