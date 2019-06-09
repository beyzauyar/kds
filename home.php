<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<nav class="navbar navbar-dark bg-dark" style="height:100px;"></nav>
</head>
<body>
<div class="container" style="margin-left:50px;">
<div>
<form method="POST" action="logout.php" class="form-signin" style="position:relative;top:80px;">
	<h2>Doktor Girişi</h2>
	<label>Kullanıcı Adı:</label>
	<input id="eposta" name="eposta" type="email" class="form-control" style="width:250px;"></br>
	<label>Şifre:</label>
	<input id="sifre" name="sifre" type="password" class="form-control" style="width:250px;"></br>
	<input type="submit" class="btn btn-lg btn-primary btn-block" style="width:250px;">
	<div style="position:relative;left:340px;position:relative;bottom:250px;"><img src="kalp.jpg"></div>
</form>
</div>
<div style="margin-left:940px;margin-top:-535px;">
<form method="POST" action="logout.php" class="form-signin" style="position:relative;top:80px;">
	<h2>Firma Girişi</h2>
	<label>Kullanıcı Adı:</label>
	<input id="kadi" name="kadi" type="text" class="form-control" style="width:250px;"></br>
	<label>Şifre:</label>
	<input id="parola" name="parola" type="password" class="form-control" style="width:250px;"></br>
	<input type="submit" class="btn btn-lg btn-primary btn-block" style="width:250px;">
	
</form>
</div>
</div>
</body>
</html>