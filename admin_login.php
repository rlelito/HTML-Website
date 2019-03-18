<?php
	if(isset($_POST['Login']) and isset($_POST['Password'])){
		include("p_connect.php");

		$nick = $_POST['Login'];
		$pass = $_POST['Password'];
	
		$sql = "SELECT Id FROM Admin WHERE Login = '$nick' and Password = '$pass'";
		$results = mysqli_query($conn, $sql);
		if(mysqli_num_rows($results) == 1)
		{
			$row = mysqli_fetch_array($resukts);
			session_start();
			$_SESSION['Login'] = $_POST['Login'];
			$_SESSION['Id'] = $row[0];
			header("location: admin.php");
		}
		else
		{
			header("location: admin_zaloguj.html");
			echo '<br/><div class="alert alert-danger">Blad</div>';
		}
	}
?>