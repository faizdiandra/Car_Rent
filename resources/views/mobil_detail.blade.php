@extends('layout.main')
@section('title','Mobil')
@section('container')

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
		</head>
<div id="kontak">
@foreach($data as $datas)
<div class = "col-xs-12">
<div class = "card">
<div class = "header">
<h2><span class="lnr lnr-heart"></span> Detail <span class="lnr lnr-heart"></span></h2>
</div>
<div class= "body">
<div class= "alert alert-success">
</div>
<table class = "table table-hover table-striped">
<tr>
<th>ID Mobil :</th>
<td>{{$datas->id_mobil}}</td>
</tr>
<tr>
<th>Nama :</th>
<td>{{$datas->jenis_mobil}}</td>
</tr>
<tr>
<th>Email :</th>
<td>{{$datas->plat_mobil}}</td>
</tr>
<tr>
<th>No HP :</th>
<td>{{$datas->warna}}</td>
</tr>
<tr>
<th>Harga :</th>
<td>{{$datas->harga_sewa}}</td>
</tr>
<tr>
<th>Foto</th>
<td>{{$datas->fotomobil}}</td>
</tr>

<tr>
<td><a class = "btn btn-sm btn-danger" href = "/rental">Back</a></td>
</tr>
</table>
@endforeach
</div>
</table>
</div>
</div>
</div>
@stop
