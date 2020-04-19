<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
require_once("baglan.php");

$kullanici=$_POST["kulladi"]; 
$sifre=$_POST["sifre"];

if(($kullanici=="")or($sifre==""))
 { 
 echo "<script>alert('Lütfen bilgileri boş bırakmayınız.');</script><script>location.href=\"giris.php\";</script>";
 }
 else
 { 
 $sorgu=mysql_query ("SELECT id FROM uyeler WHERE kulladi='$kullanici' and sifre='$sifre'");
 $id=mysql_result($sorgu,0);

 if (mysql_num_rows ($sorgu)>0) 
 {
 $_SESSION['id']="$id";
 $_SESSION['kullanici'] = "$kullanici";
 header("Location:anasayfa.php");
 }
 else
 {
 echo "<script>alert('Kullanıcı adı veya parola hatalı.');</script><script>location.href=\"giris.php\";</script>";
 }
}
?>
</body>
</html>