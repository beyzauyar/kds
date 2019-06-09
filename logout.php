<?php
require("connection.php");
$sorgula=mysqli_query($baglan,"SELECT eposta,sifre FROM users 
WHERE eposta='".$_POST["eposta"]."' AND sifre='".$_POST["sifre"]."'");
if(mysqli_num_rows($sorgula)>0){ 
echo "Kullanıcı Adı ve Parola Doğru";
header("Location:denemee.php");
$row=mysqli_fetch_row($sorgula);
}else{
echo "Kullanıcı Adı ve Parola Yanlış";
}
$sorgula2=mysqli_query($baglan,"SELECT eposta,sifre FROM users 
WHERE eposta='".$_POST["kadi"]."' AND sifre='".$_POST["parola"]."'");
if(mysqli_num_rows($sorgula2)>0){ 
echo "Kullanıcı Adı ve Parola Doğru";
header("Location:grafik.php");
$row=mysqli_fetch_row($sorgula2);
}else{
echo "Kullanıcı Adı ve Parola Yanlış";
}

?>



