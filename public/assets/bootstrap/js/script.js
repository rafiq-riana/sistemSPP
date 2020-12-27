$(function() {
   
    $('.tambahDataKelas').on('click', function(){
        $('#formLabelEditKelas').html('Tambah Data Kelas');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('#id_kelas').val('');
        $('#nama_kelas').val('');
        $('#jurusan').val('');        
    });

    $('.tampilModalEdit').on('click', function (){
        $('#formLabelEditKelas').html('Ubah Data Kelas');
        $('.modal-footer button[type=submit]').html('Edit');
        $('.box-body form').attr('action','http://localhost/sistemspp/public/admin/editKelas');
        $('#id_kelas').attr('disabled', true);
        const id_kelas = $(this).data('id_kelas');
        // console.log(id);

        $.ajax({
            url: 'http://localhost/sistemspp/public/admin/getEditKelas',
            data: {
                id: id_kelas
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                $('#nama_kelas').val(data.nama_kelas);
                $('#jurusan').val(data.jurusan);
            }
        });
    });

});