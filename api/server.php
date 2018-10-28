<?php
/* server.php
     untuk insert data kecelakaan dan insert akun user native ke server
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
@$operasi = $_GET['operasi'];

switch ($operasi) {
    case "view":
        /* Source code untuk Menampilkan Biodata */

        $query_tampil_kecelakaan = mysql_query("SELECT * FROM tb_kecelakaan") or die(mysql_error());
        $data_array = array();
        while ($data = mysql_fetch_assoc($query_tampil_kecelakaan)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        break;
    case "insert":
        /* Source code untuk Insert data */
        @$id_user = $_GET['id_user'];
        @$lokasi = $_GET['lokasi'];
        @$foto = $_GET['foto'];
        @$waktu_pelaporan = $_GET['waktu_pelaporan'];
        @$detail = $_GET['detail'];
        @$lat = $_GET['lat'];
        @$lng = $_GET['lng'];
        @$deskripsi = $_GET['deskripsi'];
        @$id_kategori = $_GET['id_kategori'];
        $query_insert_data = mysql_query("INSERT INTO tb_kecelakaan (id_user, lokasi, foto, waktu_pelaporan, detail, lat, lng, deskripsi, id_kategori) VALUES('$id_user', '$lokasi', '$foto', '$waktu_pelaporan', '$detail', '$lat', '$lng', '$deskripsi', '$id_kategori')");

        // insert ke tabel notif
        $last_id = mysql_query('SELECT MAX(id_kecelekaan) FROM tb_kecelakaan') or die(mysql_error());

        $row = mysql_fetch_array($last_id);
        $id_recent = (int)$row["MAX(id_kecelekaan)"];

        $query_insert_notif = mysql_query("INSERT INTO tb_notifikasi (id_kecelakaan, sudah_dibaca) VALUES ('$id_recent', '0')");

        if ($query_insert_data) {
            echo "Data Laporan Berhasil Dikirim";
        } else {
            echo "Error Insert Data Laporan " . mysql_error();
        }

        break;
        case "insertUser":
        /* Source code untuk Insert data */
        @$username = $_GET['username'];
        @$password = sha1($_GET['password']);
        @$nik = $_GET['nik'];
        @$nama_lengkap = $_GET['nama_lengkap'];
        @$tempat_lahir = $_GET['tempat_lahir'];
        @$tanggal_lahir = $_GET['tanggal_lahir'];
        @$jenis_kelamin = $_GET['jenis_kelamin'];
        @$alamat = $_GET['alamat'];
        @$pekerjaan = $_GET['pekerjaan'];
        @$email = $_GET['email'];
        @$agama = $_GET['agama'];
        @$no_hp = $_GET['no_hp'];
        @$foto = $_GET['foto'];
        $query_insert_data = mysql_query("INSERT INTO tb_user (username, password, nik, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, pekerjaan, email, agama, no_hp, foto) VALUES('$username', '$password', '$nik', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$pekerjaan', '$email', '$agama', '$no_hp', '$foto')");
        if ($query_insert_data) {
            echo "Registrasi Akun Berhasil";
        } else {
            echo "Error Insert Data User " . mysql_error();
        }

        break;
    default:
        break;
}
?>