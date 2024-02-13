@extends('Admin.Layout.main')

@section('konten')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Button trigger modal -->
    <h6 class="fw-bold py-0 mb-0 ms-3"><span class="text-muted fw-light ms-6"></span>Data Ronda</h6>
    <div class="container mb-4">
        <button type="button" style="float:right; margin-buttom: 50px;" class="btn btn-primary my-0 mt-2"
            data-bs-toggle="modal" data-bs-target="#exampleNote">
            Tambah
        </button>
    </div>

    <div class="d-none d-md-flex ms-3">
        <form action="{{ route('resultJadwal') }}" method="GET">
            <input style="margin-bottom: 10px;" type="search" name="search" class="form-control border-2 w-75"
                placeholder="Search">
        </form>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="text-center mt-4">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Ronda</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addJadwal') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-control" name="hari" id="" required>
                                <option value=""selected>Pilih Hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Ahad">Ahad</option>
                            </select>
                            <label for="endsOn">Hari</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="id_warga" id="selectNamaWarga" required>
                                <option value="" selected>Pilih Nama Warga</option>
                                @foreach ($warga as $item)
                                    <option value="{{ $item->id_warga }}" data-nohp="{{ $item->no_hp }}">
                                        {{ $item->nama_warga }}</option>
                                @endforeach
                            </select>
                            <label for="endsOn">Nama Warga</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control" name="id_no_hp" id="inputNoHp" placeholder=" "
                                readonly>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var selectNamaWarga = document.getElementById("selectNamaWarga");
                                var inputNoHp = document.getElementById("inputNoHp");

                                selectNamaWarga.addEventListener("change", function() {
                                    var selectedNamaWargaId = this.value; // Mendapatkan ID nama warga yang dipilih

                                    // Isi input nomor telepon dengan ID nomor HP yang sesuai
                                    inputNoHp.value = selectedNamaWargaId;
                                });
                            });
                        </script>

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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Hari</th>
                            <th colspan="0" scope="col" class="text-center">Nama Warga</th>
                            <th scope="col" class="text-center">No Hp</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {{--  @foreach ($target as $index => $t)  --}}
                               @foreach ($jadwal as $index => $item)
                                <td class="text-center">{{ $index + $jadwal->firstItem() }}</td>
                                <td class="text-center">{{ $item->hari }}</td>
                                <td class="text-center">{{ $item->dataWarga->nama_warga }}</td>
                                <td class="text-center">{{ $item->dataWarga->no_hp }}</td>
                                <form action="{{ route('hapusJadwal', $item->id_jadwal) }}" method="GET"
                                    onsubmit="return confirm ('Are you sure want to delete this ?')">
                                    @csrf
                                    @method('DELETE')
                                    <td class="text-center"><button class="btn btn-light" type="submit"><i
                                                class="fa fa-trash"></button></i>
                                </form>
                                {{--  <button class="btn btn-light" type="submit" data-bs-toggle="modal"
                                    data-bs-target="#editJadwal{{ $item->id_jadwal }}"><i class="fa fa-pen"></button></i>  --}}
                                </td>

                        </tr>
                        {{--  @endforeach  --}}

            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="editJadwal{{ $item->id_jadwal }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="text-center mt-4">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Jadwal Ronda</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('editJadwal', $item->id_jadwal) }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-control" name="hari" id="">
                                <option value="{{ $item->hari }}">{{ $item->hari }}</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Ahad">Ahad</option>
                            </select>
                            <label for="endsOn">Hari</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="id_warga" id="warga" required>
                                <option value="{{ $item->id_warga }}">{{ $item->dataWarga->nama_warga }}</option>
                                @foreach ($warga as $item)
                                    <option value="{{ $item->id_warga }}" data-nohp="{{ $item->no_hp }}">
                                        {{ $item->nama_warga }}</option>
                                @endforeach
                            </select>
                            <label for="endsOn">Nama Warga</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="id_no_hp" id="warga" required>
                                @foreach ($jadwal as $wargaItem)
                                    <option value="{{ $wargaItem->id_no_hp }}">{{ $wargaItem->id_no_hp }}</option>
                                @endforeach
                            </select>
                            <label for="endsOn">No Hp</label>
                        </div>

                        {{--  <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="id_no_hp"  id="hp" placeholder=" " readonly>
                        </div>  --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary me-3">Save</button>
                </div>
                </form>
            </div>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <p class="mt-3"> {{ $jadwal->links() }} </p>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
