<?php
require "koneksi.php";

if(isset($_POST['update'])){
    $idb = $_POST['idb'];
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];

    // Use prepared statements to prevent SQL injection
    $update = mysqli_prepare($con, "UPDATE stock SET namabarang=?, deskripsi=? WHERE idbarang=?");
    mysqli_stmt_bind_param($update, 'ssi', $namabarang, $deskripsi, $idb);
    $result = mysqli_stmt_execute($update);

    if($result){
        header('location:index.php');
    } else {
        echo 'Gagal: ' . mysqli_error($con);
    }

    mysqli_stmt_close($update);
}
?>
