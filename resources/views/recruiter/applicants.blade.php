@extends('layouts.recruiter')

@section('content')

<h2>Applicants for: {{ $job->title }}</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ asset('storage/'.$application->resume) }}" target="_blank" class="btn btn-info">
    View Resume
</a>

<table class="table table-bordered mt-3">

    <tr>
        <th>Candidate Name</th>
        <th>Email</th>
        <th>Resume</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($applications as $app)
    <tr>
        <td>{{ $app->user->name }}</td>
        <td>{{ $app->user->email }}</td>

        <td>
            @if($app->resume)
                <a href="{{ asset('storage/'.$app->resume) }}" target="_blank">
                    View Resume
                </a>
            @else
                No Resume
            @endif
        </td>

        <td>{{ $app->status }}</td>

        <td>
            <form method="POST" action="/recruiter/applicants/{{ $app->id }}/status">
                @csrf

                <select name="status" class="form-select">
                    <option value="Applied">Applied</option>
                    <option value="Shortlisted">Shortlisted</option>
                    <option value="Rejected">Rejected</option>
                </select>

                <button class="btn btn-primary mt-2">Update</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection