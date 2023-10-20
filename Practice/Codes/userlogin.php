<?php 
ob_start();
session_start();
include 'funcs.php';
include 'connect.php';
 $_SESSION['usr']=0;
 $_SESSION['msg1']='';
	 if (isset($_POST['us'])){
		
			$re=mysql_query("SELECT * FROM user WHERE username='".$_POST["us"]."' AND pass='".$_POST["pass"]."'");
			// $re->bindValue(1,$_POST['us']);
			// $passn=hash_value($_POST['pass']);
			//  $re->bindValue(2,$passn);
			//  $re->execute();
            //  $rr=$re->fetch(PDO::FETCH_ASSOC);

 if ( mysql_num_rows($re)>=1){
 $_SESSION['usr']=1;
 header("location:namayesh.php?id=".$_POST['us']);
 }
 else 
  $_SESSION['msg1']="لطفا در وارد  کردن نام کاربری یا کلمه ی عبور دقت کنید ";
 }
  
    
     
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
  <style type="text/css" media="screen">
		@import url(style.css );
		@import url(tab.css );
	body,td,th {
	color: #000;
	font-family: Tahoma, Geneva, sans-serif;
}
   .aaaa {
	background-color: #CF6;
}
  </style>
<style type="text/css">
.about .about_body .text ul table tr td #form1 {
	text-align: center;
}
.about .about_body .menu_title h6 {
	text-align: center;
}
.about .about_body .text {
	text-align: right;
}
body {
	background-color: #360;
}
</style>
<title>ورود مدیر</title>
</head>
<body>
<table align="center">
<tr>
<td>
<div class="about"><div class="about_top"></div><div class="about_body">	
        	<div class="menu_title">
		  <h6>فرم ورود کاربران</h6></div><div class="text">		<ul>
          <form action="" method="post" >
            <table width="100%" border="1">
              <tr>
                <td colspan="2"><?php echo $_SESSION['msg1'] ?>&nbsp;</td>
                </tr>
              <tr>
                <td>نام کاربری :</td>
                <td><label for="us"></label>
                  
                  <input type="text" name="us" id="us" /></td>
                </tr>
              <tr>
                <td>کلمه ی عبور :</td>
                <td><input type="text" name="pass" id="pass" /></td>
                </tr>
              
              <tr>
                <td colspan="2"><input name="Reset" type="reset" class="a" id="button" value="پاک کردن" />
                  <input name="button2" type="submit" class="a" id="button2" value="ورود" /></td>
                </tr>
            </table>
            </form>

          </ul>
		    <p align="center">&nbsp;</p>
</div></div><div class="about_bottom"></div></div>
</td></tr></table>
</body>
</html>