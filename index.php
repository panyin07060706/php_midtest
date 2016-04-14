<html>
	<head>
		<title>
			Index
		</title>
	</head>
	<body>


	<?php
	$username=$_POST["username"];
	$logintime=$_POST["logintime"];
	$lastlogintime=$_POST["lastlogintime"];
	
	echo $_POST["username"];
	echo "歡迎回來！";
	echo "<br>";
	echo "您的上一次登入時間為";
	echo $_POST["logintime"];
	echo "<br>";
	echo "您的登入次數";
	echo $_POST["lastlogintime"];
	echo "次";
	echo "<br>";






	?>






	<center><a href="http://127.0.0.1/profile.php">修改資料請點我</a></center>

	</br>