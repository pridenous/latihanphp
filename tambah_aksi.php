<?php

//Koneksi Database
include 'koneksi.php';

// Inisiasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];

//Input Data Ke Database
mysqli_query($koneksi,"INSERT INTO MAHASISWA VALUES('$nim','$nama','$jk','$prodi','$alamat')");

// auto alihkan kembali ke index.php setelah input berhasil disimpan

header("location:daftar_mhs.php");
?>