<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Available jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body>
@include('layouts.candidate-navbar')
    <h2>Available Jobs</h2>
    <form method="GET" action="/candidate/jobs" class="row mb-4">

    <div class="col-md-3">
        <input type="text"
               name="title"
               class="form-control"
               placeholder="Job Title">
    </div>

    <div class="col-md-3">
        <input type="text"
               name="company"
               class="form-control"
               placeholder="Company">
    </div>

    <div class="col-md-3">
        <input type="text"
               name="location"
               class="form-control"
               placeholder="Location">
    </div>

    <div class="col-md-3">
        <button type="submit" class="btn btn-primary">
            Search
        </button>

        <a href="/candidate/jobs" class="btn btn-secondary">
            Reset
        </a>
    </div>

</form>

    <table class="table table-striped-columns">
    <tr>
        <th>Title</th>
        <th>Company</th>
        <th>Location</th>
        <th>Salary</th>
        <th>Description</th>
        <th>Apply</th>
    </tr>

    @foreach ($jobs as $job)

    <tr>
        <td>{{ $job->title }}</td>
        <td>{{ $job->company }}</td>
        <td>{{ $job->location }}</td>
        <td>{{ $job->salary }}</td>
        <td>{{ $job->description }}</td>

        <td>
            <form action="/jobs/{{ $job->id }}/apply" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="file" name="resume" class="form-control mb-2">

                <button type="submit" class="btn btn-success">
                    Apply
                </button>
            </form>
        </td>
    </tr>

    @endforeach

</table>

</body>

</html>
