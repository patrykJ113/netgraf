<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello Create Pet form</h1>
    <form action='{{ url("/pet/$id") }}' method="POST" name="pet_form">
        @csrf
        @method('PUT')
        <label>
            Name
            <input type="text" name="name">
        </label>
        <label>
            Status
            <input type="text" name="status">
        </label>
        <input type="hidden" name="id" value="{{$id}}">
        <button type="submit">Edit</button>
        @csrf
    </form>
</body>
</html>