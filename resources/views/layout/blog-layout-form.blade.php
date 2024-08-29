<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Care - Blog Kesehatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/logo-4.png">
</head>

<body>
    <div class="container-fluid bagian-1 d-flex">
        <div class="isi-header">
            <h1>BLOG KESEHATAN</h1>
            <h1>ARTIKEL GAYA HIDUP SEHAT</h1>
            <p style="color: white;">Mulai melakukan gaya hidup sehat dari detik ini</p>
            <a href="/@yield('link')" class="beranda">@yield('menu')</a>
        </div>
    </div>

    <div class="container-fluid" style="padding: 20px;">
    @yield('content')
    </div>
   
{{-- footer --}}
<div class="footer">
    <div class="row d-flex justify-content-center">
        <div class="menu-footer col-4 d-flex justify-content-center">
            <img src="/img/logo-3.png" alt="">
        </div>
    </div>
</div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>