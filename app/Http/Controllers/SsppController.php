<?php

namespace App\Http\Controllers;
use App\Models\Sspp;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SsppController extends Controller
{
    public function index()
    {
        $ssppProblems = Sspp::all();
        return view('sspp.index', ['ssppProblem' => $ssppProblems]);
    }
    
    public function create()
    {
        return view('sspp.create');
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

        Sspp::create($validatedData);

        return redirect()->route('sspp.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    { 
        $sspp = Sspp::findOrFail($id);
        return view('sspp.edit', compact('sspp'));
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
    
        $sspp = Sspp::findOrFail($id);
    
        $updateData = [
            'date_done' => $validatedData['date_done'],
            'issue' => $validatedData['issue'],
            'analysis' => $validatedData['analysis'],
            'status' => $validatedData['status'],
            'note' => $validatedData['note'],
        ];
    
        $sspp->update($updateData);
    
        return redirect()->route('sspp.index')->with('success', 'Data berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $sspp = Sspp::findOrFail($id);
        $sspp->delete();

        return redirect()->route('sspp.index')->with('success', 'Data berhasil dihapus');
    }

    public function getMonthlyData(Request $request)
    {
        $monthlyData = Sspp::selectRaw('MONTH(date_found) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return response()->json($monthlyData);
    }

    public function getIssueCountForCurrentMonth()
    {
        $currentMonth = Carbon::now()->month;
        $issueCount = Sspp::whereMonth('date_found', $currentMonth)->count();

        return $issueCount;
    }

    public function getMonthlyChartData()
    {
        // customize this part based on your model and requirements
        $issueMachineCount = Sspp::where('issue', 'Issue Machine')->count();
        $issueSOPCount = Sspp::where('issue', 'Issue SOP')->count();
        $issueHumanCount = Sspp::where('issue', 'Issue Human')->count();
        $issueNetworkCount = Sspp::where('issue', 'Issue Network')->count();

        $data = [$issueMachineCount, $issueSOPCount, $issueHumanCount, $issueNetworkCount];

        return response()->json($data);
    }
}
