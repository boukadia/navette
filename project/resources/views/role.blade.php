<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/createRole">
    @csrf
        <input type="text" name="name" id="">
        @foreach ($permissions as $permission )
        
        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" id=""> {{ $permission->name }}
        @endforeach
        <input type="submit" name="" id="">
    </form>
</body>
</html>