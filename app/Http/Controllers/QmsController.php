<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Qms;
use Carbon\Carbon;

class QmsController extends Controller
{
    public function index()
    {
        $qmsProblems = Qms::all();
        return view('qms.index', ['qmsProblem' => $qmsProblems]);
    }
    
    public function create()
    {
        return view('qms.create');
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

        Qms::create($validatedData);

        return redirect()->route('qms.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    { 
        $qms = Qms::findOrFail($id);
        return view('qms.edit', compact('qms'));
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
    
        $qms = Qms::findOrFail($id);
    
        $updateData = [
            'date_done' => $validatedData['date_done'],
            'issue' => $validatedData['issue'],
            'analysis' => $validatedData['analysis'],
            'status' => $validatedData['status'],
            'note' => $validatedData['note'],
        ];
    
        $qms->update($updateData);
    
        return redirect()->route('qms.index')->with('success', 'Data berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $qms = Qms::findOrFail($id);
        $qms->delete();

        return redirect()->route('qms.index')->with('success', 'Data berhasil dihapus');
    }

    public function getMonthlyData(Request $request)
    {
        $monthlyData = Qms::selectRaw('MONTH(date_found) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return response()->json($monthlyData);
    }

    public function getIssueCountForCurrentMonth()
    {
        $currentMonth = Carbon::now()->month;
        $issueCount = Qms::whereMonth('date_found', $currentMonth)->count();

        return $issueCount;
    }

    public function getMonthlyChartData()
    {
        // customize this part based on your model and requirements
        $issueMachineCount = Qms::where('issue', 'Issue Machine')->count();
        $issueSOPCount = Qms::where('issue', 'Issue SOP')->count();
        $issueHumanCount = Qms::where('issue', 'Issue Human')->count();
        $issueNetworkCount = Qms::where('issue', 'Issue Network')->count();

        $data = [$issueMachineCount, $issueSOPCount, $issueHumanCount, $issueNetworkCount];

        return response()->json($data);
    }
}
