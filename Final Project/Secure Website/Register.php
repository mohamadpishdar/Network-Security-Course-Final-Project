<?php 
	
	include 'connect.php';
if (isset($_POST['user'])){
	echo "Thank You For Your Choice";
	include 'connect.php';
	mysql_query("INSERT INTO `shopdb`.`user` (
`Username` ,
`pass` ,
`mail`
)
VALUES (
'".$_POST['user']."', '".$_POST['pass']."', '".$_POST['mail']."'
);");
	
	
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ثبت نام کاربران</title>
<style type="text/css">
body,td,th {
	color: #039;
}
body {
	background-color: #9C0;
	margin-left: 100px;
	margin-right: 100px;
}
</style>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
<table width="366" border="1" align="center">
  <tr>
    <td width="170">USERNAME</td>
    <td width="92"><label for="user"></label>
    <input type="text" name="user" id="user" /></td>
  </tr>
  <tr>
    <td>MAIL</td>
    <td><label for="mail"></label>
    <input type="text" name="mail" id="mail" /></td>
  </tr>
  <tr>
    <td>PASSWORD</td>
    <td><label for="pass"></label>
    <input type="text" name="pass" id="pass" /></td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" name="button" id="button" value="Submit" />
    </td>
  </tr>
</table>
 </form>
</body>
</html>