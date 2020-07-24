<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/">Home <span class="sr-only"></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-link" href="/peminjaman">Data Peminjaman</span></a>
        <a class="nav-link" href="/user">Data User</span></a>
        <a class="nav-link" href="/mobil">Data Mobil</span></a>
        <a class="nav-link" href="/user_create">Daftar</span></a>
        <a class="nav-link" href="{{url('logout')}}">LogOut</span></a>
    </div>
  </div>
</nav>
@yield('container')
