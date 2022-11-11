<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is create page layout</h1>
    
    <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <br>
    <select name="category_id" id="">
        @foreach($category as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="text" name="title"><br><br>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="file" name="image">
    
    <input type="submit" value="Submit">
    </form>

</body>
</html>