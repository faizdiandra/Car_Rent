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
    <h1>Ubah Data Peminjam</h1>
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
      <form action="/user/update" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->id_user}}">
          <div class="form-group">
            <label for="nama">Nama Peminjam:</label>
            <input type="text" class="form-control" id="nama_user" name="nama_user" required="required" value="{{ $datas->nama_user }}">
          </div>
          <div class="form-group">
            <label for="nama">Email:</label>
            <input type="text" class="form-control" id="email" name="email" required="required" value="{{ $datas->email }}">
          </div>
          <div class = "form-group">
            <label for = "password">Password:</label>
            <input type = "password" class = "form-control" id = "password" name = "password" required="required" value="{{ $datas->password }}">
        </div>
          <div class="form-group">
            <label for="nama">No HP:</label>
            <input type="text" class="form-control" id="nohp" name="nohp" required="required" value="{{ $datas->nohp }}">
          </div>
          <div class="form-group">
            <label for="nama">Alamat :</label>
            <input class="form-control" id="alamat" name="alamat" required="required" value="{{ $datas->alamat }}">
          </div>
          <div class="form-group">
            <label for="nama">Foto:</label>
            <input type="file" id="fotoktp" name="fotomobil" value="{{ $datas->fotomobil }}">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
        @endforeach
      </div>
</section>
