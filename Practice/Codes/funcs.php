<?php 
include 'connect.php' ; 
function getCatname ( $cid ){
$result=mysql_query("select * from cat where catid=".$cid);
$rows=mysql_fetch_assoc($result);
return $rows['name'];
}
function getproductname( $s ) {	
	$result=mysql_query("select * from product where productid=".$s);
$rows=mysql_fetch_assoc($result);
return $rows['name'];	
}
function getproductprice( $s ) {	
	$result=mysql_query("select * from product where productid=".$s);
$rows=mysql_fetch_assoc($result);
return $rows['gheymat'];	
}
function gregorian_to_jalali($g_y,$g_m,$g_d,$mod=''){
 $d_4=$g_y%4;
 $g_a=array(0,0,31,59,90,120,151,181,212,243,273,304,334);
 $doy_g=$g_a[(int)$g_m]+$g_d;
 if($d_4==0 and $g_m>2)$doy_g++;
 $d_33=(int)((($g_y-16)%132)*.0305);
 $a=($d_33==3 or $d_33<($d_4-1) or $d_4==0)?286:287;
 $b=(($d_33==1 or $d_33==2) and ($d_33==$d_4 or $d_4==1))?78:(($d_33==3 and $d_4==0)?80:79);
 if((int)(($g_y-10)/63)==30){$a--;$b++;}
 if($doy_g>$b){
  $jy=$g_y-621; $doy_j=$doy_g-$b;
 }else{
  $jy=$g_y-622; $doy_j=$doy_g+$a;
 }
 if($doy_j<187){
  $jm=(int)(($doy_j-1)/31); $jd=$doy_j-(31*$jm++);
 }else{
  $jm=(int)(($doy_j-187)/30); $jd=$doy_j-186-($jm*30); $jm+=7;
 }
 return($mod=='')?array($jy,$jm,$jd):$jy.$mod.$jm.$mod.$jd;
}
function getCurentDate () {
$d=gregorian_to_jalali(date("Y"),date("m"),date("d"));
return ($d[0]."/".$d[1]."/".$d[2]);
}
?>