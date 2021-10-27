<nav class="navbar navbar-expand-xl navbar-light bg-white sticky-top shadow-sm">
    <div class="container-fluid align-items-start">
        <button class="navbar-toggler nav-toggle" type="button" aria-label="Toggle navigation">
            <span class="fs-1 text-primary"><i class="bi bi-list"></i></span>
        </button>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a href="#" class="d-flex flex-row-reverse align-items-center dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-lg ms-0 ms-lg-3">
                        <img src="/assets/vendors/mazer/images/faces/1.jpg" alt="Username">
                    </div>
                    <span class="font-bold d-none d-lg-inline">{{ auth()->user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-key"></i> Ganti Password</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-activity"></i> Activity Log</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-left"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>