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
        return view('digital-cs.edit', compact('digitalCs'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'date_done' => 'nullable|date_format:Y-m-d\TH:i',
            'issue' => 'required',
            'analysis' => 'required',
            'status' => 'required',
            'note' => 'required',
        ]);
    
        $digitalCs = digital_cs::findOrFail($id);
    
        $updateData = [
            'date_done' => $validatedData['date_done'],
            'issue' => $validatedData['issue'],
            'analysis' => $validatedData['analysis'],
            'status' => $validatedData['status'],
            'note' => $validatedData['note'],
        ];
    
        $digitalCs->update($updateData);
    
        return redirect()->route('digital-cs.index')->with('success', 'Data berhasil diperbarui');
        }
    

    public function destroy($id)
    {
    $digitalCs = digital_cs::findOrFail($id);
    $digitalCs->delete();

    return redirect()->route('digital-cs.index')->with('success', 'Data berhasil dihapus');
    }

    public function getMonthlyData(Request $request)
    {
        $monthlyData = DigitalCS::selectRaw('MONTH(date_found) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return response()->json($monthlyData);
    }

    public function getIssueCountForCurrentMonth()
    {
        $currentMonth = Carbon::now()->month;
        $issueCount = DigitalCS::whereMonth('date_found', $currentMonth)->count();

        return $issueCount;
    }

    public function getMonthlyChartData()
{
    $issueMachineCount = digital_cs::where('issue', 'Issue Machine')->count();
    $issueSOPCount = digital_cs::where('issue', 'Issue SOP')->count();
    $issueHumanCount = digital_cs::where('issue', 'Issue Human')->count();
    $issueNetworkCount = digital_cs::where('issue', 'Issue Network')->count();

    $data = [$issueMachineCount, $issueSOPCount, $issueHumanCount, $issueNetworkCount];

    return response()->json($data);
}

}
