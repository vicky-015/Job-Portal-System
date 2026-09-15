<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/jobs">
            Job Portal
        </a>

        <div class="navbar-nav me-auto">

            <a class="nav-link" href="/jobs/create">
                Add Job
            </a>

            <a class="nav-link" href="/jobs">
                View Jobs
            </a>

        </div>

        <div class="d-flex align-items-center">
            @auth
                <span class="text-white me-3">
                    {{ Auth::user()->name }}
                </span>
            @endauth

            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger">
                    Logout
                </button>
            </form>

        </div>

    </div>
</nav>
