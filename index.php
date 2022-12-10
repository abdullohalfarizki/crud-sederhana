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

    <!-- Judul -->
    <div class="container">
        <h3 class="mt-2">Data Siswa</h3>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi data yang telah disimpan di database.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
        <div class="table-responsive table-bordered">
            <table class="table align-middle table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto Siswa</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <center>1.</center>
                        </td>
                        <td>112233</td>
                        <td>Jamaludin</td>
                        <td>Laki-laki</td>
                        <td>
                            <img src="img/img1.jpg" alt="Foto siswa 1" style="width: 100px;">
                        </td>
                        <td>Jl. Bandung jaya</td>
                        <td>
                            <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                            <button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>2.</center>
                        </td>
                        <td>112233</td>
                        <td>Abdulloh Alfa</td>
                        <td>Laki-laki</td>
                        <td>
                            <img src="img/img2.jpg" alt="Foto siswa 1" style="width: 100px;">
                        </td>
                        <td>Jl. Bandung jaya</td>
                        <td>
                            <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                            <button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>