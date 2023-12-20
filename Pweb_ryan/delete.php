<?php
if(isset($_POST['Delete'])){
    $idb = $_POST['idb'];

    $hapus = mysqli_query($con, "delete from stock where idbarang='$idb'");
    if($hapus){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
};
?>
