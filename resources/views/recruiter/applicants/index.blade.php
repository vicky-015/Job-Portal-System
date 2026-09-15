<!DOCTYPE html>
<html>
<head>
    <title>Applicants</title>
</head>
<body>
    @include('layouts.recruiter-navbar')

<center><h2>Applicants</h2></center>

<table class="table table-success table-striped-columns">


<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Job Title</th>
    <th>Status</th>
    <th>Resume</th>
</tr>

@foreach($applications as $application)

<tr>

    <td>
        {{ $application->user->name }}
    </td>

    <td>
        {{ $application->user->email }}
    </td>

    <td>
        {{ $application->job->title }}
    </td>
    <td>{{ $application->status }}</td>
    <td>
    @if($application->resume)
        <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="btn btn-info">
            View Resume
        </a>
    @else
        No Resume
    @endif
</td>
    <td>
    <form action="/applications/{{ $application->id }}/status" method="POST">
        @csrf
        @method('PUT')

        <select name="status">
            <option value="Applied">Applied</option>
            <option value="Reviewed">Reviewed</option>
            <option value="Shortlisted">Shortlisted</option>
            <option value="Rejected">Rejected</option>
            <option value="Selected">Selected</option>
        </select>

        <button type="submit" class="btn btn-primary btn-sm">
            Update
        </button>
    </form>
</td>

</tr>

@endforeach

</table>

</body>
</html>