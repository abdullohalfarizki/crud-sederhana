<?php
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            echo "Tambahkan Data <a href='index.php'>[Home]</a>";
        } else if($_POST['aksi'] == "edit"){
            echo "Edit Data <a href='index.php'>[Home]</a>";
        }
    }
?>

<?php
    if (isset($_GET['hapus'])) {
        echo "Hapus Data <a href='index.php'>[Home]</a>";
    }
?>