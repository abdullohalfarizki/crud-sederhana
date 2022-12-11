<!DOCTYPE html>
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
          <form method="POST" action="proses.php">
          <div class="mb-3 row mt-3">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-4">
                  <input type="number" name="nisn" class="form-control" id="nisn" placeholder="ex: 112233">
                </div>
              </div>
            <div class="mb-3 row mt-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="ex: Abdul aziz">
                </div>
              </div>

            <div class="mb-3 row mt-3">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-4">
                  <select type="text" class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                    <option selected></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>

              <div class="mb-3 row mt-3">
                <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
                <div class="col-sm-4">
                    <input class="form-control" type="file" name="foto" id="foto">
                </div>
              </div>
              <div class="mb-3 row mt-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                <div class="col-sm-4">
                    <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Jl. Jati bening"></textarea>
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