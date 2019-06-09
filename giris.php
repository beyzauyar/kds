<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div>
<nav class="navbar navbar-dark bg-dark" style="height:100px;">
<a href="uye.php" target="_blank"><a href="uye.php" class="btn btn-primary btn-lg active" role="button" style="position:relative;right:370px;width:100px;" aria-pressed="true">Kayıt</a>
<a href="home.php" target="_blank"><a href="home.php" class="btn btn-primary btn-lg active" style="position:relative;" role="button" aria-pressed="true">Çıkış</a>
</nav>
</div>

</head>
<body>

<div id="container">
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","sorgu.php?q="+str,true);
        xmlhttp.send();
    }
}

</script>
</head>
<body>

<form>
<div class="row">
  <div class="col-sm-3">
    <div class="form-group">

	<select class="selectpicker form-control" style="position:relative;top:25px;left:30px;width:180px;" name="users" onchange="showUser(this.value)">
	<option value="">HastaID</option>
  <option value="742">742</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  </select>
     </div>
  </div>
</div>
</form>
<br>
<div id="txtHint"><b></b></div>
</div>
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
