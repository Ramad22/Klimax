<nav class="navbar bg-light navbar-light">
    <a href="index.html" class="navbar-brand mx-4 mb-3">
        <h3 class="text-primary"><i class="bi bi-journal-text me-2"></i>Klimax</h3>
    </a>
    <div class="d-flex align-items-center ms-4 mb-4">
        <div class="position-relative">
            <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt=""
                style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
            </div>
        </div>
        <div class="ms-3">
            <h6 class="mb-0">{{ Auth::user()->name}}</h6>
            <span style="text-transform: capitalize;">{{ Auth::user()->roles->role}}<span>
        </div>
    </div>
    <div class="navbar-nav w-100">
        <a href="{{ route('Admin/dashboard')}}" class="nav-item nav-link  {{ \Route::is('Admin/dashboard') ? 'active' : ''}} "><i
                class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{ route('Admin/data-warga') }}" class="nav-item nav-link {{ \Route::is('Admin/data-warga') ? 'active' : ''}}"><i
                    class="bi bi-person-square me-2"></i>Data Warga</a>
                    <a href="{{ route('Admin/data-pengguna') }}" class="nav-item nav-link {{ \Route::is('Admin/data-pengguna') ? 'active' : ''}}"><i
                            class="bi bi-people me-2"></i>Data Pengguna</a>
        <a href="{{ route('Admin/jadwal-ronda')}}" class="nav-item nav-link {{ \Route::is('Admin/jadwal-ronda') ? 'active' : ''}}"><i
                class="bi bi-check-circle me-1"></i>Jadwal Ronda</a>
        <a href="{{ route('Admin/data-pelapor')}}" class="nav-item nav-link {{ \Route::is('Admin/data-pelapor') ? 'active' : ''}}"><i
                class="bi bi-check-circle me-1"></i>Data Pelapor</a>
        {{--  <a href="{{ route('Admin.manajemen-report') }}" class="nav-item nav-link {{ \Route::is('') ? 'active' : ''}}"><i
                class="far fa-file-alt me-1"></i>Manajemen Report</a>  --}}
    </div>
</nav>