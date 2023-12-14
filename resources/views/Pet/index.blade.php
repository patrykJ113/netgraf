<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pett view!!!</h1>

    <ul>
    @foreach ($pets as $pet )
        <li>
            <div>{{ $pet->name }} {{ $pet->id }}</div>
            <a href="">
                <button>Edit</button>
            </a>
            <form action='{{ url("/pet/$pet->id") }}' method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </li>
        @endforeach
    </ul>

    <a href="{{ url('/pet/create') }}">
        <button>Add New Pet to Store</button>
    </a>
</body>
</html>