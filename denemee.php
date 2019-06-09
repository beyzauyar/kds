<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div>
<nav class="navbar navbar-dark bg-dark" style="height:60px;">
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

	<select class="selectpicker form-control" style="position:relative;top:25px;left:80px;width:180px;" name="users" onchange="showUser(this.value)">
	<option value="">HastaID</option>
  <option value="1">1</option>
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
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  <option value="32">32</option>
  <option value="33">33</option>
  <option value="34">34</option>
  </select>
     </div>
  </div>
</div>
</form>
<br>
<div id="txtHint"><b></b></div>
</div>
<div>

<div style="margin-top:-60px;">
<?php  
 $connect = mysqli_connect("localhost", "root", "", "kds");  
 $query = "SELECT COUNT(yanetki_ad) AS sayi,ilac_ad
FROM bilgi
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
                      title: 'En Çok Yan Etki Görülen İlaçlar',  
                      //is3D:true,  
                      pieHole: 0.2  
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

</div>
 <div style="margin-top:-460px;margin-left:540px;">
<?php  
 $connect = mysqli_connect("localhost", "root", "", "kds");  
 $query = "SELECT COUNT(yanetki_ad) as sayi,etken_madde_ad FROM bilgi GROUP BY etken_madde_ad";  
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
                          ['etken_madde_ad', 'sayi'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["etken_madde_ad"]."', ".$row["sayi"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'En Çok Yan Etkiye Neden Olan Etken Maddeler',  
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
</div>
<div>
<!DOCTYPE html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="color:blue">
<div class="container" style="font-family:Sans-serif;">
<form method="POST" action="kayit_kontrol.php" class="form-signin">
	<h3>KAYIT</h3>
	<label>TC Kimlik No:</label>
	<input id="id" name="id" type="text" class="form-control" placeholder="TC Kimlik No:" >
	<label>Hasta Ad:</label>
	<input id="hastaad" name="hastaad" type="text" class="form-control" placeholder="Ad" >
	<label>Hasta Soyad:</label>
	<input id="hastasoyad" name="hastasoyad" type="text" class="form-control"  placeholder="Soyad">
	<label>Doğum Tarihi</label>
	<input id="dogumtarihi" name="dogumtarihi" type="date" class="form-control"  placeholder="Doğum Tarihi">
	<label>Cinsiyet:</label><br>
	<input id="cinsiyet"name="cinsiyet" type="radio" value="erkek" /> Erkek <input name="cinsiyet" type="radio" value="kadin" /> Kadın<br>
	<label>İlaç Adı:</label>
	<input id="ilacad" name="ilacad" type="text" class="form-control"  placeholder="İlaç Adı">
	<label>İlaç Firması Adı:</label>
	<input id="firmaad" name="firmaad" type="text" class="form-control" placeholder="İlaç Firması Adı" >
	<label>Etken Madde Adı:</label>
	<input id="madde" name="madde" type="text" class="form-control"  placeholder="Etken Madde Adı">
	<label>Yanetki Adı:</label>
	<input id="yanetki" name="yanetki" type="text" class="form-control"  placeholder="Yan Etki Adı">
	<label>Yanetki Açıklaması:</label>
	<input id="aciklama" name="aciklama" type="text" class="form-control" placeholder="Yan Etki Açıklaması">


	<input type="submit" class="btn btn-lg btn-primary btn-block" placeholder="hastaadı">
	

</form>

</div>
</body>
</html>
</div>
</body>
</html>


</body>
</html>
