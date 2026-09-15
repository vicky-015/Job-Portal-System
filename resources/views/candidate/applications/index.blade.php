<!DOCTYPE html>
<html>
<head>
    <title>My Applications</title>
</head>
<body>

   @extends('layouts.candidate')

@section('content')

<h2>My Applications</h2>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<table class="table table-bordered mt-3">

    <tr>
        <th>Job Title</th>
        <th>Company</th>
        <th>Status</th>
        <th>Resume</th>
        <th>Applied Date</th>
    </tr>

    @foreach($applications as $application)

    <tr>
        <td>{{ $application->job->title }}</td>
        <td>{{ $application->job->company }}</td>

        <td>
            @if($application->status == 'Applied')
                <span class="badge bg-warning">
                    Applied
                </span>

            @elseif($application->status == 'Shortlisted')
                <span class="badge bg-success">
                    Shortlisted
                </span>

            @elseif($application->status == 'Rejected')
                <span class="badge bg-danger">
                    Rejected
                </span>
            @endif
        </td>

        <td>
            @if($application->resume)
                <a href="{{ asset('storage/'.$application->resume) }}" target="_blank">
                    View Resume
                </a>
            @else
                No Resume
            @endif
        </td>

        <td>
            {{ $application->created_at->format('d-m-Y') }}
        </td>
    </tr>

    @endforeach

</table>

@endsection

</body>
</html>