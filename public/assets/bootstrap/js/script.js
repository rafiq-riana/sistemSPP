$(function() {
   
    $('.tambahDataKelas').on('click', function(){
        $('#exampleModal').modal('show')
        $('#formLabelEditKelas').html('Tambah Data Kelas');
        $('.modal-footer button[type=submit]').html('Tambah');
    });

    $('body').on('click', '.tampil-modal-edit', function() {
        $('#exampleModal').modal('show')
        $('#formLabelEditKelas').html('Ubah Data Kelas');
        $('.modal-footer button[type=submit]').html('Edit');

        const idKelas = $(this).data('id_kelas');
        const namaKelas = $(this).data('nama_kelas');
        const jurusan = $(this).data('jurusan');

        // $('input[name="id_kelas"]').val(idKelas);
        // $('input[name="nama_kelas"]').val(namaKelas);
        // $('input[name="jurusan"]').val(jurusan);
        // console.log(id);

        $.ajax({
            url: 'http://localhost/sistemspp/public/admin/editKelas',
            data: {
                id: idKelas
            },
            dataType: 'json',
            method: 'post',
            // dataType: 'json',
            success: function (data) {
                $('#id_kelas').val(data.id_kelas);
                $('#nama_kelas').val(data.nama_kelas);
                $('#jurusan').val(data.jurusan);
                // $('#nama_kelas').val(data.nama_kelas);
                // $('#jurusan').val(data.jurusan);
            }
        });

    });

});