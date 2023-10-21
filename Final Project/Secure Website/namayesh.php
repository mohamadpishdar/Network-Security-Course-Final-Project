
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>خوش آمدید</title>
<style type="text/css">
body {
	background-color: #9C3;
}
</style>
</head>

<body>
<div align="center">
<?php 
include 'connect.php';
$result=mysql_query("select * from user where Username='".$_GET["id"]."'" );
while ($row=mysql_fetch_assoc($result)) {
	echo "Your Name: ". $row["Username"];
	echo " *****     Your Mail Is : ". $row["mail"];

	
	
}


?>
</div>
</body>
</html>