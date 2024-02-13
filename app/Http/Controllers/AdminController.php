<?php

namespace App\Http\Controllers;

use App\Models\data_warga;
use App\Models\jadwal;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // Periksa apakah pengguna telah login
            if (Auth::check()) {
                // Jika pengguna telah login, periksa peran pengguna
                $userRole = Auth::user()->id_role;

                // Jika peran pengguna bukan admin, arahkan ke halaman 403
                if ($userRole !== 1) {
                    abort(403, 'Anda tidak memiliki akses ke halaman ini');
                }
            } else {
                // Jika pengguna belum login, arahkan ke halaman login
                return redirect('/sign-in');
            }

            // Lanjutkan proses middleware
            return $next($request);
        });
    }

    public function dashboard()
    {
        $warga = data_warga::count();
        $user = User::count();
        $jadwal = jadwal::count();
        $lapor = Laporan::count();
        return view("Admin/dashboard", compact('warga', 'user', 'jadwal', 'lapor'));
    }

    public function dataWarga()
    {   
        $warga = data_warga::paginate(25);
        return view("Admin/data-warga", compact('warga'));
    }
    public function storeWarga(Request $request)
    {
       $dataWarga = [
        'nik'=> $request->nik,
        'nama_warga'=> $request->nama_warga,
        'tempat_lahir'=> $request->tempat_lahir,
        'tanggal_lahir'=> $request->tanggal_lahir,
        'alamat'=> $request->alamat,
        'blok'=> $request->blok,
        'status'=> $request->status,
        'pekerjaan'=> $request->pekerjaan,
        'no_hp'=> $request->no_hp,
       ];

       $wargas = data_warga::create($dataWarga);
       $nama = ($request->nama_warga);
    //    $password = str_replace('', '', strtolower($request->nama_warga));
       $password = $nama;
       $passwordHas = bcrypt($password); 

       $role = $request->has('id_role') ? $request->id_role : 2;
        $userData = [
            'name'=>$nama,
            'no_hp'=>$request->no_hp,
            'id_role'=>$role,
            'password'=>$passwordHas,
            'blok'=>$request->blok,
        ];
        User::create($userData);
        return back()->with('success', 'Data berhasil di tambahkan');
    }
    public function updateWarga(Request $request, $id_warga)
    {
        $warga = data_warga::findOrFail($id_warga);
        $warga->nik = $request->input('nik');
        $warga->nama_warga = $request->input('nama_warga');
        $warga->tempat_lahir = $request->input('tempat_lahir');
        $warga->tanggal_lahir = $request->input('tanggal_lahir');
        $warga->alamat = $request->input('alamat');
        $warga->blok = $request->input('blok');
        $warga->status = $request->input('status');
        $warga->pekerjaan = $request->input('pekerjaan');
        $warga->no_hp = $request->input('no_hp');
        $warga->update();

        return back()->with('update', 'Data berhasil di ubah');
    }

    public function deleteWarga($id_warga)
    {
        $warga = data_warga::findOrFail($id_warga);
        $warga->delete();
        return back();
    }
    
    public function jadwalPengguna()
    {
        $user = User::where('id_role', 2)->paginate(25);
        return view("Admin/data-pengguna", compact('user'));
    }

    public function storeUser(Request $request)
    {
        $role = $request->has('id_role') ? $request->id_role: 2;
        User::create([
            'name'=> $request->name,
            'no_hp'=> $request->no_hp,
            'password'=> bcrypt($request->password),
            'blok'=> $request->blok, 
            'id_role'=> $role,
        ]);
        return back();
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->no_hp = $request->input('no_hp');
        $user->password = $request->input('password');
        $user->blok = $request->input('blok');
        $user->update();
        return back()->with('update', 'Data berhasil di ubah');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }

    public function jadwalRonda()
    {
        $jadwal = jadwal::orderBy('hari')->paginate(25);
        $warga = data_warga::all();
        return view("Admin/jadwal-ronda", compact('jadwal', 'warga'));
    }

    public function storeJadwal(Request $request)
    {  
        
        jadwal::create([
            'hari' => $request->hari,
            'id_warga' => $request->id_warga,
            'id_no_hp' => $request->id_no_hp
        ]);
    
        return redirect()->back()->with('success', 'Data berhasil di tambahkan.');
    }

    public function deleteJadwal($id_jadwal)
    {
        $jadwal = jadwal::findOrFail($id_jadwal);
        $jadwal->delete();
        return back();
    }

    public function updateJadwal(Request $request, $id_jadwal)
    {
        $jadwal = jadwal::findOrFail($id_jadwal);
        $jadwal->hari = $request->input('hari');
        $jadwal->id_warga = $request->input('id_warga');
        $jadwal->id_no_hp = $request->input('id_no_hp');
        $jadwal->save();
        return back()->with('update', 'Data berhasail di ubah');
    }

    public function dataPelapor()
    {   
        $lapor = Laporan::with('user')->paginate(25);
        return view("Admin/data-pelapor", compact('lapor'));
    }

    public function resultWarga(Request $request)
    {
        if($request->has('search')){
            $warga = data_warga::where('nama_warga', 'LIKE', '%'.$request->search. '%')->paginate(25);
        }else{
            $warga = data_warga::paginate(25);
        }
        return view('Admin/data-warga', compact('warga'));
    }
    public function resultUser(Request $request)
    {
        if($request->has('search')){
            $user = User::where('name', 'LIKE', '%'.$request->search. '%')->paginate(25);
        }else{
            $user = User::paginate(25);
        }
        return view('Admin/data-pengguna', compact('user'));
    }
    public function resultJadwal(Request $request)
    {
        if($request->has('search')){
            $jadwal = jadwal::where('hari', 'LIKE', '%'.$request->search. '%')->paginate(25);
            $warga = data_warga::paginate(25);
        }else{
            $warga = data_warga::paginate(25);
            $jadwal = jadwal::paginate(25);
        }
        return view('Admin/jadwal-ronda', compact('jadwal', 'warga'));
    }
}
