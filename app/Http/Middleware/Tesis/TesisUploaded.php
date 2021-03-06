<?php

namespace App\Http\Middleware\Tesis;

use App\Models\Tesis;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TesisUploaded
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        $estudiante_id = $user->estudiante->id;
        
        $tesis = Tesis::where('estudiante_id', $estudiante_id)->first();

        if($tesis == NULL) {
            return $next($request);
        } else {
            return redirect()->route('home');
        }
        
    }
}
