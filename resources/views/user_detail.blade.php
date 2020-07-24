@extends('layout.main')
@section('title','User')
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
<div id="user">
<h2>Detail Peminjam</h2>
@foreach($data as $datas)

<table class= "table table-striped">
<tr>
<th>Nama :</th>
<td>{{$datas->nama_user}}</td>
</tr>
<tr>
<th>Email :</th>
<td>{{$datas->email}}</td>
</tr>
<tr>
<th>No HP :</th>
<td>{{$datas->nohp}}</td>
</tr>
<tr>
<th>Alamat :</th>
<td>{{$datas->alamat}}</td>
</tr>
<tr>
<th>Foto</th>
<td>{{$datas->fotoktp}}</td>
</tr>

<tr>
<td><a class = "btn btn-sm btn-danger" href = "/user">Back</a></td>
</tr>
</table>
@endforeach
</div>
