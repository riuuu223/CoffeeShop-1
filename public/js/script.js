$(function() {

    $('.tombolTambahData').on('click',function(){
        $('#staticBackdropLabel').html('Tambah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click',function(){
        $('#staticBackdropLabel').html('Ubah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost:8080/CoffeeShop-1/public/karyawan/ubah')

        const id = $(this).data('id');
        $.ajax ({
            url: 'http://localhost:8080/CoffeeShop-1/public/karyawan/getubah',
            data: {id : id},
            method:'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#jabatan').val(data.jabatan);
                $('#notelp').val(data.notelp);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        });
    });

})