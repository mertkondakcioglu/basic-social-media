<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mesaj Gönder</title>
</head>
<body style="font-size:15px; font-family:Helvetica,Arial,'lucida grande',tahoma,verdana,arial,sans-serif;">
<form action="mesajyolla.php" method="post">
<table style=" width: 480px; background-color: #ccc; border-radius: 10px; margin: Auto; border-color: Black; padding: 30px; padding-top: 30px; margin-top: 15%; border: 1px solid #888;">
  <tr>
    <td width="115">Alıcı :</td>
    <td width="269">    
    	<select name="alici_id" id="select">
   <?php
		session_start();
		require_once("baglan.php");
		$id=$_SESSION['id'];

		$sonuc=mysql_query("select * from profil where uye_id<>'$id'");
		while($row=mysql_fetch_assoc($sonuc))
			{
			echo '<option value="'.$row['uye_id'].'">'.$row['ad'].' '.$row['soyad'].'</option>';
			}
	?>
      </select></td>
  </tr>
   <tr>
    <td>İçerik :</td>
    <td><textarea name="icerik" style="width:342px; height:150px;"></textarea></td>
  </tr>
     <tr>
    <td> </td>
    <td><input type="submit" value="Gönder" /></td>
  </tr>
      <tr>
      <td>&nbsp;</td>
      <td><a href="anasayfa.php">Geri dön</a></td>
    </tr>
</table>
</form>
</body>
</html>