<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
   <header>
    <div class="navbar">
        <div class="container">
            <div class="box-navbar">
                <div class="logo">
                    <img class="logo" src="{{asset('assets/img/icon_klimax.png')}}" alt="" width="100px" height="70px">
                </div>
                <ul class="menu">
                    <li><a href="#"</a>Home</li>
                    <li><a href="#"</a>Jadwal Ronda</li>
                    <li><a href="#"</a>Laporan</li>
                    <li><a href="#"</a>Lokasi</li>
                    <li><a href="#"</a><i class="fa fa-user"></i></li>
                </ul>
                <i class="fa-solid fa-bars menu-bar"></i>
            </div>
        </div>
    </div>
    
    <div class="hero">
        <div class="container">
            <div class="box-hero">
                <div class="box">
                    <h1>Keamanan Lingkungan</br> Maksimal </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Laudantium saepe earum </p>
                </div>
            
            <div class="box">
                <img src="{{ asset('assets/img/icon_jadwal.png')}}" alt="" width="" height="">
            </div>
        </div>
    </div>
</div>
</header>
</body>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
