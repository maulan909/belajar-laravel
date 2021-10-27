<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active == 'home')? 'active':'' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == 'about')? 'active':'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == 'blog')? 'active':'' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == 'categories')? 'active':'' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a href="#" class="nav-link {{ ($active == 'logout')? 'active':'' }} dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</a>
              <ul class="dropdown-menu dropdown-menu-end shadow " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid"></i> Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-left"></i> Logout</button></li>
                  </form>
              </ul>
            </li>
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active == 'login')? 'active':'' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            <li class="nav-item">
              <a href="/register" class="nav-link {{ ($active == 'register')? 'active':'' }}"><i class="bi bi-person-plus"></i> Register</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>