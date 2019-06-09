<!DOCTYPE html>
<html>
<head>
<style>
table {
    width:%100;
	height:%100
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: center;}
</style>
</head>
<body style="margin-left:30px;">

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','kds');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"kds");
$sql="SELECT rapor_id,hasta_ad,hasta_soyad,dogum_tarihi,cinsiyet,ilac_ad,yanetki_ad,aciklama,etken_madde_ad,firma_ad
FROM bilgi
WHERE hasta_id = '".$q."'";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>RaporID:</th>
<th>Hasta Ad</th>
<th>Hasta Soyad</th>
<th>Doğum Tarihi</th>
<th>Cinsiyet</th>
<th>İlaç Adı:</th>
<th>Yanetki Adı</th>
<th>Açıklama</th>
<th>Etken Madde Adı</th>
<th>Firma Adı</th>



</tr>";

$row =$result->fetch_array(MYSQLI_ASSOC); 
    echo "<tr>";
	echo "<td>" . $row['rapor_id'] . "</td>";
    echo "<td>" . $row['hasta_ad'] . "</td>";
    echo "<td>" . $row['hasta_soyad'] . "</td>";
    echo "<td>" . $row['dogum_tarihi'] . "</td>";
    echo "<td>" . $row['cinsiyet'] . "</td>";
	echo "<td>" . $row['ilac_ad'] . "</td>";
	echo "<td>" . $row['yanetki_ad'] . "</td>";
	echo "<td>" . $row['aciklama'] . "</td>";
	echo "<td>" . $row['etken_madde_ad'] . "</td>";
	echo "<td>" . $row['firma_ad'] . "</td>";
	
    echo "</tr>";

	
echo "</table>";

echo "<table>
<tr>
<th>RaporID:</th>
<th>Hasta Ad</th>
<th>Hasta Soyad</th>
<th>Doğum Tarihi</th>
<th>Cinsiyet</th>
<th>İlaç Adı:</th>
<th>Yanetki Adı</th>
<th>Açıklama</th>
<th>Etken Madde Adı</th>
<th>Firma Adı</th>



</tr>";

$row =$result->fetch_array(MYSQLI_ASSOC); 
    echo "<tr>";
	echo "<td>" . $row['rapor_id'] . "</td>";
    echo "<td>" . $row['hasta_ad'] . "</td>";
    echo "<td>" . $row['hasta_soyad'] . "</td>";
    echo "<td>" . $row['dogum_tarihi'] . "</td>";
    echo "<td>" . $row['cinsiyet'] . "</td>";
	echo "<td>" . $row['ilac_ad'] . "</td>";
	echo "<td>" . $row['yanetki_ad'] . "</td>";
	echo "<td>" . $row['aciklama'] . "</td>";
	echo "<td>" . $row['etken_madde_ad'] . "</td>";
	echo "<td>" . $row['firma_ad'] . "</td>";
	
    echo "</tr>";

	
echo "</table>";
mysqli_close($con);
?>


</body>
</html>
