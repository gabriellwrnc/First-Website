<?php 
	if(isset($_POST["submit"])){
		$username = $_POST["user"];
		$password = $_POST["pass"];

		if ($username == "admin" && $password == "admin") {
			header("refresh:1; url = berhasil.php");
		}

		else {
			header("refresh:1; url = gagal.php");
		}

	}
 ?>
