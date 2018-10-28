<?php
	/* login.php
     untuk pengecekkan akun login native ke server
    */
	include 'koneksi.php';
	
	class usr{}
	
	$username = $_POST["username"];
	$password = sha1($_POST['password']);
    // $password = $_POST['password'];
	
	if ((empty($username)) || (empty($password))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	}
	
	$query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
	
	$result = mysqli_query($con, $query);
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		$response->message = "Selamat datang ".$row['username'];
		$response->id_user = $row['id_user'];
		$response->username = $row['username'];
		$response->email = $row['email'];
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Username atau password salah";
		die(json_encode($response));
	}
	
	mysql_close();

?>