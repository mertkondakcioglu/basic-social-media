<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil Düzenle</title>
</head>
<body style="font-size:15px; font-family:Helvetica,Arial,'lucida grande',tahoma,verdana,arial,sans-serif;">
<?php
session_start();
require_once("baglan.php");
$id=$_SESSION['id'];
$sorgu=mysql_query("select * from profil where uye_id='$id'");
$male_status="";
$female_status="";
while($row=mysql_fetch_assoc($sorgu))
{
?>
<form action="profilkaydet.php" method="post" enctype="multipart/form-data">
<table style="width: 420px; background-color:#ccc; border-radius:10px; margin:Auto; border-color:Black; padding:30px; padding-top:30px; margin-top:10%; border:1px solid #888;
box-shadow:3px 3px 4px #000; -moz-box-shadow:3px 3px 4px #000; -webkit-box-shadow:3px 3px 4px #000;">
  <tr>
    <td width="115">Ad :</td>
    <td width="269"><input name="ad" type="text" value="<?php echo $row['ad']; ?>"/><font color="#FF0000">*</font></td>
  </tr>
       <tr>
    <td>Soyad :</td>
    <td><input name="soyad" type="text" value="<?php echo $row['soyad']; ?>" /><font color="#FF0000">*</font></td>
  </tr>
   <tr>
    <td>Cinsiyet :</td>
    <td>
    <?php
	if ($row['cinsiyet'] == 'Erkek') 
	{
	$male_status = 'checked';
	}
	else if ($row['cinsiyet'] == 'Kadın') 
	{
	$female_status = 'checked';
	}
	?>
	<input type="radio" name="cinsiyet" value="Erkek" <?PHP print $male_status; ?>>Erkek
	<input type="radio" name="cinsiyet" value="Kadın" <?PHP print $female_status; ?>>Kadın</td>
  </tr>
  <tr>
      <tr>
    <td>Telefon :</td>
    <td><input name="tel" type="text" value="<?php echo $row['tel']; ?>" /></td>
  </tr>
    <td>Şehir :</td>
    <td><input name="sehir" type="text" value="<?php echo $row['sehir']; ?>"/></td>
  </tr>
  <tr>
    <td>Doğum Tarihi :</td>
    <td><input name="dogumt" type="text" value="<?php echo $row['dogumt']; ?>"/></td>
  </tr>
    <tr>
    <td>Meslek :</td>
    <td><input name="meslek" type="text" value="<?php echo $row['meslek']; ?>"/></td>
  </tr>
    <tr>
    <td>E-Mail :</td>
    <td><input name="email" type="email" value="<?php echo $row['email']; ?>"/></td>
  </tr>
    <tr>
    <td>Hakkında :</td>
    <td><textarea name="hakkinda" style="width:200px; height:100px;"><?php echo $row['hakkinda']; }?></textarea></td>
  </tr>  </tr>
    <tr>
    <td>Profil Resmi :</td>
    <td><input type="file" name="resim" /></td>
  </tr>
     <tr>
    <td> </td>
    <td><input type="submit" value="Profili Güncelle" /></td>
  </tr>
   <tr>
    <td> </td>
    <td><a href="anasayfa.php">Geri dön</a></td>
  </tr>
</table>
</form>
</body>
</html>