<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BranchController extends Controller
{
    public function getBranchName(Request $request)
{
    $branchCode = $request->input('branchCode');

    // Tambahkan log
    \Illuminate\Support\Facades\Log::info('Request to getBranchName with branchCode: ' . $branchCode);

    // Gantilah dengan model, tabel, dan kolom sesuai dengan struktur database Anda
    $result = DB::table('branchdesc')->where('branchcode', $branchCode)->first();

    $response = ['branchName' => $result->branchname ?? ''];

    // Tambahkan log
    \Illuminate\Support\Facades\Log::info('Response from getBranchName: ' . json_encode($response));

    return response()->json($response);
}

public function getBranchCodes()
    {
        // Gantilah dengan model, tabel, dan kolom sesuai dengan struktur database Anda
        $branchCodes = DB::table('branchdesc')->pluck('branchcode');

        $response = ['branchCodes' => $branchCodes];

        return response()->json($response);
    }
}
