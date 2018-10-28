<?php
/* fdetail_konten.php
     untuk retrieve data pos polisi detail dari server ke native
    */
$kd = $_GET['kode'];
include("koneksi.php");
$q = mysql_query('SELECT * FROM tb_lokasi_penting where id="'.$kd.'"');
$v = '{"result" : [';
while($r=mysql_fetch_array($q))
{
	$ob = array('"','<br>','</br>');
		$v .= '{"id" : "'.$r['id'].'", "title" : "'.str_replace($ob,' ',strip_tags($r["title"])).'", "streetAddress" : "'.str_replace($ob,' ',strip_tags($r["streetAddress"])).'", "number" : "'.str_replace($ob,' ',strip_tags($r["number"])).'", "lat" : "'.str_replace($ob,' ',strip_tags($r["lat"])).'" , "lng" : "'.str_replace($ob,' ',strip_tags($r["lng"])).'" ,"image" : "http://topaplikasi.com/ar-lacak/images/'.str_replace($ob,' ',strip_tags($r["image"])).'", "deskripsi" : "'.str_replace($ob,' ',strip_tags($r["deskripsi"])).'"}';

}
$v .= ']}';
echo $v;
?>