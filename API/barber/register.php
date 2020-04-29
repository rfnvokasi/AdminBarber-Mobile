<?php

include("config.php");

$nama_user = $_POST['nama_user'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user VALUES ( NULL,'$nama_user' , '$email', '$password' )";
$query = mysqli_query($db , $sql);

// apakah query update berhasil ?
if ($query) {
  echo json_encode(array('message'=>'Anda berhasil terdaftar.'));
} else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan");
}