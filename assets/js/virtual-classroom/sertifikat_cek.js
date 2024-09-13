$(document).ready(function() {
        $('#form-cek-sertifikat').on('submit', function(e) {
            e.preventDefault();
            var certificateID = $('#certificateID').val();

            $.ajax({
                url: 'cek-sertifikat.php',
                type: 'POST',
                data: { certificateID: certificateID },
                success: function(response) {
                    // Mengubah respon menjadi objek JSON
                    responses = JSON.parse(response);
                    
                    if (responses.status === 'valid') {
                        $('#result').html('<div class="alert alert-success">Sertifikat ditemukan! Anda sudah lulus! Silahkan jika ingin melakukan download kembali sertifikat, dapat dilakukan dengan mengakses link video materi yang pernah kami kirimkan ke email.</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">Sertifikat tidak ditemukan. Silahkan ambil materi kelas terlebih dahulu.</div>');
                    }
                },
                error: function() {
                    $('#result').html('<div class="alert alert-danger">Terjadi kesalahan pada proses cek sertifikat.</div>');
                }
            });
        });
    });