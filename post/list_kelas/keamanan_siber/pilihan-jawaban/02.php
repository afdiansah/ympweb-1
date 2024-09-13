            <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="single-blog-post" style="max-height: 600px; overflow-y: auto;">
                            <div class="blog-image">
                                <!-- Video akan ditampilkan di sini -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <div id="video-placeholder" class="embed-responsive-item"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="single-blog-post">
                            <div class="blog-image">
                                <div class="container">
                                    <!-- Form -->
                                    <form id="kirimJawabanForm" method="POST">
                                        <div class="form-container">
                                            <div class="row">
                                                <?php for ($i = 1; $i <= 25; $i++): ?>
                                                <div class="col-12 col-md-6 col-lg-4 col-xl-3 form-group" style="border: 1px solid #e0e0e0; border-radius: 5px; padding: 10px; background: linear-gradient(135deg, #f7f7f7, #dcdcdc);">
                                                    <label for="select<?= $i ?>" class="form-label" style="font-weight: bold; color: #333;">Soal <?= $i ?></label>
                                                    <select id="select<?= $i ?>" name="jawaban[<?= $i ?>]" class="form-select">
                                                        <option value="Kosong">Pilih...</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                    </select>
                                                </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <!-- Tombol Kirim Jawaban -->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <button type="button" id="myBtn2" style="width: 100%; border-radius: 15px;" class="btn btn-primary me-2">Kirim Jawaban <i class="fas fa-arrow-right"></i></button>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <button type="button" id="myBtn3" style="width: 100%; border-radius: 15px;" class="btn btn-primary me-2"><i class="fas fa-arrow-left"></i> Lihat Materi Kembali</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <!-- Modal Structure 2 -->
                                    <div id="myModal-kirim-jawaban" class="modal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2>Konfirmasi Kembali</h2>
                                                <span class="close" id="close2">&times;</span>
                                            </div>
                                            <div class="modal-body">
                                                <p style="text-align:justify">Setelah tombol siap di klik, jika lulus maka selamat, sertifikat menunggu. Namun, jika tidak lulus, tidak dapat mengikuti ujian kembali (remedial), kecuali mendaftar ulang kembali menjadi peserta kursus.<br/><br/> Apakah <?php echo $decoded_array['nama_lengkap']; ?> sudah yakin dengan seluruh jawabannya? Siap Dikirim?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="confirmBtn2" class="btn btn-primary">Siap</button>
                                                <button id="cancelBtn2" class="btn btn-secondary">Cek Ulang</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <!-- Modal Structure 3 -->
                                    <div id="myModal-cekmateri" class="modal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2>Konfirmasi Kembali</h2>
                                                <span class="close" id="close3">&times;</span>
                                            </div>
                                            <div class="modal-body">
                                                <p style="text-align:justify">Jika kamu mencoba untuk melihat materi kembali tidak apa - apa, namun setiap jawaban yang sudah dipilih akan kosong kembali (di reset).<br/><br/> Apakah <?php echo $decoded_array['nama_lengkap']; ?> yakin mau melihat materi kembali?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="confirmBtn3" class="btn btn-primary">Yakin</button>
                                                <button id="cancelBtn3" class="btn btn-secondary">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>