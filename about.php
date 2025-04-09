<?php 
require 'database.php';

function fetchAboutUsContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM about_us ORDER BY id ASC");
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
$aboutUsContent = fetchAboutUsContent($pdo);

include 'templates/header.php'; 
?>

    <style type="text/css">
    .videowrapper { float: none; clear: both; width: 100%; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0; } 
    .videowrapper iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style>

<?php include 'templates/nav.php'; ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2><?php echo htmlspecialchars(getContentByType($aboutUsContent, 'Header Title')); ?></h2>
                    <p><?php echo htmlspecialchars(getContentByType($aboutUsContent, 'Title Description')); ?></p>
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
                            <span><?php echo htmlspecialchars(getContentByType($aboutUsContent, 'Bredcrumb Description')); ?></span>
                            <h2>Latar Belakang</h2>
                            <p style="text-align: justify;">
                                <?php echo htmlspecialchars(getContentByType($aboutUsContent, 'Background')); ?>
                            </p>
                            <h2>Visi & Misi Kami</h2>
                            <?php 
                            $visionMissionContent = getContentByType($aboutUsContent, 'Vision & Mission');
                            echo formatVisionMission($visionMissionContent); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->
        
<?php include 'templates/footer.php'; ?>

    </body>
</html>