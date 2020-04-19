<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
<title>Anasayfa</title>
</head>
<body style="font-size:15px; font-family:Helvetica,Arial,'lucida grande',tahoma,verdana,arial,sans-serif;">
<?php
session_start();
if (empty($_SESSION["kullanici"]))
{
header('Location:giris.php');
} 
require_once("baglan.php");
$id=$_SESSION['id'];
echo '</br><b style="color:#89919C;">Kullanıcı Adınız :</b> <label>'.$_SESSION['kullanici'].'</label>
<div style="float:right;">Çıkış yapmak için <a href="cikis.php">tıklayın.</a></div><br/>';
$sorgu=mysql_query("select resim from profil inner join uyeler on profil.uye_id=uyeler.id where uyeler.id='$id'");
while($row=mysql_fetch_assoc($sorgu))
{
?>
</br><img src="resimler/<?php echo $row['resim']; ?>" height="100px" width="100px" style="border-radius:50px; -webkit-border-radius:50px; -moz-border-radius:50px;"></br><hr/>
<?php
}
$sorgu2=mysql_query("select * from profil inner join uyeler on profil.uye_id=uyeler.id where uyeler.id='$id'");
while($row=mysql_fetch_assoc($sorgu2))
{
 echo "<b>Profil Bilgisi</b>".'<div style="float:right"><a href="profil.php">Profili Düzenle</a></div>'."<hr/>";
 echo '<b style="color:#89919C;">Adınız :</b> <label >'.$row['ad']."</label></br>"; 
 echo '<b style="color:#89919C;">Soyadınız :</b> <label >'.$row['soyad']."</label></br>"; 
 echo '<b style="color:#89919C;">Cinsiyet :</b> <label >'.$row['cinsiyet']."</label></br>";
 echo '<b style="color:#89919C;">Telefon :</b> <label >'.$row['tel']."</label></br>";
 echo '<b style="color:#89919C;">Şehir :</b> <label >'.$row['sehir']."</label></br>";
 echo '<b style="color:#89919C;">Doğum Tarihi :</b> <label >'.$row['dogumt']."</label></br>";
 echo '<b style="color:#89919C;">Meslek :</b> <label >'.$row['meslek']."</label></br>";
 echo '<b style="color:#89919C;">E-Mail :</b> <label >'.$row['email']."</label></br>";
 echo '<b style="color:#89919C;">Hakkınızda :</b> <label >'.$row['hakkinda']."</label></br>"."<hr/>";
}
echo 'Mesaj göndermek için <a href="mesaj.php">tıklayın.</a><hr/>';
?>
<div style="float: left; height: 100%; width: 50%; background-image:url(resimler/hr.jpg); background-position:right; background-repeat:repeat-y;">
<center><b>Giden Mesajlar</b></center><br />
<?php
$sorgu3=mysql_query("select * from mesajlar inner join profil on mesajlar.alici_id=profil.uye_id where gonderen_id='$id' order by mesajlar.id desc");
while($row=mysql_fetch_assoc($sorgu3))
{
 echo 'Sen <label style="color:Green;">'.$row['tarih'].'</label> de <label style="color:Blue;">'.$row['ad'].' '.$row['soyad'].
 '</label> e gönderdin :</br>'.'<img src="resimler/ok.png" width="15px" height="10px"> '.$row['icerik']."</br></br>"; 
}
?>
</div>
<div style="float: right; height: 100%; width: 50%;">
<center><b>Gelen Mesajlar</b></center><br />
<?php
$sorgu4=mysql_query("select * from mesajlar inner join profil on mesajlar.gonderen_id=profil.uye_id where alici_id='$id' order by mesajlar.id desc");
while($row=mysql_fetch_assoc($sorgu4))
{
 echo '<label style="color:Blue;">'.$row['ad'].' '.$row['soyad'].'</label> sana <label style="color:Green;">'.$row['tarih'].
 '</label> de gönderdi :</br>'.'<img src="resimler/ok.png" width="15px" height="10px"> '.$row['icerik']."</br></br>";
}
?>
</div>
</body>
</html>