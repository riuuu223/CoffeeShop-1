<div class='container mt-5'>
<img src="<?php echo MYURL; echo $data['karyawan']['photo']; ?>" width=200 height=200 class="rounded-circle">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data['karyawan']['nama_karyawan']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Detail</h6>
    <p class="card-text">Alamat : <?php echo $data['karyawan']['alamat']; ?></p>
    <p class="card-text">No. Telepon : <?php echo $data['karyawan']['notelp']; ?></p>
    <p class="card-text">Jabatan : <?php echo $data['karyawan']['jabatan']; ?></p>
    <p class="card-text">Gaji : Rp.<?php echo $data['karyawan']['gaji']; ?></p>
    <a href="<?php echo MYURL;?>/karyawan/hapus/<?php echo $data['karyawan']['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Dihapus?';">Hapus</a>
    <a href="<?php echo MYURL; ?>/karyawan" class="card-link">kembali</a>
  </div>
</div>

</div>

