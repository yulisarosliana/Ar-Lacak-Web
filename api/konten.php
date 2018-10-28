<?php 
/* konten.php
     untuk retrieve seluruh data pos polisi dari server ke native
    */

header('Content-Type: application/json');

// array for JSON response 
//$kat = $_GET['kategori'];
$response = array();
// include file koneksi.php 
include_once("koneksi.php");
$result = mysql_query('SELECT * FROM tb_lokasi_penting') or die(mysql_error());

if (mysql_num_rows($result) > 0) {
$response["result"] = array();
while ($row = mysql_fetch_array($result)) {
$daftar = array(); 
$daftar["id"] = $row["id"];
$daftar["lat"] = $row["lat"];
$daftar["lng"] = $row["lng"];
$daftar["altitude"] = $row["altitude"];
$daftar["title"] = stripslashes($row["title"]);
$daftar["image"] = stripslashes($row["image"]); 
$daftar["streetAddress"] = stripslashes($row["streetAddress"]); 
$daftar["number"] = stripslashes($row["number"]);
$daftar["deskripsi"] = stripslashes($row["deskripsi"]);
$daftar["image"] = "http://topaplikasi.com/ar-lacak/images/".stripslashes($row["image"]);
// $daftar["kategori"] = stripslashes($row["kategori"]);  



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