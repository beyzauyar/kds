 <!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div>

<nav class="navbar navbar-dark bg-dark" style="height:100px;">
<a href="home.php" target="_blank"><a href="home.php" class="btn btn-primary btn-lg active" style="position:relative;" role="button" aria-pressed="true">Çıkış</a>
</nav>
</div>
</head>
<body>
 <div>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "kds");  
 $query = "SELECT COUNT(yanetki_ad) AS sayi,yanetki_ad
FROM bilgi
WHERE firma_ad='Bayer'
GROUP BY yanetki_ad";  
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
                          ['yanetki_ad', 'sayi'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["yanetki_ad"]."', ".$row["sayi"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Bayer Firmasına Ait İlaçlarda Görülen Yan Etki Oranları',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
 
                <br />  
                <div id="piechart2" style="width: 700px; height: 400px;"></div>  
           </div>  
      </body>  
 </html>  
</div>
<div>
<div style="margin-top:-470px;margin-left:670px;">
<?php  
 $connect = mysqli_connect("localhost", "root", "", "kds");  
 $query = "SELECT COUNT(yanetki_ad) AS sayi,ilac_ad
FROM bilgi
WHERE firma_ad='Bayer'
GROUP BY ilac_ad";  
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
                          ['ilac_ad', 'sayi'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["ilac_ad"]."', ".$row["sayi"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Bayer Firmasına Ait Her Bir İlaçta Görülen Yan Etki Oranları',  
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
                <div id="piechart" style="width: 700px; height: 400px;"></div>  
           </div>  
      </body>  
 </html> 
</div>
 <div>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "kds");  
 $query = "SELECT COUNT(yanetki_ad) AS sayi,yanetki_ad
FROM bilgi
WHERE ilac_ad='Aspirin'
GROUP BY yanetki_ad";  
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
                          ['yanetki_ad', 'sayi'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["yanetki_ad"]."', ".$row["sayi"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Aspirin Adlı İlaçta Görülen Yan Etki Oranları',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart4'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
 
                <br />  
                <div id="piechart4" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
</div>
 <div>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "kds");  
 $query = "SELECT COUNT(yanetki_ad) AS sayi,yanetki_ad
FROM bilgi
WHERE ilac_ad='Benexol'
GROUP BY yanetki_ad";  
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
                          ['yanetki_ad', 'sayi'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["yanetki_ad"]."', ".$row["sayi"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Benexol Adlı İlaçta Görülen Yan Etki Oranları',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
 
                <br />  
                <div id="piechart3" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
</div>

</div>
</body>
</html>