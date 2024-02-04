<?php

namespace App\Http\Controllers;

use App\Models\data_warga;
use App\Models\jadwal;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $warga = data_warga::count();
        $user = User::count();
        $jadwal = jadwal::count();
        return view("Admin/dashboard", compact('warga', 'user', 'jadwal'));
    }

    public function dataWarga()
    {   
        $warga = data_warga::all();
        return view("Admin/data-warga", compact('warga'));
    }
    public function storeWarga(Request $request)
    {
        data_warga::create([
            'nik'=> $request->nik,
            'nama_warga'=> $request->nama_warga,
            'tempat_lahir'=> $request->tempat_lahir,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'alamat'=> $request->alamat,
            'blok'=> $request->blok,
            'status'=> $request->status,
            'pekerjaan'=> $request->pekerjaan,
            'no_hp'=> $request->no_hp,
        ]);
        return back();
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

        return back();
    }

    public function deleteWarga($id_warga)
    {
        $warga = data_warga::findOrFail($id_warga);
        $warga->delete();
        return back();
    }
    
    public function jadwalPengguna()
    {
        $user = User::all();
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
        return back();
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }

    public function jadwalRonda()
    {
        $jadwal = jadwal::all();
        $warga = data_warga::all();
        return view("Admin/jadwal-ronda", compact('jadwal', 'warga'));
    }

    public function storeJadwal(Request $request)
    {
        jadwal::create([
            'hari'=> $request->hari,
            'id_warga'=> $request->id_warga,
            'no_hp'=> $request->no_hp,
        ]);
        return back();
    }

    public function deleteJadwal($id_jadwal)
    {
        $jadwal = jadwal::findOrFail($id_jadwal);
        $jadwal->delete();
        return back();
    }

    public function updateJadwal(Request $request, $id_jadwal)
    {
        $jadawl = jadwal::findOrFail($id_jadwal);
        $jadawl->hari = $request->input('hari');
        $jadawl->id_warga = $request->input('id_warga');
        $jadawl->no_hp = $request->input('no_hp');
        $jadawl->update();
        return back();
    }

    public function dataPelapor()
    {   
        $lapor = Laporan::all();
        return view("Admin/data-pelapor", compact('lapor'));
    }
}
