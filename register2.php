<html>
<head><title>∥   BEAUTY WORLD   ∥</title>
	 <link href="trytry.css" rel="stylesheet" type="text/css" />
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<div id="Wrapper">
		<div id="Header">
			</br>
		</br>
		</br>
		</br>
			<CENTER><a href="http://127.0.0.1/register.php"><img src="https://scontent-tpe1-1.xx.fbcdn.net/hphotos-xlf1/t31.0-8/12976743_1127900323898751_7168771988374901860_o.jpg" width="" height="" border="0" ></a></CENTER>
			</br>
		</br>
		</br>
		</br>
			<div class="MENU">
				<ul>
  				<li><a href="mid1.php" title="首頁">│    首頁    │</a></li>
  				<li><a href="trytry.php" title="分享區">│  校草  │</a></li>
  				<li><a href="flower.php" title="活動">│  校花  │</a></li>
  				<li><a href="level.php" title="排行榜">│  排行榜  │</a></li>
  				<li><a href="register.php" title="留言板">▌  會員註冊&nbsp;  ▌</a></li>
  				<li><a href="login.php" title="留言板">│   Login   │</a></li>
				</ul>
			</div>
		</div>
		</div>

		</br>
		
		<HR>
		</br>
		</br>
		<center><font  face="微軟黑正體" color="#01814A">▌   &nbsp;資料確認  &nbsp;&nbsp;  ▌</font></center></br></br>
		
     	<form  action="register.php" method="post">
		<font  face="微軟黑正體" color="#01814A"><center>
		<?php
		//變數儲存

		$name=$_POST["name"];
		$gender=$_POST["gender"];
		$blood=$_POST["blood"];
		$blood=$_POST["blood_2"];
		$birth_y=$_POST["birth_y"];
		$birth_m=$_POST["birth_m"];
		$birth_d=$_POST["birth_d"];
		$idnumber=$_POST["idnumder"];
		$address=$_POST["address"];
		$pro=$_POST["pro"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$account=$_POST["account"];
		$password=$_POST["password"];
		

		//連結mysql與新增資料
		@mysql_connect("127.0.0.1","  ","  ") ;
		
		mysql_select_db("gossipy");
		mysql_query("INSERT INTO users(name,gender,blood,blood_2,birth_y,birth_m,birth_d,idnumber,address,pro,phone,email,account,password) VALUES ('$name','$gender','$blood','$blood_2','$birth_y','$birth_m','$birth_d','$idnumber','$address','$pro','$phone','$email','$account','$password')");
		
		echo "姓名:";
		echo $_POST["name"];
		echo "<br>";
		echo "<br>";
		echo "性別:";
		echo $_POST["gender"];
		echo "<br>";
		echo "<br>";
		echo "血型:";
		echo $_POST["blood"];
		echo $_POST["blood_2"];
		echo "<br>";
		echo "<br>";
		echo "生日:";
		echo $_POST["birth_y"];
		echo "年";
		echo $_POST["birth_m"];
		echo "月";
		echo $_POST["birth_d"];
		echo "日";
		echo "<br>";
		echo "<br>";
		echo "身分證字號:";
		echo $_POST["idnumber"];
		echo "<br>";
		echo "<br>";
		echo "地址:";
		echo $_POST["address"];
		echo "<br>";
		echo "<br>";
		echo "職業:";
		echo $_POST["pro"];
		echo "<br>";
		echo "<br>";
		echo "電話:";
		echo $_POST["phone"];
		echo "<br>";
		echo "<br>";
		echo "電子郵件:";
		echo $_POST["email"];
		echo "<br>";
		echo "<br>";
		echo "帳號:";
		echo $_POST["account"];
		echo "<br>";
		echo "<br>";
		echo "密碼:";
		echo $_POST["password"];
		echo "<br>";


		?>
		</center></font>
     </br>
     </br>
<center><font  face="微軟黑正體" color="#01814A">確認註冊完畢，回登入頁面</font></center>
<center><a href="http://127.0.0.1/login.php"><img src="http://www.unixigroup.com/img/goback2.png" width="7%" height="7%" border="0" align="center"></a>
		</center>




    </HR>
  <HR width="100%">
<address><footer><CENTER><font face="微軟黑正體" color="black">copyright 2016 by BeautyWorld</br>Designed by 高雄大學資管系</font></CENTER></footer></address>
    </body>
    </html>
