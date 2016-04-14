<html>
	<head>
		<title>
			Delect
		</title>
	</head>
	<body>

	<center>確定刪除</center>

	<?php
	$no=$_GET["no"];
	$link=mysqli_connect("localhost","root","","a");
	$del="DELETE FROM user WHERE No=".$no;
	mysqli_query($link,$del);
//讀取資料
	$read="SELECT * FROM user";
	$readresult=mysqli_query($link,$read);
	?>

	</br></br></br></br>

	<center><a href="http://127.0.0.1/index.php">回首頁</a></center>







</body>
