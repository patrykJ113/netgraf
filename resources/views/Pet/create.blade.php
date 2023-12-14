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
    <form action="{{ route('pet.store') }}" method="POST" name="pet_form">
        <label>
            Name
            <input type="text" name="name">
        </label>
        <label>
            Status
            <input type="text" name="status">
        </label>
        <button type="submit">Add</button>
        @csrf
    </form>
</body>
</html>