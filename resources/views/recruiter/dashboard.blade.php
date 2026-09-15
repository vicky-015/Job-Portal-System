<!DOCTYPE html>
<html>
<head>
    <title>Recruiter Dashboard</title>
</head>
<body>

@extends('layouts.recruiter')



@section('content')

<h2 class="mb-4">Recruiter Dashboard</h2>

<div class="row">

    <div class="col-md-6">
        <div class="card p-3 bg-primary text-white">
            <h4>Total Jobs</h4>
            <h2>{{ $totalJobs }}</h2>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card p-3 bg-success text-white">
            <h4>Total Applications</h4>
            <h2>{{ $totalApplications }}</h2>
        </div>
    </div>

</div>

<br>

<h4>Latest Applications</h4>

<table class="table table-bordered mt-2">
    <tr>
        <th>Job</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    @foreach($latestApplications as $app)
    <tr>
        <td>{{ $app->job->title ?? 'N/A' }}</td>
        <td>{{ $app->status }}</td>
        <td>{{ $app->created_at }}</td>
    </tr>
    @endforeach

</table>

@endsection
</body>
</html>