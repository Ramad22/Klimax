<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Pastikan Anda sudah menyertakan Bootstrap jika ingin menggunakan styling Bootstrap -->
    <!-- <link rel="stylesheet" href="path/to/bootstrap.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-picture {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
            margin-left: 220px;
        }

        .user-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-info h2 {
            margin: 0;
            color: #333;
        }

        .user-info p {
            margin: 5px 0;
            color: #777;
        }
    </style>
</head>
<body>

<div class="profile-container text-center">
    <img src="https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" alt="Profile Picture" class="profile-picture mx-auto">
    <div class="user-info">
        <h2 style="text-transform: capitalize;">{{ Auth::user()->name}}</h2>
        <p>{{ Auth::user()->no_hp}}</p>
        <p style="text-transform: capitalize">{{ Auth::user()->roles->role}}</p>
    </div>
    <hr>
    <h3>Alamat</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique urna quis nulla ullamcorper, a tincidunt mi facilisis. Fusce eget tempor justo. Fusce at justo in sem posuere venenatis. Donec ac nunc vitae leo malesuada tempus vel vel neque.</p>
    <!-- Tambahkan elemen HTML lainnya sesuai dengan kebutuhan profil Anda -->
</div>

</body>
</html>
