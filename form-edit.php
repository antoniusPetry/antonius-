<?php
include 'koneksi.php';
$edit = mysqli_query($conn, "SELECT * FROM kategori_buku WHERE kode_kat = '".$_GET['kode_kat']."'");
$result = mysqli_fetch_array($edit);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Input Data Kategori Buku</h2> 
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius:2px; text-decoration:none;">Data Kategori Buku</a><br><br> 
    <form action="" method="POST">
    <table>
        <tr>
            <td>Kode Buku</td>
            <td>:</td>
            <td><input type="text" name="Kbuku" value="<?php echo $result['kode_kat'] ?>" required</td>
        </tr>
        <tr>
            <td>Nama Buku</td>
            <td>:</td>
            <td><input type="text" name="Nbuku" value="<?php echo $result['nama_kat'] ?>" required</td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input type="int" name="jumlah" value="<?php echo $result['jumlah_kat'] ?>" required</td>
        </tr>
        <tr>
            <td>Terbit Tanggal</td>
            <td>:</td>
            <td><input type="date" name="Ttanggal" value="<?php echo $result['terbit_kat'] ?>" required</td>
        </tr>
        <tr>
            <td>Nama Pengarang</td>
            <td>:</td>
            <td><input type="text" name="Npengarang" value="<?php echo $result['pengarang_kat'] ?>" required</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="Edit" value="Simpan"</td>
        </tr>
    </table>
    </form>  
    <?php 
    include 'koneksi.php';
    if(isset($_POST['Edit'])){
        $update = mysqli_query($conn, "UPDATE kategori_buku SET nama_kat = '".$_POST['Nbuku']."', 
        jumlah_kat = '".$_POST['jumlah']."', terbit_kat = '".$_POST['Ttanggal']."',pengarang_kat = '".$_POST['Npengarang']."' 
        WHERE kode_kat = '" .$_GET['kode_kat']."'");
        if($update){
            echo 'Berhasil Diedit';
        }else {
            echo 'gagal diedit';
        }
    }
    ?>
</body>
</html>