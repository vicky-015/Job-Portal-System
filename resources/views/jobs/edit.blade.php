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
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
@include('layouts.recruiter-navbar')
    
    <h2>Edit Job</h2>

    <form method="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $job->title }}">
    <br><br>

    <input type="text" name="company" value="{{ $job->company }}">
    <br><br>

    <input type="text" name="location" value="{{ $job->location }}">
    <br><br>

    <input type="number" name="salary" value="{{ $job->salary }}">
    <br><br>

    <textarea name="description">{{ $job->description }}</textarea>
    <br><br>

    <button type="submit">Update Job</button>

</form>

</body>
</html>