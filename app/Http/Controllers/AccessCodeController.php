<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessCode;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AccessCodeController extends Controller
{
    // عرض جميع الأكواد
    public function index()
    {
        $codes = AccessCode::latest()->get();
        return view('admin.access_codes.index', compact('codes'));
    }

    // ✅ صفحة إنشاء كود جديد
    public function create()
    {
        return view('admin.access_codes.create');
    }

    // تخزين كود جديد
    public function store(Request $request)
    {
        $request->validate([
            'days' => 'required|integer|min:1',
            'type' => 'required|in:admin,user',
        ]);

        AccessCode::create([
            'code' => strtoupper(Str::random(8)),
            'type' => $request->type, // admin | user
            'expires_at' => Carbon::now()->addDays((int) $request->days),
            'is_active' => true,
        ]);

        return redirect('/admin/access-codes')->with('success', 'تم إنشاء الكود بنجاح');
    }

    // حذف كود
    public function destroy($id)
    {
        AccessCode::findOrFail($id)->delete();
        return back()->with('success', 'تم حذف الكود');
    }
}
