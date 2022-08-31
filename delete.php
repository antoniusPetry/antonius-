<?php
include 'koneksi.php';
if(isset($_GET['kode_kat'])){
    $delete = mysqli_query($conn, "DELETE FROM kategori_buku WHERE kode_kat = '".$_GET['kode_kat']."' ");
    header('location:index.php');
}
?>