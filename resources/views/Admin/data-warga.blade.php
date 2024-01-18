@extends('Admin.Layout.main')

@section('konten')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Button trigger modal -->
<div class="container">
    
    <button type="button" style="float:right;" class="btn btn-primary my-0 mt-2 " data-bs-toggle="modal"
    data-bs-target="#exampleNote">
    Add targets
</button>
</div>
<h6 class="fw-bold py-3 mb-6 ms-3"><span class="text-muted fw-light"></span>Live Targets</h6>


<!-- Modal -->
<div class="modal fade" id="exampleNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="text-center mt-4">
                <h5 class="modal-title" id="exampleModalLabel">Add your targets</h5>
    </div>
    <div class="modal-body">
        <form action="/storeTarget" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="yourTargets" placeholder="your targets" name="your_target">
                <label for="yourTargets">Your targets</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="howLong" placeholder="How long" name="how_long">
                <label for="howLong">How long</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="endsOn" placeholder="ends on" name="end_on">
                <label for="endsOn">Ends on</label>
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
                        <th scope="col" class="text-center">Your Target</th>
                        <th scope="col" class="text-center">How Long</th>
                        <th scope="col" class="text-center">Ends On</th>
                        <th scope="col" class="text-center">Succes</th>
                        <th scope="col" class="text-center">Fail</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {{--  @foreach ($target as $index => $t)  --}}
                        <th scope="row"></th>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"><input type="checkbox" class="form-check-input"></td>
                        <td class="text-center"><input type="checkbox" class="form-check-input"></td>
                        <form action="" method="GET" onsubmit="return confirm ('Are you sure want to delete this ?')">
                            @csrf
                            @method('DELETE')
                            <td class="text-center"><button class="btn btn-light" type="submit"><i class="fa fa-trash"></button></i></td>
                        </form>
                        
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