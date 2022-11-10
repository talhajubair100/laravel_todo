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
        This is index page
    </h1>
    <br>
    @foreach($todos as $todo)
    <p>{{ $todo->id }}</p>
    <a href="{{ route('todo.edit',$todo->id) }}">Edit</a>
    <form method="POST" action="{{ route('todo.destroy', $todo->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <p>{{ $todo->title }}</p>
    <p>{{ $todo->description }}</p>
    @endforeach
</body>
</html>