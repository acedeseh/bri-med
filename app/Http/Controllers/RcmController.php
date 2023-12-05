<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Rcm;
use Carbon\Carbon;

class RcmController extends Controller
{
    public function index()
    {
        $rcmProblems = Rcm::all();
        return view('rcm.index', ['rcmProblem' => $rcmProblems]);
    }
    
    public function create()
    {
        return view('rcm.create');
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

        Rcm::create($validatedData);

        return redirect()->route('rcm.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    { 
        $rcm = Rcm::findOrFail($id);
        return view('rcm.edit', compact('rcm'));
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
    
        $rcm = Rcm::findOrFail($id);
    
        $updateData = [
            'date_done' => $validatedData['date_done'],
            'issue' => $validatedData['issue'],
            'analysis' => $validatedData['analysis'],
            'status' => $validatedData['status'],
            'note' => $validatedData['note'],
        ];
    
        $rcm->update($updateData);
    
        return redirect()->route('rcm.index')->with('success', 'Data berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $rcm = Rcm::findOrFail($id);
        $rcm->delete();

        return redirect()->route('rcm.index')->with('success', 'Data berhasil dihapus');
    }

    public function getMonthlyData(Request $request)
    {
        $monthlyData = Rcm::selectRaw('MONTH(date_found) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return response()->json($monthlyData);
    }

    public function getIssueCountForCurrentMonth()
    {
        $currentMonth = Carbon::now()->month;
        $issueCount = Rcm::whereMonth('date_found', $currentMonth)->count();

        return $issueCount;
    }

    public function getMonthlyChartData()
    {
        // customize this part based on your model and requirements
        $issueMachineCount = Rcm::where('issue', 'Issue Machine')->count();
        $issueSOPCount = Rcm::where('issue', 'Issue SOP')->count();
        $issueHumanCount = Rcm::where('issue', 'Issue Human')->count();
        $issueNetworkCount = Rcm::where('issue', 'Issue Network')->count();

        $data = [$issueMachineCount, $issueSOPCount, $issueHumanCount, $issueNetworkCount];

        return response()->json($data);
    }
}
