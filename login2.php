<html>
<head><title>∥   BEAUTY WORLD   ∥</title>
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
  				<li><a href="trytry.php" title="分享區">│  校草  │</a></li>
  				<li><a href="flower.php" title="活動">│  校花  │</a></li>
  				<li><a href="level.php" title="排行榜">│  排行榜  │</a></li>
  				<li><a href="register.php" title="留言板">│  會員註冊  │</a></li>
  				<li><a href="login.php" title="留言板">▌  Login  &nbsp; ▌</a></li>
				</ul>
			</div>
		</div>
    </br>





<?php

	<?php
			session_start();
			$account=$_POST["account"];
			$password=$_POST["password"];
			$link=mysqli_connect("127.0.0.1"," "," ");#連線
			mysql_select_db("gossipy");
			$read="SELECT * FROM users WHERE account='$account' AND password='$password'";#檢查是否有此帳號密碼
			$readresult=mysqli_query($link,$read);#連線做此動作
			$rows=mysqli_num_rows($readresult);#將資料存入$rows


			if($rows)
			{
				$_SESSION['account']=$account;
				header('Location:trytry.php');
				$say="登入成功，3秒後回到首頁畫面<br><br>";
				echo $say;
			}
			else
			{
				
				header('refresh:3 ; url="login.php"');
				$say="登入失敗，3秒後回到登入畫面<br><br>";
				echo $say;
				
			}
		?>
	
	</div>
	<HR width="100%">
	<address><footer><CENTER><font face="微軟黑正體" color="black">copyright 2016 by BeautyWorld</br>Designed by 高雄大學資管系</font></CENTER></footer></address>
	</body>
	</html>

