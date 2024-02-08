@extends('Admin.Layout.main')

@section('konten')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Button trigger modal -->
    <div class="container">

    <h6 class="fw-bold py-3 mb-6 ms-3"><span class="text-muted fw-light"></span>Data Pelapor</h6>


    <!-- Modal -->


    <div class="col-auto mb-3">
    </div>
    <div class="col-12 mx-3 me-3">
        <div class="bg-light rounded h-100 p-4">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-center">Nama Warga</th>
                            <th scope="col" class="text-center">Jenis Laporan</th>
                            <th scope="col" class="text-center">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($lapor as $t)
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="text-center">{{ $t->user->name }}</td>
                                <td class="text-center">{{ $t->perkara }}</td>
                                <td class="text-center"> @if ($t->created_at)
                                    {{ $t->created_at->format('d F Y') }}
                                @endif</td>
                        </tr>
                    </tbody>
                    @endforeach
            </div>
        </div>
    </div>
    <p class="mt-3"> {{$lapor->links()}} </p> 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
