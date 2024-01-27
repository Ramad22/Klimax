<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign-in | Klimax </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-o3V4GW5FBeL5X6Sp1P1M7tFUm1z9Sfjt9dZlX8S/E7y5N2yDx8kA7GT8dI0tA9aC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">


  <style>
    body {
      margin-top: -50px;
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 450px;
      margin: 100px auto;
      
    }
    .custom{
        color: ;
        background-color: #001a33;
        height: 580px;
        
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
        display: block;
    }
    .img{
      margin-top: 20px;
    }
    .error{
      color: red;
      font-size: 12px;
      
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
      <form action="/progresLogin" method="POST">
        @csrf
        <div class="form-group mb-6">
          <label style="color: white; font-size: 14px; margin-bottom: 60px; " class="" for="">No Hp</label>
          <input type="number" class="form-control mb-6 input-hp" id="" placeholder="Masukkan No Hp" name="no_hp" required>
          @error('no_hp')
              <div class="error"> {{$message}} </div>
          @enderror
        </div>
        <div class="form-group">
          <label style="color: white; font-size: 14px; margin-buttom: 60px;" for="">Password</label>
          <input type="password" class="form-control input-password" id="password" placeholder="Masukkan password" name="password" required>
          @error('password')
              <div class="error"> {{$message}} </div>
          @enderror
        </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label style="color: #f8f9fa; font-size: 13px;" class="form-check-label" for="remember">
                Remember Me
            </label>
        </div>
      
        <div style="display: flex; justify-content: ; flex-direction: column; align-items: ;">
          <a style="margin-bottom: 0px; font-size: 13px; color: white;" href="#" class="text-right">Reset Password</a>
          <button style="margin-top: 4%;" type="submit" class="btn btn-primary submit ">Masuk</button>
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
