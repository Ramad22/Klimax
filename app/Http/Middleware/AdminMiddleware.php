<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check()) {
        //     // Jika pengguna telah login, periksa peran pengguna
        //     $userRole = Auth::user()->id_role;
            
        //     // Jika peran pengguna bukan admin (misalnya, peran 1 adalah peran admin)
        //     if ($userRole !== 1) {
        //         // Arahkan pengguna ke halaman 403 dengan pesan yang sesuai
        //         abort(403, 'Anda tidak memiliki akses ke halaman ini');
        //     }
        // } else {
        //     // Jika pengguna belum login, arahkan ke halaman login
        //     return redirect('/sign-in');
        // }

        // Jika pengguna adalah admin, lanjutkan ke tujuan berikutnya
        return $next($request);
    }
}
