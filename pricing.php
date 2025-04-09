<?php 
require 'database.php';

function fetchProject_BimbleContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM project_bimble ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchKeunggulan_KamiContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM keunggulan_kami ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchPaket_1Content($pdo) {
    $stmt = $pdo->query("SELECT * FROM paket_1 ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchPaket_2Content($pdo) {
    $stmt = $pdo->query("SELECT * FROM paket_2 ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchPaket_3Content($pdo) {
    $stmt = $pdo->query("SELECT * FROM paket_3 ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchProject_TestimoniContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM project_testimoni ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchProjectTestiClientsContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM project_testi_clients ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchKerjasamaDevContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM kerjasama_dev ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchDevelopmentApplicationLogosContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM development_application_logos ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchSecurityMitraLogosContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM security_mitra_logos ORDER BY id ASC");
    return $stmt->fetchAll();
}

function fetchFooterContent($pdo) {
    $stmt = $pdo->query("SELECT * FROM footer ORDER BY id ASC");
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

$fetchProject_BimbleContent = fetchProject_BimbleContent($pdo);
$fetchKeunggulan_KamiContent = fetchKeunggulan_KamiContent($pdo);
$fetchPaket_1Content = fetchPaket_1Content($pdo);
$fetchPaket_2Content = fetchPaket_2Content($pdo);
$fetchPaket_3Content = fetchPaket_3Content($pdo);
$fetchProject_TestimoniContent = fetchProject_TestimoniContent($pdo);
$fetchProjectTestiClientsContent = fetchProjectTestiClientsContent($pdo);
$fetchKerjasamaDevContent = fetchKerjasamaDevContent($pdo);
$fetchDevelopmentApplicationLogosContent = fetchDevelopmentApplicationLogosContent($pdo);
$fetchSecurityMitraLogosContent = fetchSecurityMitraLogosContent($pdo);
$fetchFooterContent = fetchFooterContent($pdo);

?>
<?php include 'templates/header.php'; ?>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
                <div class="percentage">0%</div> <!-- Elemen untuk persentase -->
            </div>
        </div>
        <!-- End Preloader -->

<?php include 'templates/nav.php'; ?>
        
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2><?php echo htmlspecialchars(getContentByType($fetchProject_BimbleContent, 'Header Title')); ?></h2>
                    <p><?php echo htmlspecialchars(getContentByType($fetchProject_BimbleContent, 'Title Description')); ?></p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        
        <section class="comparisons-area ptb-70 bg-f7fafd">
            <div class="container">
                <div class="section-title">
                    <h2><?php echo htmlspecialchars(getContentByType($fetchProject_BimbleContent, 'Header Title 2')); ?></h2>
                    <div class="bar"></div>
                    <p><?php echo htmlspecialchars(getContentByType($fetchProject_BimbleContent, 'Title Description 2')); ?>.</p>
                </div>

                <div class="comparisons-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Fitur</th>
                                <th scope="col">Jasa Kami</th>
                                <th scope="col">Bukan Jasa Kami</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td><?php echo htmlspecialchars(getContentByType($fetchKeunggulan_KamiContent, 'Fitur 1')); ?></td>
                                <td><i class="flaticon-check-mark"></i></td>
                                <td><i class="flaticon-cancel"></i></td>
                            </tr>
                            <tr>
                                <td><?php echo htmlspecialchars(getContentByType($fetchKeunggulan_KamiContent, 'Fitur 2')); ?></td>
                                <td><i class="flaticon-check-mark"></i></td>
                                <td><i class="flaticon-cancel"></i></td>
                            </tr>
                            <tr>
                                <td><?php echo htmlspecialchars(getContentByType($fetchKeunggulan_KamiContent, 'Fitur 3')); ?></td>
                                <td><i class="flaticon-check-mark"></i></td>
                                <td><i class="flaticon-cancel"></i></td>
                            </tr>
                            <tr>
                                <td><?php echo htmlspecialchars(getContentByType($fetchKeunggulan_KamiContent, 'Fitur 4')); ?></td>
                                <td><i class="flaticon-check-mark"></i></td>
                                <td><i class="flaticon-cancel"></i></td>
                            </tr>
                            <tr>
                                <td><?php echo htmlspecialchars(getContentByType($fetchKeunggulan_KamiContent, 'Fitur 5')); ?></td>
                                <td><i class="flaticon-check-mark"></i></td>
                                <td><i class="flaticon-cancel"></i></td>
                            </tr>
                            <tr>
                                <td><?php echo htmlspecialchars(getContentByType($fetchKeunggulan_KamiContent, 'Fitur 6')); ?></td>
                                <td><i class="flaticon-check-mark"></i></td>
                                <td><i class="flaticon-cancel"></i></td>
                            </tr>
                            <tr>
                                <td><?php echo htmlspecialchars(getContentByType($fetchKeunggulan_KamiContent, 'Fitur 7')); ?></td>
                                <td><i class="flaticon-check-mark"></i></td>
                                <td><i class="flaticon-cancel"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Start Pricing Area -->
        <section class="pricing-area ptb-70">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
                                <h3><?php echo htmlspecialchars(getContentByType($fetchPaket_1Content, 'Header Title')); ?></h3>
                                <p><?php echo htmlspecialchars_decode(getContentByType($fetchPaket_1Content, 'Title Description')); ?></p>
                            </div>

                            <div class="price">
							<?php echo htmlspecialchars(getContentByType($fetchPaket_1Content, 'Price')); ?>
                            </div>

                            <div class="btn-primay">
                                <a href="layanan" style="margin-bottom:10px;" class="btn btn-primary">Ketahui Layanan Ini</a>
                                <a href="fitur" style="margin-bottom:10px;" class="btn btn-primary">Fitur Produk</a>
                                <a href="portofolio" style="margin-bottom:10px;" class="btn btn-primary">Portofolio</a>
                            </div>

                            <br/>

                            <ul class="pricing-features">
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_1Content, 'Fitur 1')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_1Content, 'Fitur 2')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_1Content, 'Fitur 3')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_1Content, 'Fitur 4')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_1Content, 'Fitur 5')); ?></li>           
                            </ul>

                            <br/>                            

                            <div class="buy-btn">
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi+Saya+Ingin+Membuat+Website" class="btn btn-primary">Pilih dan Pesan Paket Ini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
                                <h3>Maintenance Website</h3>
                                <p><i>Re-use (Dirawat)</i> atau  website sesuai dengan <a href="https://yuk-mari.com" target="_blank">ruang lingkup</a> kami.</p>
                            </div>

                            <div class="price">
                                Rp50.000 - Rp250.000
                            </div>

                            <div class="buy-btn">
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi,+saya+ingin+maintenance+website.+Saya+memiliki+website+yang+sudah+tidak+aktif+/+memiliki+masalah" class="btn btn-primary">Pesan Paket Ini</a>
                            </div>

                            <ul class="pricing-features">
                                <li><i class="fas fa-check"></i> Re-Use / Perawatan dengan harga Rp250.000/bulan</li>
                                <li><i class="fas fa-check"></i> Re-Build / Update-Upgrade sistem dengan harga Rp50.000/1 item/fitur checklist</li>
                                <li><i class="fas fa-check"></i> Harga paket ini diluar harga pengamanan website</li>
                                <li><i class="fas fa-check"></i> Bug Fixing / Error sistem by fitur</li>
                                <li><i class="fas fa-check"></i> Monitoring input / output data</li>
                                <li><i class="fas fa-check"></i> Upgrading Sistem (seperti sistem Native ke CMS,dll)</li>
                                <li><i class="fas fa-check"></i> Upgrading Desain (seperti Non Template ke Templating Premium, dll.)</li>
                            </ul>
                        </div>
                    </div>
                </div>-->

                <!-- PAKET 2 -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
								<h3><?php echo htmlspecialchars(getContentByType($fetchPaket_2Content, 'Header Title')); ?></h3>
                                <p><?php echo htmlspecialchars_decode(getContentByType($fetchPaket_1Content, 'Title Description')); ?></p>
							</div>

                            <div class="price">
							<?php echo htmlspecialchars(getContentByType($fetchPaket_2Content, 'Price')); ?>
                            </div>

                            <div class="btn-primay">
                                <a href="layanan" style="margin-bottom:10px;" class="btn btn-primary">Ketahui Layanan Ini</a>
                                <a href="fitur" style="margin-bottom:10px;" class="btn btn-primary">Fitur Produk</a>
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi,+saya+ingin+melihat+portofolio+yang+sudah+dikerjakan+untuk+keamanan+aplikasi+atau+website" style="margin-bottom:10px;" class="btn btn-primary">Portofolio</a>
                            </div>

                            <br/>

                            <ul class="pricing-features">
								<li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_2Content, 'Fitur 1')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars_decode(getContentByType($fetchPaket_2Content, 'Fitur 2')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_2Content, 'Fitur 3')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_2Content, 'Fitur 4')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_2Content, 'Fitur 5')); ?></li>   
                                <br/>
                                <!--<a href="https://drive.google.com/file/d/1_83WY5UifWN0uYr-20aWjcholVDQyJVa/view?usp=sharing" target="_blank">>> Lihat tabel harga sesuai dengan kategori Instansi</a>-->
                            </ul>

                            <br/>  

                            <div class="buy-btn">
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi,+saya+ingin+mengetahui+kerentanan+website+yang+saya+kelola+dan+mengamankannya." class="btn btn-primary">Pesan Paket Ini</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
								<h3><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Header Title')); ?></h3>
                                <p><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Title Description')); ?></p>
                            </div>

                            <div class="price">
								<?php echo htmlspecialchars_decode(getContentByType($fetchPaket_3Content, 'Price')); ?>
                            </div>

                            <div class="btn-primay">
                                <a href="layanan" style="margin-bottom:10px;" class="btn btn-primary">Ketahui Layanan Ini</a>
                                <a href="fitur" style="margin-bottom:10px;" class="btn btn-primary">Fitur Produk</a>
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282295603115&text=Permisi,+saya+ingin+melihat+portofolio+yang+sudah+dikerjakan+untuk+bimbingan+belajar" style="margin-bottom:10px;" class="btn btn-primary">Portofolio</a>
                                <a href="silabus" style="margin-bottom:10px;" class="btn btn-primary">Silabus Pembelajaran</a>
                            </div>

                            <br/>

                            <ul class="pricing-features">
								<li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 1')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars_decode(getContentByType($fetchPaket_3Content, 'Fitur 2')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 3')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 4')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 5')); ?></li>  
								<li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 6')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 7')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 8')); ?></li>  
								<li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 9')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 10')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 11')); ?></li>  
								<li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 12')); ?></li>
                                <li><i class="fas fa-check"></i><?php echo htmlspecialchars(getContentByType($fetchPaket_3Content, 'Fitur 13')); ?></li>
                              </ul>

                            <br/>                            

                            <div class="buy-btn">
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282295603115&text=Pesan+Kelas+Pelatihan+Web+(Offline+Class/Live+Class)" class="btn btn-primary">Pesan Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Start Feedback Area -->
		<section class="feedback-area ptb-70 bg-f7fafd">
			<div class="container">
				<div class="section-title">
					<h2><?php echo htmlspecialchars(getContentByType($fetchProject_TestimoniContent, 'Header Title')); ?></h2>
					<div class="bar"></div>
					<p><?php echo htmlspecialchars(getContentByType($fetchProject_TestimoniContent, 'Title Description')); ?></p>
				</div>

				<div class="feedback-slides">
                    <div class="client-feedback">
                        <div>
                            <?php foreach ($fetchProjectTestiClientsContent as $testimonial) : ?>
                                <div class="item">
                                    <div class="single-feedback">
                                        <div class="client-img">
                                        <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" alt="image">
                                        </div>
                                        <h3><?php echo htmlspecialchars($testimonial['name']); ?></h3>
                                        <span><?php echo htmlspecialchars($testimonial['company']); ?></span>
                                        <p><?php echo htmlspecialchars($testimonial['testimonial']); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="client-thumbnails">
                        <div>
                            <?php foreach ($fetchProjectTestiClientsContent as $testimonial) : ?>
                                <div class="item">
                                    <div class="img-fill">
                                    <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" alt="image">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <button class="prev-arrow slick-arrow">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        
                        <button class="next-arrow slick-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

			</div>
		</section>
        <!-- End Feedback Area -->

        <!-- Start Ready To Talk Area -->
		<section class="ready-to-talk">
			<div class="container">
				<div class="ready-to-talk-content">
                    <h3><?php echo htmlspecialchars(getContentByType($fetchKerjasamaDevContent, 'Header Title 1')); ?></h3>
                    <p><?php echo htmlspecialchars(getContentByType($fetchKerjasamaDevContent, 'Title Description 1')); ?></p>
                    <a target="_blank" href="<?php echo htmlspecialchars(getContentByType($fetchKerjasamaDevContent, 'Number Whatsapp 1')); ?>" class="btn btn-primary">Hubungi Kami</a>
                    <!--<span><a href="#">Atau, coba hubungi kami dengan penawaran Gratis</a></span>-->
                </div>
			</div>
		</section>
        <!-- End Ready To Talk Area -->
        
        <!-- Start Partner Area -->
		<div class="partner-area">
			<div class="container">
				<div class="partner-inner">
					<div class="row align-items-center">
						<?php foreach ($fetchDevelopmentApplicationLogosContent as $logo): ?>
							<div class="col-lg-2 col-sm-4 col-md-3 col-6">
								<a href="#" class="partner-item">
									<img src="<?= htmlspecialchars($logo['image']); ?>" class="partner-img default-img" alt="partner">
									<img src="<?= htmlspecialchars($logo['image']); ?>" class="partner-img hover-img" alt="partner">
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

		<!-- End Partner Area -->

        <!-- Start Ready To Talk Area -->
		<section class="ready-to-talk">
			<div class="container">
				<div class="ready-to-talk-content">
				<h3><?php echo htmlspecialchars(getContentByType($fetchKerjasamaDevContent, 'Header Title 2')); ?></h3>
                    <p><?php echo htmlspecialchars(getContentByType($fetchKerjasamaDevContent, 'Title Description 2')); ?></p>
                    <a target="_blank" href="<?php echo htmlspecialchars(getContentByType($fetchKerjasamaDevContent, 'Number Whatsapp 2')); ?>" class="btn btn-primary">Hubungi Kami</a>
                    <!--<span><a href="#">Atau, coba hubungi kami dengan penawaran Gratis</a></span>-->
                </div>
			</div>
		</section>
        <!-- End Ready To Talk Area -->
        
        <!-- Start Partner Area -->
		<div class="partner-area">
			<div class="container">
				<div class="partner-inner">
					<div class="row align-items-center">
						<?php foreach ($fetchSecurityMitraLogosContent as $logo): ?>
							<div class="col-lg-2 col-sm-4 col-md-3 col-6">
								<a href="#" class="partner-item">
									<img src="<?= htmlspecialchars($logo['image']); ?>" class="partner-img default-img" alt="partner">
									<img src="<?= htmlspecialchars($logo['image']); ?>" class="partner-img hover-img" alt="partner">
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
        <!-- End Partner Area -->         
        
        <section class="account-create-area">
            <div class="container">
                <div class="account-create-content">
                    <h2><?php echo htmlspecialchars(getContentByType($fetchFooterContent, 'Header Title')); ?></h2>
                    <p><?php echo htmlspecialchars(getContentByType($fetchFooterContent, 'Title Description')); ?></p>
                    <a target="_blank" href="<?php echo htmlspecialchars(getContentByType($fetchFooterContent, 'Number Whatsapp')); ?>" class="btn btn-primary">DAFTARKAN DIRIMU</a>
                </div>
            </div>
        </section>
        <!-- End Pricing Area -->

		<style>
			.partner-img {
				display: block;
				width: 100%;
				transition: filter 0.3s ease-in-out, opacity 0.3s ease-in-out;
			}
			.default-img {
				filter: grayscale(100%);
			}
			.hover-img {
				position: absolute;
				top: 0;
				left: 0;
				opacity: 0;
			}
			.partner-item:hover .default-img {
				opacity: 0;
			}
			.partner-item:hover .hover-img {
				opacity: 1;
				filter: grayscale(0%);
			}
		</style>

    <?php include 'templates/footer.php'; ?>

    </body>

</html>