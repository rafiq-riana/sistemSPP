$(function() {
   
    $('.tambahDataKelas').on('click', function(){
        $('#formLabelEditKelas').html('Tambah Data Kelas');
        $('.modal-footer button[type=submit]').html('Tambah');
    });

    $('.tampilModalEdit').on('click', function (){

        $('#formLabelEditKelas').html('Ubah Data Kelas');
        $('.modal-footer button[type=submit]').html('Edit');
        $('.box-body form').attr('action', 'http://localhost/sistemspp/public/admin/editKelas')


        const id = $(this).data('id');
        // console.log(id);

        $.ajax({
            url: 'http://localhost/sistemspp/public/admin/getEditKelas',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#id_kelas').val(data.id_kelas);
                $('#nama_kelas').val(data.nama_kelas);
                $('#jurusan').val(data.jurusan);
            }
        });

    });

});