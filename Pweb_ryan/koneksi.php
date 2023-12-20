<?php
$con = mysqli_connect("localhost","root","","dealermotor");

if(isset($_POST['addnewbarang'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($con,"insert into stock (namabarang, deskripsi ,stock) values ('$namabarang','$deskripsi','$stock')");
    if($addtotable){
        header('location:index.php');
    }else{
        echo 'Gagal';
        header('location:index.php');
    }
};

if(isset($_POST['barangmasuk'])){
    $barangnya = $_POST['barangnya'];
    $penerima = $_POST['penerima'];
    $qty =$_POST['qty'];

    $cekstock = mysqli_query($con,"select * from stock where idbarang='$idbarang'");
    $ambildata = mysqli_fetch_array($cekstock);

    $stocksekarang = $ambildata['stock'];
    $tambahkanstocksekarangdenganquantity = $stocksekarang+$qty;

    $addtomasuk = mysqli_query($con,"insert into masuk (idbarang,keterangan,qty) values ('$barangnya','$penerima','$qty')");
    $updatestok = mysqli_query($con,"update stock set  stock='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'" );
    if($addtomasuk&&$updatestok){
        header('location:masuk.php');
    }else{
        echo 'Gagal';
        header('location:masuk.php');
    }
}

if(isset($_POST['addbarangkeluar'])){
    $barangnya = $_POST['barangnya'];
    $penerima = $_POST['penerima'];
    $qty =$_POST['qty'];

    $cekstock = mysqli_query($con,"select * from stock where idbarang='$barangnya'");
    $ambildata = mysqli_fetch_array($cekstock);

    $stocksekarang = $ambildata['stock'];
    $tambahkanstocksekarangdenganquantity = $stocksekarang-$qty;

    $addtokeluar = mysqli_query($con,"insert into keluar (idbarang,penerima,qty) values ('$barangnya','$penerima','$qty')");
    $updatestok = mysqli_query($con,"update stock set  stock='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'" );
    if($addtokeluar&&$updatestok){
        header('location:keluar.php');
    }else{
        echo 'Gagal';
        header('location:keluar.php');
    }
}

if(isset($_POST['updatebarang'])){
    $idb = $_POST['idb'];
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];

    $update = mysqli_query($con,"update stock set namabarang='$namabarang', deskripsi='$deskripsi' where idbarang ='$idb'");
    if($update){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}
?>