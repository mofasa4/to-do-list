<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Todos</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-5">Todos Page</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card card-header">
                    Todos
                    </div>
                    <div class="card card-body">
                        <ul class="list-group">
                            @foreach($ttodos as $todo)
                                <li class="list-group-item">{{ $todo->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>