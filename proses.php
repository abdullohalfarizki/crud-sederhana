<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $nisn = $_POST['nisn'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $foto = $_FILES['foto']['name'];

            $dir = "img/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir . $foto);
            //die;

            $alamat = $_POST['alamat'];

            $query = "INSERT INTO tb_siswa VALUES(null, '$nisn', '$nama', '$jenis_kelamin', '$foto', '$alamat')";
            $sql = mysqli_query($conn, $query);
            if($sql){
                header("location: index.php");
                //echo "Data Berhasil Ditambahkan <a href='index.php'>[Home]</a>";
            }else{
                echo $query;    
            }

           // echo $nisn . " | " . $nama ." | ".$jenis_kelamin." | ".$foto." | ".$alamat;
           // echo "<br>Tambahkan Data <a href='index.php'>[Home]</a>";
        } else if($_POST['aksi'] == "edit"){
            echo "Edit Data <a href='index.php'>[Home]</a>";
        }
    }
?>

<?php
    if (isset($_GET['hapus'])) {
        $id_siswa = $_GET['hapus'];
        //hapus file foto
        $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = $id_siswa";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("img/".$result['foto_siswa']);

        //hapus data
        $query = "DELETE FROM tb_siswa WHERE id_siswa = $id_siswa";
        $sql = mysqli_query($conn, $query);
        if($sql){
            header("location: index.php");
            //echo "Data Berhasil Ditambahkan <a href='index.php'>[Home]</a>";
        }else{
            echo $query;    
        }
        //echo "Hapus Data <a href='index.php'>[Home]</a>";
    }
?>