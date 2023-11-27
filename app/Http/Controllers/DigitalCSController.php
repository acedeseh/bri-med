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
        $validatedData = $request->validate([
            'branchcode' => 'required',
            'branchname' => 'required',
            'problem' => 'required',
            'date_found' => 'required',
            'sla_target' => 'required',
            'issue' => 'required',
            'analysis' => 'required',
            'status' => 'required',
            'note' => 'required',
        ]);

        digital_cs::create($validatedData);

    return redirect()->route('digital-cs.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $digitalCs = digital_cs::findOrFail($id);
        return view('digital_cs.edit', compact('digitalCs'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'branchcode' => 'required',
            'branchname' => 'required',
            'problem' => 'required',
            'date_found' => 'required',
            'sla_target' => 'required',
            'issue' => 'required',
            'analysis' => 'required',
            'status' => 'required',
            'note' => 'required',
        ]);

        digital_cs ::whereId($id)->update($validatedData);

        return redirect()->route('digital-cs.index')->with('success', 'Data berhasil diperbarui');

    }

    public function destroy($id)
    {
        $digitalCs = digital_cs::findOrFail($id);
        $digitalCs->delete();

        return redirect()->route('digital-cs.index')->with('success', 'Data berhasil dihapus');

    }    
}
