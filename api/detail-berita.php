<?php

/* detail_berita.php
  untuk retrieve data berita terbaru dari server ke native
 */
$kd = 1;
include("server.php");
$q = mysql_query('SELECT * FROM tb_berita where id="' . $kd . '"');
$v = '{"result" : [';
while ($r = mysql_fetch_array($q)) {
    $ob = array('"', '<br>', '</br>');
    $v .= '{"id" : "' . $r['id'] . '", "judul" : "' . str_replace($ob, ' ', strip_tags($r["judul"])) . '", "tanggal" : "' . str_replace($ob, ' ', strip_tags($r["tanggal"])) . '","isi" : "' . str_replace($ob, ' ', strip_tags($r["isi"])) . '","gambar" : "http://topaplikasi.com/ar-lacak/images/' . str_replace($ob, ' ', strip_tags($r["gambar"])) . '"}';
}
$v .= ']}';
echo $v;
?>