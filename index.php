<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Perpustakaan</title>
</head>
<body>
    <h2>Data Kategori Buku</h2>
    <a href="form-input.php" style="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius:2px; text-decoration:none;">Tambah Data</a><br><br>
    <table border="1" cellspacing="0" width="50%">
        <tr style="text-align: center;">
            <td>No</td>
            <td>Kode Buku</td>
            <td>Nama Buku</td>
            <td>Jumlah</td>
            <td>Terbit Tanggal</td>
            <td>Nama Pengarang</td>
            <td>Opsi</td>
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $select = mysqli_query($conn, "SELECT * FROM kategori_buku");
            while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align: center;">
            <td><?php echo $no++ ?></td>
            <td><?php echo $hasil['kode_kat'] ?></td>
            <td><?php echo $hasil['nama_kat'] ?></td>
            <td><?php echo $hasil['jumlah_kat'] ?></td>
            <td><?php echo $hasil['terbit_kat'] ?></td>
            <td><?php echo $hasil['pengarang_kat'] ?></td>
            <td>
                <a href="form-edit.php?kode_kat=<?php echo $hasil['kode_kat'] ?>">Edit</a> ||
                <a href="delete.php?kode_kat=<?php echo $hasil['kode_kat'] ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>