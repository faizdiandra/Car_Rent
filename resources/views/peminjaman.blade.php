@extends('layout.main')
@section('title','Peminjaman')
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
<div class = "col-xs-12">
<div class = "card">
<div class = "header">
<h2><span class="lnr lnr-heart"></span> Data Peminjaman <span class="lnr lnr-heart"></span></h2>
</div>
<div class= "body">
@if(Session::get('alert_message'))
<div class= "alert alert-success">
<strong>{{Session::get('alert_message')}}</strong>
</div>
@endif
<table class = "table table-hover table-striped">
<tr>
    <td>No</td>
    <td>Tanggal Peminjaman</td>
    <td>Nama Mobil</td>
    <td>Nama User</td>
    <td>Aksi</td>
</tr>

@php $no=0; @	ndphp
@foreach($datas as $data)
@php $no++; @endphp
<tr>
    <td>{{$no}}</td>
    <td>{{$data->tanggal_peminjaman}}</td>
    <td>{{$data->jenis_mobil}}</td>
    <td>{{$data->nama_user}}</td>
    <td><a class = "btn btn-sm btn-danger" onclick = "return confirm('yakin ingn mengembalikan ini?')" href = "/peminjaman/hapus/{{ $data->id_peminjaman}}">Kembalikan</a></td>
</tr>

@endforeach
</table>
@stop