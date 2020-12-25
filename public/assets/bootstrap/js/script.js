$(function() {
   
    $('.tambahDataKelas').on('click', function(){
        $('#formLabelEditKelas').html('Tambah Data Kelas');
        $('.modal-footer button[type=submit]').html('Tambah');
    });

    $('.tampilModalEdit').on('click', function (){

        $('#formLabelEditKelas').html('Ubah Data Kelas');
        $('.modal-footer button[type=submit]').html('Edit');

        const id = $(this).data('id');
        // console.log(id);

        $.ajax({
            url: 'http://localhost/sistemspp/public/admin/editKelas',
            data: {
                id: id
            },
            method: 'post',
            // dataType: 'json',
            success: function (data) {
                console.log(data);
                // $('#nama_kelas').val(data.nama_kelas);
                // $('#jurusan').val(data.jurusan);
            }
        });

    });

});