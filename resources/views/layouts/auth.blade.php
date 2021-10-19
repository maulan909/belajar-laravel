<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Hilmi Blog Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/mazer/css/bootstrap.css">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendors/mazer/css/app.css">
    <link rel="stylesheet" href="assets/vendors/mazer/css/pages/auth.css">
</head>

<body>
    <div id="auth">
        
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left" class="p-5">
                    @yield('form')
                </div>
            </div>
            <div class="col-lg-7 d-none d-xl-block">
                <div id="auth-right">
                </div>
            </div>
        </div>

    </div>
</body>

</html>
