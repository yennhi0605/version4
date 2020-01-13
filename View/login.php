<?php
	require '../Database/database.php';
	session_start();

	$sql = "SELECT * FROM User";
	$result = $db->query($sql)->fetch_all();


	/*====================Log in==========================*/

	function get_login($uname, $pass){
		global $result;
		global $checkLogin;
		$check = false;

		for ($i = 0; $i < count($result); $i++) {
			if ($result[$i][1] == $uname && $result[$i][2] == $pass) {
				if ($result[$i][4] == "admin") {
					header("location:indexAdmin.php");
				} else {
					header("location:indexUser.php");
				}

				$arr = array($uname, $pass);
				$_SESSION['login'] = $arr;
				$checkLogin = true;
				$check = true;
				return $uname;
			}
		}
		if ($check == false) {
	?>
			<script>
				alert("Login Fail");
			</script>

	<?php
		}
	}
	if (isset($_POST['login'])) {
		$uname = $_POST['uname'];
		$pass = $_POST['psw'];
		get_login($uname, $pass);
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Css/login.css">
</head>

<body>
	<form method="post">
		<div class="container" style="background-color: brown">
			<h2 style="text-align: center">Login</h2>
			<hr>
			<label><b style="margin-top: 30px">Username</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
			<hr>
			<button type="submit" name="login">Login</button>
		</div>
	</form>
</body>

</html>