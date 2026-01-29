<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AccessCode;

class CheckAccessCode
{
    public function handle(Request $request, Closure $next)
    {
        // واش كاين session
        if (!session()->has('access_code')) {
            return redirect('/login');
        }

        return $next($request);

        $accessCode = AccessCode::where('code', $code)
            ->where('is_active', true)
            ->first();

        // إلا الكود ما بقاش موجود
        if (!$accessCode) {
            session()->forget('access_code');
            return redirect('/login')->withErrors([
                'code' => 'الكود غير صالح'
            ]);
        }

        // إلا الكود منتهي
        if ($accessCode->expires_at->isPast()) {
            session()->forget('access_code');
            return redirect('/login')->withErrors([
                'code' => 'انتهت صلاحية الكود'
            ]);
        }

        return $next($request);
    }
}
