<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to Task Manager</h1>
            <p class="lead">Manage your tasks efficiently and effectively.</p>
            <hr class="my-4">
            <p>Get started by creating a new task or viewing your existing tasks.</p>
            <a class="btn btn-primary btn-lg" href="{{ url('/tasks/create') }}" role="button">Create New Task</a>
            <a class="btn btn-secondary btn-lg" href="{{ url('/tasks') }}" role="button">View Tasks</a>
        </div>
    </div>
</body>
</html>