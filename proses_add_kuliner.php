<<<<<<< HEAD
<?php
session_start();
if (!isset($_POST['nama']) ) {
  header('Location:add_kuliner.php');
  exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

$nama= $_POST['nama'];
$isi= $_POST['isi'];
$harga= $_POST['harga'];

 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $insert_query2 = mysqli_query($conn, "INSERT INTO kuliner (id_kuliner, nama_kuliner, isi_kuliner, gambar_kuliner, harga_kuliner) VALUES (NULL, '$nama', '$isi', '$newfilename', '$harga'); ");
    if ($insert_query2){
    echo "<script>
    alert ('Kuliner berhasil ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=kuliner.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, Kuliner gagal ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=add_kuliner.php'>";
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
            echo "<meta http-equiv='refresh' content='0;url=add_kuliner.php'>";

}

else {
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $insert_query2 = mysqli_query($conn, "INSERT INTO kuliner (id_kuliner, nama_kuliner, isi_kuliner, harga_kuliner, gambar_kuliner) VALUES (NULL, '$nama', '$isi', '$harga', '$newfilename'); ");
  if ($insert_query2){
  echo "<script>
  alert ('Kuliner berhasil ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=kuliner.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi galat, Kuliner gagal ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=add_kuliner.php'>";
  }
  } else {
      echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=add_kuliner.php'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------









=======
<?php
session_start();
if (!isset($_POST['nama']) ) {
  header('Location:add_kuliner.php');
  exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

$nama= $_POST['nama'];
$isi= $_POST['isi'];
$harga= $_POST['harga'];

 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $insert_query2 = mysqli_query($conn, "INSERT INTO kuliner (id_kuliner, nama_kuliner, isi_kuliner, gambar_kuliner, harga_kuliner) VALUES (NULL, '$nama', '$isi', '$newfilename', '$harga'); ");
    if ($insert_query2){
    echo "<script>
    alert ('Kuliner berhasil ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=kuliner.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, Kuliner gagal ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=add_kuliner.php'>";
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
            echo "<meta http-equiv='refresh' content='0;url=add_kuliner.php'>";

}

else {
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $insert_query2 = mysqli_query($conn, "INSERT INTO kuliner (id_kuliner, nama_kuliner, isi_kuliner, harga_kuliner, gambar_kuliner) VALUES (NULL, '$nama', '$isi', '$harga', '$newfilename'); ");
  if ($insert_query2){
  echo "<script>
  alert ('Kuliner berhasil ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=kuliner.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi galat, Kuliner gagal ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=add_kuliner.php'>";
  }
  } else {
      echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=add_kuliner.php'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------









>>>>>>> c3ce5c2fffbc273673df60b01429287ca52e608c
?>