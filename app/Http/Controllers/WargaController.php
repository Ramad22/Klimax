<?php

namespace App\Http\Controllers;

use App\Models\data_warga;
use App\Models\jadwal;
use App\Traits\WablasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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
    $token = "dSqw92ByRd_VjG2WYjR-";

    try {
        $user = Auth::user();
        $userBlok = $user->blok;
        $phoneNumbers = DB::table('data_wargas')->pluck('no_hp');

        foreach ($phoneNumbers as $target) {
            $response = Http::withHeaders([
                'Authorization' => $token,
            ])->post('https://api.fonnte.com/send', [
                'target' => $target,
                'message' => "Ada bahaya baru di rt 03 $userBlok",
                'delay' => '2',
            ]);
            $responseData = $response->json();
        }
        sleep(4);

        return redirect('landing-page');
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
    }

    
}
