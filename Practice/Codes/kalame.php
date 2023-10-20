<?php
  ob_start();
session_start();
if ( $_SESSION['adm']!=1)
 header ("location:adminlogin.php");
echo $_SESSION['usermodir']. " خوش آمدید";
include 'connect2.php' ;
$_SESSION['msg']="";
if (isset($_POST['pass1'])){
$_SESSION['msg']="کلمه ی عبور شما با موفقیت تغییر یافت";
$re= $conecct->prepare("update admins set pass=? where username like ? ");
$re->bindValue(1,hash_value($_POST['pass1']));$re->bindValue(2,$_SESSION['usermodir']);
$re->execute();
//mysql_query( "update admins set pass='".$_POST['pass1']."' where username like '".$_SESSION['usermodir']."'");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>پنل مدیر</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<style type="text/css" media="screen">
		@import url(../style.css );
		@import url(../tab.css );
	</style>
    <script language="javascript" >   
   function check (x2 ,x3 ) 
{
if (x2=='' ){
alert("لطفا  کلمه ی عبور را وارد کنید");
document.getElementById('pass1').focus();
return false ;
}
if (x3!=x2 ){
alert("کلمه های عبور یکسان نیستند");
document.getElementById('pass1').focus();

return false ;
}
else 
return true ;

}
</script>
 <script src="../js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/01.js"></script>
<script type="text/javascript" src="../js/02.js"></script>
<script type="text/javascript" src="../js/03.js"></script>
<script type="text/javascript" src="../js/general.js"></script>
<script type="text/javascript">
function getElementsByClassName(className, tag, elm){
	var testClass = new RegExp("(^|\\s)" + className + "(\\s|$)");
	var tag = tag || "*";
	var elm = elm || document;
	var elements = (tag == "*" && elm.all)? elm.all : elm.getElementsByTagName(tag);
	var returnElements = [];
	var current;
	var length = elements.length;
	for(var i=0; i<length; i++){
		current = elements[i];
		if(testClass.test(current.className)){
			returnElements.push(current);
		}
	}
	return returnElements;
}

function addClassName(elm, className){
    var currentClass = elm.className;
    if(!new RegExp(("(^|\\s)" + className + "(\\s|$)"), "i").test(currentClass)){
        elm.className = currentClass + ((currentClass.length > 0)? " " : "") + className;
    }
    return elm.className;
}

function removeClassName(elm, className){
    var classToRemove = new RegExp(("(^|\\s)" + className + "(\\s|$)"), "i");
    elm.className = elm.className.replace(classToRemove, "").replace(/^\s+|\s+$/g, "");
    return elm.className;
}

function activateThisColumn(column) {
	var table = document.getElementById('pricetable');
	
	// first, remove the 'on' class from all other th's
	var ths = table.getElementsByTagName('th');
	for (var g=0; g<ths.length; g++) {
		removeClassName(ths[g], 'on');
	}
	// then, remove the 'on' class from all other td's
	var tds = table.getElementsByTagName('td');
	for (var m=0; m<tds.length; m++) {
		removeClassName(tds[m], 'on');
	}
	
	// now, add the class 'on' to the selected th
	var newths = getElementsByClassName(column, 'th', table);
	for (var h=0; h<newths.length; h++) {
		addClassName(newths[h], 'on');
	}
	// and finally, add the class 'on' to the selected td
	var newtds = getElementsByClassName(column, 'td', table);
	for (var i=0; i<newtds.length; i++) {
		addClassName(newtds[i], 'on');
	}
}
</script>
</head>
<body>
<div class="top"></div>
<div class="base">
<div class="middle">
<div class="logo">&nbsp; </div>
<div class="topmenu">
<div class="right"></div>
<div class="body">
<ul id="iconbar">
<li class="home"><a href="index.php">صفحه اصلی مدیر </a></li>
<li><a href="adminlogout.php">خروج</a></li>
</ul>
</div>
<div class="left">
</div><!--Top Menu -->
<div class="content">
<div class="content_top"></div>
<div class="content_bg">

<div id="right2">

		<div class="about"><div class="about_top"></div><div class="about_body">		<div class="menu_title"><h6> دسترسی ها </h6></div><div class="text">		<ul>
				<li><a href="cat/" title="تغییر آدرس سرور سوییس">مدیریت دسته ها</a></li>
				<li><a href="product/" title="سرور جدید از کشور هلند">مدیریت کالا ها </a></li>
				<li><a href="user/" title="ساکس رایگان">مدیریت کاربران</a></li>
				<li><a href="order/" title="ساکس رایگان">مدیریت سفارشات</a></li>
               
				</ul>
		</div></div><div class="about_bottom"></div></div><!--Menu -->
</div><!--Right -->
<div id="left2">
<div class="post">
<div class="post_top">
  <h2>تغییر کلمه عبور</h2></div>
<div class="post_body">
<form action="" method="post"  onsubmit="return check( pass1.value , pass2.value)" >
  <table width="100%" border="1" class="text">
    <tr>
      <td colspan="2"><?php echo $_SESSION['msg'] ?></td>
      </tr>
    <tr>
      <td>کلمه ی عبور جدید </td>
      <td><label for="pass1"></label>
        <input type="text" name="pass1" id="pass1" /></td>
    </tr>
    <tr>
      <td>تکرار کلمه ی عبور </td>
      <td><label for="pass2"></label>
        <input type="text" name="pass2" id="pass2" /></td>
    </tr>
    <tr>
      <td colspan="2"><input class="dddd" type="submit" name="button"  id="button" value="تغییر" /></td>
      </tr>
  </table>
  </form>
</div>
<div class="post_bottom"></div>
</div>
</div><!--Left -->
</div>
<div class="content_bottom"></div>
</div><!--Conetnt -->
<div class="footer">
<div class="footer_right"></div>
<div class="footer_body"><div class="text"><center>
کلیه حقوق مادی و معنوی این وب سایت برای شرکت پیشدار محفوظ می باشد.<br>
</center>
</div></div>
<div class="footer_left"></div>
</div>  
<div class="clr"></div>
</div><!--Middle -->
</div>
</body>
</html>
