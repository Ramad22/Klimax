<?php

namespace App\Http\Controllers;

use App\Models\data_warga;
use App\Models\jadwal;
use App\Traits\WablasTrait;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function landingPage()
    {   
       $jadwal = [
        'Senin' => jadwal::where('hari', 'Senin')->get(),
        'Selasa' => jadwal::where('hari', 'Selasa')->get(),
        'Rabu' => jadwal::where('hari', 'Rabu')->get(),
        'Kamis' => jadwal::where('hari', 'Kamis')->get(),
        'Jumat' => jadwal::where('hari', 'Jumat')->get(),
        'Sabtu' => jadwal::where('hari', 'Sabtu')->get(),
        'Ahad' => jadwal::where('hari', 'Ahad')->get(),
       ];
        return view("landing-page", compact('jadwal'));
    }
    public function profile()
    {
        return view("profile");
    }

    public function store()
    {
        $kumpulan_data = [];
        $data['phone'] = request('no_wa');
        $data['message'] = request('pesan');
        $data['secret'] = false;
        $data['retry'] = false;
        $data['isGroup'] = false;
        array_push($kumpulan_data, $data);
        WablasTrait::sendText($kumpulan_data);
        return redirect()->back();
    }
    
}
