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
                    <img s src="{{asset('assets/img/icon_klimax.png')}}" alt="" width="100px" height="70px">
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
                    <h1>Keamanan Lingkungan</br> Maxsimal </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Laudantium saepe earum </p>
                        <button>Laporkan</button>
                </div>
            
            <div class="box">
                <img src="{{ asset('assets/img/jadwal_icon.png')}}" alt="" width="" height="">
            </div>
        </div>
    </div>
</div>
</header>

                               

    <div class="jadwal">
        <div class="container">
            <div class="table">
                <h1>Jadwal Ronda</h1>
                <table class="table table-dark table-striped-columns table-responsive">
                    <th>No</th>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                    <th>Sabtu</th>
                    <th>Minggu</th>

                    <tr>
                        <td>1</td>
                        <td>Asep</td>
                        <td>Ahmad</td>
                        <td>Kalbu</td>
                        <td>Adi</td>
                        <td>Bambang</td>
                        <td>Aip</td>
                        <td>salman</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Asep</td>
                        <td>Ahmad</td>
                        <td>Kalbu</td>
                        <td>Adi</td>
                        <td>Bambang</td>
                        <td>Aip</td>
                        <td>salman</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Asep</td>
                        <td>Ahmad</td>
                        <td>Kalbu</td>
                        <td>Adi</td>
                        <td>Bambang</td>
                        <td>Aip</td>
                        <td>salman</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Asep</td>
                        <td>Ahmad</td>
                        <td>Kalbu</td>
                        <td>Adi</td>
                        <td>Bambang</td>
                        <td>Aip</td>
                        <td>salman</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Asep</td>
                        <td>Ahmad</td>
                        <td>Kalbu</td>
                        <td>Adi</td>
                        <td>Bambang</td>
                        <td>Aip</td>
                        <td>salman</td>
                    </tr>
                  </table>
            </div>
        </div>
    </div>

                        
    <div class="laporan">
        <div class="container">
            <h1>Laporan</h1>
            <center>
                <div class="form-group col-sm-3 d-flex align-items-center mt-4">
                    <label style="color: white" class="mr-2" for="">TKP <small>(Tempat Kejadian Perkara)</small></label>
                    <input type="text" name="" id="" class="form-control" placeholder="contoh b.02">
                </div>
                <button class="btn btn-primary mt-3">Laporkan</button>
            </div>
        </div>
    </center>

    <div class="lokasi">
        <div class="container">
            <h1>Lokasi</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d206.56896733417756!2d107.55233299154435!3d-7.016718388760505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1705242611302!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>



    <footer>
        <p>&copy; PKK</p>
    </footer>
</body>
<script src="{{ asset('assets/js/landing.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
