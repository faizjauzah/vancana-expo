<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "img/";
$get_data = mysqli_query($conn,"SELECT gambar_kuliner FROM kuliner where id_kuliner=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambar_kuliner']<>"-")
{
    unlink("img/".$hasil['gambar_kuliner']);
}


$query=mysqli_query($conn,"DELETE from kuliner where id_kuliner=$id");
echo "<script>
	alert ('Kuliner berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=kuliner.php>";
?>