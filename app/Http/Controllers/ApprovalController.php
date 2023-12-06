<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function index()
    {
        $approvals = Approval::all();
        return view('approvals', compact('approvals'));
    }

    public function approve(Approval $approval)
    {
        $approval->update(['status' => 'approved']);
        return redirect()->route('approvals')->with('success', 'Approval berhasil disetujui.');
    }

    public function reject(Approval $approval)
    {
        $approval->update(['status' => 'rejected']);
        return redirect()->route('approvals')->with('success', 'Approval berhasil ditolak.');
    }
}
