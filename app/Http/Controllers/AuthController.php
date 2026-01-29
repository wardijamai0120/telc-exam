<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessCode;

class AuthController extends Controller
{
    // عرض صفحة login
    public function showLogin()
    {
        return view('auth.login');
    }

    // التحقق من الكود
    public function loginWithCode(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);

        $accessCode = AccessCode::where('code', $request->code)
            ->where('is_active', true)
            ->first();

        if (!$accessCode) {
            return back()->withErrors(['code' => 'الكود غير صحيح']);
        }

        if ($accessCode->expires_at && $accessCode->expires_at->isPast()) {
            return back()->withErrors(['code' => 'انتهت صلاحية الكود']);
        }

        // ✅ تخزين المعلومات في session
        session([
            'access_code' => $accessCode->code,
            'access_role' => $accessCode->type ?? 'user', // admin | user
        ]);

        // ✅ توجيه حسب النوع
        if (($accessCode->type ?? 'user') === 'admin') {
            return redirect('/dashboard');
        }

        return redirect('/home');
    }

    // تسجيل الخروج
    public function logout()
    {
        session()->forget(['access_code', 'access_role']);
        return redirect('/login');
    }
}
