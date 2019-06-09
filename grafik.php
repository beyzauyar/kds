<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div>

<nav class="navbar navbar-dark bg-dark" style="height:60px;">
<a href="home.php" target="_blank"><a href="home.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Çıkış</a>
</nav>
</div>


</head>
 <body>
 <div style="font-size:25px;width:150px;height:150px;">
 <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" href="bayer.php">Bayer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="gsk.php">GSK</a>
  </li>
   <li class="nav-item">
    <a class="nav-link active" href="nobel.php">Nobel</a>
  </li>

</ul>
</div>
<div id="conteiner" style="margin-left:250px;margin-top:-200px;">
 <div>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "kds");  
 $query = "SELECT COUNT(ilac.ilac_id) as sayi,ilac.firma_ad
FROM ilac
GROUP BY firma_ad";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['firma_ad', 'sayi'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["firma_ad"]."', ".$row["sayi"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Firmaların Piyasadaki İlaç Dağılımı',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart1'));  
                chart.draw(data, options);  
           }  
           </script>  
		   
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
 
                <br />  
                <div id="piechart1" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
 </div>

 
<div>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "kds");  
 $query = "SELECT COUNT(yanetki_ad) AS sayi ,firma_ad FROM bilgi GROUP BY firma_ad";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['firma_ad', 'sayi'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["firma_ad"]."', ".$row["sayi"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Firmalara Göre Yan Etki Görülme Oranı',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
 
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
 </div>
 
 </div>
 </body>
 </html>