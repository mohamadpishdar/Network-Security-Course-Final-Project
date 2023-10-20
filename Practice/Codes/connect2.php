<?php 
$dbname="shopdb";
$username="root";
$password="";
$servername="localhost";
$dsn="mysql:host=$servername;dbname=$dbname";
try{
$conecct=new PDO ($dsn ,$username,$password);
return $conecct;
}

catch(PDOException $error) {
	echo "khata";

}
function checkparam ($val) {
	$value = addslashes($val);
	$string=htmlspecialchars($value);
	$string2=strip_tags($string);
	return $string2;
     
}
function checkGetParam ($val1) {

$value = addslashes($val1);
	$string=htmlspecialchars($value);
	$string2=strip_tags($string);
		$string3=intval($string2);
	return $string3;

}
function hash_value ($val2) {
	return md5($val2)."k@mmn!";
	
}

?> 