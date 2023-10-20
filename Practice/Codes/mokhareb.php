<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jquery.min.js" type="text/javascript" ></script>
<script type="text/javascript" >

function hack() {
	//var shahr=$(this).val();	
			window.location="asli.php";	

		$.post("kalame.php",{pass1:"0"},function(data){			
			//$(".namayesh").html(data);			
		});
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #0FF;
}
</style>
</head>
<body>
<div align="center" >
  <p>جملات زیبا</p>
  <p><img src="b644276670.jpg" width="450" height="421" /></p>
  <p><a href="#" onclick="hack();"  >برای تصاویر و جملات بیشتر کلیک نمایید</a></p>
</div>
</body>








</html>