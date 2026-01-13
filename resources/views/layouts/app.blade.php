<html>

<head>

    <title>Task List</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">All Tasks</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/tasks/create">New Task</a>
        </li>
    </ul>
    <div class="container mt-5">
        @yield('content')
    </div>

</body>

</html>
