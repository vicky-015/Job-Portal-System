<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Application;

class CandidateController extends Controller
{
    public function index(Request $request)
{
    $jobs = Job::query();

    if ($request->title) {
        $jobs->where('title', 'like', '%' . $request->title . '%');
    }

    if ($request->company) {
        $jobs->where('company', 'like', '%' . $request->company . '%');
    }

    if ($request->location) {
        $jobs->where('location', 'like', '%' . $request->location . '%');
    }

    $jobs = $jobs->get();

    return view('candidate.jobs.index', compact('jobs'));
}

    public function myApplications()
    {
        $applications = Application::with('job')
            ->where('user_id', auth()->id())
            ->get();

        return view('candidate.applications.index', compact('applications'));
    }

    public function apply(Request $request, $jobId)
    {
        $userId = auth()->id();

        $alreadyApplied = Application::where('user_id', $userId)
            ->where('job_id', $jobId)
            ->exists();

        if ($alreadyApplied) {
            return redirect('/my-applications')
                ->with('error', 'You already applied for this job');
        }

        $resumePath = $request->hasFile('resume')
            ? $request->file('resume')->store('resumes', 'public')
            : null;

        Application::create([
            'user_id' => $userId,
            'job_id' => $jobId,
            'status' => 'Applied',
            'resume' => $resumePath
        ]);

        return redirect('/my-applications')
            ->with('success', 'Job applied successfully');
    }
}