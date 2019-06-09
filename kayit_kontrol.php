<?php
require("dbconnect.php");
if($baglan){
if(isset($_POST["madde"])&&isset($_POST["hastaad"])&&isset($_POST["hastasoyad"])&&isset($_POST["dogumtarihi"])&&isset($_POST["cinsiyet"])&&isset($_POST["yanetki"])
&&isset($_POST["aciklama"])&&isset($_POST["ilacad"])&&isset($_POST["id"])){
$etken=$_POST["madde"];
$yad=$_POST["yanetki"];
$acik=$_POST["aciklama"];
$ilac=$_POST["ilacad"];
$ad=$_POST["hastaad"];
$hid=$_POST["id"];
$soyad=$_POST["hastasoyad"];
$tarih=$_POST["dogumtarihi"];
$cins=$_POST["cinsiyet"];
$firma=$_POST["firmaad"];

$sorgu0=mysqli_query($baglan,"INSERT INTO bilgi(hasta_id,hasta_ad,hasta_soyad,dogum_tarihi,cinsiyet,ilac_ad,yanetki_ad,etken_madde_ad,aciklama,firma_ad)
VALUES('".$hid."','".$ad."','".$soyad."','".$tarih."','".$cins."','".$ilac."','".$yad."','".$etken."','".$acik."','".$firma."')");
	if($sorgu0){
	echo "Başarılı";
	header("Location:denemee.php");
	
	}else{
		echo "hata:".$sorgu0."<br>".$baglan->error;
	}
}	
else{
	echo "Veriler Gelmedi";
}


}

else{
	die("Bağlantı Yapılamadı");
}

?>
