<?php
$koneksi = mysqli_connect("localhost","root","","dbakademik");

// Check Connection
// if (mysqli_connect_errno()){
//     echo"Koneksi database gagal:".mysql_connect_error() 
// }
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>