<!DOCTYPE html>
<html>
<head>
	<title>∥   BEAUTY WORLD   ∥</title>
	<link href="trytry.css" rel="stylesheet" type="text/css" />
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<div id="Wrapper">
		<div id="Header">
			<CENTER><a href="http://127.0.0.1/trytry.php"><img src="https://scontent-tpe1-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/12718104_1125590937463023_6895429103174427201_n.jpg?oh=915282fbe41d0838ba19dee3c542ddbd&oe=57787379" width="" height="" border="0" ></a></CENTER>
			<div class="MENU">
				<ul>
  				<li><a href="mid1.php" title="首頁">│    首頁    │</a></li>
  				<li><a href="trytry.php" title="分享區"><B>│    校草    │</B></a></li>
  				<li><a href="flower.php" title="活動">│  校花  │</a></li>
  				<li><a href="level.php" title="排行榜">│  排行榜  │</a></li>
  				<li><a href="register.php" title="留言板">▌  會員註冊&nbsp;   ▌</a></li>
  				<li><a href="login.php" title="留言板">│  Login  │</a></li>
				</ul>
			</div>
		</div>

		<div id="Content">
		<div id="BOX">
        <p>&nbsp;</p>
        <h3 CLASS="AA">∥    討論區    ∥ </a> </h3></br>
        <a href="addmessage.php"><font face="微軟黑正體" color="#008866">▌     我要留言   &nbsp;   ▌</br>
        <HR>
<?php
$file = "roadguestbook.txt";
if ( !file_exists($file) or filesize($file) == 0 )
   echo "<h2>目前沒有任何留言！</h2><hr>";
else
   readfile($file);  // 讀取和顯示所有留言
?>


		</div>
		</HR>
		</font>


		<address><footer><CENTER>copyright 2016 by BeautyWorld</br>Designed by 高雄大學資管系</CENTER></footer></address>
		</body>
		</html>
