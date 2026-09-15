<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Job;

class RecruiterController extends Controller
{
    public function applicants($jobId)
    {
        $job = Job::findOrFail($jobId);

        $applications = Application::with('user')
            ->where('job_id', $jobId)
            ->get();

        return view('recruiter.applicants', compact('job', 'applications'));
    }

    // Update application status
    public function updateStatus(Request $request, $id)
    {
        $application = Application::findOrFail($id);

        $application->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Status updated successfully');
    }

    public function dashboard()
{
    $totalJobs = Job::count();
    $totalApplications = Application::count();

    return view('recruiter.dashboard', compact(
        'totalJobs',
        'totalApplications'
    ));
}
}
