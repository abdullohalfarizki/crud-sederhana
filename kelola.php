<!DOCTYPE html>

    <?php
      include 'koneksi.php';

      $nisn = '';
      $nama_siswa = '';
      $jenis_kelamin = '';
      $alamat = '';

      if (isset($_GET['ubah'])) {
          $id_siswa = $_GET['ubah'];

          $query = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';";
          $sql = mysqli_query($conn, $query);

          $result = mysqli_fetch_assoc($sql);

          $nisn = $result['nisn'];
          $nama_siswa = $result['nama_siswa'];
          $jenis_kelamin = $result['jenis_kelamin'];
          $alamat = $result['alamat'];

      }
    ?>



<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

        <title>Crud Sekolah - Sederhana</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                CRUD - BS5
              </a>
            </div>
        </nav>

        <!-- Form -->
        <div class="container">
          <form method="POST" action="proses.php" enctype="multipart/form-data">
          <div class="mb-3 row mt-3">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-4">
                  <input required type="number" name="nisn" class="form-control" id="nisn" placeholder="ex: 112233" value="<?php echo $nisn; ?>">
                </div>
              </div>
            <div class="mb-3 row mt-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-4">
                  <input required type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama_siswa; ?>">
                </div>
              </div>

            <div class="mb-3 row mt-3">
                <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-4">
                  <select  required id="jkel" name="jenis_kelamin" class="form-select">
                      <option selected><?php echo $jenis_kelamin; ?></option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>

              <div class="mb-3 row mt-3">
                <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
                <div class="col-sm-4">
                    <input required class="form-control" type="file" name="foto" id="foto" accept="image/*">
                </div>
              </div>
              <div class="mb-3 row mt-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                <div class="col-sm-4">
                    <textarea required class="form-control" name="alamat" id="alamat" rows="3" placeholder="Jl. Jati bening"><?php echo $alamat; ?></textarea>
                </div>
              </div>

              <div class="mb-3 row mt-4">
                <div class="col">
                  <?php 
                      if(isset($_GET['ubah'])){
                  ?>
                      <button type="submit" name="aksi" value="edit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                  <?php 
                    }else{
                  ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Tambahkan</button>
                  <?php 
                    }
                  ?>
                    <a href="index.php" type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Batal</a>
                </div>
              </div>
          </form>
        </div>
    </body>
</html>