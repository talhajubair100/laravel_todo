<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Edit page layout</h1>
    
    <form action="{{ route('todo.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <input type="text" name="title" value="{{ $todo->title }}"><br><br>
    <input name="description" value="{{ $todo->description }}">
    <br>
    
    <input type="submit" value="Submit">
    </form>

</body>
</html>