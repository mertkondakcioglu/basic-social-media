<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kayit Ol</title>
</head>
<body style="font-size:15px; font-family:Helvetica,Arial,'lucida grande',tahoma,verdana,arial,sans-serif;">
<form action="kayit.php" method="post">
<table style=" width: 400px; background-color: #ccc; border-radius: 10px; margin: Auto; border-color: Black; padding: 30px; padding-top: 30px; margin-top: 15%; border: 1px solid #888; box-shadow:3px 3px 4px #000; -moz-box-shadow:3px 3px 4px #000; -webkit-box-shadow:3px 3px 4px #000;">
  <tr>
    <td width="115">Ad :</td>
    <td width="269"><input name="ad" type="text" placeholder="Adınız" /> <font color="#FF0000">*</font></td>
  </tr>
       <tr>
    <td>Soyad :</td>
    <td><input name="soyad" type="text" placeholder="Soyadınız" /> <font color="#FF0000">*</font></td>
  </tr>
   <tr>
    <td>Cinsiyet :</td>
    <td>
	<input type="radio" name="cinsiyet" value="Erkek">Erkek
	<input type="radio" name="cinsiyet" value="Kadın">Kadın<font color="#FF0000"> *</font></td>
  </tr>
  <tr>
    <td>Kullanıcı Adı :</td>
    <td><input name="kulladi" type="text" placeholder="Kullanıcı Adınız"/> <font color="#FF0000">*</font></td>
  </tr>
  <tr>
    <td>Şifre :</td>
    <td><input name="sifre" type="password" placeholder="Şifreniz" /> <font color="#FF0000">*</font></td>
  </tr>
     <tr>
    <td> </td>
    <td><input type="submit" value="Kayıt Ol" /></td>
  </tr>
       <tr>
    <td> </td>
    <td><a href="giris.php">Geri dön</a></td>
  </tr>
</table>
</form>
</body>
</html>