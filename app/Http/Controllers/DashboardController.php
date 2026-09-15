<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 'candidate') {
            return redirect('/candidate/dashboard');
        }

        if ($user->role == 'recruiter') {
            return redirect('/recruiter/dashboard');
        }

        return view('dashboard');
    }
}