@extends('Admin.Layout.main')

@section('konten')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Button trigger modal -->
<div class="container">
    
    <button type="button" style="float:right;" class="btn btn-primary my-0 mt-2 " data-bs-toggle="modal"
    data-bs-target="#exampleNote">
    Tambah
</button>
</div>
<h6 class="fw-bold py-3 mb-6 ms-3"><span class="text-muted fw-light"></span>Data Warga</h6>


<!-- Modal -->
<div class="modal fade" id="exampleNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="text-center mt-4">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Warga</h5>
    </div>
    <div class="modal-body">
        <form action="/storeTarget" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="yourTargets" placeholder="your targets" name="your_target">
                <label for="yourTargets">Nik</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="howLong" placeholder="How long" name="how_long">
                <label for="howLong">Nama Warga</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="endsOn" placeholder="ends on" name="end_on">
                <label for="endsOn">Tempat Lahir</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="endsOn" placeholder="ends on" name="end_on">
                <label for="endsOn">Tanggal Lahir</label>
            </div>
            <div class="form-floating mb-3">
               <select class="form-control" name="" id="">
                <option value="">Jenis Kelamin</option>
                <option value="">Laki-laki</option>
                <option value="">Perempuan</option>
               </select>
                <label for="endsOn">Jenis Kelamin</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="endsOn" placeholder="ends on" name="end_on">
                <label for="endsOn">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="endsOn" placeholder="ends on" name="end_on">
                <label for="endsOn">Blok</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="endsOn" placeholder="ends on" name="end_on">
                <label for="endsOn">Status</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="endsOn" placeholder="ends on" name="end_on">
                <label for="endsOn">Pekerjaan</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control " id="endsOn" placeholder="Contoh 628932473232" name="end_on">
                <label for="endsOn">No Handphone</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary me-3">Save</button>
        </div>
    </form>
</div>

</div>
</div>

<div class="col-12 mx-3 me-3">
    <div class="bg-light rounded h-100 p-4">
        
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="text-center">Nik</th>
                        <th scope="col" class="text-center">Nama Warga</th>
                        <th scope="col" class="text-center">Tempat Lahir</th>
                        <th scope="col" class="text-center">Tanggal Lahir</th>
                        <th scope="col" class="text-center">Alamat</th>
                        <th scope="col" class="text-center">Blok</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Pekerjaan</th>
                        <th scope="col" class="text-center">No Handphone</th>
                        <th scope="col" class="text-center">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {{--  @foreach ($target as $index => $t)  --}}
                        <th scope="row">1</th>
                        <td class="text-center">2222</td>
                        <td class="text-center">Gilang</td>
                        <td class="text-center">Bandung</td>
                        <td class="text-center">22-08-2005</td>
                        <td class="text-center">Kp Mekarsari</td>
                        <td class="text-center">B 02</td>
                        <td class="text-center">Kawin</td>
                        <td class="text-center">PNS</td>
                            <td id="copyCell">62324342432
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16" onclick="copyText()">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM11 7h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2z"/>
                              </svg>
                            </td>
                            <form action="" method="GET" onsubmit="return confirm ('Are you sure want to delete this ?')">
                                @csrf
                                <td class="text-center"><button class="btn btn-light" type="submit"><i class="fa fa-trash"></button></i>
                                    <button class="btn btn-light" type="submit"><i class="fa fa-pen"></button></i>
                                </td>
                                @method('DELETE')
                            </form>
                            <script>
                              function copyText() {
                                // Select the content of the <td> element
                                var copyText = document.getElementById("copyCell");
                                
                                // Create a range and select the text
                                var range = document.createRange();
                                range.selectNode(copyText);
                                window.getSelection().removeAllRanges();
                                window.getSelection().addRange(range);
                                
                                // Copy the selected text
                                document.execCommand("copy");
                                
                                // Deselect the text
                                window.getSelection().removeAllRanges();
                                
                                // You can add additional feedback, like an alert or console log
                                console.log("Text copied: " + copyText.innerText);
                              }
                            </script>
                            
                        
                    </tr>
                    {{--  @endforeach  --}}
                </tbody>
            </table>
        </div>
    </div>
    {{--  <p class="mt-3"> {{$target->links()}} </p>  --}}
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection