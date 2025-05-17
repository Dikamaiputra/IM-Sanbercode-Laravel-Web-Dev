<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Company</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          </li>
          @auth
          <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
          @endauth
          <li><a href="{{ route('books.index') }}">Books</a></li>
          <li><a href="{{ route('genre.index') }}">Genre</a></li>
          <li><a href="{{ route('profile.index') }}">Profile</a></li>
          @guest
            <div>
              <a href="{{ route('login') }}" class="btn btn-outline-primary">LOGIN</a>
            </div>
        @endguest
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>