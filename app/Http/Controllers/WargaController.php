<?php

namespace App\Http\Controllers;

use App\Models\data_warga;
use App\Models\jadwal;
use App\Models\Laporan;
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

    public function store(Request $request)
    {
    $token = "dSqw92ByRd_VjG2WYjR-";

    try {
        $user = Auth::user();
        $userBlok = $user->blok;
        $idUser = $user->id;
        $phoneNumbers = DB::table('data_wargas')->pluck('no_hp');
        $selectedOption = $request->perkara;


        foreach ($phoneNumbers as $target) {
            $message = "Terdapat $selectedOption Di RT 03 RW 14 Pada Nomer Rumah $userBlok. ( Mohon Kepada Setiap Warga Selalu Waspada ! ). ";
            $response = Http::withHeaders([
                'Authorization' => $token,
            ])->post('https://api.fonnte.com/send', [
                'target' => $target,
                'message' => "$message",
                'delay' => '2',
            ]);
            $responseData = $response->json();
        }
        Laporan::create([
            'id_user'=>$idUser,
            'perkara'=>$request->perkara,
        ]);
        sleep(4);

        return redirect('landing-page');
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
    }

    
}
