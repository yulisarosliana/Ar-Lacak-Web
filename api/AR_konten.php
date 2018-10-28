<?php
/* AR_konten.php
     untuk retrieve data  pos polisi dari server ke native
    */
$hostname = "localhost";
$mysqluser = "root";
$mysqlpassword = "";
$conn = mysql_connect($hostname,$mysqluser,$mysqlpassword);
if (!$conn){
	die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('smart_lapor')){
	die('Could not select database: ' . mysql_error());
}

$result = mysql_query('SELECT `id`,`deskripsi`,`lat`,`lng`,`altitude`,`title`,`streetAddress`,`number`,`deskripsi`,`image` FROM `tb_lokasi_penting` ORDER BY id ASC');
	if (!$result) {
		die('Could not query:' . mysql_error());
	}
	$rows = array();
	while($r = mysql_fetch_assoc($result)) {
		$rows[] = array(
			"id" => $r["id"],
			"lat" => $r["lat"],
			"lng" => $r["lng"],
			"deskripsi" => $r["deskripsi"],
			"altitude" => $r["altitude"],
			"title" => $r["title"],
			"streetAddress" => $r["streetAddress"],
			"number" => $r["number"]
		);

	}
	mysql_close($conn);
echo '{"results":'.json_encode($rows).'}';
?>
