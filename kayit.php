<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
require_once("baglan.php");

$kullad=$_POST["kulladi"];
$sifre=$_POST["sifre"];
$ad=$_POST["ad"]; 
$soyad=$_POST["soyad"];
$cinsiyet=$_POST["cinsiyet"];
$kontrol = mysql_query("SELECT kulladi FROM uyeler WHERE kulladi='$kullad'");
$kayitsayisi = @mysql_num_rows($kontrol);

if(empty($kullad) || empty($sifre) || empty($ad) || empty($soyad) || empty($cinsiyet))
{
echo "<script>alert('Lütfen bilgileri boş bırakmayınız.');</script><script>location.href=\"uyeol.php\";</script>";
}
else
{
	if($kayitsayisi > 0)
	{
		echo "<script>alert('Kullandığınız kullanıcı adı başka biri tarafından kullanılmakta.');</script><script>location.href=\"uyeol.php\";</script>";
	}
	else
	{
	$sonuc=mysql_query("insert into uyeler(kulladi,sifre) values('$kullad','$sifre')");
	$sonid=mysql_query("select max(id) from uyeler"); 
	$sonid=mysql_result($sonid,0);
	$sonuc2=mysql_query("insert into profil(uye_id,ad,soyad,cinsiyet) values($sonid,'$ad','$soyad','$cinsiyet')");
	header ("Location:giris.php");
	}
}
?>
</body>
</html>