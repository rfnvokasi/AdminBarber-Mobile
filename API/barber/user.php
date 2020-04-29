<?php

include("config.php");

$nama_user= $_POST['nama_user'];


$sql = "SELECT id FROM user WHERE nama_user='$nama_user'";
$result = array();
$query = mysqli_query($db, $sql);
$stat=mysqli_num_rows ( $query ); 

array_push($result, array('status' => $stat));
echo json_encode(array("result" => $result));
?>