<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <br/>
    <a href="form_tambah_mhs.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Jenis Kelamin</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php 
            include 'koneksi.php';
            $no=1;
            $data=mysqli_query($koneksi,"SELECT * FROM MAHASISWA");
            while($d=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nim']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['jk']; ?></td>
            <td><?php echo $d['prodi']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo$d['id'];?>">EDIT</a>
                <a href="hapus.php?id=<?php echo$d['id'];?>">HAPUS</a>
                
            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>