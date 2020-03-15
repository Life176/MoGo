<?php
	session_start();
	if ($_SESSION['active'] or $_COOKIE['active'])
	{
		echo "<script>alert(\"You already logined!\")</script>";
		echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://localhost/assets/php/account.php\">";
	} elseif(isset($_POST['login'])) {
		$namearr = str_split($_POST['loginName'], 1);
		$pswdarr = str_split($_POST['loginPasswd'], 1);
		if(count($namearr) <= 1) {
			echo "<script>alert(\"Please enter login!\")</script>";
			echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://localhost/assets/php/login.php\">";
		} elseif (count($pswdarr) <= 1) {
			echo "<script>alert(\"Please enter password!\")</script>";
			echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://localhost/assets/php/login.php\">";
		}
		include "pswd.php";
		$conn = connect();
		$pswd = $_POST['loginPasswd'];
		$name = $_POST['loginName'];
		$result = $conn->query("SELECT * FROM persons WHERE name = '$name'");
		while($row = $result->fetch_assoc()) {
			$hash = $row['pswd'];
		}
		if(password_verify($pswd, $hash))
		{
			$conn->query("UPDATE persons SET ip = '$ip'");
			echo "<script>alert(\"Login succes!\")</script>";
			if ($_POST['loginRemember']) {
				setcookie("name", $_POST['loginName'], time() + (86400 * 30), "/");
				setcookie("active", TRUE, time() + (86400 * 30), "/");
				setcookie("ip", $ip, time() + (86400 * 30), "/");
			} else {
				$_SESSION['name'] = $_POST['loginName'];
				$_SESSION['active'] = TRUE;
				$_SESSION['ip'] = $ip;
			}
			echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://localhost/assets/php/account.php\">";
		} else {
			echo "<script>alert(\"Login not succes(\")</script>";
		}
	}
?>

 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/pagesLogin/Login.css">
     <title>MoGo</title>
 </head>
 <body>
 
    <div class="form">
	<form action="login.php" method="POST">
        <h1>Login</h1>
        <div class="input-form">
            <input type="text" name="loginName" placeholder="Login">
        </div>
        <div class="input-form">
            <input type="password" name="loginPasswd" placeholder="Password">
        </div>
        <div class="input-form">
            <input type="submit" name="login" value="Sign in">
        </div>
		<div class="remember_inpt">
			<input type="checkbox" name="loginRemember">Remember?</input>
			<!-- <p class="remember-p">Remember? </p> -->
		</div>
        <a href="register.php" class="forget">No account? Create!</a>
	</form>
	</div>
 </body>
 </html>