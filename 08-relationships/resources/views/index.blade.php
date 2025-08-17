<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Phones of {{ $user->name }}</h1>

    <h1>{{ $user->image->url }}</h1>

    <!-- Esta es con una sola relación--><h3>Company: {{ $user->phoneSim->company }}</h3>
    <!-- Esta es con varias relaciones--><h3>Company: {{ $user->phoneSims->company }}</h3>
     <ul>
    @foreach ($user->roles as $role)
       
            <li>{{ $role->name }} Added By: {{ $role->pivot->added_by }}</li>
      
    @endforeach
      </ul>
</body>
</html>