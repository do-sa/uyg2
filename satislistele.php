<table border="1" align="center">
<tr>
	<th colspan="2">SATIS LÝSTELE</th>
</tr>
<tr>
	<th>Adi</th>
	<th>Satis Tarih</th>
</tr>
<?php
	$dosya=fopen("satis.txt","r");
	while (!feof($dosya))
	{
		$kaynak=fgets($dosya,256);
		$kaynak=trim($kaynak);
		$dizi=explode("-",$kaynak);
		echo"<tr>";
			echo"<td>".$dizi[0]."</td>";
			echo"<td>".$dizi[1]."</td>";
		echo"</tr>";
	}
	
?>
<tr>
	<td colspan="2" align="center">
		<a href='index.php'>anasayfa don</a>
	</td>
</tr>