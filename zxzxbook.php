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
  				<li><a href="message.php" title="留言板">│  會員註冊&nbsp;   │</a></li>
  				<li><a href="login.php" title="留言板">│  Login  │</a></li>
				</ul>
			</div>
		</div>
</br>
		
		<HR>
		</br>
		</br>
     
     
    
  

     <form  action="zxzx.php" method="post">
     <center><font  face="微軟黑正體" color="#01814A">▌   &nbsp;留言確認  &nbsp;&nbsp;  ▌</font></center></br></br>
  <center><font  face="微軟黑正體" color="#01814A">
<?php
$file = "zxzx.txt";
if ( !file_exists($file) ) { // 檔案不存在
   $fp = fopen($file, "w");  // 建立文字檔案
   fclose($fp);
}
$email = $_POST["Email"];  // 取得電子郵件地址
$email = "<a href=mailto:".$email.">".$email."</a>";
$messages = nl2br($_POST["Message"]);
$fp = fopen($file, "a");  // 新增留言

$today=date_default_timezone_set("Asia/Taipei");
$today = date("Y年m月d日  h:i:s a");
$msg  = "<b>留言時間：</b>".$today."<br/>";
$msg .= "<b>姓名：</b>".$_POST["Name"]."<br/>";
$msg .= "<b>電子郵件：</b>".$email."<br/>";
$msg .= "<b>留言：</b>".$messages."<br/><hr/>";
fputs($fp, $msg);  // 寫入文字檔案
fclose($fp);       // 關閉文字檔案
echo $msg;
?>
</center></font>
</br>
</br>
<center><a href="zxzxmes.php"><font  face="微軟黑正體" color="#01814A"> 新增留言&nbsp; </font></a>  <a href="zxzx.php"><font  face="微軟黑正體" color="#01814A"> 檢視留言&nbsp; </font></a> </center>

		</div>
		</body>
		</html>
