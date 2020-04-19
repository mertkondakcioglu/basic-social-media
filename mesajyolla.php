<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>
<body>
<?php
session_start();
require_once("baglan.php");
$id=$_SESSION['id'];

date_default_timezone_set('Europe/Istanbul'); 
@setlocale(LC_ALL, 'turkish');
$tarihsaat=iconv('latin5','utf-8',strftime('%d %B %Y %H:%M'));

$alici=$_POST["alici_id"];
$icerik=$_POST["icerik"];


if(empty($icerik))
{
echo "<script>alert('Lütfen içeriği boş bırakmayınız.');</script><script>location.href=\"mesaj.php\";</script>";
}
else
{
$sonuc=mysql_query("insert into mesajlar(gonderen_id,alici_id,icerik,tarih) values('$id','$alici','$icerik','$tarihsaat')");
header ("Location:anasayfa.php");
}
?>
</body>
</html>