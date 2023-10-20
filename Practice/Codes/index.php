<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>پنل مدیر</title>
<?php
 ob_start();
session_start();
if ( $_SESSION['adm']!=1)
 header ("location:../adminlogin.php");
include 'connect2.php' ;
$dastrasi=true;
if (isset($_GET['da'])){
	$dastrasi=false;
}
if (isset($_GET['id'])){
$id=$_GET['id'];
$_SESSION['usermodir']=$id;
echo checkparam($_SESSION['usermodir']). " خوش آمدید";
}
?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
   <style type="text/css" media="screen">
		@import url(../style.css );
		@import url(../tab.css );
	body,td,th {
	color: #000;
	font-family: Tahoma, Geneva, sans-serif;
}
   </style>
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
<li class="home"><a href="kalame.php">تغییر کلمه ی عبور </a></li>
<li><a href="adminlogout.php">خروج</a></li>
</ul>
</div>
<div class="left">
</div><!--Top Menu -->
<div class="content">
<div class="content_top"></div>
<div class="content_bg">
<div id="right2">
		<div class="about"><div class="about_top"></div><div class="about_body">		<div class="menu_title"><h6>&nbsp;</h6></div><div class="text">		</div></div><div class="about_bottom"></div></div><!--Menu -->
</div><!--Right -->
<div id="left2">
<div class="post">
<div class="post_top">
  <h2>پنل مدیر</h2></div>
<div class="post_body">
<div class="text">
<div class="wpcf7" id="wpcf7-f16-p17-o1"><form action="/%D8%AA%D9%85%D8%A7%D8%B3-%D8%A8%D8%A7-%D9%85%D8%A7/#wpcf7-f16-p17-o1" method="post" class="wpcf7-form">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="16" />
<input type="hidden" name="_wpcf7_version" value="3.1.2" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f16-p17-o1" />
<input type="hidden" name="_wpnonce" value="e8dd44d558" />
</div>
<p>&nbsp;</p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>

</div></div>
<div class="post_bottom"></div>
</div>
</div><!--Left -->
</div>
<div class="content_bottom"></div>
</div><!--Conetnt -->
<div class="footer">
<div class="footer_right"></div>
<div class="footer_body"><div class="text"><center>
</center>
</div></div>
<div class="footer_left"></div>
</div>  
<div class="clr"></div>
</div><!--Middle -->
</div>
</body>
</html>
