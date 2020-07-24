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
<section class="main-section">
  <div class="container">
    <h1>Ubah Data Mobil</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @foreach($data as $datas)
      <form action="/mobil/update" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->id_mobil}}">
          <div class="form-group">
            <label for="nama">Nama Mobil:</label>
            <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" required="required" value="{{ $datas->jenis_mobil }}">
          </div>
          <div class="form-group">
            <label for="nama">Plat Mobil:</label>
            <input type="text" class="form-control" id="plat_mobil" name="plat_mobil" required="required" value="{{ $datas->plat_mobil }}">
          </div>
          <div class="form-group">
            <label for="nama">Warna:</label>
            <input type="text" class="form-control" id="warna" name="warna" required="required" value="{{ $datas->warna }}">
          </div>
          <div class="form-group">
            <label for="nama">Harga Sewa:</label>
            <input class="form-control" id="harga_sewa" name="harga_sewa" required="required" value="{{ $datas->harga_sewa }}">
          </div>
          <div class="form-group">
            <label for="nama">Foto:</label>
            <input type="file" id="fotomobil" name="fotomobil" required="required" value="{{ $datas->fotomobil }}">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
        @endforeach
      </div>
</section>
