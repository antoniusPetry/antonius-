<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h2>Input Data Kategori Buku</h2> 
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius:2px; text-decoration:none;">Data Kategori Buku</a><br><br> 
    <form action="" method="POST">
    <table>
        <tr>
            <td>Kode Buku</td>
            <td>:</td>
            <td><input type="text" name="Kbuku" placeholder="Kode Buku" required</td>
        </tr>
        <tr>
            <td>Nama Buku</td>
            <td>:</td>
            <td><input type="text" name="Nbuku" placeholder="Nama Buku" required</td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input type="int" name="jumlah" placeholder="Jumlah" required</td>
        </tr>
        <tr>
            <td>Terbit Tanggal</td>
            <td>:</td>
            <td><input type="date" name="Ttanggal" placeholder="Terbit Tanggal" required</td>
        </tr>
        <tr>
            <td>Nama Pengarang</td>
            <td>:</td>
            <td><input type="text" name="Npengarang" placeholder="Nama Pengarang" required</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"</td>
        </tr>
    </table>
    </form>  
    <?php 
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
        $insert = mysqli_query($conn, "INSERT INTO kategori_buku VALUES
        ('".$_POST['Kbuku']."',
        '".$_POST['Nbuku']."',
        '".$_POST['jumlah']."',
        '".$_POST['Ttanggal']."',
        '".$_POST['Npengarang']."')");

    if($insert){
        echo 'Berhasil disimpan';
    }else{
        echo 'gagal disimpan'. mysqli_error($conn);
    }
    }
    ?>
</body>
</html>