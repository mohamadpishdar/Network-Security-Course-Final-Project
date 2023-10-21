<?php 
 ob_start();
session_start();
if ( $_SESSION['adm']!=1)
 header ("location:../adminlogin.php" );
include '../func/connect2.php';
$result=$conecct->prepare("select * from admins where username=? ");
$result->bindValue(1,$_SESSION['usermodir']);
$result->execute();
$rr=$result->fetch(PDO::FETCH_ASSOC); 
 if ($rr['sathdastras']!=0)
 header ("location:index.php?da=1");
$payam=false ;
if (isset($_POST['moases']) && isset($_POST['mail']) ){
$payam=true;
$re1=$conecct->prepare("update about set tell =? , moases =?, address =?, email =? , posti= ? where aboutid=1");
$re1->bindValue(1,$_POST['tell']);
$re1->bindValue(2,$_POST['moases']);
$re1->bindValue(3,$_POST['address']);
$re1->bindValue(4,$_POST['mail']);
$re1->bindValue(5,$_POST['posti']);
$re1->execute();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>مدیریت اطلاعات</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<style type="text/css" media="screen">
		@import url(../style.css );
		@import url(../tab.css );
	</style>
    <script language="javascript" >
    
   function check ( x1,x2 ,x3,x4,x5 ) 
{
if (x1=='' ){
alert("لطفا  نام موسس شرکت را وارد کنید");
document.getElementById('moases').focus();
return false ;
}	
	
if (x2=='' ){
alert("لطفا آدرس پستی شرکت را وارد کنید");
document.getElementById('posti').focus();
return false ;
}
if (x3=='' ){
alert("لطفا  تلفن شرکت را وارد کنید");
document.getElementById('tell').focus();
return false ;
}	
if (x4=='' ){
alert("لطفا  آدرس شرکت را وارد کنید");
document.getElementById('address').focus();
return false ;
}	
if (x5=='' ){
alert("لطفا  ایمیل شرکت را وارد کنید");
document.getElementById('mail').focus();
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
        <li><a href="product/" title="تغییر آدرس سرور سوییس">مدیریت آگهی ها</a></li>
        				<li><a href="order/" title="ساکس رایگان">مدیریت سفارشات</a></li>
				<li><a href="user/" title="ساکس رایگان">مدیریت کاربران</a></li>
                	<li><a href="slider.php" title="ساکس رایگان">مدیریت تصاویر</a></li>
                                    	<li><a href="slider.php" title="ساکس رایگان">مدیریت تصاویر</a></li>
				</ul>
		</div></div><div class="about_bottom"></div></div><!--Menu -->
</div><!--Right -->
<div id="left2">
<div class="post">
<div class="post_top">
  <h2>مدیریت اطلاعات</h2></div>
<div class="post_body">
<form action="" method="post"  onsubmit="return check(moases.value , posti.value ,tell.value,address.value , mail.value )" >
  <table width="100%" border="1" class="text">
    <tr>
      <td colspan="2"><?php if ($payam==true)echo "اطلاعات با موفقیت ثبت گردید"; ?></td>
      </tr>
    <tr>
      <td>موسس</td>
      <td><label for="pass1"></label>
        <input type="text" name="moases" id="moases" /></td>
    </tr>
    <tr>
      <td>آدرس پستی شرکت</td>
      <td><input type="text" name="posti" id="posti" /></td>
    </tr>
    <tr>
      <td>تلفن شرکت</td>
      <td>
        <input type="text" name="tell" id="tell" /></td>
    </tr>
    <tr>
      <td>آدرس شرکت</td>
      <td><label for="textfield"></label>
        <input type="text" name="address" id="address" /></td>
    </tr>
    <tr>
      <td>ایمیل </td>
      <td>
        <input type="text" name="mail" id="mail" /></td>
    </tr>
    <tr>
      <td colspan="2"><input class="dddd" type="submit" name="button"  id="button" value="ثبت" /></td>
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
کلیه حقوق مادی و معنوی این وب سایت برای  شرکت پیشدار  محفوظ می باشد.<br>
</center>
</div></div>
<div class="footer_left"></div>
</div>  
<div class="clr"></div>
</div><!--Middle -->
</div>
</body>
</html>
