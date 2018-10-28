<?php 
/* konten.php
     untuk retrieve seluruh data pos polisi dari server ke native
    */



// array for JSON response 
//$kat = $_GET['kategori'];
$response = array();
// include file koneksi.php 
include_once("server.php");
$result = mysql_query('SELECT * FROM tb_kategori where id_kategori != -1') or die(mysql_error());

if (mysql_num_rows($result) > 0) {
$response["result"] = array();
while ($row = mysql_fetch_array($result)) {
$daftar = array(); 
$daftar["id_kategori"] = $row["id_kategori"];
$daftar["nama"] = stripslashes($row["nama"]);
$daftar["keterangan"] = stripslashes($row["keterangan"]); 

array_push($response["result"], $daftar); }
$response["success"] = 1;
echo json_encode($response); 
} 
else {
$response["success"] = 0; 
$response["message"] = "Tidak Ada Data"; 
// echoing JSON response
 echo json_encode($response); 
 } 
 ?>