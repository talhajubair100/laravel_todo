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
    
    <form action="{{ route('todo.update', $todo->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <br>
    <select name="category_id" id="">
        
        <option value="{{ $todo->category->id }}">{{ $todo->category->name }}</option>
        @foreach($category as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="text" name="title" value="{{ $todo->title }}"><br><br>
    <input name="description" value="{{ $todo->description }}">
    <br>
    <input type="file" name="image">
    
    <input type="submit" value="Submit">
    </form>

</body>
</html>