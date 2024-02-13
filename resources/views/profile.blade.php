<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Pastikan Anda sudah menyertakan Bootstrap jika ingin menggunakan styling Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="path/to/bootstrap.css"> -->

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #001a33;
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
        .back{
            float: left;
            margin-top: -30px;
        }
    </style>
</head>
<body>

<div class="profile-container text-center">
    <img src="https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" alt="Profile Picture" class="profile-picture mx-auto">
    <div class="user-info">
        <h2 style="text-transform: capitalize;">{{ Auth::user()->name}}</h2>
        <p>{{ Auth::user()->no_hp }}
            <button style="font-size: 14px;" type="button" class="btn btn-success no-border" data-bs-toggle="modal" data-bs-target="#tambahWarga"><i class="fa fa-pencil"></i></button>
        </p>
        <p style="text-transform: capitalize">{{ Auth::user()->roles->role}}</p>
    </div>
    <hr>
    <h3>Alamat</h3>
    <p style="text-transform: capitalize;">Jln. Mekarsari RT 03 RW 14 Kecamatan Katapang Desa Gandasari Blok {{Auth::user()->blok}}</p><br>
    <a href="/landing-page" class="btn btn-success back">Back</a>
    <!-- Tambahkan elemen HTML lainnya sesuai dengan kebutuhan profil Anda -->
</div>
<div class="modal fade" id="tambahWarga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="text-center mt-4">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('editProfile', Auth::user()->id)}}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="" placeholder="" name="no_hp" value="{{ Auth::user()->no_hp }}">
                        <label for="yourTargets">No Hp</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="password" value="{{ Auth::user()->password }}">
                        <label for="howLong">Password</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success me-3">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<style>
    .toast-center {
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<script>
    @if (session('update'))
        toastr.success("{{ session('update') }}", null, {
            positionClass: 'toast-center',
        });
    @endif
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>
