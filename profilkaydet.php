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

$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$cinsiyet=$_POST["cinsiyet"];
$sehir=$_POST["sehir"];
$dogumt=$_POST["dogumt"];
$meslek=$_POST["meslek"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$hakkinda=$_POST["hakkinda"];

$resim=$_FILES['resim']['name'];
$uzanti=array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
in_array(strtolower($_FILES['resim']['type']),$uzanti);
move_uploaded_file($_FILES['resim']['tmp_name'],"./resimler/{$_FILES['resim']['name']}");

if(empty($ad) || empty($soyad))
{
echo "<script>alert('Lütfen ad ve soyadı boş bırakmayınız.');</script><script>location.href=\"profil.php\";</script>";
}
else
{
	if(empty($resim))
	{
	$guncelle=mysql_query("update profil SET ad='$ad',soyad='$soyad',cinsiyet='$cinsiyet',sehir='$sehir',
	dogumt='$dogumt',meslek='$meslek',email='$email',tel='$tel',hakkinda='$hakkinda' where uye_id='$id'");
	header ("Location:anasayfa.php");
	}
	else
	{
	$guncelle=mysql_query("update profil SET ad='$ad',soyad='$soyad',cinsiyet='$cinsiyet',sehir='$sehir',
	dogumt='$dogumt',meslek='$meslek',email='$email',tel='$tel',hakkinda='$hakkinda',resim='$resim'
	where uye_id='$id'");
	header ("Location:anasayfa.php");
	}
}
?> 
</body>
</html>