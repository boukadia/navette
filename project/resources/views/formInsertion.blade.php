<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/create">
    @csrf
        <input type="text" name="name" id="">
        <input type="text" name="description" id="">
        <input type="number" name="price" id="">
        <input type="submit" name="" id="">
    </form>
</body>
</html>