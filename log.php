<html>
	<head>
		<title>
			Login
		</title>
	</head>
	<body>

	<center>會員登入</center>
	</br>
	<center>請輸入：</center>
	<center>帳號：<input type="text" size=10 name="username"></center>
	</br>
	<center>密碼：<input type="text" size=10 name="password"></center>
	</br>

	<?php
			session_start();
			$username=$_POST["username"];
			$password=$_POST["password"];
			$link=mysqli_connect("127.0.0.1","root","123456","a");#連線
			$read="SELECT * FROM user WHERE username='$username' AND password='$password'";#檢查是否有此帳號密碼
			$readresult=mysqli_query($link,$read);#連線做此動作
			$rows=mysqli_num_rows($readresult);#將資料存入$rows


			if($rows)
			{
				$_SESSION['username']=$username;
				$_SESSION["password"]=$password;
				header('Location:index.php');
			}
			else
			{
				header('refresh:3 ; url="login.php"');
				$say="登入失敗，3秒後回到登入畫面<br><br>";
				echo $say;
				
			}
		?>

		</body>