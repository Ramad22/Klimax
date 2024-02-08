@extends('Admin.Layout.main')

@section('konten')
  <!-- Sale & Revenue Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                          <a href='{{ route('Admin/data-warga')}}'><i class="fa fa-chart-pie fa-3x text-primary"></i></a>
                            <div class="ms-3">
                                <p class="mb-2">Data Warga</p>
                                <h6 class="mb-0">{{$warga}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <a href='{{ route('Admin/data-pengguna')}}'><i class="fa fa-chart-bar fa-3x text-primary"></i></a> 
                            <div class="ms-3">
                                <p class="mb-2">Data Pengguna</p>
                                <h6 class="mb-0">{{$user}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                           <a href="{{ route('Admin/jadwal-ronda')}}"><i class="fa fa-chart-area fa-3x text-primary"></i></a>
                            <div class="ms-3">
                                <p class="mb-2">Data Ronda</p>
                                <h6 class="mb-0">{{$jadwal}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">laporan</p>
                                <h6 class="mb-0">{{$lapor}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
          
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
           
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                   
                        </div>
                    </div>
                </div>
            </div>
            
@endsection