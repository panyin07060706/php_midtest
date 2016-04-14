<html>
	<head>
		<title>
			Register
		</title>
	</head>
	<body>

	<center>註冊會員</center>
	</br>
	<center>帳號：<input type="text" size=10 name="username"></center>
	</br>
	<center>密碼：<input type="text" size=10 name="password"></center>
	</br>
	<center>Email：<input type="text" size=10 name="email"></center>
	</br>
	<center>電話：<input type="text" size=10 name="phone"></center>
	</br>

	<form action="index.php" method="post">
	
	<?php
		//變數儲存
		$username=$_POST["username"];
		$password=$_POST["password"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$logintime=$_POST["logintime"];
		$lastlogintime=$_POST["lastlogintime"];

	@mysql_connect("127.0.0.1","root","123456");
		
		mysql_select_db("a");
		mysql_query("INSERT INTO user(username,password,email,phone,logintime,lastlogintime) VALUES ('$username','$password','$email','$phone','$logintime','$lastlogintime')");

	?>


	</body>
