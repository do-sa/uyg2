<form action="urunekle.php" method="POST">
<table border="1" align="center">
<th colspan="2">URUN EKLE</th>
<tr>
	<td>Urun Adi:</td>
	<td><input type="text" name="uadi"></td>
</tr>
<tr>
	<td>Urun Markasi:</td>
	<td><input type="text" name="umarkasi"></td>
</tr>
<tr>
	<td>Urun Fiyati:</td>
	<td><input type="text" name="ufiyati"></td>
</tr>
<tr>
	<td align="center" colspan="2">
		<input type="submit" name="ekle" value="Ekle">
		<input type="reset" name="temizle" value="Temizle">
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
		<a href='index.php'>anasayfa don</a>
	</td>
</tr>
</table>
</form>
<?php
	if (!file_exists("urun.txt"))
	{
		fopen("urun.txt","w");
	}
	if ($_POST["ekle"])
	{
		$dosya=fopen("urun.txt","a");
		$yazilacak=$_POST["uadi"]."-".$_POST["umarkasi"]."-".$_POST["ufiyati"]."\n";
		fputs($dosya,$yazilacak);
	}
?>