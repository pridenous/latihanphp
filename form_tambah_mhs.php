<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <a href="daftar_mhs.php">KEMBALI</a>
    <br>
    <br>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="text" name="jk">
                </td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <input type="text" name="prodi">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SIMPAN">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<form action="tambah_aksi.php" method="post">