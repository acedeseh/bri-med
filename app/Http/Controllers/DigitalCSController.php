<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\digital_cs;

class DigitalCSController extends Controller
{
    public function index()
    {
        $digitalCSProblems = digital_cs::all();
        return view('digital-cs.index', ['digitalCSProblem' => $digitalCSProblems]);
    }
    
    public function create()
    {
        return view('digital-cs.create');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'branch_code' => 'required',
            // ...Tambahkan validasi untuk kolom lain jika perlu...
        ]);

        // Simpan data ke database
        digital_cs::create($request->all());

        // Redirect ke halaman yang sesuai
        return redirect()->route('digital-cs.index');
    }
    
    
}
