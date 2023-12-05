<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Tcr;
use Carbon\Carbon;

class TcrController extends Controller
{
    public function index()
    {
        $tcrProblems = Tcr::all();
        return view('tcr.index', ['tcrProblem' => $tcrProblems]);
    }
    
    public function create()
    {
        return view('tcr.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'branchcode' => 'required', // Add any other validation rules here
            'branchname' => 'required',
            'problem' => 'required',
            'date_found' => 'required|date',
            'sla_target' => 'required',
            'issue' => 'required',
            'analysis' => 'required',
            'status' => 'required',
            'note' => 'required',
        ]);

        Tcr::create($validatedData);

        return redirect()->route('tcr.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    { 
        $tcr = Tcr::findOrFail($id);
        return view('tcr.edit', compact('tcr'));
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
    
        $tcr = Tcr::findOrFail($id);
    
        $updateData = [
            'date_done' => $validatedData['date_done'],
            'issue' => $validatedData['issue'],
            'analysis' => $validatedData['analysis'],
            'status' => $validatedData['status'],
            'note' => $validatedData['note'],
        ];
    
        $tcr->update($updateData);
    
        return redirect()->route('tcr.index')->with('success', 'Data berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $tcr = Tcr::findOrFail($id);
        $tcr->delete();

        return redirect()->route('tcr.index')->with('success', 'Data berhasil dihapus');
    }

    public function getMonthlyData(Request $request)
    {
        $monthlyData = Tcr::selectRaw('MONTH(date_found) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return response()->json($monthlyData);
    }

    public function getIssueCountForCurrentMonth()
    {
        $currentMonth = Carbon::now()->month;
        $issueCount = Tcr::whereMonth('date_found', $currentMonth)->count();

        return $issueCount;
    }

    public function getMonthlyChartData()
    {
        // customize this part based on your model and requirements
        $issueMachineCount = Tcr::where('issue', 'Issue Machine')->count();
        $issueSOPCount = Tcr::where('issue', 'Issue SOP')->count();
        $issueHumanCount = Tcr::where('issue', 'Issue Human')->count();
        $issueNetworkCount = Tcr::where('issue', 'Issue Network')->count();

        $data = [$issueMachineCount, $issueSOPCount, $issueHumanCount, $issueNetworkCount];

        return response()->json($data);
    }
}
