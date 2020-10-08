<nav class="navbar navbar-expand-lg navbar-light bg-light bg-light shadow p-3 mb-5 bg-white rounded">
    <a class="navbar-brand nav-link disabled">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/user') }}">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/photos') }}">Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/todos') }}">To Do</a>
            </li>
        </ul>
    </div>
</nav>
