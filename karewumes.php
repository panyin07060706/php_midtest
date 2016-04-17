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
  				<li><a href="register.php" title="留言板">│  會員註冊&nbsp;   │</a></li>
  				<li><a href="login.php" title="留言板">│  Login  │</a></li>
				</ul>
			</div>
		</div>
</br>
		<HR>
		</br>
		</br>
<center><font  face="微軟黑正體" color="#01814A">▌   &nbsp;回覆內容  &nbsp;&nbsp;  ▌</font></center></br></br>
<form action="karewubook.php" method="post">
<CENTER><table>
  <tr>
    <td><font  face="微軟黑正體" color="#01814A">姓名: </br></font></td>
    <td><input size=10 type="text" size="30" name="Name"></td>
  </tr>
  </br>
  <tr>
    <td><font  face="微軟黑正體" color="#01814A">電子郵件: </font></td>
    <td><input type="text" size="30" name="Email"></td>
  </tr>
  <tr>
    <td><font  face="微軟黑正體" color="#01814A">留言: </font></td>    
    <td>
       <textarea name="Message" rows="4" cols="30"></textarea>
    </td>
  </tr>

</table></br></br><hr/></CENTER>

<CENTER><input type="submit" name="Send" value="送出留言">
<input type="reset" name="Reset" value="重設欄位"></CENTER>
</form>


<?php
$file = "karewu.txt";
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
fputs($fp, $msg);  // 寫入文字檔案
fclose($fp);       // 關閉文字檔案
echo $msg;
?>


		</div>
		</body>
		</html>
