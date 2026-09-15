<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApplicantController;

use App\Models\Job;
use App\Models\Application;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {

    Route::get('/candidate/jobs', [CandidateController::class, 'index']);

});

Route::middleware('auth')->group(function () {

    Route::post('/jobs/{id}/apply',
        [ApplicationController::class, 'apply']);

});

Route::get('/jobs/create',[JobController::class,'create']);
Route::post('/jobs',[JobController::class,'store']);

Route::get('/jobs', [JobController::class,('index')]);

Route::get('/jobs/{id}/edit', [JobController::class, 'edit']);

Route::put('/jobs/{id}', [JobController::class, 'update']);

Route::delete('/jobs/{id}', [JobController::class, 'destroy']);

Route::post('/jobs/{id}/apply', [ApplicationController::class,'apply']);

Route::get('/candidate/jobs', [CandidateController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/my-applications', [CandidateController::class, 'myApplications']);
});

    Route::get('/applicants', [ApplicantController::class, 'index']);


Route::put(
    '/applications/{id}/status',
    [ApplicantController::class, 'updateStatus']
);



use App\Http\Controllers\RecruiterController;

Route::middleware('auth')->group(function () {
    Route::get('/recruiter/applicants/{jobId}', [RecruiterController::class, 'applicants']);
    Route::post('/recruiter/applicants/{id}/status', [RecruiterController::class, 'updateStatus']);
});

Route::get('/recruiter/dashboard', function () {

    $totalJobs = Job::count();

    $totalApplications = Application::count();

    $latestApplications = Application::with('job')
        ->latest()
        ->take(5)
        ->get();

    return view('recruiter.dashboard', compact(
        'totalJobs',
        'totalApplications',
        'latestApplications'
    ));

})->middleware('auth');


Route::get('/candidate/dashboard', function () {
    return view('candidate.dashboard');
})->middleware('auth');


require __DIR__.'/auth.php';
