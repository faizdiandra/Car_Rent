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
<div class = "col-xs-12">
<div class = "card">
<div class = "header">
<h2>Data Peminjam</h2>
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
    <td>Nama Peminjam</td>
    <td>Email</td>
    <td>No HP</td>
    <td>Alamat</td>
    <td>Foto KTP</td>
    <td>Aksi</td>
</tr>

@php $no=0; @endphp
@foreach($datas as $data)
@php $no++; @endphp
<tr>
    <td>{{$no}}</td>
    <td>{{$data->nama_user}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->nohp}}</td>
    <td>{{$data->alamat}}</td>
    <td><img witdh = "40" src ="{{asset('images/'.$data->fotoktp)}}"></td>
    

<td><a href = "/user/show/{{ $data->id_user }}" class = "btn btn-success btn-sm">Detail</a>

<a href = "/user/edit/{{ $data->id_user }}" class = "btn btn-sm btn-primary">Edit</a> 

<a class = "btn btn-sm btn-danger" onclick = "return confirm('yakin ingn menghapus si ini?')" href = "/user/hapus/{{ $data->id_user}}">Delete</a></td>


</tr>

@endforeach
</table>

<a href="/user_create">
<button class = "btn btn-sm btn-warning" type = "submit">Tambah</button>
</a>

<!-- <a href="/rental/cetak_pdf">
<button class = "btn btn-sm btn-success" >Cetak</button>
</a> -->

</div>
</div>
</div>
@stop
