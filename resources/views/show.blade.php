<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        This is Show page
    </h1>
    
        <p>{{ $todo->title }}</p><br>
        <p>{{ $todo->description }}</p>
        <img src="{{ url('storage/'.$todo->image) }}" alt="Todo Image" height="300px" width="300px">


</body>
</html>