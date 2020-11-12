<div class='container'>
    <div class="row mt-3">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <div class="col-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formData">
            Tambah Karyawan
        </button>
            <h3 class="mt-3">Daftar Karyawan</h3>
            <ul class="list-group">
                <?php foreach ($data['karyawan'] as $krywn) : ?>
                    <li class="list-group-item">
                        <?php echo $krywn['nama_karyawan']; ?>
                        <a href="<?php echo MYURL;?>/karyawan/detail/<?php echo $krywn['id']; ?>" class="badge badge-primary ml-2 float-right">Detail</a>
                        <a href="<?php echo MYURL;?>/karyawan/detail/<?php echo $krywn['id']; ?>" class="badge badge-warning ml-2 float-right tampilModalUbah" data-toggle="modal" data-target="#formData" data-id="<?php echo $krywn['id']; ?>">Ubah</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo MYURL;?>/karyawan/tambah" method = "post">
            <input type='hidden' name='id' id='id'>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name = "nama" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" id="umur" name = "umur">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select class= "form-control" id="jabatan" name="jabatan">
                    <option value="manager">Manager</option>
                    <option value="barista">Barista</option>
                    <option value="kasir">Kasir</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nomorTelp">No. Telepon</label>
                <input type="text" class="form-control" id="notelp" name = "notelp" placeholder="Masukkan Kontak Yang Dapat Dihubungi">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name = "alamat" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" id="photo">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>