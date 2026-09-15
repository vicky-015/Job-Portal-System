<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobPortal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style1.css') }}">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    @include('layouts.recruiter-navbar')
    
    <h2>Add Job</h2>

    <form class="form" method="POST" action="/jobs">
    
        @csrf

         <div class="mb-3">
    <label for="exampleInputTitle1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp" placeholder="Job Title">
  </div>

    <div class="mb-3">
    <label for="exampleInputCompany1" class="form-label">Company</label>
    <input type="text" name="company" class="form-control" id="exampleInputCompany1" aria-describedby="emailHelp" placeholder="company">
  </div>

    <div class="mb-3">
    <label for="exampleInputLocation1" class="form-label">Location</label>
    <input type="text" name="location" class="form-control" id="exampleInputLocation1" aria-describedby="emailHelp" placeholder="location">
  </div>

    <div class="mb-3">
    <label for="exampleInputSalary1" class="form-label">Salary</label>
    <input type="number" name="salary" class="form-control" id="exampleInputSalary1" aria-describedby="emailHelp" placeholder="Salary">
  </div>

    <div class="mb-3">
    <textarea name="description" placeholder="Description"></textarea>
  </div>
  
  <center><button type="submit" class="btn btn-primary">Add Job</button>
    </center>
    </form>

</body>
</html>