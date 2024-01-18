<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign-up | Klimax </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-o3V4GW5FBeL5X6Sp1P1M7tFUm1z9Sfjt9dZlX8S/E7y5N2yDx8kA7GT8dI0tA9aC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">


  <style>
    body {
      margin-top: -60px;
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 450px;
      margin: 100px auto;
      
    }
    .custom{
        color: ;
        background-color: #001a33;
        height: 630px;
        
    }
    .input-hp{
        padding: 7%;
        margin-top: -15%
    }
    .input-password{
        padding: 7%;
        margin-top: -1%
    }
   
    .submit{
        width: 40%;
        padding: 3%;
        text-align: center;
        margin: 6% auto;
        margin-top: 6%;
        float: center;
    }
    .img{
      margin-top: 20px;
    }
    
  </style>
</head>
<body>

<div class="container login-container">
  <div class="card custom">
    <div class="card-header text-center">
        <img class="img" src="{{ asset('assets/img/icon_klimax.png')}}" alt="" width="270" height="150">
      </div
      {{--  <h3 style="color: #f8f9fa">Login</h3>  --}}
    </div>
    <div class="card-body">
      <form action="/progresRegister" method="POST">
        @csrf
        <div class="form-group mb-6">
          <label style="color: gray; font-size: 12px; margin-bottom: 60px; " class="" for="">Nama</label>
          <input type="text" name="name" class="form-control mb-6 input-hp" id="" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group mb-6">
          <label style="color: gray; font-size: 12px; margin-bottom: 60px; " class="" for="">Email</label>
          <input type="text" name="email" class="form-control mb-6 input-hp" id="" placeholder="Masukkan email" required>
        </div>
        <div class="form-group">
          <label style="color: gray; font-size: 12px; margin-buttom: 60px;" for="">Password</label>
          <input type="password" name="password" class="form-control input-password" id="password" placeholder="Masukkan password" required>
        </div>
          <input type="hidden" name="id_role" value="2">
        <div style="display: flex; justify-content: ; flex-direction: column; align-items: ;">
          <a style="margin-bottom: 0px; font-size: 12px; color: white;" href="/sign-in" class="text-right">Login</a>
          <button style="margin-top: 3%" type="submit" class="btn btn-primary submit ">Masuk</button>
      </div>      
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
