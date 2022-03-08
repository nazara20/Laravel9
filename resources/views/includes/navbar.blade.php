<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm bg-white">
    <div class="container">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('assets/image/logo-kampus-merdeka.png') }}" alt="" width="70px">
            </a>

              <div id="collapsibleNavId">
                <ul class="navbar-nav  me-auto mb-2 mb-lg-0">   
                  <li class="nav-item">
                    <a class="nav-link {{  (request()->routeIs('beranda')) ? 'active' : ''  }} " aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  (request()->routeIs('buku')) ? 'active' : ''  }} " href="{{ route('buku') }}">Buku</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  (request()->routeIs('kategori')) ? 'active' : ''  }} " href="{{ route('kategori') }}">Kategori</a>
                  </li>
                </div>
                  <div>
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> JohnDoe</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
                </ul>
              
             
              
    </div>
    
</div>
  </nav>
