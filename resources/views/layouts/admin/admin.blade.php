<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Mazer Dashboard</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendors/mazer/css/bootstrap.css">
    
    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/vendors/mazer/css/app.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/trix.css">
    <script type="text/javascript" src="/assets/js/trix.js"></script>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="shortcut icon" href="/assets/vendors/mazer/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('partials.admin.sidebar')
        @include('partials.admin.topbar')
        <div class="wrapper d-flex flex-column">
            <div id="main" class="flex-grow-1 mb-3">
                {{-- <header class="mb-3">
                    <a href="#" class="burger-btn nav-toggle d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header> --}}
                    
                <div class="page-heading">
                    @if (session('admMessage'))
                        <div class="alert alert-success">
                            {{ session('admMessage') }}
                        </div>
                    @endif
                    <h3>{{ $title }}</h3>
                </div>
                <div class="page-content">
                    @yield('adminContent')
                </div>
                
            </div>
            <footer class="bg-white p-4 flex-shrink-0">
                <div class="row justify-content-between">
                    <div class="col d-flex align-items-center">
                        2021 &copy; Mazer
                    </div>
                    <div class="col d-flex align-items-center justify-content-end">
                        Crafted with &nbsp;<i class="bi bi-heart-fill text-danger"></i>&nbsp; by <a href="http://ahmadsaugi.com">A. Saugi</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/vendors/mazer/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/mazer/js/pages/dashboard.js"></script>
    <script src="/assets/vendors/mazer/js/mazer.js"></script>
</body>

</html>
