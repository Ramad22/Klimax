<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,400&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container">
                <div class="box-navbar">
                    <div class="logo">
                        <img s src="{{ asset('assets/img/icon_klimax.png') }}" alt="" width="100px"
                            height="70px">
                    </div>
                    <ul class="menu">
                        <li><a href="#hero"</a>Home</li>
                        <li><a href="#jadwal"</a>Jadwal Ronda</li>
                        <li><a href="#laporan"</a>Laporkan</li>
                        <li><a href="#lokasi"</a>Lokasi</li>
                        <div class="dropdown">
                            <li><a href="#" class="dropbtn"><i class="fa fa-user"></i></a></li>
                            <div class="dropdown-content">
                                <a href="/profile">Profile</a>
                                <a href="/logout">Logout</a>
                            </div>
                        </div>
                    </ul>
                    <i class="fa-solid fa-bars menu-bar"></i>
                    <div class="call-logo" onclick="panggilan()"><i class="fa fa-phone"></i></div>


                    <div class="emergency-call">
                        <a href="tel:110">Polisi</a>
                        <a href="tel:113">Pemadam</a>
                        <a href="https://wa.me/628996982837/">Admin Web</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="hero" id="hero">
            <div class="container">
                <div class="box-hero">
                    <div class="box">
                        <h1>Keamanan Lingkungan</br> Maxsimal </h1>
                        <p>RT 03 RW 14 menjadi benteng solid dalam menciptakan lingkungan yang aman.</p>
                        <button onclick="pindah()">Laporkan</button>
                    </div>

                    <div class="box">
                        <img src="{{ asset('assets/img/jadwal_icon.png') }}" alt="" width=""
                            height="">
                    </div>
                    {{--  <br><br><br>  --}}
                    <div class="mb-0" id="jadwal"></div>
                </div>
            </div>
        </div>
    </header>


    <div class="jadwal">
        <div class="container">
            <div class="table">
                <h1>Jadwal Ronda</h1>
                <table class="table table-dark table-striped-columns table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center">Hari</th>
                            <th colspan="22" class="text-center">Nama Warga</th>
                        </tr>
                        @foreach ($jadwal as $hari => $dataHari)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $hari }}</td>
                                @foreach ($dataHari as $item)
                                    <td>
                                        Bp.{{ $item->dataWarga->nama_warga }}
                                        @if (date('N') == ($loop->parent->index % 7) + 1)
                                            <a style="font-size: 14px; background-color: transparent; text-decoration: none;"
                                                href="https://wa.me/{{ $item->dataWarga->no_hp }}/"
                                                class="fa fa-phone"></a>
                                            {{--  @else
                                   <a style="font-size: 14px; background-color: transparent; text-decoration: none;" href="https://wa.me/{{ $item->no_hp }}/" class="fa fa-envelope"></a>  --}}
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
            <div id="laporan"></div>
        </div>
    </div>


    <div class="laporan">
        <div class="container">
            <h1>Laporkan Kejadian</h1>
            <p class="informasi">Di RT 03 RW 14, sejumlah kejadian kritis perlu segera dilaporkan.<br> Mulai dari
                pencurian, kegiatan ilegal, hingga gangguan lingkungan. Pelaporan mendesak agar keamanan dan
                kesejahteraan warga terjamin.</p>
            <center>
                {{--  <button class="btn btn-primary button-laporan" type="button" onclick="confirmLaporkan()" >Laporkan</button>  --}}
                {{--  <script>
                function confirmLaporkan() {
                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    // Get the CSRF token from the meta tag
                                    const csrfToken = $('meta[name="csrf-token"]').attr('content');
                    
                                    // Make an AJAX request using POST method with CSRF token
                                    $.ajax({
                                        url: "/send-wa",
                                        type: "POST",
                                        headers: {
                                            'X-CSRF-TOKEN': csrfToken
                                        },
                                        data: {
                                            // Add any data you want to send with the request
                                            // For example: key1: value1, key2: value2
                                        },
                                        success: function(response) {
                                            // Handle success if needed
                                            console.log(response);
                    
                                            // Redirect to the /send-wa route after successful AJAX request
                                            window.location.href = "/send-wa";
                                        },
                                        error: function(xhr, status, error) {
                                            // Handle error if needed
                                            console.log(xhr.responseText);
                    
                                            // Show an error message using SweetAlert with the actual error message
                                            swal("Error", "Failed to process the request. Please try again. Error: " + xhr.responseText, "error");
                                        }
                                    });
                                } else {
                                    swal("Your imaginary file is safe!");
                                }
                            });
                        }
                    </script>  --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary button-laporan" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Laporkan
                    <div id="lokasi"></div>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fs-5" id="exampleModalLabel"
                                    style="color: #001a33; font-size: 5px;">Pelaporan Perkara</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>
                                    {{--  Apakah benar di RT 03 terdapat perkara yang membahayakan ?  --}}
                                </h5>
                                <form action="{{ route('send-wa') }}" method="POST">
                                    @csrf
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example" name="perkara" required>
                                        <option value="" disabled selected hidden>Pilih perkara apa yang terjadi
                                        </option>
                                        <option value="Kemalingan">Kemalingan</option>
                                        <option value="Kebakaran">Kebakaran</option>
                                        <option value="Kerusakan">Kerusakan</option>
                                    </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Lapor</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>


            </center>
            <br><br><br><br><br>

            <div class="lokasi">
                <div class="container">
                    <h1 class="mb-3">Lokasi</h1>
                    <div class="map-wrapper">
                        <center>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.1028683133845!2d107.54989447410804!3d-7.016804168733393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ed007d269697%3A0xd68cacd5a218fa4a!2sPos%20ronda!5e1!3m2!1sid!2sid!4v1705817964976!5m2!1sid!2sid"
                                width="600px" height="500px" style=";" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="lok"></iframe>
                        </center>
                    </div>
                </div>
            </div>


           
            <footer>
                <p>&copy; PKK</p>
            </footer>
</body>

<script src="{{ asset('assets/js/landing.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<style>
    .toast-center {
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<script>
    @if (session('success'))
        toastr.success("{{ session('success') }}", null, {
            positionClass: 'toast-center',
        });
    @endif
</script>
</html>
{{--  <center>
                <form action="{{ route('send-wa')}}" method="POST">
                @csrf
                <div class="form-group col-sm-3 d-flex align-items-center mt-4">
                    <label style="color: white" class="mr-2" for="">TKP <small>(Tempat Kejadian
                        Perkara)</small></label>
                        <input type="text" name="pesan" id="" class="form-control" placeholder="contoh b.02">
                    </div>
                    <label style="color: white" class="mr-2" for="">No Hp</label>
                        <input type="text" name="no_wa" id="" class="form-control" placeholder="contoh b.02">
                    </div>
                </form>
            </div>
        </div>
    </center>  --}}
