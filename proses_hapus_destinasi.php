<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "img/";
$get_data = mysqli_query($conn,"SELECT gambar_destinasi FROM destinasi where id_destinasi=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambar_destinasi']<>"-")
{
    unlink("img/".$hasil['gambar_destinasi']);
}


$query=mysqli_query($conn,"DELETE from destinasi where id_destinasi=$id");
echo "<script>
	alert ('Destinasi berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=destinasi.php>";
?>
