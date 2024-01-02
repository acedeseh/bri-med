<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Hyosung;
use Carbon\Carbon;

class HyosungController extends Controller
{
    public function index()
    {
        $rcmProblems = Hyosung::all();
        return view('hyosung.index', ['rcmProblem' => $rcmProblems]);
    }
    
    public function create()
    {
        return view('hyosung.create');
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

        Hyosung::create($validatedData);

        return redirect()->route('hyosung.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    { 
        $hyosung = Hyosung::findOrFail($id);
        return view('hyosung.edit', compact('hyosung'));
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
    
        $hyosung = Hyosung::findOrFail($id);
    
        $updateData = [
            'date_done' => $validatedData['date_done'],
            'issue' => $validatedData['issue'],
            'analysis' => $validatedData['analysis'],
            'status' => $validatedData['status'],
            'note' => $validatedData['note'],
        ];
    
        $hyosung->update($updateData);
    
        return redirect()->route('hyosung.index')->with('success', 'Data berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $hyosung = Hyosung::findOrFail($id);
        $hyosung->delete();

        return redirect()->route('hyosung.index')->with('success', 'Data berhasil dihapus');
    }

    public function getMonthlyData(Request $request)
    {
        $monthlyData = Hyosung::selectRaw('MONTH(date_found) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return response()->json($monthlyData);
    }

    public function getIssueCountForCurrentMonth()
    {
        $currentMonth = Carbon::now()->month;
        $issueCount = Hyosung::whereMonth('date_found', $currentMonth)->count();

        return $issueCount;
    }

    public function getMonthlyChartData()
    {
        // customize this part based on your model and requirements
        $issueMachineCount = Hyosung::where('issue', 'Issue Machine')->count();
        $issueSOPCount = Hyosung::where('issue', 'Issue SOP')->count();
        $issueHumanCount = Hyosung::where('issue', 'Issue Human')->count();
        $issueNetworkCount = Hyosung::where('issue', 'Issue Network')->count();

        $data = [$issueMachineCount, $issueSOPCount, $issueHumanCount, $issueNetworkCount];

        return response()->json($data);
    }
}
