<?php
session_start();
if (!isset($_POST['nama']) ) {
  header('Location:update_destinasi.php');
  exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

$nama= $_POST['nama'];
$ids = $_POST['ids'];
$isi= $_POST['isi'];


 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $update_query2 = mysqli_query($conn, "UPDATE `destinasi` SET `nama_destinasi` = '$nama', `isi_destinasi` = '$isi', `gambar_destinasi` = '$newfilename' WHERE `destinasi`.`id_destinasi` = $ids;");
    if ($update_query2){
    echo "<script>
    alert ('Destinasi berhasil diubah');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=destinasi.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, Destinasi gagal diubah');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=update_destinasi.php?id=$ids'>";
    }
}

else{
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10044070) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo "<script>
            alert ('Cek Ukuran File, Tipe File');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_destinasi.php?id=$ids'>";

}

else {
  $get_data = mysqli_query($conn, "SELECT gambar_destinasi FROM destinasi where id_destinasi='$ids'");
  $hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
  if($hasil['gambar_destinasi']<>"-")
  {
      unlink("img/".$hasil['gambar_destinasi']);
  }

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $update_query = mysqli_query($conn, "UPDATE `destinasi` SET `nama_destinasi` = '$nama', `isi_destinasi` = '$isi', `gambar_destinasi` = '$newfilename' WHERE `destinasi`.`id_destinasi` = $ids;");
  if ($update_query){
  echo "<script>
  alert ('Destinasi berhasil diubah');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=destinasi.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi galat, Destinasi gagal diubah');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=update_destinasi.php?id=$ids'>";
  }
  } else {
      echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_destinasi.php?id=$ids'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------









?>
