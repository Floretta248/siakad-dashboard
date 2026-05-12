<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $prodi = DB::table('mahasiswa')
            ->select('prodi', DB::raw('count(*) as total'))
            ->groupBy('prodi')
            ->get();

        return view('dashboard', compact('prodi'));
    }
}