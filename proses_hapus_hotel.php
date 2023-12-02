<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "img/";
$get_data = mysqli_query($conn,"SELECT gambar_hotel FROM hotel where id_hotel=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambar_hotel']<>"-")
{
    unlink("img/".$hasil['gambar_hotel']);
}


$query=mysqli_query($conn,"DELETE from hotel where id_hotel=$id");
echo "<script>
	alert ('Hotel berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=hotel.php>";
?>