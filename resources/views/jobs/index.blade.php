<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobPortal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body>
    @include('layouts.recruiter-navbar')
    <h2>All Jobs</h2>

    <table class="table table-striped-columns">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Company</th>
            <th>Location</th>
            <th>Salary</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>

        @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->title }}</td>
                <td>{{ $job->company }}</td>
                <td>{{ $job->location }}</td>
                <td>{{ $job->salary }}</td>
                <td style="max-width:300px;">
    {{ $job->description }}
</td>
                <td>
                    <a href="/jobs/{{ $job->id }}/edit" class="btn btn-primary">Edit</a>
                </td>

                <td>
                    <form action="/jobs/{{ $job->id }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Delete
    </button>
</form>
                </td>
    

            </tr>
        @endforeach

    </table>

</body>

</html>
