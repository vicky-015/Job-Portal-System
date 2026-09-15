<!DOCTYPE html>
<html>
<head>
    <title>Candidate Dashboard</title>
</head>
<body>

@include('layouts.candidate-navbar')

<div class="container mt-4">
    <h2>Candidate Dashboard</h2>
    <p>Welcome {{ Auth::user()->name }}</p>
</div>

</body>
</html>