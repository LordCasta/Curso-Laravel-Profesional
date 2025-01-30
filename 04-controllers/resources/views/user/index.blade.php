<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Users list:</h1>
    
    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }} Edad: {{ $user->age }}</li>
            @empty
                <p>list empty</p>

        @endforelse
    </ul>
    

    {{-- @switch($type)
        @case(1)
             <h1>1</h1>
            @break
        @case(2)
            
            @break
        @default
            
    @endswitch --}}
</body>
</html>