<!DOCTYPE html>
<html lang="en">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<section class = "main-section">
<div class = "content">
<h1>Tambah Kontak</h1>
<hr> 
@if($errors->any())
<div class = "alert alert-danger">
@foreach($errors->all() as $error)
<li><strong>{{$error}}</strong>
@endforeach
</div>
@endif

<form action = "/mobil/store" method = "post">
{{ csrf_field() }}
<div class = "form-group">
<label for = "jenis_mobil">Nama Mobel :</label>
<input type = "text" class = "form-control" id = "jenis_mobil" name = "jenis_mobil" required="required">
</div>
<div class = "form-group">
<label for = "plat_mobil">Plat Nomer Mobel:</label>
<input type = "text" class = "form-control" id = "plat_mobil" name = "plat_mobil" required="required">
</div>
<div class = "form-group">
<label for = "warna">Warna Mobel:</label>
<input type = "text" class = "form-control" id = "warna" name = "warna" required="required">
</div>
<div class = "form-group">
<label for = "harga_sewa">Harga Sewa Mobel:</label>
<input type = "text" class = "form-control" id = "harga_sewa" name = "harga_sewa" required="required">
</div>
<div class = "form-group">
<label for = "fotomobil">Foto Mobel:</label>
<input type = "file" class = "form-control" id = "fotomobil" name = "fotomobil">
</div>
<div class = "form-group">
<button type = "submit" class = "btn btn-md btn-primary">Submit</button>
<button type = "reset" class = "btn btn-md btn-danger">Cancel</button>
</div>
</form>
</div>
</section>
