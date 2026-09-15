<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicantController extends Controller
{
     public function index()
    {
        $applications = Application::with([
            'user',
            'job'
        ])->get();

        return view(
            'recruiter.applicants.index',
            compact('applications')
        );
    }

    public function updateStatus(Request $request, $id)
{
    $application = Application::find($id);

    $application->update([
        'status' => $request->status
    ]);

    return redirect()->back();
}
}
