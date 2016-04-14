<html>
	<head>
		<title>
			Motify
		</title>
	</head>
	<body>

	<center>修改資料</center>


	<center>密碼：<input type="text" size=10 name="password"></center>
	</br>
	<center>Email：<input type="text" size=10 name="email"></center>
	</br>
	<center>電話：<input type="text" size=10 name="phone"></center>
	</br>


	<?php
	$no=$_GET["no"];
	$link=mysqli_connect("localhost","root","","123456");

	$read="SELECT * FROM user WHERE No=".$no;
	$readresult=mysqli_query($link,$read);
	$result=mysqli_fetch_array($readresult);

	echo "<form action='updateresult.php' method='post'>";
	echo "編號:".$result[0]."<br/>";
	echo "<input type='hidden' name='no' value='".$result[0]."'>";
	echo "密碼：<input type='text' name='password' value='".$result[2]."'><br/>";
	echo "Email：<input type='text' name='email' value='".$result[3]."'><br/>";
	echo "電話：<input type='text' name='phone' value='".$result[4]."'><br/>";
	echo "</form>";

	?>
	</br></br></br>



	<center><a href="http://127.0.0.1/index.php">回首頁</a></center>



	</body>
