<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Show To Do</title>
</head>
<body>
<div class="container">
    <h3 class="text-center my-5">{{$toddo->name}}</h3>
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">Details</div>
            <div class="card-body">
                {{$toddo->description}}        
            </div>
        </div>
        </div>
    </div>
</div>
    
</body>
</html>