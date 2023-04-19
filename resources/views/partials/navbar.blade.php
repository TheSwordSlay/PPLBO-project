<header>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TI REG C 21
    @if(session()->has('data'))
      | Logged in as {{ Session::get('data')->name }}
    @endif
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/jadwal">Jadwal</a>
        </li>
        @if(session()->has('data'))
        @if(!(Session::get('data')->name == 'Admin'))
        <li class="nav-item">
            <a class="nav-link active" href="/absen">Absen</a>
        </li>
        @endif
        @else
        <li class="nav-item">
            <a class="nav-link active" href="/absen">Absen</a>
        </li>
        @endif
        @if(session()->has('data'))
          @if(Session::get('data')->name == 'Admin')
          <li class="nav-item">
            <a class="nav-link active" href="/daftar-hadir">Daftar Absen</a>
          </li>
          @endif 
          <li class="nav-item">
            <a class="nav-link active" href="/logout">Logout</a>
          </li>                     
        @else
          <li class="nav-item">
            <a class="nav-link active" href="/registration">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/login">Login</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>         


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <a class="navbar-brand text-white" href="#">TI Reg C 21
                @if(session()->has('data'))
                  | Logged in as {{ Session::get('data')->name }}
                @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mr-0 ml-auto">
                    <li class="nav-item">
                      <a class="nav-link text-muted" href="#">JADWAL</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted" href="#">ABSEN</a>
                    </li>
                    @if(session()->has('data'))
                      <li class="nav-item">
                        <a class="nav-link text-muted" href="/logout">LOG OUT</a>
                      </li>                     
                    @else
                      <li class="nav-item">
                        <a class="nav-link text-muted" href="/registration">REGISTER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-muted" href="/login">LOGIN</a>
                      </li>
                    @endif
                  </ul>
                </div>
              </nav> -->
</header>