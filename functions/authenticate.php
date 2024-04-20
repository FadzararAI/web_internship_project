<?php
session_start()
include 'config.php';
	if(isset($_POST["signin"])){
		$eaddress = $_POST["email"];
		$pass = $_POST["password"];
		$result_u = $conn->query("SELECT email,password FROM employee_users WHERE email='$eaddress' AND password='$pass'");
		$result_c = $conn->query("SELECT email,password FROM company_users WHERE email='$eaddress' AND password='$pass'");
		if($result_u->num_rows > 0){ //normal users
			while($row = mysqli_fetch_array($result_u)){
				$_SESSION['username'] = $row['email'];
				header("Location: ");
			}
		}
		elseif ($result_c->num_rows > 0) { //company
			while($row = mysqli_fetch_array($result_c)){
				$_SESSION['company'] = $row['email'];
				header("Location: ");
			}
		}
	}

?>
